<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?
    $asset->addCss(SITE_TEMPLATE_PATH.'/assets/css/main.css');
    $asset->addCss(SITE_TEMPLATE_PATH.'/assets/css/main.css');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/phone.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/script.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/navbar.js');
    $asset->addString('<link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap">')
    ?>


    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
        <?$APPLICATION->ShowPanel();?>

<header class="header">
    <div>
        <h1 class="mains">NEWS</h1>
    </div>
    <ol id="menu" class="ol1">
        <li><a class="li1" href="">
                <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g filter="url(#filter0_d_123_52)">
                        <rect x="4" width="90" height="90" fill="url(#pattern0_123_52)" shape-rendering="crispEdges"/>
                    </g>
                    <defs>
                        <filter id="filter0_d_123_52" x="0" y="0" width="98" height="98" filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                           result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_123_52"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_123_52" result="shape"/>
                        </filter>
                        <pattern id="pattern0_123_52" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_123_52" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_123_52" width="90" height="90"
                               xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAv0lEQVR4nO3awWrCQABF0Ys7/XxrqV9pu2m3kUDWYmahAz0H8gOXMAN5KQAAAAAAAADe6lR9Vj/V4ulRg+/qUh1HQl/Fbe8Ltjbb5VD9Cd3e0L9bO6GbLLSjo6HQXw1YD/aP7aB3Gfawwa06j16GAAAAAAD/nHG2p7/DG2d77WhhnO01oY2zTRp65b+OjLPLZIOxcRYAAAAAYJxxNuPsMsHHfuNs7wttnG3S0CvjbMbZZYLz2DgLAAAAAAAA0GTuqD9gUMDt6+cAAAAASUVORK5CYII="/>
                    </defs>
                </svg>
            </a>
            <ol class="ol2">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#">For you</a>
                </li>
                <li>
                    <a href="#">Following</a>
                </li>
                <li>
                    <a href="#">World</a>
                </li>
                <li>
                    <a href="aboutus.html">About us</a>
                </li>
            </ol>
        </li>
    </ol>
    <div class="nav">
        <ul>
            <a href="index.html">
                <li><h3>Home
            </a></h3></li>
            </a>
            <li><a href="#fy"><h3>For you</h3></a></li>
            <li><h3>Following</h3></li>
            <li><h3>World</h3></li>
            <a href="aboutus.html">
                <li id="right"><h3>About us</h3></li>
            </a>
        </ul>
    </div>
    <div class="rightpanel">
        <input id="mobsearch" class="rpl" type="text" placeholder="Search">
        <svg class="rpl" width="51" height="44" viewBox="0 0 51 44" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M12.75 0C9.24375 0 6.12 1.46625 3.76125 3.76125C1.46625 6.05625 0 9.18 0 12.75C0 16.2563 1.46625 19.38 3.76125 21.7388L25.5 43.4775L47.2388 21.7388C49.5337 19.4438 51 16.32 51 12.75C51 9.24375 49.5337 6.12 47.2388 3.76125C44.9437 1.46625 41.82 0 38.25 0C34.7438 0 31.62 1.46625 29.2613 3.76125C26.9663 6.05625 25.5 9.18 25.5 12.75C25.5 9.24375 24.0338 6.12 21.7388 3.76125C19.4438 1.46625 16.32 0 12.75 0Z"
                  fill="black"/>
        </svg>
        <a href="#">
            <svg class="rpl btn--show-modal-window" width="52" height="46" viewBox="0 0 52 46" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M19.307 0V6.43568H45.0497V38.6141H19.307V45.0497H51.4854V0H19.307ZM25.7427 12.8714V19.307H0V25.7427H25.7427V32.1784L38.6141 22.5249L25.7427 12.8714Z"
                      fill="black"/>
            </svg>
        </a>
    </div>
