<?php get_template_part( 'templates/partials/document-open' ); ?>

<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            <form class="search" action="" method="get">
                <input class="search__field" type="text" placeholder="Enter City / Postal Code">
                <button class="search__btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/search_icon.svg" alt=""></button>
            </form>
            <a class="number" href="tel:+1 226-370-0170">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.0641 16.5C8.06566 16.5113 1.99536 10.3683 2.00392 2.43983C2.00392 1.92206 2.42365 1.49998 2.94142 1.49998H5.41581C5.88041 1.49998 6.27509 1.84135 6.34331 2.30091C6.50682 3.40235 6.8275 4.47463 7.29561 5.48501L7.39195 5.69295C7.5259 5.98208 7.43511 6.32561 7.17579 6.5108C6.4095 7.05803 6.11665 8.15956 6.71362 9.01906C7.46276 10.0976 8.40708 11.0418 9.48541 11.7906C10.3449 12.3874 11.4462 12.0945 11.9934 11.3284C12.1788 11.0689 12.5225 10.9781 12.8118 11.1121L13.0188 11.208C14.0292 11.6761 15.1016 11.9968 16.2031 12.1602C16.6627 12.2285 17.0039 12.6231 17.0039 13.0877V15.5625C17.0039 16.0802 16.5831 16.5 16.0654 16.5L16.0641 16.5Z" fill="#FAFF00"/>
                </svg>
                +1 226-370-0170
            </a>
            <nav class="nav">
                    <li class="nav__item">
                        <a class="nav__link" href="">Appliance Service</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="">Brands</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="">Maintance Plans</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="">Coupons</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="">Reviews</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="">About</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="">Contact</a>
                    </li>
                </nav>
            <button class="book-online-btn">
                <img class="setting_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/settings_icon.svg" alt="">
                BOOK ONLINE
            </button>
        </div>
    </div>
</header>
