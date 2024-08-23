<?php // этот php-код компилирует less/style.less в css/style.css	
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
    // load the cache
    $cacheFile = $inputFile . ".cache";
    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }
    $less = new lessc;
    $newCache = $less->cachedCompile($cache);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="red">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li><a href="#">Головна</a></li>
                    <li><a href="#sec2">Курси</a></li>
                    <li><a href="#sec3">Процес</a></li>
                    <li><a href="#sec5">Відгуки</a></li>
                    <li><a href="#sec7">Чому ми?</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-wrapper">
            <header>
                <div class="container">
                    <div class="block">
                        <a class="logo" href="">
                            <img src="./assets/img/logo.svg" alt="">
                        </a>
                        <nav>
                            <ul>
                                <li><a href="#">Головна</a></li>
                                <li><a href="#sec2">Курси</a></li>
                                <li><a href="#sec3">Процес</a></li>
                                <li><a href="#sec5">Відгуки</a></li>
                                <li><a href="#sec7">Чому ми?</a></li>
                            </ul>
                        </nav>
                        <a href="tel:+380938344808" class="tel">+38(093)-834-48-08</a>
                        <div class="menu">
                            <!-- Кнопка Мобильного Меню -->
                            <button id="burger-menu">
                                <div class="box box_item1"></div>
                                <div class="box box_item2"></div>
                                <div class="box box_item3"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <section class="sec1">
                <div class="container" data-aos="fade-up">
                    <div class="title">
                        <h1><span>Навчимо тебе</span> програмувати щоб стати IT-шником</h1>
                    </div>
                    <div class="descr">
                        <p><strong>IT Liberal</strong> - це школа програмування, де ми навчимо тебе сьогодні знанням.
                            Усі наші програми складені Senior та Lead розробниками
                            провідних IT компаній спеціально для новачків в ІТ.</p>
                    </div>
                    <a href="#">Отримати консультацію</a>
                </div>
            </section>
        </div>
        <section class="sec2" id="sec2">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Найближчі курси</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec2-icon1.svg" alt="">
                        </div>
                        <span>Front End розробник</span>
                        <a href="#">Детальніше</a>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec2-icon2.svg" alt="">
                        </div>
                        <span>Python розробник</span>
                        <a href="#">Детальніше</a>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/sec2-icon3.svg" alt="">
                        </div>
                        <span>Java розробник</span>
                        <a href="#">Детальніше</a>
                    </div>
                </div>
                <div class="items-courses">
                    <div class="item-course">
                        <div class="bg">
                            <img src="./assets/img/sec2-itembg1.jpg" alt="">
                        </div>
                        <div class="txt">
                            <span>Офлайн курси</span>
                            <p>Вчись у Києві</p>
                        </div>
                    </div>
                    <div class="item-course">
                        <div class="bg">
                            <img src="./assets/img/sec2-itembg2.jpg" alt="">
                        </div>
                        <div class="txt">
                            <span>Онлайн-курси</span>
                            <p>Вчися дистанційно з будь-якої точки світу</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3" id="sec3">
            <div class="container">
                <div class="title">
                    <h2>Як побудований навчальний процес</h2>
                </div>
                <div class="cards">
                    <div class="card" data-aos="fade-left">
                        <div class="descr">
                            <span>Наголос на практику</span>
                            <p>Даємо структуровані знання, потрібні сьогодні на ринку праці. Жодної води в навчанні: тільки 15% теорії та 85% практики. А також додаткові 100% турботи від викладачів.</p>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/sec3-img1.svg" alt="">
                        </div>
                    </div>
                    <div class="card" data-aos="fade-right">
                        <div class="descr">
                            <span>Підтримка та турбота</span>
                            <p>За кожною групою закріплений досвідчений аккаунт-менеджер, який допомагає в вирішенні актуальних завдань / питань. А викладачі завжди готові допомогти на занятті та онлайн у Telegram.</p>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/sec3-img2.svg" alt="">
                        </div>
                    </div>
                    <div class="card" data-aos="fade-left">
                        <div class="descr">
                            <span>Допомога з пошуку роботи</span>
                            <p>Допомагаємо скласти резюме. Вчимо, як готуватися до співбесід та успішно їх проходити. Співпрацюємо з IT компаніями з працевлаштування.</p>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/sec3-img3.svg" alt="">
                        </div>
                    </div>
                    <div class="card" data-aos="fade-right">
                        <div class="descr">
                            <span>Робота на реальних проектах</span>
                            <p>Вже у процесі навчання ти розробиш реальний проект - твій перший проект у з професійним портфоліо.</p>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/sec3-img4.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h3>Потрібна допомога із вибором курсу?</h3>
                    <p>Залиш телефон у формі нижче, і ми проконсультуємо тебе найближчим часом.</p>
                </div>
                <a href="#">Отримати консультацію</a>
            </div>
        </section>
        <section class="sec5" id="sec5">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Успішні історії наших випускників</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="photo">
                            <img src="./assets/img/photo.jpg" alt="">
                        </div>
                        <div class="descr">
                            <span class="name">Олеся</span>
                            <span class="position">Front End розробник</span>
                            <p>Я розуміла, що мені потрібен поштовх, адже якщо ти просто сидиш удома — то щось зробив, а потрібна регулярність.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="./assets/img/photo1.jpg" alt="">
                        </div>
                        <div class="descr">
                            <span class="name">Віталій</span>
                            <span class="position">Front End розробник</span>
                            <p>Насправді курси дають більше, ніж просто знання. На курсах, як показує практика, ти можеш знайти хороших знайомих, друзів та роботу.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="./assets/img/photo2.jpg" alt="">
                        </div>
                        <div class="descr">
                            <span class="name">Микола</span>
                            <span class="position">AEM Java Developer</span>
                            <p>Зараз IT - це єдине місце, яке уявляє тобі гідні робочі умови та добрих людей поряд з тобою.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="./assets/img/photo3.jpg" alt="">
                        </div>
                        <div class="descr">
                            <span class="name">Олег</span>
                            <span class="position">Front End розробник</span>
                            <p>Курс закінчився на початку жовтня, та у грудні я вже вийшов на нову роботу. Усього пройшов близько 15 співбесід. </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="./assets/img/photo4.jpg" alt="">
                        </div>
                        <div class="descr">
                            <span class="name">Дмитро</span>
                            <span class="position">Software Programmer</span>
                            <p>Після курсу я потрапив на стажування у компанію, потім на стажування Scopes від EPAM, а потім перейшов на стажування в iTech і з того часу я там.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="./assets/img/photo5.jpg" alt="">
                        </div>
                        <div class="descr">
                            <span class="name">Дмитро</span>
                            <span class="position">AEM Java Developer </span>
                            <p>Я був розподілений на момент курсів: працював і паралельно саморозвивався. Потім компанія Areg запросила мене на співбесіду.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec6" data-aos="fade-up">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./assets/img/slider-photo.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./assets/img/slider-photo1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./assets/img/slider-photo2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./assets/img/slider-photo3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./assets/img/slider-photo4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./assets/img/slider-photo5.jpg" alt=""></div>
                </div>
            </div>
        </section>
        <section class="sec7" id="sec7">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Які плюси пройти навчання у нас</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="icon"><img src="./assets/img/sec7-icon1.svg" alt=""></div>
                        <div class="descr">
                            <span>Оплата у розстрочку</span>
                            <p>Без відсотків, переплат та довідок протягом навчання.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="./assets/img/sec7-icon2.svg" alt=""></div>
                        <div class="descr">
                            <span>Тільки практика</span>
                            <p>Вивчення мови Python в школі IT Liberal – це наголос на вирішенні реальних завдань та придбання практичних навичок</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="./assets/img/sec7-icon3.svg" alt=""></div>
                        <div class="descr">
                            <span>Група до 14 осіб</span>
                            <p>На курсах Python викладачі приділяють максимум уваги кожному студенту.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="./assets/img/sec7-icon4.svg" alt=""></div>
                        <div class="descr">
                            <span>Своя техніка</span>
                            <p>Надаємо повністю обладнане робоче місце.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec8">
            <div class="container" data-aos="fade-up">
                <div class="form-item">
                    <span>Курс</span>
                    <h3>Python розробник</h3>
                    <p>Навчимо з нуля розробці web-додатків на Python за 5,5 місяців.</p>
                    <form action="#">
                        <input type="text" placeholder="Вашу адресу електронної пошти">
                        <input type="text" placeholder="Ваше повне ім'я">
                        <input type="text" placeholder="Ваш номер телефону">
                        <button>Залишити заявку</button>
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="logo">
                    <img src="./assets/img/logo-footer.svg" alt="">
                </div>
                <div class="txt">
                    <p>Адрес: вулиця Глибочицька, 32б, Київ, Україна, 02000</p>
                    <p>Режим роботи: понеділок – п'ятниця з 10:00 до 19:00</p>
                    <p><a href="tel:+380938344808">+38(093)-834-48-08</a> | <a href="mailto:itliberal23@gmail.com">itliberal23@gmail.com</a></p>
                    <span>© 2023, TOВ IТ Liberal</span>
                </div>
            </div>
        </footer>
    </div>

    <?php require "modal.php" ?>
    <?php require "footer.php" ?>