<x-layouts.landing title="Landing Page">

    <div id="wrap">

        <div class="lqd-sticky-placeholder hidden"></div>
        <header id="site-header" class="main-header main-header-overlay" data-sticky-header="true" data-sticky-values-measured="false">
            <div class="border-bottom text-white-10 pl-30 pr-10 module-header">
                <div class="container-fluiud flex items-center justify-between">
                    <div class="w-25percent flex items-center justify-start xl:w-15percent lg:w-40percent">
                        <div class="flex navbar-brand-plain py-20 sm:hidden">
                            <a class="navbar-brand flex p-0 relative" href="./index-start-hub-2.html" rel="home">
                                <span class="navbar-brand-inner post-rel">
                                    <img class="logo-sticky" style="width: 100px; height:55px;" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/logo/logo-d-1.png" alt="StartHub">
                                    <img class="logo-default" style="width: 100px; height:55px;" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/logo/logo-d-1.png" width="141" height="12"  alt="StartHub">
                                </span>
                            </a>
                        </div>
                        <div class="navbar-brand-plain py-20 xxl:hidden xl:hidden sm:flex">
                            <a class="navbar-brand flex p-0 relative" href="./index-start-hub-2.html" rel="home">
                                <span class="navbar-brand-inner post-rel">
                                    <img class="logo-sticky" style="width: 50px; height:25px;" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/logo/logo-d-1.png" alt="StartHub">
                                    <img class="logo-default" style="width: 50px; height:25px;" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/logo/logo-d-1.png" alt="StartHub">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="w-50percent flex items-center justify-center header-desktop xl:w-55percent lg:hidden">
                        <div class="module-primary-nav flex link-14">
                            <div class="link-font-medium navbar-collapse inline-flex p-0 lqd-submenu-default-style" aria-expanded="false" role="navigation">
                                <ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fill lqd-submenu-toggle-hover link-white" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                                    <li class="menu-item-home is-active">
                                        <a href="#banner">
                                            <span>Home</span>
                                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#about">
                                            <span>About</span>
                                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children position-applied">
                                        <a href="#services">
                                            <span>Services</span>
                                            <span class="submenu-expander">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="32" viewBox="0 0 21 32" style="width: 1em; height: 1em;">
                                                    <path fill="currentColor" d="M10.5 18.375l7.938-7.938c.562-.562 1.562-.562 2.125 0s.562 1.563 0 2.126l-9 9c-.563.562-1.5.625-2.063.062L.437 12.562C.126 12.25 0 11.876 0 11.5s.125-.75.438-1.063c.562-.562 1.562-.562 2.124 0z"></path>
                                                </svg>
                                            </span>
                                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#contact">
                                            <span>Contact</span>
                                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-25percent flex items-center justify-end mr-20 lg:w-60percent lg:mr-0">
                        <div class="flex items-center justify-end">
                            <div class="module-social lg:hidden">
                                <div class="social-icons-wrapper justify-end">
                                    <a class="icon social-icon animation-grow mr-25 text-24 w-25 h-25 leading-24" href="https://www.instagram.com/tabrizah.id/" target="_blank">
                                        <span class="sr-only">Instagram</span>
                                        <svg class="w-1em h-1em relative block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="#5F7A9E" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="https://api.whatsapp.com/send?phone=6285161504205&text=Hi%20Tabrizah%2C%20saya%20tertarik%20untuk%20terhubung!%20%F0%9F%98%8E" class="btn btn-solid text-white bg-gray-600 rounded-100 ml-10 text-15 font-medium bg-gray-600 hover:text-black hover:bg-white module-btn-sm">
                                <span class="btn-txt" data-text="Send a message">Hubungi Kita</span>
                            </a>
                            <div class="ml-15 ld-module-sd ld-module-sd-hover ld-module-sd-right xxl:hidden lg:block">
                                <button class="bg-transparent border-none nav-trigger flex relative items-center justify-center style-6 collapsed" role="button" type="button" data-ld-toggle="true" data-toggle-options='{"cloneTriggerInTarget": false, "type": "click"}' data-bs-toggle="collapse" data-bs-target="#lqd-drawer-mobile" aria-expanded="false">
                                    <span class="bars inline-block relative z-1">
                                        <span class="bars-inner flex flex-col w-full h-full">
                                            <span class="bar inline-block relative"></span>
                                            <span class="bar inline-block relative"></span>
                                            <span class="bar inline-block relative"></span>
                                        </span>
                                    </span>
                                </button>
                                <div class="ld-module-dropdown collapse absolute" id="lqd-drawer-mobile">
                                    <div class="ld-sd-wrap">
                                        <div class="p-40 ld-sd-inner justify-center flex-col">
                                            <div class="module-primary-nav flex">
                                                <div class="w-full navbar-collapse inline-flex p-0 lqd-submenu-default-style" id="main-header-collapse" aria-expanded="false" role="navigation">
                                                    <ul id="primary-nav" class="main-nav flex reset-ul lqd-menu-counter-right lqd-menu-items-block main-nav-hover-default" data-submenu-options='{"toggleType": "slide", "handler": "click"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                                                        <li class="menu-item-home is-active">
                                                            <a class="w-full text-20 text-black font-medium leading-1/5em" href="#banner">
                                                                <span>Home</span>
                                                                <span class="link-icon inline-flex hide-if-empty right-icon">
                                                                    <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="w-full text-20 text-black font-medium leading-1/5em" href="#about">
                                                                <span>About</span>
                                                                <span class="link-icon inline-flex hide-if-empty right-icon">
                                                                    <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a class="w-full text-20 text-black font-medium leading-1/5em" href="#services">
                                                                <span>Services</span>
                                                                <span class="submenu-expander absolute inline-flex right-0"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="w-full text-20 text-black font-medium leading-1/5em" href="#contact">
                                                                <span>Contact</span>
                                                                <span class="link-icon inline-flex hide-if-empty right-icon">
                                                                    <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex justify-start mt-25 gap-25">
                                                <a class="icon social-icon social-icon-facebook animation-pulse-grow text-26 w-25" href="#" target="_blank">
                                                    <span class="sr-only">Facebook</span>
                                                    <svg class="w-1em h-1em relative block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#0000003D">
                                                        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                                                    </svg>
                                                </a>
                                                <a class="icon social-icon social-icon-twitter animation-pulse text-26 w-25-grow" href="#" target="_blank">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg class="w-1em h-1em relative block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#0000003D">
                                                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                                    </svg>
                                                </a>
                                                <a class="icon social-icon social-icon-github animation-pulse-grow text-26 w-25" href="#" target="_blank">
                                                    <span class="sr-only">Github</span>
                                                    <svg class="w-1em h-1em relative block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" fill="#0000003D">
                                                        <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lqd-module-backdrop"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lqd-stickybar-wrap lqd-stickybar-right w-auto items-end pointer-events-none">
                <div class="static flex flex-col flex-grow-1 items-end justify-center vertical-rl p-10 mr-60">
                    <a href="https://api.whatsapp.com/send?phone=6285161504205&text=Hi%20Tabrizah%2C%20saya%20tertarik%20untuk%20terhubung!%20%F0%9F%98%8E" class="btn btn-solid btn-sm btn-icon-left btn-icon-circle btn-icon-custom-size btn-icon-solid pointer-events-auto horizontal-tb -ml-60 bg-white text-15 font-medium text-gray-600 shadow-md rounded-100 hover:text-white hover:bg-primary">
                        <span class="btn-txt" data-text="Contact us">Hubungi kita!</span>
                        <span class="btn-icon mr-15 w-35 h-35 text-blue-300 bg-blue-100">
                            <svg class="w-20" xmlns="http://www.w3.org/2000/svg" width="19.955" height="16.522" viewbox="0 0 19.955 16.522" fill="currentColor">
                                <g transform="translate(-6.045 -8.06)">
                                    <path d="M7.546,14.774l-.158,0a7.354,7.354,0,0,1-4.107-1.245L1.539,14.577c-.637.382-1.049.1-.92-.63l.474-2.69a7.389,7.389,0,0,1,11.055-9.52,7.725,7.725,0,0,0-4.6,13.038Z" transform="translate(6.045 8.06)" fill="#6abbd7"></path>
                                    <path d="M0,7.5a7.5,7.5,0,1,1,13.891,3.927l.492,2.79c.124.706-.274.983-.89.612l-1.824-1.095A7.5,7.5,0,0,1,0,7.5Z" transform="translate(11 9.582)" fill="#008aba"></path>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </header>

        <main class="content">
            <div id="lqd-contents-wrap">

                <!-- Start Banner -->
                <section class="lqd-section banner pt-140 pb-200 transition-all bg-transparent text-white-50 relative" id="banner" style="background-image: linear-gradient(120deg, #353A5F 0%, #191C33 100%);">
                    <div class="lqd-shape lqd-shape-bottom" data-negative="false">
                        <svg class="lqd-custom-shape" fill="none" height="461" viewbox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="none">
                            <path class="lqd-shape-fill" fill="#54598B" d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z" fill-opacity=".09">
                                <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="10s" values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z"></animate>
                            </path>
                            <path class="lqd-shape-fill" fill="#3B437059" fill-opacity="1" d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z">
                                <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="8s" values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"></animate>
                            </path>
                            <path class="lqd-shape-fill" fill="#36407E" fill-opacity="1" d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
                                <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="6.5s" values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"></animate>
                            </path>
                            <path class="lqd-shape-fill" fill="#fff" fill-opacity="1" d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
                                <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="5.5s" values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"></animate>
                            </path>
                        </svg>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 text-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "30px", "rotationY" : 40, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                                <div class="relative flex flex-col text-center">
                                    <div class="w-auto absolute module-shape-1 -top-5percent -left-10percent sm:hidden" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"x": "100px", "y": "175px", "rotationZ" : -50}' data-parallax-to='{"x": "15px", "y": "-60px", "rotationZ" : 20}'>
                                        <img class="animation-element" width="79" height="120" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/Image-752.png" alt="3D comment">
                                    </div>
                                    <div class="w-auto z-1 absolute module-shape-2 top-25percent" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "-114px", "scaleX" : 0.8, "scaleY" : 0.8}' data-parallax-to='{"y": "115px", "scaleX" : 1.3, "scaleY" : 1.3}'>
                                        <img class="animation-element" width="110" height="290" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/3.png" alt="3D person">
                                    </div>
                                    <div class="w-auto absolute module-shape-3 top-10percent sm:hidden" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "245px", "scaleX" : 1, "scaleY" : 1, "rotationZ" : -70}' data-parallax-to='{"y": "-65px", "scaleX" : 1.1, "scaleY" : 1.1, "rotationZ" : 25}'>
                                        <img class="animation-element" width="87" height="196" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/1.png" alt="3D cloud">
                                    </div>
                                    <div class="w-auto z-1 absolute module-shape-4 top-45percent" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "-50px", "scaleX" : 1, "scaleY" : 1, "rotationZ" : 78}' data-parallax-to='{"y": "120px", "scaleX" : 1.1, "scaleY" : 1.1, "rotationZ" : -39}'>
                                        <img class="animation-element" width="80" height="164" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/4.png" alt="3D hand">
                                    </div>
                                    <div class="relative z-2">
                                        <div class="ld-fancy-heading relative animation-element">
                                            <h1 class="ld-fh-element relative lqd-highlight-custom lqd-highlight-custom-2 mb-0/35em text-white text-70" data-text-rotator="true" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                                <span>Solusi</span>
                                                <mark class="lqd-highlight">
                                                    <span class="lqd-highlight-txt">untuk</span>
                                                    <span class="lqd-highlight-inner -bottom-0/1em left-0">
                                                        <svg class="lqd-highlight-pen" width="51" height="51" viewbox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z"></path>
                                                        </svg>
                                                        <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2" width="233" height="13" viewbox="0 0 233 13" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveaspectratio="none">
                                                            <path d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"></path>
                                                        </svg>
                                                    </span>
                                                </mark>
                                                <span class="txt-rotate-keywords">
                                                    <span class="txt-rotate-keyword active">
                                                        <span>Digitalisasi sekolah</span>
                                                    </span>
                                                    <span class="txt-rotate-keyword">
                                                        <span>Sekolah modern</span>
                                                    </span>
                                                    <span class="txt-rotate-keyword">
                                                        <span>Infrastruktur IT</span>
                                                    </span>
                                                </span>
                                            </h1>
                                        </div>
                                        <div class="ld-fancy-heading relative mx-25percent sm:m-0 animation-element">
                                            <p class="ld-fh-element relative text-20 mb-1/65em leading-1/25em font-semibold">
                                                We are Tabrizah, the drivers of change in technology education.
                                            </p>
                                        </div>
                                        <div class="mb-35 relative animation-element">
                                            <a href="https://api.whatsapp.com/send?phone=6285161504205&text=Hi%20Tabrizah%2C%20saya%20tertarik%20untuk%20terhubung!%20%F0%9F%98%8E" class="btn btn-solid btn-hover-txt-liquid-x-alt rounded-100 bg-white font-medium text-15 leading-1/25em text-red-700 module-btn-md">
                                                <span class="btn-txt text-start" data-split-text="true" data-split-options='{"type":  "chars, words"}'>
                                                    Hubungi Kita
                                                    <span>Klik disini!</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="mb-45 animation-element">
                                            <span class="text-12">Incubated in</span>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-wrap text-center justify-center">
                                        <div class="p-10 module-client animation-element">
                                            <img class="transition-all" width="222" height="66" src="{{ asset('assets_landing') }}/assets/images/3rdpart_logo/nobg_btp_logo.png" alt="bandung techno park">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
                </section>
                <!-- End Banner -->

                <!-- Start About -->
                <section class="lqd-section about pt-85 pb-15 bg-top-center bg-cover transition-all bg-no-repeat" id="about" style="background-image: url('{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/bg/bg.svg');">
                    <div class="absolute w-auto top-30percent module-shape animation-element" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "115px", "rotationZ" : 60}' data-parallax-to='{"y": "-170px", "rotationZ" : -60}'>
                        <img class="w-110" width="218" height="218" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/small-cylinder.png" alt="3D shape circle">
                    </div>
                    <div class="container">
                        <div class="row text-center justify-center">
                            <div class="col col-12 col-md-8 col-lg-6 mb-70 text-center relative p-0 module-title" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "30px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                                <div class="ld-fancy-heading relative animation-element">
                                    <h4 class="ld-fh-element m-0 inline-block relative">Teknologi Pendidikan untuk</h4>
                                </div>
                                <div class="ld-fancy-heading relative animation-element">
                                    <h2 class=" ld-fh-element relative ld-gradient-heading bg-transparent leading-1/2em mb-0/5em" data-text-rotator="true" style= "background-image: linear-gradient(10deg, #F14DFF 0%, #E38300 85%);">
                                        <span class="txt-rotate-keywords">
                                            <span class="txt-rotate-keyword active">sekolah.</span>
                                            <span class="txt-rotate-keyword">private.</span>
                                            <span class="txt-rotate-keyword">ekstrakulikuler.</span>
                                            <span class="txt-rotate-keyword">olimpiade.</span>
                                            <span class="txt-rotate-keyword">infrastruktur teknologi.</span>
                                        </span>
                                    </h2>
                                </div>
                                <p class="animation-element">
                                    <span class="text-16 font-medium leading-1/2em text-blue-400">Kami berkomitmen untuk memajukan pendidikan Indonesia melalui Teknologi,</span>
                                    serta membantu sekolah mendapatkan kualitas pengajar terbaik.
                                </p>
                            </div>
                            <div class="col col-12 p-0"></div>
                            <div class="col col-12 col-md-4 mb-30 border-right border-lightgray relative sm:border-0">
                                <div class="px-35 transition-all relative lg:p-0">
                                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                                        <div class="iconbox-icon-wrap mb-45">
                                            <div class="iconbox-icon-container inline-flex">
                                                <img class="w-175" src="{{ asset('assets_landing') }}/assets/images/services/iot_service.jpg" alt="SEO Analytics">
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">IoT </h3>
                                            <p>Siap merasakan serunya dunia IoT? Program IoT, siswa/i akan berfokus membuat perangkat IoT sendiri. Kreatifitas siswa/i akan di asah untuk membuat alat yang berguna untuk sekolah.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lqd-imggrp-single block absolute right-0 top-10percent sm:hidden" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "0px"}' data-parallax-to='{"y": "165px"}'>
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="3" height="22" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/Line-8664.svg" alt="3D shape line">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-4 mb-30 border-right border-lightgray relative sm:border-0">
                                <div class="px-35 transition-all relative lg:p-0">
                                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                                        <div class="iconbox-icon-wrap mb-20">
                                            <div class="iconbox-icon-container inline-flex">
                                                <img class="w-200" src="{{ asset('assets_landing') }}/assets/images/services/webdev_service.webp" alt="Social Media Advertising">
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">Web Developer </h3>
                                            <p>Dari ide sampai go live, selamat datang di perjalanan web development! Bareng tabrizah, murid akan diajarkan setiap langkah, dari desain hingga launching. Dapatkan pengetahuan dan skill untuk membangun situs web keren. Yuk, mulai wujudin visi digital sekolah bareng tim kita!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lqd-imggrp-single block absolute right-0 -bottom-5percent sm:hidden" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "0px"}' data-parallax-to='{"y": "-165px"}'>
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="3" height="22" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/Line-8664.svg" alt="3D shape line">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-4 mb-30">
                                <div class="px-35 transition-all relative lg:p-0">
                                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                                        <div class="iconbox-icon-wrap mb-55">
                                            <div class="iconbox-icon-container inline-flex">
                                                <img class="w-200" src="{{ asset('assets_landing') }}/assets/images/services/ict_infrastructure.jpg" alt="eCommerce Solutions">
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">ICT Infrastructure </h3>
                                            <p>Bangun pondasi masa depan pendidikan bersama kita! Layanan kita ada buat bantu sekolah mendapatkan infrastruktur teknologi yang dibutuhkan. Dari jaringan internet hingga manajemen server, kita siap kasih solusi yang terjangkau dan berkualitas. Yuk, bareng-bareng ciptakan lingkungan belajar yang modern dan terhubung!"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About -->

                <!-- Start Marketing -->
                <section class="lqd-section marketing block pt-25 pb-10">
                    <div class="container">
                        <div class="row items-center">
                            <div class="col col-12 col-md-6 col-xl-6" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-imggrp-single", "ease": "power4.out", "initValues": {"scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                                <div class="lqd-imggrp-single block relative perspective" data-hover3d="true" data-float="ease-in">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                        <figure class="w-full relative" data-stacking-factor="1">
                                            <img width="995" height="822" src="{{ asset('assets_landing') }}/assets/images/services/doc_mentor_sd_telu.jpg" alt="3D shape marketing">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-5 offset-xl-1" data-custom-animations="true" data-ca-options='{"animationTarget": "h6, h2, p, .btn", "startDelay" : 200, "ease": "power4.out", "initValues": {"y": "45px", "rotationY" : 65, "opacity" : 0, "transformOrigin": "100% 50% 0px"} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1, "transformOrigin": "50% 50% 80px"}}'>
                                <div class="mb-20 ld-fancy-heading relative">
                                    <h6 class="ld-fh-element m-0 inline-block relative text-15 font-normal text-primary py-5 px-15 bg-green-100 rounded-100">Mentor</h6>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element mb-0/5em inline-block relative">Mentor</h2>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <p class="ld-fh-element relative text-16 mb-1/5em leading-1/2em">We empower more than 100+ qualified, knowledgeable and family-friendly teachers. </p>
                                </div>
                                <a href="#contact" class="btn btn-naked btn-icon-right btn-hover-swp text-15 font-medium text-green-500" data-localscroll="true">
                                    <span class="btn-txt" data-text="Start Your Shop">Meet them</span>
                                    <span class="btn-icon">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                    <span class="btn-icon mr-10">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Marketing -->

                <!-- Start Services -->
                <section class="lqd-section services pt-45 pb-55 bg-transparent" id="services" style="background-image: linear-gradient(180deg, #fff 47%, #F0EEFD 47%);" data-custom-animations="true" data-ca-options='{"animationTarget": "h6, h2, .iconbox", "ease": "power4.out", "initValues": {"y": "45px", "scaleX" : 1.2, "scaleY" : 1.2, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                    <div class="background-overlay bg-transparent transition-all opacity-100" style="background-image: linear-gradient(0deg, rgb(255, 255, 255) 0, rgba(255, 255, 255, 0) 55%);"></div>
                    <div class="container">
                        <div class="row justify-center">
                            <div class="col col-12 col-md-10 col-lg-9 col-xl-7 mb-25 text-center px-70 sm:px-0">
                                <div class="mb-20 ld-fancy-heading relative">
                                    <h6 class="ld-fh-element m-0 inline-block relative label text-10 tracking-1 uppercase font-bold text-blue-500 bg-blue-200 trackink-1px py-5 px-15 rounded-100">Scale with us</h6>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element mb-0/5em inline-block relative">We Scale like a dream</h2>
                                </div>
                            </div>
                            <div class="col col-12 p-0"></div>
                            <div class="col col-12 col-md-6 p-15">
                                <div class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 mr-10 lg:m-0">
                                    <div class="iconbox-icon-wrap mr-35">
                                        <div class="text-34 iconbox-icon-container inline-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="35.044" viewbox="0 0 30.783 35.044" width="30.783">
                                                <path d="m1.874 18.985a1.876 1.876 0 0 1 0-3.752h3.755a1.876 1.876 0 0 1 0 3.752zm3.754-8.6-2.655-2.656a1.876 1.876 0 0 1 2.653-2.653l2.655 2.656a1.876 1.876 0 0 1 -2.653 2.653zm16.1 0a1.875 1.875 0 0 1 0-2.652l2.655-2.655a1.876 1.876 0 0 1 2.653 2.653l-2.655 2.655a1.876 1.876 0 0 1 -2.652 0zm-8.828-4.756v-3.755a1.876 1.876 0 0 1 3.752 0v3.755a1.876 1.876 0 0 1 -3.752 0z" fill="#41b79d"></path>
                                                <path d="m11.746 13.271 6.112-2.9c.62-.295.627-.794.024-1.121l-16.869-9.116c-.603-.326-1.056-.034-1.013.647l1.272 18.831c.046.69.513.89 1.042.461l5.264-4.264 4.459 7.135a1.244 1.244 0 0 0 1.712.392l2.028-1.267a1.244 1.244 0 0 0 .4-1.711z" fill="#6dd8c0" transform="translate(12.454 11.519)"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="text-20 lqd-iconbox-heading">
                                            <span>Connected School</span>
                                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewbox="0 0 12 32">
                                                <path fill="currentColor" d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"></path>
                                            </svg>
                                        </h3>
                                        <p>More than 50+ School's are connected.
                                            <br/>
                                            <br/>
                                            <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 p-15">
                                <div class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 ml-10 lg:m-0">
                                    <div class="iconbox-icon-wrap mr-35">
                                        <div class="text-34 iconbox-icon-container inline-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27.388" height="40.486" viewbox="0 0 27.388 40.486">
                                                <g transform="translate(-16.075 -10.122)">
                                                    <path d="M4.763,10.717c2.484,0,4.763-6.974,4.763-8.335C9.526,1.08,7.512,0,4.763,0,2.543,0,0,1.08,0,2.382,0,3.743,2.279,10.717,4.763,10.717Z" transform="translate(25.006 39.891)" fill="rgba(0,203,153,0.14)"></path>
                                                    <path d="M26.319,16.056l-4.851-.6a3.1,3.1,0,0,1-2.654-2.992V1.271c0-1.475.706-1.7,1.578-.506L25.81,8.172a9.534,9.534,0,0,1,1.578,4.82v2.134a.917.917,0,0,1-.935.937A1.078,1.078,0,0,1,26.319,16.056ZM0,15.114v-2.1A9.591,9.591,0,0,1,1.582,8.165L6.991.772C7.865-.423,8.574-.19,8.574,1.29V12.442a3.112,3.112,0,0,1-2.654,3.01l-4.851.6a1.076,1.076,0,0,1-.133.008A.921.921,0,0,1,0,15.114Z" transform="translate(16.075 28.234)" fill="#00cb99"></path>
                                                    <path d="M.3,9.989a12.916,12.916,0,0,1,5.577-8.9A5.223,5.223,0,0,1,8.336,0a5.223,5.223,0,0,1,2.458,1.091A12.958,12.958,0,0,1,16.374,10s.405,1.709.27,9.372a106.118,106.118,0,0,1-1.112,13.661,1.217,1.217,0,0,1-1.718.992,12.129,12.129,0,0,0-5.479-.964,12.129,12.129,0,0,0-5.479.964A1.21,1.21,0,0,1,1.139,33.02,107.386,107.386,0,0,1,.027,19.372C-.107,11.791.3,9.989.3,9.989Z" transform="translate(21.433 10.122)" fill="#00cb99" opacity="0.14"></path>
                                                    <path d="M2.857,25.826V14.675a1.143,1.143,0,1,1,2.285,0V25.826a1.143,1.143,0,1,1-2.285,0ZM0,4.109A4.055,4.055,0,0,1,4,0,4.056,4.056,0,0,1,8,4.109,4.056,4.056,0,0,1,4,8.218,4.056,4.056,0,0,1,0,4.109Z" transform="translate(26 17.538)" fill="#00cb99"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="text-20 lqd-iconbox-heading">
                                            <span>Mentor</span>
                                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewbox="0 0 12 32">
                                                <path fill="currentColor" d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"></path>
                                            </svg>
                                        </h3>
                                        <p>We've empowered over 50+ mentors including freelancers, tech enthusiasts, community members, and more.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 p-15">
                                <div class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 mr-10 lg:m-0">
                                    <div class="iconbox-icon-wrap mr-35">
                                        <div class="text-34 iconbox-icon-container inline-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36.587" viewbox="0 0 41.046 36.587" width="41.046">
                                                <path d="m2.226 24.4-1.497-12.188-.394-3.206-.316-2.571a2.583 2.583 0 0 1 2.254-2.873l28.847-3.542a2.581 2.581 0 0 1 2.88 2.243l.316 2.571.394 3.206 1.5 12.189a2.582 2.582 0 0 1 -2.256 2.871l-28.846 3.544a2.626 2.626 0 0 1 -.32.02 2.581 2.581 0 0 1 -2.562-2.264z" fill="#41b79d" opacity=".222" transform="translate(0 -.001)"></path>
                                                <path d="m34.238 2.578a2.582 2.582 0 0 0 -2.588-2.578h-29.063a2.583 2.583 0 0 0 -2.587 2.578v18.1a2.582 2.582 0 0 0 2.587 2.578h29.063a2.583 2.583 0 0 0 2.587-2.578z" fill="#6dd9c1" transform="translate(6.809 13.331)"></path>
                                                <path d="m13.94 11.722a1.3 1.3 0 0 1 0-2.6h8.237a1.3 1.3 0 0 1 0 2.6zm-12.673 0a1.3 1.3 0 0 1 0-2.6h8.233a1.3 1.3 0 0 1 0 2.6zm0-6.512a1.281 1.281 0 0 1 -1.267-1.301v-2.609a1.281 1.281 0 0 1 1.267-1.3h3.8a1.281 1.281 0 0 1 1.269 1.3v2.609a1.281 1.281 0 0 1 -1.267 1.3z" fill="#41b79d" transform="translate(10.296 19.981)"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="text-20 lqd-iconbox-heading">
                                            <span>Connected People</span>
                                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewbox="0 0 12 32">
                                                <path fill="currentColor" d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"></path>
                                            </svg>
                                        </h3>
                                        <p>More than 200 students from elementary to high school and other students who have connected with us.
                                            <br/>
                                            <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 p-15">
                                <div class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom relative bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 ml-10 lg:m-0">
                                    <div class="iconbox-icon-wrap mr-35">
                                        <div class="text-34 iconbox-icon-container inline-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="34.872" viewbox="0 0 35.35 34.872" width="35.35">
                                                <g fill="#00cb99">
                                                    <path d="m16.169 18.979-9.511-9.491-3.644-.793-3.014-5.852 2.849-2.843 5.864 3.008.795 3.636 9.511 9.492.486-.485a2.679 2.679 0 0 1 3.779 0l8.582 8.564a2.667 2.667 0 0 1 0 3.772l-3.819 3.813a2.679 2.679 0 0 1 -3.779 0l-8.582-8.564a2.667 2.667 0 0 1 0-3.772l.486-.485z" opacity=".191" transform="translate(0 2.29)"></path>
                                                    <path d="m14.8 14.256a10.021 10.021 0 0 1 13.311-13.325l-5.575 4.92a3.826 3.826 0 0 0 -1.1 3.276l.29 1.454a2.142 2.142 0 0 0 1.562 1.559l1.457.29a3.845 3.845 0 0 0 3.283-1.1l4.93-5.564a10.021 10.021 0 0 1 -13.358 13.279 3.946 3.946 0 0 1 -.312.371l-12.575 13.213a3.788 3.788 0 0 1 -5.444.073l-.149-.149a3.771 3.771 0 0 1 .073-5.433l13.239-12.553a3.947 3.947 0 0 1 .368-.311z" transform="translate(1.464)"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="text-20 lqd-iconbox-heading">
                                            <span>Product Development</span>
                                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewbox="0 0 12 32">
                                                <path fill="currentColor" d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"></path>
                                            </svg>
                                        </h3>
                                        <p>not only learning, our students also develop applications such as POS, laundry system, automatic feed fish to more than 10+ Small and medium-sized enterprises (UMKM)
                                            <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Services -->

                <!-- Start Case Studies -->
                {{-- <section class="lqd-section case-studies pt-55 pb-120">
                    <div class="container">
                        <div class="row justify-center">
                            <div class="col col-12 col-xl-4 col-md-8 mb-25 p-0 text-center module-title">
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element relative mb-0/5em">Case Studies</h2>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <p class="ld-fh-element mb-0/5em inline-block relative text-16 leading-1/6em">Passionate about solving problems through creative communications. </p>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="lqd-pf-grid">
                                    <div class="liquid-filter-items items-center justify-between">
                                        <div class="liquid-filter-items-inner flex-grow-1">
                                            <span class="liquid-filter-items-label">Filter by</span>
                                            <ul class="filter-list filter-list-inline flex items-center md:hidden" id="pf-filter-case-stuies">
                                                <li class="active text-black" data-filter="*">
                                                    <span>All</span>
                                                    <sup class="lqd-filter-counter"></sup>
                                                </li>
                                                <li class="text-black" data-filter=".branding">
                                                    <span>Branding</span>
                                                    <sup class="lqd-filter-counter"></sup>
                                                </li>
                                                <li class="text-black" data-filter=".digital-design">
                                                    <span>Digital Design</span>
                                                    <sup class="lqd-filter-counter"></sup>
                                                </li>
                                                <li class="text-black" data-filter=".ecommerce">
                                                    <span>Ecommerce</span>
                                                    <sup class="lqd-filter-counter"></sup>
                                                </li>
                                            </ul>
                                            <div class="lqd-filter-dropdown hidden md:block" data-form-options='{ "dropdownAppendTo":  "self" }'>
                                                <div class="lqd-select-dropdown">
                                                    <div class="ui-selectmenu-menu ui-front">
                                                        <ul aria-hidden="true" aria-labelledby="lqd-filter-dropdown-pf-filter-case-stuies-button" id="lqd-filter-dropdown-pf-filter-case-stuies-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul>
                                                    </div>
                                                </div>
                                                <span tabindex="0" id="lqd-filter-dropdown-pf-filter-case-stuies-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="lqd-filter-dropdown-pf-filter-case-stuies-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget">
                                                    <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span>
                                                    <span class="ui-selectmenu-text">All</span>
                                                </span>
                                            </div>
                                            <a href="#contact-modal" class="btn btn-naked btn-icon-right text-15 font-medium text-gray-400 hover:text-primary" data-lity="#contact-modal">
                                                <span class="flex items-center">
                                                    <span class="btn-txt" data-text="See More">See More</span>
                                                    <span class="btn-icon">
                                                        <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="lqd-pf-row row flex flex-wrap relative -mr-10 -ml-10" data-liquid-masonry="true" data-masonry-options='{ "filtersID":  "#pf-filter-case-stuies" ,  "filtersCounter":  true }'>
                                        <div class="lqd-pf-column col-md-6 col-12 col-xs-12 masonry-item digital-design ecommerce portfolio-single py-0 px-10">
                                            <article class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-digital-design liquid-portfolio-category-ecommerce liquid-portfolio-category-portfolio-single mb-25 rounded-10">
                                                <div class="lqd-pf-item-inner">
                                                    <div class="lqd-pf-img">
                                                        <figure>
                                                            <figure class="w-full">
                                                                <img width="1116" height="524" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-1-1.jpg" class="w-full" alt="case Studies">
                                                            </figure>
                                                        </figure>
                                                    </div>
                                                    <div class="lqd-pf-details flex flex-wrap relative">
                                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                                        <div class="lqd-pf-info flex flex-wrap items-center justify-between w-full px-1/5em py-1/5em bg-white rounded-4">
                                                            <h5 class="lqd-pf-title mt-0 mb-0">Nexa Mobile</h5>
                                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                                <li><a href="#">Digital Design</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-1-1.jpg" class="lqd-overlay flex lqd-pf-overlay-link fresco" data-fresco-group="portfolio"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="lqd-pf-column col-md-6 col-12 col-xs-12 masonry-item ecommerce masonry portfolio-single py-0 px-10">
                                            <article class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single mb-25 rounded-10">
                                                <div class="lqd-pf-item-inner">
                                                    <div class="lqd-pf-img">
                                                        <figure>
                                                            <figure class="w-full">
                                                                <img width="1116" height="1106" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-2.jpg" class="w-full" alt="case Studies">
                                                            </figure>
                                                        </figure>
                                                    </div>
                                                    <div class="lqd-pf-details flex flex-wrap relative">
                                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                                        <div class="lqd-pf-info flex flex-wrap items-center justify-between w-full px-1/5em py-1/5em bg-white rounded-4">
                                                            <h5 class="lqd-pf-title mt-0 mb-0">Aliens do 3D Automobile</h5>
                                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                                <li><a href="#">Ecommerce</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-2.jpg" class="lqd-overlay flex lqd-pf-overlay-link fresco" data-fresco-group="portfolio"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="lqd-pf-column col-md-6 col-lg-3 col-12 col-xs-12 masonry-item branding custom-print masonry portfolio-single py-0 px-10">
                                            <article class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single mb-25 rounded-10">
                                                <div class="lqd-pf-item-inner">
                                                    <div class="lqd-pf-img">
                                                        <figure>
                                                            <figure class="w-full">
                                                                <img width="520" height="520" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-3.jpg" class="w-full" alt="case Studies">
                                                            </figure>
                                                        </figure>
                                                    </div>
                                                    <div class="lqd-pf-details flex flex-wrap relative">
                                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                                        <div class="lqd-pf-info flex flex-wrap items-center justify-between w-full px-1/5em py-1/5em bg-white rounded-4">
                                                            <h5 class="lqd-pf-title mt-0 mb-0">Photo Retouching</h5>
                                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                                <li><a href="#">Branding</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-3.jpg" class="lqd-overlay flex lqd-pf-overlay-link fresco" data-fresco-group="portfolio"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="lqd-pf-column col-md-6 col-lg-3 col-12 col-xs-12 masonry-item branding digital-design masonry portfolio-single py-0 px-10">
                                            <article class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-digital-design liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single mb-25 rounded-10">
                                                <div class="lqd-pf-item-inner">
                                                    <div class="lqd-pf-img">
                                                        <figure>
                                                            <figure class="w-full">
                                                                <img width="520" height="520" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-4.jpg" class="w-full" alt="case Studies">
                                                            </figure>
                                                        </figure>
                                                    </div>
                                                    <div class="lqd-pf-details flex flex-wrap relative">
                                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                                        <div class="lqd-pf-info flex flex-wrap items-center justify-between w-full px-1/5em py-1/5em bg-white rounded-4">
                                                            <h5 class="lqd-pf-title mt-0 mb-0">Kontrast</h5>
                                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                                <li><a href="#">Branding</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/case-study/pf-4.jpg" class="lqd-overlay flex lqd-pf-overlay-link fresco" data-fresco-group="portfolio"></a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 text-center">
                                <a href="#" class="btn btn-naked btn-icon-right btn-icon-circle btn-icon-custom-size btn-icon-solid btn-icon-ripple text-black" target="_blank">
                                    <span class="btn-txt" data-text="See more projects">See more projects</span>
                                    <span class="btn-icon w-30 h-30 text-black bg-slate-100">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-add"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- End Case Studies -->

                <!-- Start Text LG -->
                <section class="lqd-section text-lg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-12">
                                <div class="whitespace-nowrap ld-fancy-heading relative" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"x": "1vw"}' data-parallax-to='{"x": "-20vw"}'>
                                    <h2 class="ld-fh-element mb-0/5em inline-block relative">You'll love it</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Text LG -->

                <!-- Start Clients -->
                <section class="lqd-section clients py-30" id="clients" data-custom-animations="true" data-ca-options='{"animationTarget": "p, .animation-element", "ease": "power4.out", "initValues": {"y": "45px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                    <div class="container p-0">
                        <div class="row m-0">
                            <div class="col col-12 text-start p-0">
                                <div class="mb-10 ld-fancy-heading relative p">
                                    <p class="ld-fh-element mb-0/5em inline-block relative text-14 font-medium">These national-class  are already connected with us</p>
                                </div>
                            </div>
                            <div class="col col-12 p-0" data-custom-animations="true" data-ca-options='{"animationTarget": "img", "duration" : 1800, "delay" : 120, "ease": "power4.out", "initValues": {"scaleX" : 1.3, "scaleY" : 1.3, "opacity" : 0} , "animations": {"scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                                <div class="py-35 px-10 border-1 border-black-10 rounded-4 animation-element">
                                    <div class="container-fluid">
                                        <div class="row items-center justify-center">
                                            <div class="col col-6 col-md-2 text-center p-10 module-col">
                                                <img width="111" height="33" src="{{ asset('assets_landing') }}/assets/images/3rdpart_logo/nobg_btp_incubator_business.png" alt="btp incubator business">
                                            </div>
                                            <div class="col col-6 col-md-2 text-center p-10 module-col">
                                                <img width="65" height="23" src="{{ asset('assets_landing') }}/assets/images/3rdpart_logo/nobg_btp_logo.png" alt="btp">
                                            </div>
                                            <div class="col col-6 col-md-2 text-center p-10 module-col">
                                                <img width="75" height="17" src="{{ asset('assets_landing') }}/assets/images/3rdpart_logo/dt_bandung_putra.png" alt="daarut tauhiid bandung boarding school putra">
                                            </div>
                                            <div class="col col-6 col-md-2 text-center p-10 module-col">
                                                <img width="73" height="19" src="{{ asset('assets_landing') }}/assets/images/3rdpart_logo/sd_telkom_batam.png" alt="sd telkom batam">
                                            </div>
                                            <div class="col col-6 col-md-2 text-center p-10 module-col">
                                                <img width="73" height="19" src="{{ asset('assets_landing') }}/assets/images/3rdpart_logo/logo_kemenkopUKM.png" alt="sd telkom batam">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Clients -->

                <!-- Start Testimonials  -->
                {{-- <section class="lqd-section testimonials pt-90 pb-130 bg-transparent transition-all z-1 relative" style="background-image: linear-gradient(0deg, #FAF9FE 0%, #fff 100%);">
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 col-xl-4 module-col" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, h2, p, img", "ease": "power4.out", "initValues": {"y": "45px", "rotationY" : 65, "opacity" : 0, "transformOrigin": "100% 50% 0px"} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1, "transformOrigin": "50% 50% 80px"}}'>
                                <div class="mb-30 iconbox flex flex-grow-1 relative flex-wrap items-center animation-element">
                                    <div class="iconbox-icon-wrap mr-5">
                                        <div class="iconbox-icon-container inline-flex relative z-1 rounded-full text-20 w-40 h-40 text-blue-300 bg-blue-100">
                                            <svg class="w-1em absolute-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M144 208C126.3 208 112 222.2 112 239.1C112 257.7 126.3 272 144 272s31.1-14.25 31.1-32S161.8 208 144 208zM256 207.1c-17.75 0-31.1 14.25-31.1 32s14.25 31.1 31.1 31.1s31.1-14.25 31.1-31.1S273.8 207.1 256 207.1zM368 208c-17.75 0-31.1 14.25-31.1 32s14.25 32 31.1 32c17.75 0 31.99-14.25 31.99-32C400 222.2 385.8 208 368 208zM256 31.1c-141.4 0-255.1 93.12-255.1 208c0 47.62 19.91 91.25 52.91 126.3c-14.87 39.5-45.87 72.88-46.37 73.25c-6.624 7-8.373 17.25-4.624 26C5.818 474.2 14.38 480 24 480c61.49 0 109.1-25.75 139.1-46.25c28.87 9 60.16 14.25 92.9 14.25c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM256 400c-26.75 0-53.12-4.125-78.36-12.12l-22.75-7.125L135.4 394.5c-14.25 10.12-33.87 21.38-57.49 29c7.374-12.12 14.37-25.75 19.87-40.25l10.62-28l-20.62-21.87C69.81 314.1 48.06 282.2 48.06 240c0-88.25 93.24-160 207.1-160s207.1 71.75 207.1 160S370.8 400 256 400z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="lqd-iconbox-heading text-18 font-normal text-dark m-0">
                                        <strong>— 97.6</strong>
                                        <span>&nbsp;&nbsp;Customer Satisfaction</span>
                                    </h3>
                                    <p></p>
                                </div>
                                <div class="ld-fancy-heading relative inline-block">
                                    <h2 class="ld-fh-element relative text-36 leading-1/15em m-0">Hear from</h2>
                                </div>
                                <div class="ld-fancy-heading relative inline-block">
                                    <h2 class="ld-fh-element relative ld-gradient-heading text-36 bg-transparent leading-1/15em mr-0/2em mb-0 ml-0/2em" style="background-image: linear-gradient(0deg, #749FEF 0%, #4452F2 100%);">happy</h2>
                                </div>
                                <div class="ld-fancy-heading relative inline-block">
                                    <h2 class="ld-fh-element relative text-36 mb-0 leading-1/15em">customers.</h2>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <p class="ld-fh-element relative text-18 leading-1/25em mt-1em mb-0/75em">Bring your students' ideas and creativity to life with intuitive mentors. See, learn, develop your students' creativity. Tabrizah brings that to life!</p>
                                </div>
                            </div>
                            <div class="col col-12 col-xl-8 relative" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "startDelay" : 200, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                                <div class="ml-5percent lg:m-0">
                                    <div class="lqd-imggrp-single block absolute -top-10percent z-1" data-float="ease">
                                        <div class="w-50percent lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                            <figure class="w-full relative animation-element">
                                                <img width="186" height="181" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/Image-748.png" alt="shape">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="carousel-container lqd-carousel-stack animation-element">
                                        <div class="carousel-items" data-lqd-flickity='{ "watchCSS":  true }'>
                                            <div class="carousel-item w-full">
                                                <span class="lqd-carousel-handle"></span>
                                                <div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-1">
                                                    <div class="icon-text-nightblue flex justify-center mb-4">
                                                        <ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="lqd-testi-quote mb-1/5em px-1em">
                                                        <blockquote>
                                                            <p>
                                                                <span style="font-weight: 500;">
                                                                    <span>We have three projects with this template and that is because we love the design,</span>
                                                                    <span style="color: #638293;">the large number of possibilities to customize the template and the support received. We recommend it!</span>
                                                                </span>
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="lqd-testi-info flex flex-col flex-wrap justify-between">
                                                        <div class="lqd-testi-details flex items-center justify-center">
                                                            <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                <img class="rounded-full" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/testimonial/image.jpg" alt="Ray Charles">
                                                            </figure>
                                                            <div class="lqd-testi-np text-start pl-1/5em">
                                                                <h3 class="uppercase tracking-0/1em font-bold">Ray Charles</h3>
                                                                <h4>Netflix Chief Designer</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lqd-testi-extra pt-1/5em mt-1/5em">
                                                        <figure>
                                                            <img src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/client/amd-logo-1-1.svg" alt="Ray Charles">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item w-full">
                                                <span class="lqd-carousel-handle"></span>
                                                <div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-2">
                                                    <div class="flex justify-center mb-4">
                                                        <ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="lqd-testi-quote mb-1/5em px-1em">
                                                        <blockquote>
                                                            <p>
                                                                <span style="font-weight: 500;">
                                                                    <span>HUB is by far the best theme here in Themeforest, I don't think anyone can match it's code quality, design or anything anytime soon!</span>
                                                                    <span style="color: #638293;">I hope you sell 10 million copies, I'm soooo glad I found it</span>
                                                                </span>
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="lqd-testi-info flex flex-col flex-wrap justify-between">
                                                        <div class="lqd-testi-details flex items-center justify-center">
                                                            <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                <img class="rounded-full" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/testimonial/Image-2.jpg" alt="Markfortez">
                                                            </figure>
                                                            <div class="lqd-testi-np text-start pl-1/5em">
                                                                <h3 class="uppercase tracking-0/1em font-bold">Markfortez</h3>
                                                                <h4>Envato User</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lqd-testi-extra pt-1/5em mt-1/5em">
                                                        <figure>
                                                            <img src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/client/paypal-logo1.svg" alt="Markfortez">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item w-full">
                                                <span class="lqd-carousel-handle"></span>
                                                <div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-3">
                                                    <div class="flex justify-center mb-4">
                                                        <ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="lqd-testi-quote mb-1/5em px-1em">
                                                        <blockquote>
                                                            <p>
                                                                <span style="font-weight: 500;">
                                                                    <span>I'm only just starting to work with this theme, but so far it looks great and extremely customizable. Not everything was clear to me though,</span>
                                                                    <span style="color: #638293;">but the support has been absolutely amazing.</span>
                                                                </span>
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="lqd-testi-info flex flex-col flex-wrap justify-between">
                                                        <div class="lqd-testi-details flex items-center justify-center">
                                                            <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                <img class="rounded-full" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/testimonial/image.jpg" alt="Divinginwonderland">
                                                            </figure>
                                                            <div class="lqd-testi-np text-start pl-1/5em">
                                                                <h3 class="uppercase tracking-0/1em font-bold">Divinginwonderland</h3>
                                                                <h4>Envato User</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lqd-testi-extra pt-1/5em mt-1/5em">
                                                        <figure>
                                                            <img src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/client/amazon-4-1.svg" alt="Divinginwonderland">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item w-full">
                                                <span class="lqd-carousel-handle"></span>
                                                <div class="lqd-testi relative lqd-testi-style-18 pt-2/5em pb-1/5em lqd-testi-shadow-sm2 lqd-testi-details-sm lqd-testi-quote-18 lqd-testi-avatar-68 text-center module-line-4">
                                                    <div class="flex justify-center mb-4">
                                                        <ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-outline">
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg class=" active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
                                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="lqd-testi-quote mb-1/5em px-1em">
                                                        <blockquote>
                                                            <p>
                                                                <span style="font-weight: 500;">
                                                                    <span>I would give LiquidThemes are five stars for each category if I could! I LOVE the demo site I was able to easily download and customize -</span>
                                                                    <span style="color: #638293;">I'm going to have the best portfolio site ever! Yay microinteractions!</span>
                                                                </span>
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="lqd-testi-info flex flex-col flex-wrap justify-between">
                                                        <div class="lqd-testi-details flex items-center justify-center">
                                                            <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                <img class="rounded-full" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/testimonial/image-3.jpg" alt="Brukmaxwell">
                                                            </figure>
                                                            <div class="lqd-testi-np text-start pl-1/5em">
                                                                <h3 class="uppercase tracking-0/1em font-bold">Brukmaxwell</h3>
                                                                <h4>Envato User</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lqd-testi-extra pt-1/5em mt-1/5em">
                                                        <figure>
                                                            <img src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/client/amd-logo-1-1.svg" alt="Brukmaxwell">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lqd-carousel-stack-nav">
                                            <button class="lqd-carousel-stack-btn lqd-carousel-stack-prev rounded-100">
                                                <svg width="6" height="10" viewbox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.863 8.387L4.75 9.5L0 4.75L4.75 0L5.863 1.113L2.229 4.75L5.863 8.387Z"></path>
                                                </svg>
                                            </button>
                                            <button class="lqd-carousel-stack-btn lqd-carousel-stack-next rounded-100">
                                                <svg width="6" height="10" viewbox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-2.43187e-05 8.387L1.11298 9.5L5.86298 4.75L1.11298 0L-2.43187e-05 1.113L3.63398 4.75L-2.43187e-05 8.387Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- End Testimonials  -->

                <!-- Start Blog -->
                {{-- <section class="lqd-section blog py-90 bg-transparent transition-all" style="background-image: linear-gradient(180deg, #FAF9FE 0%, #fff 100%);" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                    <div class="container">
                        <div class="row items-center">
                            <div class="col col-12 col-md-6 animation-element">
                                <div class="mb-15 ld-fancy-heading relative">
                                    <h6 class="ld-fh-element m-0 inline-block relative label text-10 tracking-1 uppercase font-bold text-black bg-blue-200 trackink-1px py-5 px-15 rounded-100">Share your story</h6>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element mb-0/5em inline-block relative text-40 text-gray-600">Latest Posts</h2>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 animation-element">
                                <div class="ld-fancy-heading relative">
                                    <p class="ld-fh-element mb-0/5em inline-block relative leading-1/6em text-18 text-gray-500">Our design services starts and ends with a best-in-class experience strategy that builds brands.</p>
                                </div>
                            </div>
                            <div class="col col-12 animation-element">
                                <div class="flex flex-wrap -mr-30 -ml-30 module-blog">
                                    <div class="w-33percent flex px-30 mb-30 md:w-50percent sm:w-full module-col">
                                        <article class="lqd-lp relative lqd-lp-style-6 lqd-lp-style-6-alt lqd-lp-hover-img-zoom lqd-lp-hover-img-zoom-out lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post-5561 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-culture tag-beauty tag-travel hover:inner-text-primary">
                                            <div class="lqd-lp-img overflow-hidden">
                                                <figure>
                                                    <img class="w-full" width="640" height="364" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/blog/Screen-Shot-2021-10-25-at-1.41.42-PM.jpg" alt="5 reasons to purchase desktop computers">
                                                </figure>
                                                <div class="lqd-lp-meta uppercase font-bold relative z-3">
                                                    <span class="screen-reader-text">Tags </span>
                                                    <ul class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
                                                        <li><a class="rounded-full" href="#" rel="category">Business</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <header class="lqd-lp-header pt-1/5em px-1em">
                                                <div class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center">
                                                    <div class="lqd-lp-author relative z-3">
                                                        <div class="lqd-lp-author-info">
                                                            <h3 class="mt-0 mb-0">
                                                                <a href="#">Philip Reyes</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <time class="lqd-lp-date" datetime="2021-06-02T13:40:12+00:00">1 year ago</time>
                                                </div>
                                                <h2 class="entry-title lqd-lp-title mt-0/5em mb-0 h5">5 reasons to purchase desktop computers</h2>
                                            </header>
                                            <div class="lqd-lp-excerpt pt-1em pb-1/5em px-1em">
                                                <p>Hustle and Cashflow is a blog that aims to educate millennials on personal finance.</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="w-33percent flex px-30 mb-30 md:w-50percent sm:w-full module-col">
                                        <article class="lqd-lp relative lqd-lp-style-6 lqd-lp-style-6-alt lqd-lp-hover-img-zoom lqd-lp-hover-img-zoom-out lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post-5561 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-culture tag-beauty tag-travel hover:inner-text-primary">
                                            <div class="lqd-lp-img overflow-hidden">
                                                <figure>
                                                    <img class="w-full" width="640" height="364" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/blog/easy-contactless-payment-via-smartphone-concept-online-mobile-shopping-payment-transaction-3d-render-illustration-1.jpg" alt="Utilizing mobile technology in the field">
                                                </figure>
                                                <div class="lqd-lp-meta uppercase font-bold relative z-3">
                                                    <span class="screen-reader-text">Tags </span>
                                                    <ul class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
                                                        <li><a class="rounded-full" href="#" rel="category">Business</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <header class="lqd-lp-header pt-1/5em px-1em">
                                                <div class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center">
                                                    <div class="lqd-lp-author relative z-3">
                                                        <div class="lqd-lp-author-info">
                                                            <h3 class="mt-0 mb-0">
                                                                <a href="#">Philip Reyes</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <time class="lqd-lp-date" datetime="2021-06-02T13:40:12+00:00">2 year ago</time>
                                                </div>
                                                <h2 class="entry-title lqd-lp-title mt-0/5em mb-0 h5">Utilizing mobile technology in the field</h2>
                                            </header>
                                            <div class="lqd-lp-excerpt pt-1em pb-1/5em px-1em">
                                                <p>Hustle and Cashflow is a blog that aims to educate millennials on personal finance.</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="w-33percent flex px-30 mb-30 md:w-50percent sm:w-full module-col">
                                        <article class="lqd-lp relative lqd-lp-style-6 lqd-lp-style-6-alt lqd-lp-hover-img-zoom lqd-lp-hover-img-zoom-out lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post-5561 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-culture tag-beauty tag-travel hover:inner-text-primary">
                                            <div class="lqd-lp-img overflow-hidden">
                                                <figure>
                                                    <img class="w-full" width="640" height="364" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/blog/3d-seo-optimization-stock-trading-data-analysis-seo-marketing-concept.jpg" alt="Success Story: Businessman in Harlem">
                                                </figure>
                                                <div class="lqd-lp-meta uppercase font-bold relative z-3">
                                                    <span class="screen-reader-text">Tags </span>
                                                    <ul class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
                                                        <li><a class="rounded-full" href="#" rel="category">Beauty</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <header class="lqd-lp-header pt-1/5em px-1em">
                                                <div class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center">
                                                    <div class="lqd-lp-author relative z-3">
                                                        <div class="lqd-lp-author-info">
                                                            <h3 class="mt-0 mb-0">
                                                                <a href="#">Philip Reyes</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <time class="lqd-lp-date" datetime="2021-06-02T13:40:12+00:00">2 year ago</time>
                                                </div>
                                                <h2 class="entry-title lqd-lp-title mt-0/5em mb-0 h5">Success Story: Businessman in Harlem</h2>
                                            </header>
                                            <div class="lqd-lp-excerpt pt-1em pb-1/5em px-1em">
                                                <p>I think that you should be able to select more than one reason for rating.</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 text-center animation-element">
                                <div class="flex flex-row flex-wrap items-center justify-center">
                                    <div class="mr-25 ld-fancy-heading relative sm:mr-0">
                                        <h6 class="ld-fh-element m-0 inline-block relative label text-purple-500 font-normal bg-purple-100 text-15 font-normal py-5 px-15 rounded-100">Contact</h6>
                                    </div>
                                    <div class="ld-fancy-heading relative">
                                        <p class="ld-fh-element relative m-0 text-14 text-purple-700">
                                            <span>Looking for a corporate solution?</span>
                                            <a href="#contact" data-localscroll="true">
                                                <u class="text-purple-500">Contact us.</u>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- End Blog -->

                <!-- Start Connect Top -->
                <section class="lqd-section connect-top pt-10 relative">
                    <div class="ld-particles-container w-full lqd-particles-as-bg lqd-overlay flex lqd-particle pointer-events-none">
                        <div class="ld-particles-inner lqd-overlay flex" id="lqd-particle" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 6} , "color": {"value" : ["#FDA44C", "#604CFD", "#0FBBB4", "#F85976"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4} , "move": {"enable": true, "direction": "none", "out_mode": "bounce"}} , "interactivity" : [], "retina_detect": true}'></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 text-center" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, p, .btn", "ease": "power4.out", "initValues": {"y": "45px", "rotationY" : 65, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element relative heading-title lqd-highlight-custom lqd-highlight-custom-2 text-46 mb-0/75em text-gray-600" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                        <span>Tingkatkan kualitas sekolah anda? Ayo</span>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">terhubung</span>
                                            <span class="lqd-highlight-inner bottom-0 left-0">
                                                <svg class="lqd-highlight-pen" width="51" height="51" viewbox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z"></path>
                                                </svg>
                                                <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2" width="233" height="13" viewbox="0 0 233 13" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h2>
                                </div>
                                <div class="mb-25">
                                    <p class="text-18 font-medium leading-1/15em">
                                        <span class="text-blue-400">Kami memiliki sumber daya yang kredibel, berpengalaman dan tentunya cocok dengan tujuan dan misi sekolah anda</span>
                                    </p>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=6285161504205&text=Hi%20Tabrizah%2C%20saya%20tertarik%20untuk%20terhubung!%20%F0%9F%98%8E" class="btn btn-solid btn-hover-txt-liquid-y btn-icon-right btn-hover-reveal rounded-100 bg-transparent py-20 px-50 text-white">
                                    <span class="btn-txt" data-split-text="true" data-split-options='{"type":  "chars, words"}'>Hubungi kita</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Connect Top -->

                <!-- Start Connect Bottom -->
                <section class="lqd-section connect-bottom relative -mb-200 z-2" id="contact">
                    <div class="container">
                        <div class="row items-center">
                            <div class="w-25percent lg:w-20percent"></div>
                            <div class="w-50percent lg:w-60percent sm:w-full">
                                <div class="w-full relative flex p-15">
                                    <div class="w-full flex flex-wrap bg-white transition-all shadow-md -mb-90 mt-0 rounded-6">
                                        <div class="w-50percent flex flex-col sm:w-full">
                                            <div class="module py-35 pr-50 pl-65 border-right border-black-10 transition-all sm:border-right-0 sm:border-bottom">
                                                <div class="ld-fancy-heading relative">
                                                    <h6 class="ld-fh-element relative font-normal mb-0/75em">Email</h6>
                                                </div>
                                                <div class="ld-fancy-heading relative">
                                                    <h2 class="ld-fh-element relative text-nightblue text-12 mb-0">tabrizahfoundation@gmail.com</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-50percent flex flex-col sm:w-full">
                                            <div class="module py-35 pr-50 pl-65 transition-all">
                                                <div class="ld-fancy-heading relative">
                                                    <h6 class="ld-fh-element relative font-normal mb-0/75em">Konsultasi</h6>
                                                </div>
                                                <div class="ld-fancy-heading relative">
                                                    <h2 class="ld-fh-element relative text-nightblue text-12 mb-0">62 851 6150 4205</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-25percent lg:w-20percent sm:hidden">
                                <div class="lqd-imggrp-single block relative" data-float="ease-in">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="500" height="552" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/3D/img.png" alt="shape">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Connect Bottom -->

            </div>
        </main>

        <footer id="site-footer" class="main-footer">
            <section class="lqd-section footer-content pt-270 pb-100 relative bg-transparent transition-all" style="background-image: linear-gradient(180deg, #E5DFFC 0%, #fff 100%);">
                <div class="lqd-shape lqd-shape-top" data-negative="false">
                    <svg class="lqd-custom-shape -rotate-180 h-220" fill="none" height="461" viewbox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="none">
                        <path fill="#fff" class="lqd-shape-fill" d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z" fill-opacity=".09">
                            <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="10s" values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z">
                            </animate>
                        </path>
                        <path fill="#fff" class="lqd-shape-fill" d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z" fill-opacity=".28">
                            <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="8s" values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z">
                            </animate>
                        </path>
                        <path fill="#fff" class="lqd-shape-fill" d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
                            <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="6.5s" values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
                            </animate>
                        </path>
                        <path fill="#fff" class="lqd-shape-fill" d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
                            <animate repeatcount="indefinite" fill="freeze" attributename="d" dur="5.5s" values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
                            </animate>
                        </path>
                    </svg>
                </div>
                <div class="container">
                    <div class="row items-center">
                        <div class="col col-12 col-md-3 flex items-center justify-start">
                            <img width="145" height="21" src="{{ asset('assets_landing') }}/assets/images/demo/start-hub-2/logo/logo-d-1.png" alt="logo hub">
                        </div>
                        {{-- <div class="col col-12 col-md-9">
                            <div class="flex flex-wrap alogn-items-center justify-end">
                                <div class="w-auto lg:w-full lg:justify-start module-btn">
                                    <a href="#contact-modal" class="btn btn-solid text-9 font-bold uppercase tracking-1 py-5 px-15 mr-25 text-secondary rounded-4 bg-blue-50 hover:text-white hover:bg-secondary" data-lity="#contact-modal">
                                        <span class="btn-txt" data-text="Apply">Apply</span>
                                    </a>
                                </div>
                                <div class="flex justify-end text-end lqd-fancy-menu lqd-custom-menu relative text-end lqd-menu-td-none link-bold link-10 link-black-80 lg:w-full sm:text-start module-menu">
                                    <ul class="reset-ul inline-ul uppercase">
                                        <li class="tracking-1 mr-35">
                                            <a class="uppercase tracking-1/5" href="#">
                                                <span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
                                                Management
                                            </a>
                                        </li>
                                        <li class="tracking-1 mr-35">
                                            <a class="uppercase tracking-1/5" href="#">
                                                <span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
                                                Reporting
                                            </a>
                                        </li>
                                        <li class="tracking-1 mr-35">
                                            <a class="uppercase tracking-1/5" href="#">
                                                <span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
                                                Tracking
                                            </a>
                                        </li>
                                        <li class="tracking-1 mr-35">
                                            <a class="uppercase tracking-1/5" href="#">
                                                <span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
                                                Subscribe
                                            </a>
                                        </li>
                                        <li class="tracking-1 mr-35">
                                            <a class="uppercase tracking-1/5" href="#">
                                                <span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
                                                Company
                                            </a>
                                        </li>
                                        <li class="tracking-1 mr-35">
                                            <a class="uppercase tracking-1/5" href="#">
                                                <span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
                                                Careers
                                            </a>
                                        </li>
                                        <li class="tracking-1 mr-0">
                                            <a class="uppercase tracking-1/5" href="#">
                                                <span class="link-icon inline-flex hide-if-empty left-icon icon-next-to-label"></span>
                                                Press
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col col-12 mt-5 p-15">
                            <span class="divider w-full flex border-top border-lightgray"></span>
                        </div>
                        <div class="col col-12 col-md-8">
                            <div class="ld-fancy-heading relative">
                                <p class="ld-fh-element mb-0/5em inline-block relative text-12 leading-1/75em">Tabrizah adalah startup education and technology dimana kami memberikan pelayanan kepada sekolah di Indonesia untuk memberikan sumber daya manusia yang berpengalaman di bidang teknologi agar sekolah mereka dapat meningkatkan kualitas pendidikannya pada bidang Teknologi</p>
                            </div>
                        </div>
                        <div class="col col-12 col-md-4">
                            <div class="flex flex-row justify-end items-center gap-10 sm:justify-start">
                                <a class="icon social-icon animation-grow mr-25 text-24 w-25 h-25 leading-24" href="https://www.instagram.com/tabrizah.id/" target="_blank">
                                    <span class="sr-only">Instagram</span>
                                    <svg class="w-1em h-1em relative block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="#5F7A9E" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>


    @slot('contactModal')
        <!-- Contact Modal -->
		<div id="contact-modal" class="lity-modal lqd-modal lity-hide" data-modal-type="fullscreen">
			<div class="lqd-modal-inner">
				<div class="lqd-modal-head"></div>
				<div class="lqd-modal-content link-black">
					<div class="container">
						<div class="row min-h-100vh items-center">
							<div class="w-55percent p-10 sm:w-full">
								<div class="flex flex-col w-full pr-90 lg:pr-0">
									<div class="ld-fancy-heading relative">
										<h2 class="ld-fh-element mb-0/5em inline-block relative text-120 font-medium leading-0/8em text-blue-600">Send a message</h2>
									</div>
									<div class="ld-fancy-heading relative">
										<p class="ld-fh-element mb-0/5em inline-block relative text-18">We're here to answer any question you may have.</p>
									</div>
									<div class="w-full flex flex-wrap">
										<div class="w-50percent flex flex-col p-10 sm:w-full">
											<div class="mb-10 ld-fancy-heading relative">
												<h6 class="ld-fh-element mb-0/5em inline-block relative text-black text-14 font-bold tracking-0">careers</h6>
											</div>
											<div class="mb-10 ld-fancy-heading relative">
												<p class="ld-fh-element mb-0/5em inline-block relative text-16 leading-1/25em">Would you like to join our growing team?</p>
											</div>
											<div class="ld-fancy-heading relative">
												<p class="ld-fh-element mb-0/5em inline-block relative">
													<a href="#" class="text-16 font-bold leading-1/2em">careers@hub.com </a>
												</p>
											</div>
										</div>
										<div class="w-50percent flex flex-col p-10 sm:w-full">
											<div class="mb-10 ld-fancy-heading relative">
												<h6 class="ld-fh-element mb-0/5em inline-block relative text-black text-14 font-bold tracking-0">careers</h6>
											</div>
											<div class="mb-10 ld-fancy-heading relative">
												<p class="ld-fh-element mb-0/5em inline-block relative text-16 leading-1/25em">Would you like to join our growing team?</p>
											</div>
											<div class="ld-fancy-heading relative">
												<p class="ld-fh-element mb-0/5em inline-block relative">
													<a href="#" class="text-16 font-bold leading-1/2em">careers@hub.com </a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="w-45percent sm:w-full">
								<div class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-block lqd-contact-form-button-lg lqd-contact-form-button-border-none">
									<div role="form" lang="en-US">
										<div class="screen-reader-response">
											<p role="status" aria-live="polite" aria-atomic="true"></p>
										</div>
										<form action="{{ asset('assets_landing') }}/assets/php/mailer.php" method="post" class="lqd-cf-form" novalidate="novalidate" data-status="init">
											<div class="row">
												<div class="col col-xs-12 col-sm-6 relative py-0">
													<i class="lqd-icn-ess icon-lqd-user"></i>
													<span class="lqd-form-control-wrap">
														<input class="text-13 text-black border-black-20" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="What's your name?">
													</span>
												</div>
												<div class="col col-xs-12 col-sm-6 relative py-0">
													<i class="lqd-icn-ess icon-lqd-envelope"></i>
													<span class="lqd-form-control-wrap">
														<input class="text-13 text-black border-black-20" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email address">
													</span>
												</div>
												<div class="col col-xs-12 col-sm-6 relative py-0">
													<i class="lqd-icn-ess icon-speech-bubble"></i>
													<span class="lqd-form-control-wrap">
														<input class="text-13 text-black border-black-20" type="text" name="topic" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Select a Discussion Topic">
													</span>
												</div>
												<div class="col col-xs-12 col-sm-6 relative py-0">
													<i class="lqd-icn-ess icon-lqd-dollar"></i>
													<span class="lqd-form-control-wrap">
														<input class="text-13 text-black border-black-20" type="text" name="budget" value="" size="40" aria-required="true" aria-invalid="false" placeholder="What's your budget?">
													</span>
												</div>
												<div class="col col-12 lqd-form-textarea relative py-0">
													<i class="lqd-icn-ess icon-lqd-pen-2"></i>
													<span class="lqd-form-control-wrap">
														<textarea class="text-13 text-black border-black-20" name="message" cols="10" rows="6" aria-required="true" aria-invalid="false" placeholder="A brief description about your project/request/consultation"></textarea>
													</span>
												</div>
												<div class="col col-xs-12 text-center relative py-0">
													<input class="bg-primary text-white text-17 font-medium leading-1/5em hover:bg-primary hover:text-white rounded-100" type="submit" value="— send message">
													<p class="mt-1em text-black">
														<span>— copy email:</span>
														<a href="#">info@liquid-themes.com </a>
													</p>
												</div>
											</div>
										</form>
										<div class="lqd-cf-response-output"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lqd-modal-foot"></div>
			</div>
		</div>
		<!-- Contact Modal -->
    @endslot


</x-layouts.landing>
