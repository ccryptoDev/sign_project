<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head>
        <base href="">
        <meta charset="utf-8"/>
        <title>{{config('app.name')}}</title>
        <meta name="description" content="User Panel"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <!--end::Fonts-->
        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="/assets/media/logos/logo-letter-13.png"/>
    </head>
    <body  id="kt_body" style="background-image: url(/assets/media/bg/bg-10.jpg)"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >
        <div id="kt_header_mobile" class="header-mobile" >
            <a href="/">
                <img alt="Logo" src="/assets/media/logos/logo-letter-13.png" class="logo-default max-h-30px"/>
            </a>
            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
                </button>
                <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                    <span class="svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:/assets/media/svg/icons/General/User.svg-->
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
            </div>
            <!--end::Toolbar-->
        </div>
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <div id="kt_header" class="header  header-fixed " >
                        <div class=" container d-flex align-items-stretch justify-content-between">
                            <div class="d-flex align-items-stretch mr-3">
                                <div class="header-logo">
                                    <a href="/">
                                        <img alt="Logo" src="/assets/media/logos/logo-letter-13.png" class="logo-default max-h-40px"/>
                                        <img alt="Logo" src="/assets/media/logos/logo-letter-13.png" class="logo-sticky max-h-40px"/>
                                    </a>
                                </div>
                                <?php
                                    $route_name = request()->route()->getName();
                                    $level = Auth::user()->level;
                                ?>
                                <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                    <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile  header-menu-layout-default " >
                                        <ul class="menu-nav ">
                                            {{-- <li class="menu-item  menu-item-submenu menu-item-rel {{$route_name=='dashboard'?'menu-item-here':''}}"  data-menu-toggle="click" aria-haspopup="true">
                                                <a href="{{route('dashboard')}}" class="menu-link"><span class="menu-text">Dashboard</span><span class="menu-desc"></span><i class="menu-arrow"></i></a>
                                            </li> --}}
                                            <li class="menu-item  menu-item-submenu menu-item-rel {{$route_name=='sign-editor'?'menu-item-here':''}}"  data-menu-toggle="click" aria-haspopup="true">
                                                <a href="{{route('sign-editor')}}" class="menu-link"><span class="menu-text">Sign Editor</span><span class="menu-desc"></span><i class="menu-arrow"></i></a>
                                            </li>
                                            @if ($level == 2)
                                                <li class="menu-item  menu-item-submenu menu-item-rel {{$route_name=='create-font'?'menu-item-here':''}}"  data-menu-toggle="click" aria-haspopup="true">
                                                    <a href="{{route('create-font')}}" class="menu-link"><span class="menu-text">Font Editor</span><span class="menu-desc"></span><i class="menu-arrow"></i></a>
                                                </li>
                                            @endif
                                            @if ( $level != 0)
                                            <li class="menu-item  menu-item-submenu menu-item-rel {{$route_name=='user-management'?'menu-item-here':''}}"  data-menu-toggle="click" aria-haspopup="true">
                                                <a href="{{route('user-management')}}" class="menu-link"><span class="menu-text">User Management</span><span class="menu-desc"></span><i class="menu-arrow"></i></a>
                                            </li>
                                            @endif
                                            {{-- <li class="menu-item  menu-item-submenu menu-item-rel {{$route_name=='manage-location'?'menu-item-here':''}}"  data-menu-toggle="click" aria-haspopup="true">
                                                <a href="{{route('manage-location')}}" class="menu-link"><span class="menu-text">Manage Location</span><span class="menu-desc"></span><i class="menu-arrow"></i></a>
                                            </li> --}}
                                            <li class="menu-item  menu-item-submenu menu-item-rel {{$route_name=='profile' || $route_name == 'change-password' ?'menu-item-here':''}}"  data-menu-toggle="click" aria-haspopup="true">
                                                <a href="{{route('profile')}}" class="menu-link"><span class="menu-text">Profile</span><span class="menu-desc"></span><i class="menu-arrow"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="topbar">
                                <div class="dropdown">
                                    <div class="topbar-item">
                                        <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto" id="kt_quick_user_toggle">
                                            <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                            <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">{{Auth()->user()->first_name}}</span>
                                            <span class="symbol symbol-35">
                                            <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">{{substr(Auth()->user()->first_name,0,1)}}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="subheader py-2 py-lg-12  subheader-transparent " id="kt_subheader">
                            <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <div class="d-flex flex-column" style="display:inline-block !important">
                                        <h2 class="text-white font-weight-bold my-2 mr-5" style="text-transform: capitalize">
                                            {{str_replace("-", " ", $route_name)}}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>