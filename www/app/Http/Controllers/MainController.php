<?php

namespace App\Http\Controllers;

use App\Mail\SendNewInvoiceToAdminMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
	public function __invoke(Request $request)
	{
		$errors = null;
		$message = '';
		$geo = geoip(geoip()->getClientIP());

		if ($request->isMethod('post'))
		{
			$validator = \Illuminate\Support\Facades\Validator::make(
				$request->all(),
				[
				    'phone' => 'required|size:12',
				    'message' => 'required',
				],
				[
					'phone.required' => 'Укажите свой номер телефона, пожалуйста.',
					'phone.size' => 'Вы указали неверный номер телефона. Его длина должна быть 12 символов. Например +79991112233',
					'message.required' => 'Опишите нам свою проблему, пожалуйста.'
				]
			);

			if (!$validator->fails())
			{
				$current_invoice = DB::table('invoices')
					->where([
						[ 'phone', $request->get('phone') ],
						[ DB::raw('LOWER(message)'), strtolower($request->get('message')) ]
					])
					->first();

				if ($current_invoice === null)
				{
					DB::table('invoices')
						->insert([
							'phone' => $request->get('phone'),
							'message' => $request->get('message'),
							'city' => $geo['city'],
							'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
							'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
						]);

					$message = 'Ваша заявка принята. Ожидайте, когда с вами свяжутся. Спасибо!';

					Mail::to(env('ADMIN_INVOICE_EMAIL', 'domklining@yandex.ru'))
						->send(new SendNewInvoiceToAdminMail($request->get('phone'), $geo['city'], $request->get('message')));
				}
				else
				{
					$message = 'Ваша заявка уже принята. Ожидайте, когда с вами свяжутся. Спасибо!';
				}
			}

			$errors = $validator->errors();
		}

		return view('welcome', [
			'anchor' => $request->isMethod('post') ? 'contact-form' : '',
			'form' => $message ? [] : $request->all(),
			'geo' => $geo,
			'message' => $message,
			'errors' => $errors,
		]);
	}
}
