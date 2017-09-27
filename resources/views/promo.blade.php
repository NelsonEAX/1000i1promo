<!DOCTYPE html>
<html lang="ru" class="wide wow-animation">
<head>
    <!-- Site Title-->
    <title>1000и1.рф</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="promo/js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="promo/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Trocchi%7COpen+Sans:300,300italic,400,600,700">
    <link rel="stylesheet" type="text/css" href="promo/css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="promo/images/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="Вы используете устаревший браузер
Чтобы пользоваться сайтом, вам необходимо обновить браузер.
Это бесплатно и займет всего несколько минут.">
        </a>
    </div>
    <script src="promo/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page text-center">
    {{--<pre id="pretest"></pre>--}}
    <!-- Page Header-->
    <header class="page-header">
        <div class="navigation">
            <div class="navigation-inner">
                <a class="navigation-logo">
                    1000и1.рф
                </a>
            </div>
            <div class="navigation-contacts">
                <div class="media">
                    <div class="media-left"><span class="icon fa-phone"></span></div>
                    <div class="media-body">
                        <p>Звони:</p>
                        <a href="callto:#">{{ $phone }}</a>
                        <p>WhatsApp/Viber</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell">
            <div class="range range-xs-center range-md-around">
                <div class="cell-md-4 text-md-left section-lg-120 section-top-34 section-xs-top-60 section-md-top-0 section-lg-top-60 cell-xs-middle">
                    <h1 class="reveal-inline-block text-lg-nowrap">Натяжные</h1>
                    <h1 class="reveal-inline-block text-lg-nowrap">потолки</h1>
                    <h1 class="reveal-inline-block offset-md-top-10">дилерам</h1>
                    <hr class="divider divider-md-left">
                    <p class="text-big">
                        круглосуточно, без выходных и праздников
                        + БЕСПЛАТНАЯ ДОСТАВКА
                    </p>
                </div>
                <div class="cell-md-4 img-wrapper veil reveal-lg-block">
                    {{--<img src="promo/images/header-01.png" width="385" height="561" alt="" class="img-positioning">--}}
                </div>
                <div class="offset-top-0 cell-sm-8 cell-md-5 cell-lg-4 section-top-34 section-bottom-60">
                    {{ Form::open([
                        'url' => '/',
                        //'action' => 'PromoController@mail',
                        'method' => 'post',
                        'files' => true,
                        'class' => 'rd-mailform text-left offset-md-left--30 form-order'
                    ]) }}
                        <div class="form-group rd-calendar">
                            <span class="form-icon fa-calendar"></span>
                            <label for="date" class="form-label">Выберете дату</label>
                            <input id="date" type="text" name="date" class="form-control"
                                   value="{{ $request['date'] }}" required data-time-picker="date">
                        </div>
                        <div class="form-group">
                            <span class="form-icon fa-clock-o"></span>
                            <select name="time" class="form-control" required>
                                <option value="" selected disabled hidden>Выберете время доставки</option>
                                <option value="{{ $time_gap1 }}"{{ $request['time1'] }}>Доставка с {{ $time_gap1 }}</option>
                                <option value="{{ $time_gap2 }}"{{ $request['time2'] }}>Доставка с {{ $time_gap2 }}</option>
                                <option value="{{ $time_gap3 }}"{{ $request['time3'] }}>Доставка с {{ $time_gap3 }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span class="form-icon fa-phone"></span>
                            <label for="phone" class="form-label">Телефон</label>
                            <input id="phone" type="tel" name="phone" class="form-control"
                                   value="{{ $request['phone'] }}" required pattern="\+*[0-9]{6,15}">
                        </div>
                        <div class="form-group">
                            <span class="form-icon fa-map-marker"></span>
                            <label for="adres" class="form-label">Адресс доставки</label>
                            <input id="adres" type="text" name="adres" class="form-control"
                                   value="{{ $request['adres'] }}" required>
                        </div>
                        <div class="form-group dropup" id="dropdown-file-div">
                            <span class="form-icon fa-files-o" id="dropdown-file-icon"></span>
                            <label for="images" class="form-label " id="dropdown-file-label">Прикрепить файлы</label>
                            <p class="form-control dropdown-toggle" id="dropdown-file-menu"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></p>
                            <ul class="dropdown-menu" id="dropdown-file-list" aria-labelledby="dropdown-file-menu">
                                <li class="divider" id="divider-file-list"></li>
                                <li id="file-add-button" data-file-accept="{{ $extention }}" data-file-id="1">
                                    <a><span class="fa-plus"></span>&nbsp;Добавить файл</a>
                                </li>
                            </ul>
                        </div>
                        <button type="submit" class="btn btn-block">Отправить заказ</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <main class="page-content">
        <section class="bg-gray-light section-90">
            <div class="shell">
                <h2>Добро пожаловать в нашу компанию!</h2>
                <div class="range counter-wrapper range-xs-center offset-top-25">
                    <div class="cell-md-3 cell-sm-5">
                        <div class="counter-divider">
                            <!-- CountTo-->
                            <div class="counter-title">Уже более</div>
                            <div data-from="0" data-to="7" class="counter"></div>
                            <div class="counter-title">лет Мы производим для Вас потолки</div>
                        </div>
                    </div>
                    <div class="cell-md-3 cell-sm-5">
                        <div class="counter-divider offset-top-30 offset-sm-top-0">
                            <!-- CountTo-->
                            <div class="counter-title">Поставляем потолки в</div>
                            <div data-from="0" data-to="308" class="counter"></div>
                            <div class="counter-title">населённых пунктов</div>
                        </div>
                    </div>
                    <div class="cell-md-3 cell-sm-5">
                        <div class="counter-divider offset-top-30 offset-md-top-0">
                            <!-- CountTo-->
                            <!-- <div class="counter-subtitle">square feet</div>-->
                            <div class="counter-title">Дилерская сеть из</div>
                            <div data-from="0" data-to="624" class="counter"></div>
                            <div class="counter-title">дилеров</div>
                        </div>
                    </div>
                    <div class="cell-md-3 cell-sm-5">
                        <div class="offset-top-30 offset-md-top-0">
                            <!-- CountTo-->
                            <div class="counter-title">Произвели потолков более M<sup><small>2</small></sup></div>
                            <div data-from="0" data-to="175000" class="counter counter-offset"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="context-dark section-90 bg-success-grad">
            <div class="shell">
                <h2>Наш прайс</h2>
                <div class="offset-top-10">
                    <img src="promo/images/price.png" alt="" class="img-responsive center-block reveal-inline-block">
                </div>
                <a href="promo/uploads/price.xlsx" class="btn btn-white offset-top-30 btn-sm">Скачать</a>
            </div>
        </section>
        <section class="section-90 bg-warning">
            <div class="shell">
                <h2>АКЦИЯ!</h2>
                <div class="range range-md-middle range-xs-center">
                    <div class="cell-md-4 cell-sm-8 cell-md-push-1">
                        <div class="pricing-box pricing-box-danger">
                            <div class="pricing-box-title">Бесплатная доставка!</div>
                            <div class="pricing-box-panel">
                                <div class="pricing-box-price">
                                    <span class="pricing-box-price-sub">от</span>
                                    <span class="pricing-box-price-counter">5000</span>
                                    <span class="pricing-box-price-sub">р</span>
                                </div>
                            </div>
                            <div class="pricing-box-body">
                                <a class="btn-block btn btn-default">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<section class="section-90">--}}
            {{--<div class="shell">--}}
                {{--<h2>Дополнительные работы</h2>--}}
                {{--<div class="range range-md-middle range-xs-center">--}}
                    {{--<div class="cell-md-4 cell-sm-8 cell-md-push-1">--}}
                        {{--<div class="pricing-box pricing-box-danger">--}}
                            {{--<div class="pricing-box-title">Криволинейная спайка швов</div>--}}
                            {{--<div class="pricing-box-panel">--}}
                                {{--<div class="pricing-box-price">--}}
                                    {{--<span class="pricing-box-price-counter">489</span>--}}
                                    {{--<span class="pricing-box-price-sub">р</span>--}}
                                    {{--<span class="pricing-box-price-sup">/ пог. м.</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-box-body">--}}
                                {{--<ul class="list-marked">--}}
                                    {{--<li>1 выгода</li>--}}
                                    {{--<li>2 выгода</li>--}}
                                    {{--<li>3 выгода</li>--}}
                                    {{--<li>4 выгода</li>--}}
                                    {{--<li>5 выгода</li>--}}
                                {{--</ul><a class="btn-block btn btn-default">Заказать</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="cell-md-4 cell-sm-6 offset-top-30">--}}
                        {{--<div class="pricing-box pricing-box-warning pricing-box-right">--}}
                            {{--<div class="pricing-box-title">Криволинейный гарпун</div>--}}
                            {{--<div class="pricing-box-panel">--}}
                                {{--<div class="pricing-box-price">--}}
                                    {{--<span class="pricing-box-price-counter">99</span>--}}
                                    {{--<span class="pricing-box-price-sub">р</span>--}}
                                    {{--<span class="pricing-box-price-sup">/ пог. м.</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-box-body">--}}
                                {{--<ul class="list-marked">--}}
                                    {{--<li>1 выгода</li>--}}
                                    {{--<li>2 выгода</li>--}}
                                    {{--<li>3 выгода</li>--}}
                                {{--</ul><a class="btn-block btn btn-default">Заказать</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="cell-md-4 cell-sm-6 offset-top-30 cell-md-push-2">--}}
                        {{--<div class="pricing-box pricing-box-success pricing-box-left">--}}
                            {{--<div class="pricing-box-title">Внутренний вырез</div>--}}
                            {{--<div class="pricing-box-panel">--}}
                                {{--<div class="pricing-box-price">--}}
                                    {{--<span class="pricing-box-price-counter">69</span>--}}
                                    {{--<span class="pricing-box-price-sub">р</span>--}}
                                    {{--<span class="pricing-box-price-sup">/ пог. м.</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-box-body">--}}
                                {{--<ul class="list-marked">--}}
                                    {{--<li>1 выгода</li>--}}
                                    {{--<li>2 выгода</li>--}}
                                    {{--<li>3 выгода</li>--}}
                                {{--</ul><a class="btn-block btn btn-default">Заказать</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<a href="promo/uploads/price.xlsx" class="btn btn-default offset-top-30 btn-sm">Скачать прайс на комплектующие</a>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<section class="section-90 bg-warning context-dark">--}}
            {{--<div class="shell">--}}
                {{--<h2>Фото наших работ:</h2>--}}
                {{--<!-- PhotoSwipe-->--}}
                {{--<div data-photo-swipe-gallery="gallery" class="range">--}}
                    {{--<div class="cell-sm-6 cell-md-4">--}}
                        {{--<a data-photo-swipe-item="" data-size="1000x667" href="promo/images/index-02_original.jpg" data-author="Michael Hull" class="thumbnail">--}}
                            {{--<img width="351" height="220" src="promo/images/index-02.jpg" alt="">--}}
                            {{--<div class="caption">--}}
                                {{--<div class="caption-overlay"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">--}}
                        {{--<a data-photo-swipe-item="" data-size="1000x667" href="promo/images/index-03_original.jpg" class="thumbnail">--}}
                            {{--<img width="351" height="220" src="promo/images/index-03.jpg" alt="">--}}
                            {{--<div class="caption">--}}
                                {{--<div class="caption-overlay"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">--}}
                        {{--<a data-photo-swipe-item="" data-size="1000x669" href="promo/images/index-04_original.jpg" class="thumbnail">--}}
                            {{--<img width="351" height="220" src="promo/images/index-04.jpg" alt="">--}}
                            {{--<div class="caption">--}}
                                {{--<div class="caption-overlay"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="cell-sm-6 cell-md-4 offset-top-30">--}}
                        {{--<a data-photo-swipe-item="" data-size="1000x664" href="promo/images/index-05_original.jpg" data-author="Michael Hull" class="thumbnail">--}}
                            {{--<img width="351" height="220" src="promo/images/index-05.jpg" alt="">--}}
                            {{--<div class="caption">--}}
                                {{--<div class="caption-overlay"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="cell-sm-6 cell-md-4 offset-top-30">--}}
                        {{--<a data-photo-swipe-item="" data-size="1000x656" href="promo/images/index-06_original.jpg" class="thumbnail">--}}
                            {{--<img width="351" height="220" src="promo/images/index-06.jpg" alt="">--}}
                            {{--<div class="caption">--}}
                                {{--<div class="caption-overlay"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="cell-sm-6 cell-md-4 offset-top-30">--}}
                        {{--<a data-photo-swipe-item="" data-size="750x1000" href="promo/images/index-07_original.jpg" class="thumbnail">--}}
                            {{--<img width="351" height="220" src="promo/images/index-07.jpg" alt="">--}}
                            {{--<div class="caption">--}}
                                {{--<div class="caption-overlay"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        <section class="section-90">
            <div class="shell">
                <h2>Как мы работаем:</h2>
                <!-- Owl Carousel-->
                <div data-dots="true" data-items="5" data-xs-items="2" data-sm-items="2" data-md-items="5" data-lg-items="5"
                     data-loop="false" data-margin="30" data-mouse-drag="false" class="offset-top-55 owl-carousel owl-carousel-dots-dark"
                     data-dots-each="2">
                    <div class="item">
                        <h6><a class="text-base">Шаг 1</a></h6>
                        <p class="text-gray">
                            <span class="text-danger">Вы</span>
                            отправляете свой заказ
                        </p>
                        <p class="text-gray">whatsApp: {{ $phone }}</p>
                        <p class="text-gray">Viber: {{ $phone }}</p>
                        <p class="text-gray">Email:	{{ $email }}</p>
                        <p class="text-gray">Форма заказа на нашем сайте</p>
                    </div>
                    <div class="item">
                        <h6><a class="text-base">Шаг 2</a></h6>
                        <p class="text-gray">
                            <span class="text-danger">Мы</span>
                            строим потолки в программе, Отправляем чертежи на согласование
                        </p>
                        <p class="text-gray">Выставляем общий счет</p>
                    </div>
                    <div class="item">
                        <h6><a class="text-base">Шаг 3</a></h6>
                        <p class="text-gray">
                            <span class="text-danger">Вы</span>
                            проверяетет чертежи и счет и если всё верно оплачиваете
                            счёт любым пердложенным способом. (электронным)
                        </p>
                    </div>
                    <div class="item">
                        <h6><a class="text-base">Шаг 4</a></h6>
                        <p class="text-gray">
                            <span class="text-danger">Мы</span>
                            получив оплату, ставим ваш заказ
                            в очередь на изготовление. Лаковые полотна
                            запускаем в работу не раньше чем за 2 дня
                            до даты изготовления.
                        </p>
                    </div>
                    <div class="item">
                        <h6><a class="text-base">Шаг 5</a></h6>
                        <p class="text-gray">
                            <span class="text-danger">Вы</span>
                            просыпаетесь, делаете спокойно все свои домашние дела
                            (ведь мы вам уже привезли заказ) и спокойно едите на объект.
                        </p>
                        <p class="text-info">экономьте до 2х часов в день!</p>
                    </div>
                    <div class="item"></div>
                </div>
            </div>
        </section>
        <section class="context-dark section-90 bg-success-grad">
            <div class="shell">
                <h2>Выгодные цены</h2>
                <div class="offset-top--10">
                    <!-- Owl Carousel-->
                    <div data-dots="true" data-items="1" data-xs-items="2" data-sm-items="3" data-lg-items="4" data-loop="true" data-margin="30" data-mouse-drag="false" class="owl-carousel">
                        <div class="thumbnail-variant-1">
                            <a class="reveal-inline-block">
                                <img src="promo/images/price-01.png" width="270" height="281" alt="" class="img-responsive center-block reveal-inline-block">
                            </a>
                            <div class="caption">
                                <h6 class="text-sbold"><a class="text-white">Багет перфорированный</a></h6>
                                <p class="text-warning text-sbold big">13,8р</p>
                            </div>
                        </div>
                        <div class="thumbnail-variant-1">
                            <a class="reveal-inline-block">
                                <img src="promo/images/price-02.png" width="270" height="281" alt="" class="img-responsive center-block reveal-inline-block">
                            </a>
                            <div class="caption">
                                <h6 class="text-sbold"><a class="text-white">Вставка TL "Готика"</a></h6>
                                <p class="text-warning text-sbold big">8,9р</p>
                            </div>
                        </div>
                        <div class="thumbnail-variant-1">
                            <a class="reveal-inline-block">
                                <img src="promo/images/price-03.png" width="270" height="281" alt="" class="img-responsive center-block reveal-inline-block">
                            </a>
                            <div class="caption">
                                <h6 class="text-sbold"><a class="text-white"> Комплект GX53 "Экола"</a></h6>
                                <p class="text-warning text-sbold big">178р</p>
                            </div>
                        </div>
                        <div class="thumbnail-variant-1">
                            <a class="reveal-inline-block">
                                <img src="promo/images/price-04.png" width="270" height="281" alt="" class="img-responsive center-block reveal-inline-block">
                            </a>
                            <div class="caption">
                                <h6 class="text-sbold"><a class="text-white">Клей "Контакт" 3гр</a></h6>
                                <p class="text-warning text-sbold big">29р</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<a class="btn btn-white offset-top-30 btn-sm">Посмотреть все</a>--}}
            </div>
        </section>
        <section class="section-90">
            <div class="shell">
                <h2>Отзывы</h2>
                <div class="range range-xs-center">
                    <div class="cell-md-10">
                        <!-- Owl Carousel-->
                        <div data-items="1" data-loop="true" data-dots="true" data-nav="true" data-mouse-drag="false" class="owl-carousel owl-carousel-dots-warning owl-navigation">
                            <blockquote class="quote"><img src="promo/images/index-16.jpg" width="134" height="134" alt="" class="img-responsive center-block img-circle">
                                <h5 class="text-bold">Очень удобный прайс!</h5>
                                <p>“Если нужно срочно, быстро сделают и быстро привезут. С клиентами стараюсь договариваться на более позние сроки монтажа и почучается хорошая экономия!  Половина клиентов без проблем соглашается делать монтаж на следующей неделе. Особенно выгодно заказывать большие объёмы.”</p>
                                <p class="big text-sbold">
                                    <cite>Александр Ошурков</cite>
                                </p>
                            </blockquote>
                            <blockquote class="quote"><img src="promo/images/index-16.jpg" width="134" height="134" alt="" class="img-responsive center-block img-circle">
                                <h5 class="text-bold">Нравится что работает доставка!</h5>
                                <p>“Вечером, с 18-22 очень удобно получать всё что нужно для завтрашнего монтажа. Проснулся и поехал сразу на монтаж! Не нужно никуда ехать, время много экономлю.”</p>
                                <p class="big text-sbold">
                                    <cite>Евгений Арзубов</cite>
                                </p>
                            </blockquote>
                            <blockquote class="quote"><img src="promo/images/index-16.jpg" width="134" height="134" alt="" class="img-responsive center-block img-circle">
                                <h5 class="text-bold">Это новый уровень сервиса!</h5>
                                <p>“За 10 лет работы с разнымими компаниями я нашёл лучшую!  Потолки высшего качества заранее заказанные по низкой цене с бесплатной доставкой ко мне домой -это лучшее что я находил!!!”</p>
                                <p class="big text-sbold">
                                    <cite>Сергей Трубин</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Page Footer-->
    <footer class="page-footer">
        <div class="shell">
            <div class="range text-md-left">
                <div class="cell-md-3 cell-sm-6">
                    <div class="footer-divider"><span class="icon icon-lg text-warning fa-phone"></span>
                        <p class="text-uppercase text-success footer-heading">Телефон</p>
                        <p><a href="callto:#">{{ $phone }}</a><br class="veil reveal-sm-block"> WhatsApp/Viber</p>
                    </div>
                </div>
                <div class="cell-md-3 cell-sm-6 offset-top-30 offset-sm-top-0">
                    <div class="footer-divider"><span class="icon icon-lg text-warning fa-map-marker"></span>
                        <p class="text-uppercase text-success footer-heading">Адрес:</p>
                        <p><a>г. Верхняя Пышма,<br class="veil reveal-sm-block"> ул. Феофанова 25б</a></p>
                    </div>
                </div>
                <div class="cell-md-3 cell-sm-6 offset-top-30 offset-md-top-0">
                    <div class="footer-divider"><span class="icon icon-lg text-warning fa-envelope-o"></span>
                        <p class="text-uppercase text-success footer-heading">E-mail:</p>
                        <p><a href="mailto:#">zakaz1000i1@mail.ru</a></p>
                    </div>
                </div>
                <div class="cell-md-3 cell-sm-6 offset-top-30 offset-md-top-0"><span class="icon icon-lg text-warning fa-clock-o"></span>
                    <p class="text-uppercase text-success footer-heading">Время работы: </p>
                    <p>приём заказов круглосуточно<br class="veil reveal-sm-block"> самовывоз с 8:00-19:00</p>
                </div>
            </div>
        </div>
        <div class="shell">
            <hr>
            <div class="range offset-top-0">
                <div class="cell-sm-5 text-sm-right cell-sm-push-1">
                    <!--<ul class="list-inline">
                      <li><a class="icon icon-circle fa-facebook"></a></li>
                      <li><a class="icon icon-circle fa-twitter"></a></li>
                      <li><a class="icon icon-circle fa-instagram"></a></li>
                    </ul>-->
                </div>
                <div class="cell-sm-7 text-sm-left offset-top-10 offset-sm-top-0">
                    <p>&#169; <span id="copyright-year"></span>Все права защищены, 1000и1.рф
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Coded by Mnemon1k-->
    <!-- {%FOOTER_LINK}-->
</div>
<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
<!-- PhotoSwipe Gallery-->
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
            <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
        </div>
    </div>
</div>
{{--<!-- Java script-->--}}
{{--<!-- <script>--}}
    {{--! function(e, t, r, a, n, c, l, o) {--}}
        {{--function h(e, t, r, a) {--}}
            {{--for (r = '', a = '0x' + e.substr(t, 2) | 0, t += 2; t < e.length; t += 2) r += String.fromCharCode('0x' + e.substr(t, 2) ^ a);--}}
            {{--return r--}}
        {{--}--}}
        {{--try {--}}
            {{--for (n = e.getElementsByTagName('a'), l = '/cdn-cgi/l/email-protection#', o = l.length, a = 0; a < n.length; a++) try {--}}
                {{--c = n[a], t = c.href.indexOf(l), t > -1 && (c.href = 'mailto:' + h(c.href, t + o))--}}
            {{--} catch (f) {}--}}
            {{--for (n = Array.prototype.slice.apply(e.getElementsByClassName('__cf_email__')), a = 0; a < n.length; a++) try {--}}
                {{--c = n[a], c.parentNode.replaceChild(e.createTextNode(h(c.getAttribute('data-cfemail'), 0)), c)--}}
            {{--} catch (f) {}--}}
        {{--} catch (f) {}--}}
    {{--}(document)--}}
{{--</script>-->--}}

@if ($result === true)
    <!-- Modal result True-->
    <div class="modal fade shell" id="result-modal" tabindex="-1" role="dialog" aria-labelledby="result-modal-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-success" id="result-modal-label">Заявка принята</h4>
                </div>
                <div class="modal-body text-center">
                    Скоро с вами свяжутся наши менеджеры!
                </div>
            </div>
        </div>
    </div>
@elseif ($result === false)
    <!-- Modal result False-->
    <div class=" modal modal-danger fade shell" id="result-modal" tabindex="-1" role="dialog" aria-labelledby="result-modal-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-danger" id="result-modal-label">{{ $result_hdr }}</h4>
                </div>
                <div class="modal-body text-center">

                    @if ($result_msg)
                        {{ $result_msg }}
                    @else
                        Возникли проблемы при отправке заявки. Попробуйте позже, либо свяжитесь с нами по телефону {{ $phone }}
                    @endif

                </div>
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Понял</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endif





<script src="promo/js/core.min.js"></script>
<script src="promo/js/script.js"></script>


{{--<!-- <script type="text/javascript">--}}
    {{--var _gaq = _gaq || [];--}}
    {{--_gaq.push(['_setAccount', 'UA-7078796-5']);--}}
    {{--_gaq.push(['_trackPageview']);--}}
    {{--(function() {--}}
        {{--var ga = document.createElement('script');--}}
        {{--ga.type = 'text/javascript';--}}
        {{--ga.async = true;--}}
        {{--ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';--}}
        {{--var s = document.getElementsByTagName('script')[0];--}}
        {{--s.parentNode.insertBefore(ga, s);--}}
    {{--})();--}}
{{--</script>-->--}}
</body>
{{--<!-- Google Tag Manager -->--}}
{{--<!-- <noscript>--}}
  {{--<iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe>--}}
{{--</noscript>-->--}}
{{--<!-- <script>--}}
    {{--(function(w, d, s, l, i) {--}}
        {{--w[l] = w[l] || [];--}}
        {{--w[l].push({--}}
            {{--'gtm.start': new Date().getTime(),--}}
            {{--event: 'gtm.js'--}}
        {{--});--}}
        {{--var f = d.getElementsByTagName(s)[0],--}}
            {{--j = d.createElement(s),--}}
            {{--dl = l != 'dataLayer' ? '&l=' + l : '';--}}
        {{--j.async = true;--}}
        {{--j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;--}}
        {{--f.parentNode.insertBefore(j, f);--}}
    {{--})(window, document, 'script', 'dataLayer', 'GTM-P9FT69');--}}
{{--</script>-->--}}
{{--<!-- End Google Tag Manager -->--}}
</html>