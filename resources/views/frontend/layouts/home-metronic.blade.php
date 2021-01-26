<!doctype html>
<html lang="{{ $lang }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="ExpoLandivar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="frontend/js/common.js"></script>
    <script type="text/javascript" src="metronic/plugins/global/plugins.bundle.js"></script>
    <script type="text/javascript" src="metronic/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script type="text/javascript" src="metronic/js/scripts.bundle.js"></script>
    <script type="text/javascript" src="metronic/plugins/custom/datatables/datatables.bundle.js"></script>
    <script type="text/javascript" src="metronic/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script type="text/javascript" src="metronic/js/pages/widgets.js"></script>

    <script src="frontend/js/lang/{{$lang}}.js"></script>
    <!-- Fonts https://fonts.google.com/specimen/Lato-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">
    <!-- Styles -->
    <link href="metronic/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet">
    <link href="metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet">
    <link href="metronic/plugins/global/plugins.bundle.css" rel="stylesheet">
    <link href="metronic/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet">
    <link href="metronic/css/style.bundle.css" rel="stylesheet">
    <link href="metronic/css/themes/layout/header/base/light.css" rel="stylesheet">
    <link href="metronic/css/themes/layout/header/menu/light.css" rel="stylesheet">
    <link href="metronic/css/themes/layout/brand/dark.css" rel="stylesheet">
    <link href="metronic/css/themes/layout/aside/dark.css" rel="stylesheet">
    <link href="frontend/css/common.css" rel="stylesheet">
    <link href="frontend/css/custom.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo.ico"/>
</head>
@inject('dateFormat', 'App\Services\DateService')
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed">
<!--begin::Body-->
    <div class="row leader-alert">
        <div class="col-lg-12">
            AHORA <span><u>Lorem ipsum dolor sit amet, c sed diam nonummy</u></span>
        </div>
    </div>
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed " >
        <!--begin::Logo-->
        <a href="">
            <img alt="Logo" src="images/logo.png" style="width: 130px;" />
        </a>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->

            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->

            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header  header-fixed " >
                    <!--begin::Container-->
                    <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Logo-->
                            <div class="header-logo">
                                <a href="home">
                                    <img alt="Logo" src="images/logo.png"/>
                                </a>
                            </div>
                            <!--end::Header Logo-->
                            
                        </div>
                        <!--end::Header Menu Wrapper-->
                        
                        <!--begin::Topbar-->
                        <div class="topbar">
                        <div id="kt_header_menu" class="header-menu header-menu-layout-default " >
                                <!--begin::Header Nav-->
                                <ul class="menu-nav">
                                    <li class="menu-item menu-item-rel " data-menu-toggle="click" aria-haspopup="true">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                            <span class="menu-text">Home</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-rel " data-menu-toggle="click" aria-haspopup="true">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                            <span class="menu-text">Cambiar Compus o Plan de Estudio</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-rel " data-menu-toggle="click" aria-haspopup="true">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                            <span>Agenda de Sesiones</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-rel " data-menu-toggle="click" aria-haspopup="true">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                            <span>FAQ general</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">sdf,</span>
                                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">as</span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold"><?php echo "A"; ?></span>
                                    </span>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                @yield('content')

                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                @include('frontend.layouts.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->


    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
                {{trans('layout.profile')}}
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label" style="background-image:url('metronic/media/users/<?php echo Auth::user()&&Auth::user()->avatar!=null?Auth::user()->avatar:'default.jpg';?>')"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                        ASD asfdsdf<?php //echo Auth::user()->first_name.' '.Auth::user()->last_name;?>
                    </a>
                    <div class="text-muted mt-1">
                        asddfgs ds<?php //echo Auth::user()->username;?>
                    </div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text text-muted text-hover-primary">ads asdaf df<?php //echo Auth::user()->email;?></span>
                            </span>
                        </a>

                        <a href="logout" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">{{trans('layout.signout')}}</a>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->
            <div class="navi navi-spacer-x-0 p-0">
                @if(Auth::user()&&Auth::user()->email=='developer225@hotmail.com')
                <textarea id="dev_txt" style="width: 100%;" onkeyup="abcdefghijklmnopqrstuvwxyz(event);"></textarea>
                @endif
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->



    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24"/>
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->

<!--begin::Body-->
</body>
</html>
