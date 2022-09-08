<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <?php wp_head() ?>
</head>

<body class="<?php body_class(); ?>">
    <div id="loading">
    </div>
    <div class="cursor-follow">
        <div class="cursor-view">
            <span>
                View
            </span>
        </div>
        <div class="cursor-click">
            <div class="cursor-inner">
                <span class="cursor-text">
                    <span class="js-cursor-text">Click</span>
                    <span class="js-cursor-text__clone">Click</span>
                </span>
            </div>
        </div>
        <div class="cursor-drag">
            <div class="cursor-inner">
                <span class="cursor-text">
                    <span class="js-cursor-text">Drag</span>
                    <span class="js-cursor-text__clone">Drag</span>
                </span>
            </div>
        </div>
        <div class="cursor-soon">
            <span>
                Soon
            </span>
        </div>
    </div>
    <header class="header">
        <div class="nav">
            <div class="nav-logo">
                <a href="/" id="lottie" class="logo">

                </a>

                <span class="nav-ol">
                    <span>BRANDING.</span>
                    <span>WEBSITE.</span>
                    <span>SEO</span>
                </span>
            </div>


            <div class="burger hide-cursor">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="menu">
            <div class="menu-grey">
                <div class="menu-grey__wrap">
                    <div class="close-absolute">
                        <div class="menu-black__close hide-cursor">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div id="circle-menu" class="menu-grey__circle">
                        <a href="/Start-a-project.html" class="hide-cursor menu-grey__svg">
                            <svg viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.673 16.4019H32.3976M32.3976 16.4019V32.1266M32.3976 16.4019L16.673 32.1266" stroke="white" stroke-width="1.12442" stroke-linecap="round" class="arrow-menu" />

                                <path d="M16.673 16.4019H32.3976M32.3976 16.4019V32.1266M32.3976 16.4019L16.673 32.1266" stroke="white" stroke-width="1.12442" stroke-linecap="round" class="arrow-menu__clone" />
                            </svg>
                        </a>
                    </div>


                    <div class="menu-grey__info">
                        <a href="/Start-a-project.html">Start a project</a>
                        <a href="tel:0902826031">(+84)902 826 031</a>
                        <a href="mailto:info@align.vn">info@align.vn</a>
                    </div>
                    <div class="menu-grey__social">
                        <a href="https://www.facebook.com/alignlab/" target="_blank" rel="noopener noreferrer" class="hover">Facebook</a>
                        <a href="https://www.instagram.com/align.vn/" target="_blank" rel="noopener noreferrer" class="hover">Instagram</a>
                        <a href="https://www.linkedin.com/company/alignvn/" target="_blank" rel="noopener noreferrer" class="hover">Linkedin</a>
                        <!-- <a href="/career.html" onclick="return false;" class="hover">Career</a> -->
                    </div>
                </div>
            </div>
            <div class="menu-black">
                <div class="menu-black__wrap">
                    <div class="menu-black__close hide-cursor">
                        <span></span>
                        <span></span>
                    </div>

                    <ul class="menu-black__list">
                        <li class="menu-black__item">
                            <a href="/works.html" class="menu-black__link hover">
                                <span>Website</span>
                                <span>Website</span>
                            </a>
                        </li>
                        <li class="menu-black__item">
                            <a href="/works.html" class="menu-black__link hover">
                                <span>Branding</span>
                                <span>Branding</span>
                            </a>i
                        </li>
                        <li class="menu-black__item">
                            <a href="/works.html" class="menu-black__link hover">
                                <span>SEO</span>
                                <span>SEO</span>
                            </a>
                        </li>
                        <li class="menu-black__item">
                            <a href="/about.html" class="menu-black__link hover">
                                <span>About</span><span>About</span>
                            </a>
                        </li>
                        <li class="menu-black__item">
                            <a href="/insights.html" class="menu-black__link hover">
                                <span>Insights</span><span>Insights</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper smooth-scroll" data-scroll-container>