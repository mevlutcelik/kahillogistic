<?php

$phone = "5307628300";
$formattedPhone = '0 (' . substr($phone, 0, 3) . ') ' . substr($phone, 3, 3) . ' ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2);
$phone = "+90" . $phone;

$lang = @$_GET["lang"];
switch($lang){
    case "tr":
        require "lang/tr.php";
        break;
    case "ar":
        require "lang/ar.php";
        break;
    default:
        require "lang/en.php";
        break;
}
?>
<!DOCTYPE html>
<html lang="<?= $str["lang"] ?>" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $str["title"] ?></title>
    <link rel="stylesheet" href="/css/style.min.css">
    <?php
    if($lang === "ar"){
        ?>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@400;500;600&display=swap');
            *{font-family: 'Noto Sans Arabic', system-ui, sans-serif;text-align: right;}
            .footer-desc{text-align: right !important;}
        </style>
        <?php
    }
    ?>
</head>

<body>
    <div class="overlay"></div>
    <div class="side-nav">
        <button role="button" class="close-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                    d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
            </svg>
        </button>
        <div class="link-title first"><?= $str["select-language"] ?></div>
        <div class="links">
            <a title="English" href="/">English</a>
            <a title="العربية" href="/?lang=ar">العربية</a>
            <a title="Türkçe" href="/?lang=tr">Türkçe</a>
        </div>
        <div class="link-title"><?= $str["pages"] ?></div>
        <div class="links">
            <a title="<?= $str["home"] ?>" class="active" href="<?= ($lang === 'en' || $lang === 'tr' || $lang === 'ar') ? "/?lang=$lang" : "/index.php" ?>"><?= $str["home"] ?></a>
            <a title="<?= $str["about"] ?>" href="<?= ($lang === 'en' || $lang === 'tr' || $lang === 'ar') ? "/about.php?lang=$lang" : "/about.php" ?>"><?= $str["about"] ?></a>
            <a title="<?= $str["services"] ?>" href="<?= ($lang === 'en' || $lang === 'tr' || $lang === 'ar') ? "/services.php?lang=$lang" : "/services.php" ?>"><?= $str["services"] ?></a>
        </div>
    </div>
    <nav>
        <div class="flex">
            <a title="<?= $str["title"] ?>" href="<?= ($lang === 'en' || $lang === 'tr' || $lang === 'ar') ? "/?lang=$lang" : "/index.php" ?>" class="logo">
                <img src="/images/logo.webp" alt="<?= $str["title"] ?>">
            </a>
            <div class="languages">
                <a title="English" href="/">English</a>
                <a title="العربية" href="/?lang=ar">العربية</a>
                <a title="Türkçe" href="/?lang=tr">Türkçe</a>
            </div>
        </div>
        <div>
            <div class="links">
            <a title="<?= $str["home"] ?>" href="<?= ($lang === 'en' || $lang === 'tr' || $lang === 'ar') ? "/?lang=$lang" : "/index.php" ?>"><?= $str["home"] ?></a>
            <a title="<?= $str["about"] ?>" href="<?= ($lang === 'en' || $lang === 'tr' || $lang === 'ar') ? "/about.php?lang=$lang" : "/about.php" ?>"><?= $str["about"] ?></a>
            <a title="<?= $str["services"] ?>" href="<?= ($lang === 'en' || $lang === 'tr' || $lang === 'ar') ? "/services.php?lang=$lang" : "/services.php" ?>"><?= $str["services"] ?></a>
            </div>
            <button role="button" class="side-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                </svg>
            </button>
        </div>
    </nav>
    <header>
        <div class="header">
            <h1 class="header-title"><?= $str["header-title"] ?></h1>
            <p class="header-desc"><?= $str["header-desc"] ?></p>
            <a title="<?= $str["call-me-now"] ?>" href="tel:<?= $phone ?>" class="mx-phone-button">
                <img src="/images/marwah-e1650023155749.webp" alt="Marwah Kahil" />
                <div class="icon-and-span-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z">
                        </path>
                    </svg>
                    <span><?= $formattedPhone ?></span>
                </div>
            </a>
        </div>
    </header>
    <section class="company">
        <h2 class="section-title"><?= $str["section-company-header"] ?></h2>
        <p class="section-desc"><?= $str["section-company-desc"] ?></p>
        <div class="row">
            <div class="image-card">
                <img src="/images/company1.webp" alt="Company 1">
                <div class="image-layer"><span><?= $str["istanbul"] ?></span></div>
            </div>
            <div class="image-card">
                <img src="/images/company2.webp" alt="Company 2">
                <div class="image-layer"><span><?= $str["ankara"] ?></span></div>
            </div>
            <div class="image-card">
                <img src="/images/company3.webp" alt="Company 3">
                <div class="image-layer"><span><?= $str["mersin"] ?></span></div>
            </div>
        </div>
    </section>
    <section class="services">
        <h2 class="section-title"><?= $str["section-services-header"] ?></h2>
        <p class="section-desc"><?= $str["section-services-desc"] ?></p>
        <div class="row">
            <div class="card">
                <div class="card-title"><?= $str["card-1-header"] ?></div>
                <div class="card-desc"><?= $str["card-1-text"] ?></div>
            </div>
            <div class="card">
                <div class="card-title"><?= $str["card-2-header"] ?></div>
                <div class="card-desc"><?= $str["card-2-text"] ?></div>
            </div>
            <div class="card">
                <div class="card-title"><?= $str["card-3-header"] ?></div>
                <div class="card-desc"><?= $str["card-3-text"] ?></div>
            </div>
        </div>
    </section>
    <section class="facilities">
        <h2 class="section-title"><?= $str["section-facilities-header"] ?></h2>
        <p class="section-desc"><?= $str["section-facilities-desc"] ?></p>
        <div class="row">
            <div class="image-round">
                <img src="/images/cover5.webp" alt="Cover 5">
                <div class="image-header"><?= $str["image-round-1-header"] ?></div>
                <div class="image-text"><?= $str["image-round-1-text"] ?></div>
            </div>
            <div class="image-round">
                <img src="/images/cover6.webp" alt="Cover 6">
                <div class="image-header"><?= $str["image-round-2-header"] ?></div>
                <div class="image-text"><?= $str["image-round-2-text"] ?></div>
            </div>
            <div class="image-round">
                <img src="/images/cover7.webp" alt="Cover 7">
                <div class="image-header"><?= $str["image-round-3-header"] ?></div>
                <div class="image-text"><?= $str["image-round-3-text"] ?></div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <h2 class="section-title"><?= $str["section-testimonials-header"] ?></h2>
        <p class="section-desc"><?= $str["section-testimonials-desc"] ?></p>
        <div class="row">
            <div class="comment">
                <div class="user-image">
                    <img src="/images/user1.webp" alt="User 1">
                </div>
                <div>
                    <div class="user-name">
                        <span><?= $str["user-1-name"] ?></span>
                        <div class="stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7zM288 376.4L288.1 376.3L399.7 435.9L378.4 309.6L469.2 219.8L343.8 201.4L288.1 86.85L288 87.14V376.4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="comment-text"><?= $str["user-1-text"] ?></div>
                </div>
            </div>
            <div class="comment">
                <div class="user-image">
                    <img src="/images/user2.webp" alt="User 2">
                </div>
                <div>
                    <div class="user-name">
                        <span><?= $str["user-2-name"] ?></span>
                        <div class="stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                            </svg>
                        </div>
                    </div>
                    <div class="comment-text"><?= $str["user-2-text"] ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <h3 class="cta-text"><?= $str["cta-text"] ?></h3>
        <a title="<?= $str["cta-button-text"] ?>" href="tel:<?= $phone ?>"><?= $str["cta-button-text"] ?></a>
    </section>
    <footer>
        <div class="footer-title"><?= $str["footer-header"] ?></div>
        <div class="footer-desc"><?= $str["footer-text"] ?></div>
        <a class="linkedin" href="https://www.linkedin.com/in/marwah-kahil">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z">
                </path>
            </svg>
        </a>
    </footer>
    <script src="/js/script.min.js"></script>
</body>

</html>