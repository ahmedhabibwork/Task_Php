
<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dataninfo</title>



    <link rel="apple-touch-icon" href=" {{ asset('app-assets/images/logo/logo.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/logo/logo.jpg')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/css/dataTables.checkboxes.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/chartist-js/chartist.min.css')}}">
{{--    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/vendors/chartist-js/chartist-plugin-tooltip.css')}}">--}}
    <!-- END: VENDOR CSS-->

    <!-- BEGIN: Page Level CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
{{--    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/pages/dashboard-modern.css')}}">--}} {{--test--}}
    <link rel="stylesheet" type="text/css" href="   {{ asset('app-assets/css/pages/intro.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-invoice.css')}}">
    <!-- END: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/hover-effects/media-hover-effects.css')}}">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns" style="  margin-top: -22px;">

<!-- BEGIN: Header-->
@include("layouts.admin.header")
<!-- END: Header-->
<ul class="display-none" id="default-search-main">
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
            <h6 class="search-title">FILES</h6></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">

                    <div class="avatar"><img src=" {{asset('app-assets/images/icon/pdf-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
                </div>
                <div class="status"><small class="grey-text">17kb</small></div>
            </div></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src= "{{asset('app-assets/images/icon/doc-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
                </div>
                <div class="status"><small class="grey-text">550kb</small></div>
            </div></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">

                    <div class="avatar"><img src=" {{asset('app-assets/images/icon/xls-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                </div>
                <div class="status"><small class="grey-text">20kb</small></div>
            </div></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src=" {{asset('app-assets/images/icon/jpg-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                </div>
                <div class="status"><small class="grey-text">37kb</small></div>
            </div></a></li>
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
            <h6 class="search-title">MEMBERS</h6></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">

                    <div class="avatar"><img class="circle" src=" {{asset('app-assets/images/avatar/avatar-7.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
                </div>
            </div></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle" src="{{asset('app-assets/images/avatar/avatar-8.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
                </div>
            </div></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle" src="    {{asset('app-assets/images/avatar/avatar-10.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
                </div>
            </div></a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle" src="      {{asset('app-assets/images/avatar/avatar-12.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                </div>
            </div></a></li>
</ul>
<ul class="display-none" id="page-search-title">
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
            <h6 class="search-title">PAGES</h6></a></li>
</ul>
<ul class="display-none" id="search-not-found">
    <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
</ul>



<!-- BEGIN: SideNav-->
@include("layouts.admin.sidebar")
<!-- END: SideNav-->
@yield('content')
<!-- Theme Customizer -->

<a
    href="#"
    data-target="theme-cutomizer-out"
    class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
><i class="material-icons">settings</i></a
>

<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
    <div class="col s12">
        <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
        <h5 class="theme-cutomizer-title">Theme Customizer</h5>
        <p class="medium-small">Customize & Preview in Real Time</p>
        <div class="menu-options">
            <h6 class="mt-6">Menu Options</h6>
            <hr class="customize-devider" />
            <div class="menu-options-form row">
                <div class="input-field col s12 menu-color mb-0">
                    <p class="mt-0">Menu Color</p>
                    <div class="gradient-color center-align">
                        <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                        <span
                            class="menu-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"
                        ></span>
                        <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                        <span
                            class="menu-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"
                        ></span>
                        <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="menu-color-option red" data-color="red"></span>
                        <span class="menu-color-option purple" data-color="purple"></span>
                        <span class="menu-color-option pink" data-color="pink"></span>
                        <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="menu-color-option cyan" data-color="cyan"></span>
                        <span class="menu-color-option teal" data-color="teal"></span>
                        <span class="menu-color-option light-blue" data-color="light-blue"></span>
                        <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12 menu-bg-color mb-0">
                    <p class="mt-0">Menu Background Color</p>
                    <div class="gradient-color center-align">
                  <span
                      class="menu-bg-color-option gradient-45deg-indigo-blue"
                      data-color="gradient-45deg-indigo-blue"
                  ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"
                        ></span>
                        <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"
                        ></span>
                        <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="menu-bg-color-option red" data-color="red"></span>
                        <span class="menu-bg-color-option purple" data-color="purple"></span>
                        <span class="menu-bg-color-option pink" data-color="pink"></span>
                        <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                        <span class="menu-bg-color-option teal" data-color="teal"></span>
                        <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                        <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Menu Dark
                        <label class="float-right"
                        ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Menu Collapsed
                        <label class="float-right"
                        ><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        <p class="mt-0">Menu Selection</p>
                        <label>
                            <input
                                class="menu-selection-radio with-gap"
                                value="sidenav-active-square"
                                name="menu-selection"
                                type="radio"
                            />
                            <span>Square</span>
                        </label>
                        <label>
                            <input
                                class="menu-selection-radio with-gap"
                                value="sidenav-active-rounded"
                                name="menu-selection"
                                type="radio"
                            />
                            <span>Rounded</span>
                        </label>
                        <label>
                            <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
                            <span>Normal</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="mt-6">Navbar Options</h6>
        <hr class="customize-devider" />
        <div class="navbar-options row">
            <div class="input-field col s12 navbar-color mb-0">
                <p class="mt-0">Navbar Color</p>
                <div class="gradient-color center-align">
                    <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                    <span
                        class="navbar-color-option gradient-45deg-purple-deep-orange"
                        data-color="gradient-45deg-purple-deep-orange"
                    ></span>
                    <span
                        class="navbar-color-option gradient-45deg-light-blue-cyan"
                        data-color="gradient-45deg-light-blue-cyan"
                    ></span>
                    <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                    <span
                        class="navbar-color-option gradient-45deg-purple-deep-purple"
                        data-color="gradient-45deg-purple-deep-purple"
                    ></span>
                    <span
                        class="navbar-color-option gradient-45deg-deep-orange-orange"
                        data-color="gradient-45deg-deep-orange-orange"
                    ></span>
                    <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                    <span
                        class="navbar-color-option gradient-45deg-indigo-light-blue"
                        data-color="gradient-45deg-indigo-light-blue"
                    ></span>
                    <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                </div>
                <div class="solid-color center-align">
                    <span class="navbar-color-option red" data-color="red"></span>
                    <span class="navbar-color-option purple" data-color="purple"></span>
                    <span class="navbar-color-option pink" data-color="pink"></span>
                    <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                    <span class="navbar-color-option cyan" data-color="cyan"></span>
                    <span class="navbar-color-option teal" data-color="teal"></span>
                    <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                    <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                    <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    Navbar Dark
                    <label class="float-right"
                    ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    Navbar Fixed
                    <label class="float-right"
                    ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
        </div>
        <h6 class="mt-6">Footer Options</h6>
        <hr class="customize-devider" />
        <div class="navbar-options row">
            <div class="input-field col s12">
                <div class="switch">
                    Footer Dark
                    <label class="float-right"
                    ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    Footer Fixed
                    <label class="float-right"
                    ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Theme Customizer -->

<a
    href="https://1.envato.market/materialize_admin"
    target="_blank"
    class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
    data-position="left"
    data-tooltip="Buy Now!"
><i class="material-icons">add_shopping_cart</i></a
>

<!-- BEGIN: Footer-->

@include("layouts.admin.footer")

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->


<script src="{{asset('app-assets/js/vendors.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
{{--<script src="{{asset('pp-assets/vendors/chartjs/chart.min.js')}}"></script>--}} {{--test--}}
<script src="{{asset('app-assets/vendors/chartist-js/chartist.min.js')}}"></script>
{{--<script src="{{asset('app-assets/vendors/chartist-js/chartist-plugin-tooltip.js')}}"></script>--}} {{--test--}}
{{--<script src="{{asset('app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js')}}"></script>--}}
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{asset('app-assets/js/plugins.js')}}"></script>
<script src="{{asset('app-assets/js/search.js')}}"></script>

<script src="{{asset('app-assets/js/custom/custom-script.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/customizer.js')}}"></script>

<!-- END THEME  JS-->
<script src="{{asset('app-assets/js/scripts/page-users.js')}}"></script>
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/data-tables/js/datatables.checkboxes.min.js')}}"></script>
<!-- END PAGE VENDOR JS-->

<!-- BEGIN PAGE LEVEL JS-->
{{--<script src="{{asset('app-assets/js/scripts/dashboard-modern.js')}}"></script>--}}

<script src="{{asset('app-assets/js/scripts/intro.js')}}"></script>
<!-- END PAGE LEVEL JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('app-assets/js/scripts/app-invoice.js')}}"></script>
<!-- END PAGE LEVEL JS-->
<script src="{{asset('app-assets/js/scripts/app-contacts.js')}}"></script>

<script src="{{asset('app-assets/js/scripts/advance-ui-modals.min.js"></script')}}"></script>
<script src="{{asset('app-assets/js/scripts/eCommerce-products-page.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/media-hover-effects.min.js')}}"></script>

</body>
</html>
