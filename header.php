<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <?php wp_head() ?>
</head>

<body data-barba="wrapper" <?php body_class(); ?>>
    <div class="collection">
        <div class="collection-wrapper">
            <img src="<?php echo ASSETS . '/images/close-icon.svg'; ?>" alt="" class="collection-button" />
            <div class="container collection-inner">
                <div class="logoJs noloop">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <a href="/collection/recycle" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-3.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Recycled</div>
                            </a>
                            <a href="/collection/Virgin" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-1.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Virgin</div>
                            </a>
                            <a href="/collection/shiny" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-2.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">
                                    Recycled & Virgin Shiny
                                </div>
                            </a>
                            <a href="/collection/Xlance" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-6.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Xlance</div>
                            </a>
                            <a href="/collection/digital-print" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-7.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Digital Print</div>
                            </a>
                            <div class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-5.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Eco & Circularity</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collection-cta">
                    <div class="collection-cta__col col-4">
                        <a href="#" class="btn btn-green collection-cta__text">
                            All fabric Collections
                        </a>
                    </div>
                    <div class="collection-cta__col col-4">
                        <a href="#" class="btn btn-green collection-cta__text">
                            Download Our Color Cards 2023
                        </a>
                    </div>
                    <div class="collection-cta__col col-4">
                        <a href="#" class="btn btn-green collection-cta__text">
                            Download Our Collection Books
                        </a>
                    </div>
                </div>

                <div class="collection-logo">
                    <div class="collection-row">
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-8.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-10.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-11.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-7.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-12.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-13.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-14.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                        <div class="collection-logo__item">
                            <img src="<?php echo ASSETS . '/images/partner-logo-15.svg'; ?>" alt="" class="collection-logo__image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="nav">
        <div class="nav-inner">
            <div class="nav-nav">
                <a href="<?php echo get_home_url(); ?>" class="nav-logo">
                    <img src="<?php echo ASSETS . '/images/nav-logo.svg'; ?>" alt="" />
                </a>

                <div class="nav-bar">

                    <ul class="nav-bar__inner">
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('9')); ?>" class="nav-link nav-text">Who we are</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('11')); ?>" class="nav-link nav-text">Sustainability</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href='javascript:void(0)' id="fabric-collection" class="nav-link nav-text">Fabric Collection</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('13')); ?>" class="nav-link nav-text">HY News</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('20')); ?>" class="nav-link nav-text">Contact</a>
                        </li>
                    </ul>
                    <?php //wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => 'nav-bar__inner', 'add_li_class'  => 'nav-bar__item'));
                    ?>
                    <div class="nav-search hide-on-desktop">
                        <div class="nav-search__inner">
                            <input type="text" placeholder="Find your fabric" />
                            <img class="nav-icon" src="<?php echo ASSETS . '/images/search-icon.svg'; ?>" alt="" />
                        </div>
                    </div>
                </div>

                <div class="nav-search hide-on-mobile">
                    <div class="nav-search__inner">
                        <input type="text" placeholder="Find your fabric" />
                        <img class="nav-icon" src="<?php echo ASSETS . '/images/search-icon.svg'; ?>" alt="" />
                    </div>
                </div>

                <div class="nav-burger">
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>