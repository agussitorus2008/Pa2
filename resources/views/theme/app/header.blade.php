<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex ">

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

            </div>

            <div class="d-flex align-items-center">
                @guest
                    <div class="dropdown ms-sm-3 header-item ">
                        <a href="{{ route('login') }}" class="btn btn-success">
                            <span class="d-flex align-items-center">
                                <span class="text-start ms-xl-2">
                                    <i class="bx bx-user text-white fs-22 align-middle me-1"></i>
                                    <span
                                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text text-white text-capitalize">Login</span>
                                </span>
                            </span>
                        </a>
                    </div>
                @endguest
                @auth
                    @role('admin')

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <a type="button" href="javascript:;" onclick="tombol_notif();"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-bell fs-22"></i>
                                <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"
                                    id="top-notification-number"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0 " style="width: 25rem"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="dropdown-head bg-success bg-pattern rounded-top">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white">Notifications</h6>
                                            </div>
                                            <div class="col-auto dropdown-tabs">

                                                <span class="badge badge-soft-light fs-13"><span id="jmlh-notif"></span>
                                                    New!</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-content" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active" id="all-noti-tab" role="tabpanel">
                                        <div data-simplebar style="max-height: 300px" class="">
                                            <div class="text-reset text-wrap dropdown-item position-relative"
                                                style="margin-left: -10px" id="notification_items">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('images/profile/image/' . Auth::user()->image) }}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::User()->username }}</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::User()->username }}</h6>
                                <a class="dropdown-item" href="{{ route('admin.mainprofile') }}"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="{{ route('admin.chat.index') }}"><i
                                        class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="{{ route('signout') }}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    @else
                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="top-cart">
                            <button type="button" onclick="tombol_cart();"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-shopping-bag fs-22'></i>
                                <span
                                    class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info top-cart-number"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart"
                                aria-labelledby="page-header-cart-dropdown">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge badge-soft-warning fs-13"><span
                                                    class="cartitem-badge top-cart-number"></span>
                                                items</span>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 300px;">
                                    <div class="p-2 top-cart-items">

                                    </div>
                                </div>
                                <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
                                    id="checkout-elem">
                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                        <h5 class="m-0 text-muted">Total:</h5>
                                        <div class="px-2">
                                            <h5 class="m-0 top-checkout-price" id="cart-item-total"></h5>
                                        </div>
                                    </div>

                                    <a href="{{ route('web.cart.index') }}" class="btn btn-success text-center w-100">
                                        Lihat Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <a type="button" href="javascript:;" onclick="tombol_notif();"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-bell fs-22"></i>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"
                                    id="top-notification-number"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0 " style="width: 25rem"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="dropdown-head bg-success bg-pattern rounded-top">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white">Notifications</h6>
                                            </div>
                                            <div class="col-auto dropdown-tabs">

                                                <span class="badge badge-soft-light fs-13"><span id="jmlh-notif"></span>
                                                    New!</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-content" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active" id="all-noti-tab" role="tabpanel">
                                        <div data-simplebar style="max-height: 300px" class="">
                                            <div class="text-reset text-wrap dropdown-item position-relative"
                                                style="margin-left: -10px" id="notification_items">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('images/profile/image/' . Auth::user()->image) }}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::User()->username }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">
                                            @if (Auth::check())
                                                @if (Auth::user()->role == 'admin')
                                                    Admin
                                                @else
                                                    User
                                                @endif
                                            @endif
                                        </span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::User()->username }}</h6>
                                <a class="dropdown-item" href="{{ route('web.mainprofile') }}"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                {{-- <a class="dropdown-item" href="{{ route('web.order.index') }}"><i
                                        class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">History Order</span></a> --}}
                                <a class="dropdown-item" href="{{ route('web.chat.index') }}"><i
                                        class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="{{ route('signout') }}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    @endrole
                @endauth
            </div>
        </div>
    </div>
</header>
