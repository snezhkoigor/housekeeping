<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Служба бытового сервиса в городе {{$geo['city']}} / «СпецМастер»</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="Служба «СпецМастер» предлагает качественное решение любых задач по дому в городе {{$geo['city']}}. Мы предлагаем услуги сантехника, электрика, сборку мебели, ремонт компьютеров и бытовой техники по невысоким ценам." name="description" />
	<meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/img/logo/company-logo-top.png" type="image/x-icon">

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/css/animate.min.css" rel="stylesheet" />
	<link href="/css/style.css" rel="stylesheet" />
	<link href="/css/style-responsive.css" rel="stylesheet" />
	<link href="/css/default.css" id="theme" rel="stylesheet" />
    <link href="/css/main.css" id="them-1" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/js/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter50628484 = new Ya.Metrika2({
                        id:50628484,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/50628484" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo/company-logo-top.png" alt="Логотип компании" />
                    </a>
                    <span class="work-time">
                        <b>пн-вск</b>, с <b>9:00</b> до <b>21:00</b>
                    </span>
                </div>
                <!-- end navbar-header -->

                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about" data-click="scroll-to-target">О нас</a></li>
                        <li><a href="#service" data-click="scroll-to-target">Почему мы?</a></li>
                        <li><a href="#client" data-click="scroll-to-target">Отызвы</a></li>
                        <li><a href="#work" data-click="scroll-to-target">Наши работы</a></li>
                        <li><a href="#pricing" data-click="scroll-to-target">Услуги</a></li>
                        <li><a href="#contact" data-click="scroll-to-target">Контакты</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->

        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="/img/bg/bg-home.jpg" alt="Домой" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Служба бытового сервиса в Удмуртии</h1>
                <h2>от 200 руб.</h2>
                <p>
                    Мастер приедет и решит Вашу проблему через 1-3 часа
                </p>
                <a href="#contact" class="btn btn-theme" data-click="scroll-to-target">Вызвать мастера</a>
            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->

        <!-- begin #about -->
        <div id="about" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">О нас</h2>
                <p class="content-desc">
                    Служба бытового сервиса "СпецМастер" предлагает услуги широкого спектра в вашем городе.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <!-- begin about -->
                        <div class="about">
                            <h3>Наша история</h3>
                            <p>
                                Пригласите мастера к себе домой прямо сейчас или назначьте его визит на удобное для себя время. Вам понравится оперативность, качетсво и низкая стоимость.
                            </p>
                            <p>
                                Мы успешно работаем в профессиональной сфере уже более 4-х лет. В адрес наших мастеров регулярно поступают положительные отзывы. Мы тщательно следим за уровнем выполненных работ.
                                Любые спорные моменты мы стараемся решить в пользу клиента.
                            </p>
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <h3>Наша философия</h3>
                        <!-- begin about-author -->
                        <div class="about-author">
                            <div class="quote bg-silver">
                                <i class="fa fa-quote-left"></i>
                                <h3>Вам понравится наше усердие, быстрота <br /><span>и качество.</span></h3>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="author">
                                <div class="image">
                                    <img src="/img/user/boss-f.jpg" alt="Тарас Терентьев" />
                                </div>
                                <div class="info">
                                    Тарас Терентьев
                                    <small>Директор компании</small>
                                </div>
                            </div>
                        </div>
                        <!-- end about-author -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-12">
                        <h3>Популярное</h3>
                        <!-- begin skills -->
                        <div class="skills">
                            <div class="skills-name">Генеральная уборка</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 95%">
                                    <span class="progress-number">50%</span>
                                </div>
                            </div>
                            <div class="skills-name">Ремонт бытовой техники</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 90%">
                                    <span class="progress-number">20%</span>
                                </div>
                            </div>
                            <div class="skills-name">Химчистка мебели</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 85%">
                                    <span class="progress-number">20%</span>
                                </div>
                            </div>
                            <div class="skills-name">Остальное</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 80%">
                                    <span class="progress-number">10%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skills -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Почему мы?</h2>
                <p class="content-desc">
                    Наши преимущества, которые мы предоставляем Вам
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-heart"></i></div>
                            <div class="info">
                                <h4 class="title">Одни из лучших специалистов</h4>
                                <p class="desc">Все сотрудники русские с огромным опытом и квалификацией.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-calendar"></i></div>
                            <div class="info">
                                <h4 class="title">Результат в день обращения</h4>
                                <p class="desc">У нас нет выходных и перерывов.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-clock-o"></i></div>
                            <div class="info">
                                <h4 class="title">Качественно и оперативно</h4>
                                <p class="desc">Одна из главных наших задач - не задерживать Вас, не тратить Ваше время без потери качетсва.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-thumbs-o-up"></i></div>
                            <div class="info">
                                <h4 class="title">Результат</h4>
                                <p class="desc">Мы делаем всю работу так, словно это все мы делаем для себя.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-file"></i></div>
                            <div class="info">
                                <h4 class="title">Гарантия</h4>
                                <p class="desc">Мы гарантируем результаты своей работы.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-car"></i></div>
                            <div class="info">
                                <h4 class="title">Выезд мастера на дом</h4>
                                <p class="desc">Наш сотрудник приедет к Вам в удобное для Вас время.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- begin #client -->
        <div id="client" class="content has-bg bg-green" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="/img/bg/bg-client.jpg" alt="Background" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInUp">
                <h2 class="content-title">Наши клиенты о нас</h2>
                <!-- begin carousel -->
                <div class="carousel testimonials slide" data-ride="carousel" id="testimonials">
                    <!-- begin carousel-inner -->
                    <div class="carousel-inner text-center">
                        <!-- begin item -->
                        <div class="item active">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Качественная уборка, аккуратно, чисто. Вежливое обслуживание. Спасибо!
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name">
                                <div class="fio">
                                    — <span class="text-theme">Алексей Гавшин</span>
                                </div>
                                <div class="photo">
                                    <img src="/img/user/client-1.jpg" alt="Алексей Гавшин" width="90"/>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Александр ответственный, добросовестный, ответственный мужчина. Уборкой довольна!
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name">
                                <div class="fio">
                                    — <span class="text-theme">Елизавета Зыкина</span>
                                </div>
                                <div class="photo">
                                    <img src="/img/user/client-2.jpg" alt="Елизавета Зыкина" width="90"/>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Очень быстро и качетсвенно. Спасибо!
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name">
                                <div class="fio">
                                    — <span class="text-theme">Виталий Наумов</span>
                                </div>
                                <div class="photo">
                                    <img src="/img/user/client-3.jpg" alt="Виталий Наумов" width="90"/>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                    <!-- end carousel-inner -->
                    <!-- begin carousel-indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials" data-slide-to="1" class=""></li>
                        <li data-target="#testimonials" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- end carousel-indicators -->
                </div>
                <!-- end carousel -->
            </div>
            <!-- end containter -->
        </div>
        <!-- end #client -->

        <!-- begin #work -->
        <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Наши работы</h2>
                <p class="content-desc">
                    Посмотрите примеры последних наших выполненных работ и принимайте решение
                </p>
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/1.jpg" alt="Работа 1" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/8.jpg" alt="Работа 2" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/7.jpg" alt="Работа 3" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/4.jpg" alt="Работа 4" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/5.jpg" alt="Работа 5" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/6.jpg" alt="Работа 6" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/3.jpg" alt="Работа 7" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <img src="/img/work/2.jpg" alt="Работа 8" />
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #work -->

        <!-- begin #pricing -->
        <div id="pricing" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Наши услуги</h2>
                <p class="content-desc">
                    Наша компания придерживается гибкой ценовой политики. Поэтому наши цены ниже, чем у большинства конкурентов, предлагающих аналогичные услуги.
                </p>
                <!-- begin pricing-table -->
                <ul class="pricing-table col-4">
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Строительство</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Ремонт</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Демонтаж</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Клининг</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Благоустройство</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Проектирование</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Дизайн</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Интерьер</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Лицензии</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Автоперевозки</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Cпецтехника</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Вывоз мусора</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Транспорт</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Инструмент</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Спецодежда</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Запчасти</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Стройматериалы</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Электрика</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Сантехника</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Мебель</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Все для сада</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Обучение</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h2>Работа</h2>
                            <div class="footer">
                                <a href="#contact" class="btn btn-inverse btn-block" data-click="scroll-to-target">Вызвать мастера</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end container -->
        </div>
        <!-- end #pricing -->

        <!-- begin #contact -->
        <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Свяжитесь с нами</h2>
                <p class="content-desc">
                    Оставьте нам свои контакты, для того чтобы мы смогли Вам помочь и решить Ваши проблемы.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12" data-animation="true" data-animation-type="fadeInRight">
                        @if ($message !== '')
                            <div class="alert alert-success">{{$message}}</div>
                        @endif
                        @if ($errors !== null && $errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="contact-form" class="form-horizontal" action="/" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-2">Город <span class="text-theme">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="city" value="{{$form['city'] ?? $geo['city']}}" />
                                    <span style="font-size: 11px">Исправьте значение города по умолчанию, если он не является верным в Вашем случае.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Телефон <span class="text-theme">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="phone" value="{{$form['phone'] ?? ''}}" placeholder="+7"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Что нужно решить? <span class="text-theme">*</span></label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="10" name="message">{{$form['message'] ?? ''}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2"></label>
                                <div class="col-md-10 text-left">
                                    <button type="submit" class="btn btn-theme btn-block">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #contact -->

        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    <div>
                        <img src="/img/logo/company-logo-bottom.png" alt="Логотип компании" />
                    </div>
                </div>
            </div>
        </div>
        <!-- end #footer -->
    </div>
    <!-- end #page-container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
		<script src="/js/respond.min.js"></script>
		<script src="/js/excanvas.min.js"></script>
	<![endif]-->
	<script src="/js/js.cookie.js"></script>
	<script src="/js/scrollMonitor.js"></script>
	<script src="/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
	    $(document).ready(function() {
	        App.init();
	        document.getElementById('{{ $anchor }}').scrollIntoView();
	    });
	</script>
</body>
</html>
