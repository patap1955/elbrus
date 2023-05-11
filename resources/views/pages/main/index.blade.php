@extends('master')
@section('title', 'Проектирование и строительство домов')
@section('description', 'Компания «Эльбрус» начинала свою работу в качестве дочернего предприятия ООО «ГеоСтройизыскания+», а в 2021 году стала функционировать как самостоятельное ООО «Эльбрус».Основная сфера деятельности — проектирование и строительство домов.')
@section('css')
@endsection

@section('content')
    <header>
        <div class="header__wrapper">
            <div class="containers">
                <div class="header">
                    <a href="{{ route("index") }}">
                        <div class="header__logo">
                            <div class="header__logo-img">
                                <img src="{{ asset("assets/img/logo.svg") }}">
                            </div>
                            <p class="header__logo-text">Эльбрус</p>
                        </div>
                    </a>

                    <nav class="header__nav">
                        <ul class="nav-list nav-list-header">
                            <li class="nav-item"><a class="nav-link" href="#project">Проектирование</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Строительство</a></li>
                            <li class="nav-item"><a class="nav-link" href="#footer">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="header__info">
                        <a class="header__phone" href="tel:+7 905 153-55-51">+7 905 153-55-51</a>
                    </div>
                </div>
                <div class="first-screen">
                    <div class="first-screen__info">
                        <h1 class="first-screen__title animate__animated">воплощаем мечту в реальность</h1>
                        <div class="first-screen__container animate__animated animate__delay-03s">
                            <p class="first-screen__text">
                                Компания «Эльбрус» начинала свою работу в качестве дочернего предприятия ООО «ГеоСтройизыскания+», а в 2021 году стала функционировать как самостоятельное ООО «Эльбрус».
                            </p>
                            <p class="first-screen__text">Основная сфера деятельности — проектирование и строительство домов.</p>
                        </div>
                    </div>
                    <div class="first-screen__button animate__animated animate__delay-06s">
                        <button class="popAp">Оставить заявку</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="fixed-header" id="navbar">
        <div class="containers header">
            <a href="{{ route("index") }}">
                <div class="header__logo">
                    <div class="header__logo-img">
                        <img src="{{ asset("assets/img/logo.svg") }}">
                    </div>
                    <p class="header__logo-text">Эльбрус</p>
                </div>
            </a>

            <nav class="header__nav">
                <ul class="nav-list nav-list-header">
                    <li class="nav-item"><a class="nav-link" href="#project">Проектирование</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Строительство</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer">Контакты</a></li>
                </ul>
            </nav>
            <div class="header__info">
                <a class="header__phone" href="tel:+7 905 153-55-51">+7 905 153-55-51</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <nav class="header__nav mobile__nav">
            <ul class="nav-list nav-list-header nav-list-mobile">
                <li class="nav-item"><a class="nav-link" href="#project">Проектирование</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Строительство</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">Контакты</a></li>
            </ul>
        </nav>
        <div class="mobile__phohe">
            <a class="header__phone" href="tel:+7 905 153-55-51">+7 905 153-55-51</a>
        </div>
    </div>
    <div class="burger">
        <span>
            <svg width="40" height="40" viewBox="0 0 40 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="burger-span burger-span-top" d="M0 0H40V4H0V0Z" fill="url(#paint0_linear_156_2109)"/>
                <path class="burger-span burger-span-center"  d="M0 12H40V16H0V12Z" fill="url(#paint1_linear_156_2109)"/>
                <path class="burger-span burger-span-bottom" d="M0 24H40V28H0V24Z" fill="url(#paint2_linear_156_2109)"/>
                <defs>
                    <linearGradient id="paint0_linear_156_2109" x1="0" y1="0" x2="26.3087" y2="37.5839" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00860D"/>
                        <stop offset="1" stop-color="#00C142"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_156_2109" x1="0" y1="0" x2="26.3087" y2="37.5839" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00860D"/>
                        <stop offset="1" stop-color="#00C142"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_156_2109" x1="0" y1="0" x2="26.3087" y2="37.5839" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00860D"/>
                        <stop offset="1" stop-color="#00C142"/>
                    </linearGradient>
                </defs>
            </svg>
        </span>
    </div>
    <div class="header__fon">
        <img class="mask__white" src="{{ asset('assets/img/mask-header-white.png') }}">
        <div class="wrap-1">
            <div class="mask__home animate__animated animate__zoomIn">
                <img class="mask__home-img" src="{{ asset('assets/img/header-home.png') }}">
            </div>
        </div>

    </div>
    <section id="about">
        <div class="containers about">
            <div class="about__top">
                <div class="wrap-2">
                    <div class="about__top-left animate__animated">
                        <img src="{{ asset('assets/img/about-img-1.png') }}">
                    </div>
                </div>

                <div class="about__top-right">
                    <div class="section-title section-title__about animate__animated">
                        <span class="section-title__span"></span>
                        <h2 class="section-title__text">Мы вам нужны, если</h2>
                        <span class="section-title__span"></span>
                    </div>
                    <div class="about__top-list animate__animated animate__delay-03s">
                        <ul class="list">
                            <li class="list__item">Вы планируете строительство собственного дома</li>
                            <li class="list__item">Вам нужен проверенный подрядчик, с большим опытом работы в сфере деревянного и каркасного строительства</li>
                            <li class="list__item">Вы не хотите, что бы вашим домом занимались разные подрядные организации, а предпочитаете получить услугу «Полный цикл», т.е. строительство от создания проекта и до сдачи дома в эксплуатацию</li>
                        </ul>
                    </div>
                    <div class="about__top-right-img">
                        <div class="wrap-3">
                            <div class="about__top-img aboutTopImg1 animate__animated">
                                <img src="{{ asset('assets/img/about-img-2.png') }}">
                            </div>
                        </div>
                        <div class="wrap-4">
                            <div class="about__top-img aboutTopImg2 animate__animated ">
                                <img src="{{ asset('assets/img/about-img-3.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__bottom">
                <div class="about__bottom-left">
                    <div class="about__bottom-list animate__animated">
                        <ul class="list">
                            <li class="list__item">Вы предпочитаете компании с индивидуальным подходом к клиенту, которые готовы гибко, оперативно и эффективно реагировать на меняющиеся пожелания заказчика</li>
                            <li class="list__item">Вам важно соответствие приемлемой цены и надёжной гарантии на завершённый объект строительства</li>
                        </ul>
                    </div>

                    <div class="about__bottom-button animate__animated">
                        <a class="about__bottom-button-link" href="https://vk.com/club218960171" target="_blank">Перейти в группу ВК</a>
                    </div>
                </div>
                <div class="wrap-5">
                    <div class="about__bottom-right aboutBottomRight animate__animated">
                        <img src="{{ asset('assets/img/about-img-4.png') }}">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="project">
        <div class="containers project">
            <div class="section-title section-title__project animate__animated">
                <span class="section-title__span"></span>
                <h2 class="section-title__text">Начало работы над вашим проектом</h2>
                <span class="section-title__span"></span>
            </div>
            <div class="project__block">
                <div class="project__block-left">
                    <div class="project__block-left-text animate__animated">
                        <p>Наши специалисты разработают проект вашего будущего дома, серьёзно рассмотрев и приняв во внимание все ваши пожелания и предпочтения, не забыв при этом предложить несколько вариантов комплектации заказа.</p>
                    </div>
                    <div class="project__block-left-img animate__animated">
                        <img src="{{ asset("assets/img/project-img-1.png") }}">
                    </div>
                </div>
                <div class="project__block-center">
                    <div class="project__block-center-img animate__animated">
                        <img src="{{ asset("assets/img/project-img-2.png") }}">
                    </div>
                    <div class="project__block-center-img animate__animated">
                        <img src="{{ asset("assets/img/project-img-3.png") }}">
                    </div>
                </div>
                <div class="project__block-right animate__animated">
                    <img src="{{ asset("assets/img/project-img-plan.png") }}">
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="containers portfolio">
            <div class="section-title section-title__portfolio">
                <span class="section-title__span"></span>
                <h2 class="section-title__text section-title__text-portfolio">Как проходит строительство</h2>
                <span class="section-title__span"></span>
            </div>
            <div class="portfolioSwiper__container">
                <div class="portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide portfolio-slide">
                            <a data-fancybox="gallery" href="{{ asset('assets/img/gallery-img-1.png') }}">
                                <img src="{{ asset('assets/img/gallery-img-1.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                href="{{ asset('assets/img/gallery-img-2.png') }}"
                            >
                                <img src="{{ asset('assets/img/gallery-img-2.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                href="{{ asset('assets/img/gallery-img-3.png') }}"
                            >
                                <img src="{{ asset('assets/img/gallery-img-3.png') }}" />
                            </a>
                        </div>


                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                href="{{ asset('assets/img/gallery-img-1.png') }}"
                            >
                                <img src="{{ asset('assets/img/gallery-img-1.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                href="{{ asset('assets/img/gallery-img-2.png') }}"
                            >
                                <img src="{{ asset('assets/img/gallery-img-2.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                href="{{ asset('assets/img/gallery-img-3.png') }}"
                            >
                                <img src="{{ asset('assets/img/gallery-img-3.png') }}" />
                            </a>
                        </div>

                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <div class="portfolio__button">
                <a href="https://vk.com/club218960171" target="_blank">Больше фото</a>
            </div>
        </div>
    </section>
    <section id="banner">
        <div class="containers banner">
            <div class="banner__container">
                {{--                <img class="banner__mask" src="{{ asset("assets/img/mask-banner.png") }}">--}}
                {{--                <img class="banner__foto" src="{{ asset("assets/img/mask-banner-foto.png") }}">--}}
                <div class="banner__text-container">
                    <div class="banner__wrapper">
                        <h2 class="banner__title">Постойте дом мечты с нами!</h2>
                        <p class="banner__text">Строим надёжные дома со сроком эксплуатации от 150 лет по индивидуальному или готовому проекту</p>
                        <div class="banner__button">
                            <button class="popAp">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="banner__foto"></div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="containers footer">
            <div class="footer__contacts">
                <div class="section-title section-title__footer animate__animated">
                    <span class="section-title__span"></span>
                    <h2 class="section-title__text">Свяжитесь с нами</h2>
                    <span class="section-title__span"></span>
                </div>
                <div class="footer__contacts-phone animate__animated animate__delay-03s">
                    <a href="tel:+7 905 153 55-51">+7 905 153 55-51</a>
                </div>
                <div class="footer__contacts-email animate__animated animate__delay-06s">
                    <a href="mailto:wazde1@yandex.ru">wazde1@yandex.ru</a>
                </div>
                <div class="footer__contacts-from animate__animated animate__delay-09s">
                    <p>Производство:</p>
                    <p>Костромская область, Чухломский р-н, деревня Нестерово</p>
                </div>
            </div>
            <div class="footer__map animate__animated">
                <div id="map"></div>
            </div>
            <div class="footer__bottom">
                <a class="footer__bottom-link" href="{{ route("index") }}">
                    <div class="footer__logo">
                        <div class="footer__logo-img">
                            <img src="{{ asset("assets/img/logo.svg") }}">
                        </div>
                        <p class="footer__logo-text">Эльбрус</p>
                    </div>
                </a>
                <div class="footer__bottom-info">
                    <p class="footer__copy">© <?=date ( 'Y' )?>, Все права защищены</p>
                    <a class="footer__politics" href="{{ route('politics') }}">Политика конфиденциальности</a>
                    <p class="footer__development">Сайт разработан компанией <a href="https://alex-media.ru" target="_blank">ALEX–MEDIA</a></p>
                </div>
                <div class="footer__bottom-nav">
                    <ul class="nav-list nav-list-footer">
                        <li class="nav-item"><a class="nav-link" href="#project">Проектирование</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Строительство</a></li>
                        <li class="nav-item"><a class="nav-link" href="#footer">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="servicesPopAp" class="modalForm">
        <div class="modal-content-form">
                <span class="closeForm">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.12485 12.0106L0 2.87786L2.85522 0.0201559L11.9801 9.15293L21.125 0L24 2.87745L14.855 12.0304L23.959 21.1423L21.1038 24L11.9998 14.8881L2.89619 23.9996L0.0212416 21.1221L9.12485 12.0106Z" fill="#C4CDDE"/>
                    </svg>
                </span>
            <h3 class="modal-title">Оставьте заявку, мы обязательно свяжемся с вами!</h3>
            <p class="modal-text">Оставьте свой номер телефона, и мы поможем воплотить вашу мечту в реальность</p>
            <form class="modal-form">
                <input class="modal-form-input" type="text" name="name" placeholder="Имя" id="inputName" required>
                <input class="modal-form-input" type="text" name="phone" placeholder="Телефон" id="inputPhone" required>
                <div class="modal-checkbox">
                    <input type="checkbox" id="checkbox">
                    <label>Согласен на обработку персональный данных</label>
                </div>
                <div class="modal-button">
                    <button class="modal-form-button" id="sendMail" disabled>Оставить заявку</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
@endsection
