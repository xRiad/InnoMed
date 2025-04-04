<header
    id="header"
    class="header header-sticky header-sticky-smart disable-transition-all z-index-5"
>
    <div class="topbar bg-primary">
        <div class="container-wide container">
            <p class="mb-0 text-white text-center p-4 fs-6 fw-semibold">
                Free shipping on all U.S. orders $50+
            </p>
        </div>
    </div>
    <div class="header-above">
        <div class="container-xxl container d-none d-xl-block">
            <div class="pt-8 d-flex">
                <div
                    class="icons-actions d-flex justify-content-start w-xl-50 fs-28px text-body-emphasis"
                >
                    <form
                        action="#"
                        method="get"
                        class="search-box-2 w-60"
                    >
                        <div class="position-relative">
                            <input
                                type="text"
                                name="s"
                                class="form-control form-control bg-transparent pe-12 lh-1 py-5"
                                placeholder="Search product"
                            />
                            <button
                                class="position-absolute pos-fixed-right-center bg-transparent border-0 px-0 fs-4 px-6 top-0 bottom-0 end-0 my-auto z-index-3 text-body-emphasis"
                                type="submit"
                            >
                                <svg class="icon fs-18px mt-n3">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <a
                    href="./index.html"
                    class="navbar-brand px-8 py-4 mx-auto"
                >
                    <img
                        class="light-mode-img"
                        src="{{ asset('assets/front/images/others/logo.png') }}"
                        width="179"
                        height="26"
                        alt="Glowing - Bootstrap 5 HTML Templates" />
                    <img
                        class="dark-mode-img"
                        src="{{ asset('assets/front/images/others/logo-white.png') }}"
                        width="179"
                        height="26"
                        alt="Glowing - Bootstrap 5 HTML Templates"
                /></a>

                <div
                    class="icons-actions d-flex justify-content-end w-xl-50 fs-28px text-body-emphasis"
                >
                    <div class="px-5 d-none d-xl-inline-block">
                        <a
                            class="lh-1 color-inherit text-decoration-none"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#signInModal"
                        >
                            <svg class="icon icon-user-light">
                                <use
                                    xlink:href="#icon-user-light"
                                ></use>
                            </svg>
                        </a>
                    </div>
                    <div class="px-5 d-none d-xl-inline-block">
                        <a
                            class="position-relative lh-1 color-inherit text-decoration-none"
                            href="./shop/wishlist.html"
                        >
                            <svg class="icon icon-star-light">
                                <use
                                    xlink:href="#icon-star-light"
                                ></use>
                            </svg>
                            <span
                                class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                style="--square-size: 18px"
                                >3</span
                            >
                        </a>
                    </div>
                    <div class="px-5 d-none d-xl-inline-block">
                        <a
                            class="position-relative lh-1 color-inherit text-decoration-none"
                            href="#"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#shoppingCart"
                            aria-controls="shoppingCart"
                            aria-expanded="false"
                        >
                            <svg class="icon icon-star-light">
                                <use
                                    xlink:href="#icon-shopping-bag-open-light"
                                ></use>
                            </svg>
                            <span
                                class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                style="--square-size: 18px"
                                >3</span
                            >
                        </a>
                    </div>

                    <div class="px-5 d-none d-xl-inline-block">
                        <a
                            class="lh-1 color-inherit text-decoration-none"
                            href="{{ route('product.compare') }}"
                        >
                            <svg
                                class="icon icon-arrows-left-right-light"
                            >
                                <use
                                    xlink:href="#icon-arrows-left-right-light"
                                ></use>
                            </svg>
                        </a>
                    </div>

                    <div class="color-modes position-relative ps-5">
                        <a
                            class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                            href="#"
                            aria-expanded="true"
                            data-bs-toggle="dropdown"
                            data-bs-display="static"
                            aria-label="Toggle theme (light)"
                        >
                            <svg class="bi my-1 theme-icon-active">
                                <use href="#sun-fill"></use>
                            </svg>
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-end fs-14px"
                            data-bs-popper="static"
                        >
                            <li>
                                <button
                                    type="button"
                                    class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="light"
                                    aria-pressed="true"
                                >
                                    <svg
                                        class="bi me-4 opacity-50 theme-icon"
                                    >
                                        <use href="#sun-fill"></use>
                                    </svg>
                                    Light
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button
                                    type="button"
                                    class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="dark"
                                    aria-pressed="false"
                                >
                                    <svg
                                        class="bi me-4 opacity-50 theme-icon"
                                    >
                                        <use
                                            href="#moon-stars-fill"
                                        ></use>
                                    </svg>
                                    Dark
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button
                                    type="button"
                                    class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="auto"
                                    aria-pressed="false"
                                >
                                    <svg
                                        class="bi me-4 opacity-50 theme-icon"
                                    >
                                        <use href="#circle-half"></use>
                                    </svg>
                                    Auto
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-area">
        <div
            class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-6 py-xl-0"
        >
            <div class="container-xxl container">
                <div class="d-flex d-xl-none w-100">
                    <div class="w-72px d-flex d-xl-none">
                        <button
                            class="navbar-toggler align-self-center border-0 shadow-none px-0 canvas-toggle p-4"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offCanvasNavBar"
                            aria-controls="offCanvasNavBar"
                            aria-expanded="false"
                            aria-label="Toggle Navigation"
                        >
                            <span class="fs-24 toggle-icon"></span>
                        </button>
                    </div>

                    <div class="d-flex mx-auto">
                        <a
                            href="./"
                            class="navbar-brand px-8 py-4 mx-auto"
                        >
                            <img
                                class="light-mode-img"
                                src="{{ asset('assets/front/images/others/logo.png') }}"
                                width="129"
                                height="20"
                                alt="Glowing - Bootstrap 5 HTML Templates" />
                            <img
                                class="dark-mode-img"
                                src="{{ asset('assets/front/images/others/logo-white.png') }}"
                                width="129"
                                height="20"
                                alt="Glowing - Bootstrap 5 HTML Templates"
                        /></a>
                    </div>
                    <div
                        class="icons-actions d-flex justify-content-end w-xl-50 fs-28px text-body-emphasis w-72px"
                    >
                        <div class="px-xl-5 d-inline-block">
                            <a
                                class="lh-1 color-inherit text-decoration-none"
                                href="#"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#searchModal"
                                aria-controls="searchModal"
                                aria-expanded="false"
                            >
                                <svg
                                    class="icon icon-magnifying-glass-light"
                                >
                                    <use
                                        xlink:href="#icon-magnifying-glass-light"
                                    ></use>
                                </svg>
                            </a>
                        </div>

                        <div class="color-modes position-relative ps-5">
                            <a
                                class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                                href="#"
                                aria-expanded="true"
                                data-bs-toggle="dropdown"
                                data-bs-display="static"
                                aria-label="Toggle theme (light)"
                            >
                                <svg class="bi my-1 theme-icon-active">
                                    <use href="#sun-fill"></use>
                                </svg>
                            </a>
                            <ul
                                class="dropdown-menu dropdown-menu-end fs-14px"
                                data-bs-popper="static"
                            >
                                <li>
                                    <button
                                        type="button"
                                        class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="light"
                                        aria-pressed="true"
                                    >
                                        <svg
                                            class="bi me-4 opacity-50 theme-icon"
                                        >
                                            <use href="#sun-fill"></use>
                                        </svg>
                                        Light
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button
                                        type="button"
                                        class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark"
                                        aria-pressed="false"
                                    >
                                        <svg
                                            class="bi me-4 opacity-50 theme-icon"
                                        >
                                            <use
                                                href="#moon-stars-fill"
                                            ></use>
                                        </svg>
                                        Dark
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button
                                        type="button"
                                        class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="auto"
                                        aria-pressed="false"
                                    >
                                        <svg
                                            class="bi me-4 opacity-50 theme-icon"
                                        >
                                            <use
                                                href="#circle-half"
                                            ></use>
                                        </svg>
                                        Auto
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="w-100 d-none d-xl-flex align-items-center justify-content-center"
                >
                    <ul class="navbar-nav">
                        <li
                            class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth"
                        >
                            <a
                                class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                href="{{ route('home') }}"
                                id="menu-item-home"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Ana Səhifə</a
                            >
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth position-static"
                        >
                            <a
                                class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                href="{{ route('products') }}"
                                id="menu-item-shop"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Məhsullar</a
                            >
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover"
                        >
                            <a
                                class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                href="{{ route('blogs') }}"
                                id="menu-item-pages"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Blog</a
                            >
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth"
                        >
                            <a
                                class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                href="{{ route('about-us') }}"
                                id="menu-item-blocks"
                                aria-haspopup="false"
                                aria-expanded="false"
                                >Haqqımızda</a
                            >
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth"
                        >
                            <a
                                class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                href="{{ route('contact-us') }}"
                                id="menu-item-docs"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Əlaqə</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>