<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/">
            <!-- Logo can be added directly -->
            <!-- <img src="/img/logo/logo-white.svg" alt="logo" /> -->

            <!-- Or added via css to provide different ones for different color themes -->
            <div class="img"></div>
        </a>
    </div>
    <!-- Logo End -->

    <!-- User Menu Start -->
    <div class="user-container d-flex ">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="/img/profile/profile-1.webp" />
            <div class="name">مصطفى حموية</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">الحساب</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">بيانات</a>
                        </li>
                        <li>
                            <a href="#">التفضيلات</a>
                        </li>
                        <li>
                            <a href="#">رزنامة</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">حماية</a>
                        </li>
                        <li>
                            <a href="#">الدفعات</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-2 pt-2">
                    <div class="text-extra-small text-primary">التطبيق</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">ثيمات</a>
                        </li>
                        <li>
                            <a href="#">اللغة</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">الأجهزة</a>
                        </li>
                        <li>
                            <a href="#">التخزين</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-acorn-icon="help" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">مساعدة</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">توثيق</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">الإعدادات</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">الخروج</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- User Menu End -->

    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-acorn-icon="search" data-acorn-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="pinButton" class="pin-button">
                <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                <div class="position-relative d-inline-flex">
                    <i data-acorn-icon="bell" data-acorn-size="18"></i>
                    <span class="position-absolute notification-dot rounded-xl"></span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                <div class="scroll">
                    <ul class="list-unstyled border-last-none">
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="/img/profile/profile-1.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">تعليق جديد</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </li>
    </ul>
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <li>
                <a href="/Dashboard">
                    <i data-acorn-icon="shop" class="icon" data-acorn-size="18"></i>
                    <span class="label">لوحة التحكم</span>
                </a>
            </li>
            <li>
                <a href="#products" data-href="/Products/List">
                    <i data-acorn-icon="cupcake" class="icon" data-acorn-size="18"></i>
                    <span class="label">المنتجات</span>
                </a>
                <ul id="products">
                    <li>
                        <a href="/Products/List">
                            <span class="label">قائمة</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Products/Detail">
                            <span class="label">التفاصيل</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#orders" data-href="/Orders/List">
                    <i data-acorn-icon="cart" class="icon" data-acorn-size="18"></i>
                    <span class="label">الطلبات</span>
                </a>
                <ul id="orders">
                    <li>
                        <a href="/Orders/List">
                            <span class="label">قائمة</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Orders/Detail">
                            <span class="label">التفاصيل</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#customers" data-href="/Customers/List">
                    <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                    <span class="label">المسوقين</span>
                </a>
                <ul id="customers">
                    <li>
                        <a href="/Customers/List">
                            <span class="label">قائمة</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Customers/Detail">
                            <span class="label">التفاصيل</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#storefront" data-href="/Storefront/Home">
                    <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                    <span class="label">المتجر</span>
                </a>
                <ul id="storefront">
                    <li>
                        <a href="/Storefront/Home">
                            <span class="label">الرئيسية</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Storefront/Filters">
                            <span class="label">الفلاتر</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Storefront/Categories">
                            <span class="label">التصنيفات</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Storefront/Detail">
                            <span class="label">التفاصيل</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Storefront/Cart">
                            <span class="label">العربة</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Storefront/Checkout">
                            <span class="label">الطلب</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Storefront/Invoice">
                            <span class="label">الفاتورات</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/Shipping">
                    <i data-acorn-icon="shipping" class="icon" data-acorn-size="18"></i>
                    <span class="label">التسوق</span>
                </a>
            </li>
            <!-- <li>
                <a href="/Discount">
                    <i data-acorn-icon="tag" class="icon" data-acorn-size="18"></i>
                    <span class="label">التخفيضات</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="/Settings">
                    <i data-acorn-icon="gear" class="icon" data-acorn-size="18"></i>
                    <span class="label">الإعدادات</span>
                </a>
            </li> -->
        </ul>
    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>
