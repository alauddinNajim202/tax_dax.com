<div class="header">
    <div class="header-left">
        <div class="mobile-menu">
            <svg width="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
            </svg>
        </div>
        <a href="{{route('home')}}" class="logo">
            <img src="{{ asset('front_end/assets/images/logo.png') }}" alt="logo" />
        </a>
        <!-- search bar start -->
        <div class="search-bar">
            <div class="left">
                <input id="searchBar" class="search-input" placeholder="Search..." value="" type="text" />
                <div class="search-list">
                    <div class="search-item">London, Uk</div>
                    <div class="search-item">Tokyo, Jp</div>
                    <div class="search-item">Paris, Fr</div>
                    <div class="search-item">Sydney, Au</div>
                    <div class="search-item">Berlin, De</div>
                    <div class="search-item">Toronto, Ca</div>
                    <div class="search-item">Moscow, Ru</div>
                    <div class="search-item">Mumbai, In</div>
                    <div class="search-item">London, Uk</div>
                    <div class="search-item">Tokyo, Jp</div>
                    <div class="search-item">Paris, Fr</div>
                    <div class="search-item">Sydney, Au</div>
                    <div class="search-item">Berlin, De</div>
                    <div class="search-item">Toronto, Ca</div>
                    <div class="search-item">Moscow, Ru</div>
                    <div class="search-item">Mumbai, In</div>
                </div>
            </div>
            <div class="right">
                <svg xmlns="http://www.w3.org/2000/svg" width="158" height="60" viewBox="0 0 158 60"
                    fill="none">
                    <path
                        d="M18.9458 5.94945C20.5483 2.33234 24.1325 0 28.0887 0H148C153.523 0 158 4.47715 158 10V50C158 55.5228 153.523 60 148 60H10.3677C3.13621 60 -1.70439 52.5611 1.22475 45.9495L18.9458 5.94945Z"
                        fill="url(#paint0_linear_8547_2139)" />
                    <defs>
                        <linearGradient id="paint0_linear_8547_2139" x1="-5" y1="0" x2="33.9009"
                            y2="105.681" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                    </defs>
                </svg>
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                    viewBox="0 0 24 25" fill="none">
                    <g clip-path="url(#clip0_8547_2141)">
                        <path
                            d="M17.6129 15.9659C19.0653 14.0165 19.7159 11.5994 19.4343 9.19845C19.1528 6.79746 17.96 4.58955 16.0945 3.01646C14.2291 1.44336 11.8285 0.62109 9.37314 0.714149C6.91777 0.807208 4.58866 1.80873 2.85178 3.51836C1.11491 5.22798 0.0983577 7.51962 0.00550496 9.93481C-0.0873478 12.35 0.750346 14.7106 2.35099 16.5444C3.95164 18.3781 6.1972 19.5498 8.63841 19.825C11.0796 20.1002 13.5365 19.4586 15.5174 18.0286H15.5159C15.5599 18.0876 15.6089 18.1441 15.6629 18.1982L21.4379 23.8786C21.7191 24.1554 22.1007 24.311 22.4986 24.3112C22.8965 24.3113 23.2782 24.156 23.5596 23.8793C23.8411 23.6026 23.9993 23.2274 23.9994 22.836C23.9996 22.4446 23.8416 22.0692 23.5604 21.7923L17.7854 16.112C17.7318 16.0586 17.6741 16.0107 17.6129 15.9659ZM17.9999 10.2945C17.9999 11.3601 17.7865 12.4153 17.3719 13.3998C16.9573 14.3844 16.3496 15.2789 15.5835 16.0325C14.8174 16.786 13.908 17.3837 12.907 17.7915C11.9061 18.1993 10.8333 18.4092 9.74988 18.4092C8.66648 18.4092 7.59368 18.1993 6.59274 17.7915C5.59181 17.3837 4.68233 16.786 3.91625 16.0325C3.15017 15.2789 2.54248 14.3844 2.12788 13.3998C1.71327 12.4153 1.49988 11.3601 1.49988 10.2945C1.49988 8.1423 2.36908 6.07828 3.91625 4.55646C5.46343 3.03465 7.56185 2.17971 9.74988 2.17971C11.9379 2.17971 14.0363 3.03465 15.5835 4.55646C17.1307 6.07828 17.9999 8.1423 17.9999 10.2945Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_8547_2141">
                            <rect width="24" height="23.6066" fill="white" transform="translate(0 0.705078)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- search bar end -->
    </div>
    <div class="header-right">
        <div class="notifications-container">
            <div class="notification-icon">
                <div class="notification-count">4</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.1663 22.1302C19.6853 22.1302 23.1637 21.1656 23.4997 17.294C23.4997 13.4251 21.0745 13.6739 21.0745 8.92681C21.0745 5.21885 17.56 1 12.1663 1C6.7727 1 3.25814 5.21885 3.25814 8.92681C3.25814 13.6739 0.833008 13.4251 0.833008 17.294C1.17028 21.1802 4.64871 22.1302 12.1663 22.1302Z"
                        stroke="#6B6B6B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.3518 26.1426C13.533 28.1622 10.6956 28.1861 8.85938 26.1426" stroke="#6B6B6B"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <!-- notifications list -->
            <div class="notification-list-container">
                <div class="title">Notifications <span class="count">4</span></div>
                <div class="notification-list">
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18"
                                fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                viewBox="0 0 16 18" fill="none">
                                <path
                                    d="M7.56 0C6.76828 0 6.12 0.648281 6.12 1.44C6.12 1.62563 6.15656 1.80563 6.22125 1.96875C4.19625 2.49469 2.88 4.25391 2.88 6.48C2.88 9.29953 2.18812 10.5834 1.53 11.3063C1.20094 11.6677 0.876094 11.887 0.59625 12.0938C0.455625 12.1964 0.327656 12.2991 0.21375 12.4313C0.0998438 12.5634 0 12.7519 0 12.96C0 13.455 0.30375 13.8755 0.73125 14.1525C1.15875 14.4295 1.71984 14.6081 2.39625 14.7488C3.27375 14.9302 4.35656 15.0258 5.54625 15.075C5.45625 15.3141 5.4 15.5714 5.4 15.84C5.4 17.0283 6.37172 18 7.56 18C8.74828 18 9.72 17.0283 9.72 15.84C9.72 15.57 9.66516 15.3127 9.57375 15.075C10.7634 15.0258 11.8462 14.9302 12.7237 14.7488C13.4002 14.6081 13.9612 14.4295 14.3887 14.1525C14.8162 13.8755 15.12 13.455 15.12 12.96C15.12 12.7519 15.0202 12.5634 14.9062 12.4313C14.7923 12.2991 14.6644 12.1964 14.5237 12.0938C14.2439 11.887 13.9191 11.6677 13.59 11.3063C12.9319 10.5834 12.24 9.29953 12.24 6.48C12.24 4.25531 10.9209 2.4975 8.89875 1.96875C8.96344 1.80563 9 1.62563 9 1.44C9 0.648281 8.35172 0 7.56 0ZM7.56 0.72C7.96219 0.72 8.28 1.03781 8.28 1.44C8.28 1.84219 7.96219 2.16 7.56 2.16C7.15781 2.16 6.84 1.84219 6.84 1.44C6.84 1.03781 7.15781 0.72 7.56 0.72ZM8.40375 2.5875C10.3233 2.92922 11.52 4.41281 11.52 6.48C11.52 9.42047 12.2681 10.9308 13.05 11.79C13.4409 12.2189 13.8361 12.4875 14.0962 12.6788C14.2256 12.7744 14.3227 12.8545 14.3662 12.9038C14.4098 12.953 14.4 12.9488 14.4 12.96C14.4 13.185 14.2959 13.3495 13.995 13.545C13.6941 13.7405 13.2047 13.9219 12.5775 14.0513C11.3231 14.3114 9.53719 14.4 7.56 14.4C5.58281 14.4 3.79687 14.3114 2.5425 14.0513C1.91531 13.9219 1.42594 13.7405 1.125 13.545C0.824063 13.3495 0.72 13.185 0.72 12.96C0.72 12.9488 0.710156 12.953 0.75375 12.9038C0.797344 12.8545 0.894375 12.7744 1.02375 12.6788C1.28391 12.4875 1.67906 12.2189 2.07 11.79C2.85187 10.9308 3.6 9.42047 3.6 6.48C3.6 4.41422 4.79812 2.94188 6.71625 2.59875C6.95531 2.77453 7.24359 2.88 7.56 2.88C7.87922 2.88 8.16469 2.76609 8.40375 2.5875ZM6.3225 15.0975C6.72609 15.1059 7.13672 15.12 7.56 15.12C7.98328 15.12 8.39391 15.1059 8.7975 15.0975C8.92547 15.3141 9 15.57 9 15.84C9 16.6402 8.36016 17.28 7.56 17.28C6.75984 17.28 6.12 16.6402 6.12 15.84C6.12 15.5672 6.19172 15.3141 6.3225 15.0975Z"
                                    fill="#09812D" />
                            </svg>
                        </div>
                        <div class="right">
                            <div class="item-text">
                                our appointment with John Doe, CPA is scheduled for tomorrow
                                at 10:00 AM. Don’t forget to bring your documents!
                            </div>
                            <div class="item-time">1 hour ago</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="profile-container">
            <img id="user-account-profile-btn" src="{{ asset('user_dashboard/assets/images/user.png') }}"
                alt="" />

            <!-- profile modal start -->
            <div id="user-account-modal">
                <div class="top-info">
                    <h4>John E. Grainger</h4>
                    <div>
                        <a href="">View my profile</a>
                    </div>
                </div>
                <div class="bottom-info">
                    <a href="" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>Edit Profile</span>
                    </a>
                    <a href="" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                        <span>Activity Log</span>
                    </a>
                    <a href="" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-settings me-2 icon-xxs dropdown-item-icon">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                        <span>Settings</span>
                    </a>
                    <a href="" class="item">


                    </a>
                    <a class="item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-power me-2 icon-xxs dropdown-item-icon">
                            <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                            <line x1="12" y1="2" x2="12" y2="12"></line>
                        </svg>
                        <span>Sign Out</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </div>
            </div>
            <!-- profile modal end -->
        </div>
    </div>
</div>
