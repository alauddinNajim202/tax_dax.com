@php
    $systemSetting = App\Models\SystemSetting::first();
@endphp

<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('admin.index') }}">
                <img src="{{ asset($systemSetting->logo ?? 'backend/assets/images/brand/logo.png') }}"
                    class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset($systemSetting->logo ?? 'backend/assets/images/brand/logo-1.png') }}"
                    class="header-brand-img toggle-logo" alt="logo">
                <img src="{{ asset($systemSetting->logo ?? 'backend/assets/images/brand/logo-2.png') }}"
                    class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset($systemSetting->logo ?? 'backend/assets/images/brand/logo-3.png') }}"
                    class="header-brand-img light-logo1" alt="logo">
            </a>
        </div>

        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>

            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('admin.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>



                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('category.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon bi bi-info-circle"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                            <path
                                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.898.105 1.319.808 1.319.545 0 .956-.252 1.09-.598l.088-.416c.194-.898-.105-1.319-.808-1.319-.545 0-.956.252-1.09.598l-.088.416c-.194.898-.605 1.254-1.308 1.254-.693 0-1.118-.4-.968-1.254l.008-.068.918-4.35c.148-.696-.215-.933-.745-.933H6.865c.516 0 .862.268.968.732z" />
                            <circle cx="8" cy="4.5" r="1" />
                        </svg>
                        <span class="side-menu__label">Category</span>
                    </a>
                </li>
 {{--
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('about-us.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon bi bi-info-circle"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                            <path
                                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.898.105 1.319.808 1.319.545 0 .956-.252 1.09-.598l.088-.416c.194-.898-.105-1.319-.808-1.319-.545 0-.956.252-1.09.598l-.088.416c-.194.898-.605 1.254-1.308 1.254-.693 0-1.118-.4-.968-1.254l.008-.068.918-4.35c.148-.696-.215-.933-.745-.933H6.865c.516 0 .862.268.968.732z" />
                            <circle cx="8" cy="4.5" r="1" />
                        </svg>
                        <span class="side-menu__label">About Us</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('faq.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm1.07-7.75c-.9.92-1.07 1.29-1.07 2.25h-2v-.5c0-1.38.57-2.22 1.5-3.07.59-.59.84-1.17.84-1.93 0-1.5-1.17-2.5-2.5-2.5s-2.5 1-2.5 2.5h-2c0-2.47 2.02-4.5 4.5-4.5s4.5 2.03 4.5 4.5c0 1.31-.52 2.21-1.43 3.07z" />
                        </svg>
                        <span class="side-menu__label">FAQ</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('mission.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm0-14l-3.4 6.6 6.6-3.4L12 6zm0 12l3.4-6.6-6.6 3.4L12 18z" />
                        </svg>
                        <span class="side-menu__label">Our Mission</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{ route('fabrication-technology.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1 16l-3-3 1-1 2 2 4-4 1 1-5 5zm0-8l1-1 2 2-1 1-2-2z" />
                        </svg>
                        <span class="side-menu__label">Fabrication Technology</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{ route('partner-level.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <span class="side-menu__label">Partner Levels</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link {{ request()->routeIs('product.index') || request()->routeIs('product.create') || request()->routeIs('product.edit') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="{{ route('product.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 16 16"
                            fill="currentColor">
                            <path
                                d="M0 1a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L1.607 2H.5a.5.5 0 0 1-.5-.5zM3.14 4l1.25 6H13l1.25-6H3.14zM5 12a1 1 0 1 0 1 1 1 1 0 0 0-1-1zm6 0a1 1 0 1 0 1 1 1 1 0 0 0-1-1z" />
                        </svg>
                        <span class="side-menu__label">Product</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('review.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M21 6.5c0-1.39-1.11-2.5-2.5-2.5H5.5C4.11 4 3 5.11 3 6.5S4.11 9 5.5 9H16c1.39 0 2.5-1.11 2.5-2.5zM21 14c0-1.39-1.11-2.5-2.5-2.5H5.5C4.11 11.5 3 12.61 3 14s1.11 2.5 2.5 2.5H16c1.39 0 2.5-1.11 2.5-2.5zM21 21c0-1.39-1.11-2.5-2.5-2.5H5.5C4.11 18.5 3 19.61 3 21s1.11 2.5 2.5 2.5H16c1.39 0 2.5-1.11 2.5-2.5z" />
                        </svg>
                        <span class="side-menu__label">Clients Feedback</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{ route('transaction.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M6 2h12c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2zm0 2v16h12V4H6zm1 2h10v2H7V6zm0 4h10v2H7v-2zm0 4h10v2H7v-2z" />
                        </svg>
                        <span class="side-menu__label">Invoice</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('contacts.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                        <span class="side-menu__label">Contacts</span>
                    </a>
                </li> --}}

                <hr>
                <li class="slide {{ request()->is('admin/settings*') ? 'active is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->is('admin/settings*') ? 'active is-expanded' : '' }}"
                        data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 512 512">
                            <path
                                d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                        </svg>
                        <span class="side-menu__label">Settings</span><i class="angle fa fa-angle-right"></i>
                    </a>

                    <ul class="slide-menu ">
                        <li><a href="{{ route('profile.setting') }}" class="slide-item">Profile Settings</a></li>
                        <li><a href="{{ route('system.index') }}" class="slide-item">System Settings</a></li>
                        <li><a href="{{ route('mail.setting') }}" class="slide-item">Mail Settings</a></li>
                        {{-- <li><a href="{{ route('google.setting') }}" class="slide-item">Google Settings</a></li> --}}
                        <li><a href="{{ route('stripe.index') }}" class="slide-item">Stripe Settings</a></li>
                        <li><a href="{{ route('social.index') }}" class="slide-item">Social Media Settings</a></li>

                        <li>
                            <a href="{{ route('settings.dynamic_page.index') }}"
                                class="slide-item {{ request()->is('admin/settings/dynamic-page*') ? 'active' : '' }}">Dynamic
                                Page Settings
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