</header>
<section class="tssection">
    <h2 class="mains">Top stories</h2>
    <a href="topstory.html">
        <div class="tssqr">
            <img class="imgts" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/image 1.png" alt="">
            <div class="tstext">
                <h3>The one question from Donald Trump that could sway many American voters in swing states.</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                <p>2 hours ago / by Sfsafa</p>
            </div>
        </div>
    </a>
    <div class="tssqr">
        <img class="imgts" id="tssqimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/image 2.png" alt="">
        <div class="tstext">
            <h3>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</h3>
            <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper
                nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
                enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
                varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. </p>
            <p>10 hours ago / by Najdsksd</p>
        </div>
    </div>
    <div class="tssqr" id="tssqr">
        <img class="imgts" id="tssqimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/image 3.png" alt="">
        <div class="tstext">
            <h3>Maecenas nec odio et ante tincidunt tempus.</h3>
            <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus
                tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat,
                leo eget bibendum sodales, augue velit cursus nunc.</p>
            <p>24 hours ago / by Hskdmak</p>
        </div>
    </div>
</section>
<section class="foryou">
    <div class="foryouh2">
        <h2 id="fy">For You</h2>
        <p>Recommended based on your interests</p>
    </div>
</section>
<div class="foryouall">
    <section class="foryouin">
        <div class="bigrect">
            <img class="bigrecimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/Rectangle 20.png" alt="">
            <div class="bigrecttxt">
                <h2>Sed fringilla mauris sit amet nibh.</h2>
                <p>Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit
                    eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
            </div>
            <p class="bigrectp">15 hours ago / by dawfw</p>
        </div>
        <div class="smrect">
            <img class="smrectimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/Rectangle 24.png" alt="">
            <div>
                <div class="smrecttxt">
                    <h2>Sed fringilla mauris sit amet nibh.</h2>
                    <p>Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor,
                        suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                </div>
                <p class="smrectp">15 hours ago / by dawfw</p>
            </div>
        </div>
        <div class="smrect2">
            <img class="smrectimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/Rectangle 25.png" alt="">
            <div>
                <div class="smrecttxt">
                    <h2>Sed fringilla mauris sit amet nibh.</h2>
                    <p>Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor,
                        suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                </div>
                <p class="smrectp">15 hours ago / by dawfw</p>
            </div>
        </div>
        <div class="smrect3">
            <img class="smrectimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/image 4.png" alt="">
            <div>
                <div class="smrecttxt">
                    <h2>Sed fringilla mauris sit amet nibh.</h2>
                    <p>Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor,
                        suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                </div>
                <p class="smrectp">15 hours ago / by dawfw</p>
            </div>
        </div>
        <div class="smrect4">
            <img class="smrectimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/Rectangle 27.png" alt="">
            <div>
                <div class="smrecttxt">
                    <h2>Sed fringilla mauris sit amet nibh.</h2>
                    <p>Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor,
                        suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                </div>
                <p class="smrectp">15 hours ago / by dawfw</p>
            </div>
        </div>

        <div class="bigrect2">
            <img class="bigrecimg" src="<?=SITE_TEMPLATE_PATH?>/assets/resources/Rectangle 26.png" alt="">
            <div class="bigrecttxt">
                <h2>Sed fringilla mauris sit amet nibh.</h2>
                <p>Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit
                    eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
            </div>
            <p class="bigrectp">15 hours ago / by dawfw</p>
        </div>
    </section>
</div>
<section class="back">
    <h1 id="back"><a href="">Back</a></h1>
</section>
<div class="modal-window hidden">
    <button class="btn--close-modal-window">&times;</button>
    <h2 class="modal__header">
        Login
    </h2>
    <form class="modal__form">

        <label>Email</label>
        <input type="email"/>
        <label>Номер телефона</label>
        <input type="text" class="phone"/>
        <label for="Password">Пароль:</label>
        <input type="password" id="Password" placeholder="Пароль">
        <button class="btn">Далее &rarr;</button>
    </form>
</div>
<div class="overlay hidden"></div>