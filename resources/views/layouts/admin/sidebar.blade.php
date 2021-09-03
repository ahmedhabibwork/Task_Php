<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">

        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{url('/admin')}}"><img
                    class="hide-on-med-and-down" src=" {{asset('app-assets/images/logo/logo.jpg')}}"
                    alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up"
                                                 src="{{asset('app-assets/images/logo/logo.png')}}"
                                                 alt="materialize logo"/><span class="logo-text hide-on-med-and-down">DatanInfo</span></a><a
                class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="menu-accordion">


        <li class=" bold"><a class=" waves-effect waves-cyan " href="{{url('/admin')}}"><i class="material-icons">settings_input_svideo</i><span
                    class="menu-title" data-i18n="Dashboard">Home</span></a>

        </li>
        @php   $id = \Illuminate\Support\Facades\Auth::id();
                                                        $user_login =\App\Models\User::find($id);
        @endphp
        @if($user_login->role_id==1 )

        <li class="navigation-header"><a class=" navigation-header-text">Admin </a><i
                class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold @if(request()->segment(2) == 'users') active @endif "><a
                @if(request()->segment(2) == 'users') active
                @endif  class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                    class="material-icons">lock_open</i><span class="menu-title" data-i18n="User">Admin User </span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li @if(request()->segment(2) == 'users' && request()->segment(3) != 'create' ) active @endif><a
                            class="@if(request()->segment(2) == 'users' && request()->segment(3) != 'create' ) active @endif"
                            href="{{ route('admin.users.index') }}"><i
                                class="material-icons">radio_button_unchecked</i><span data-i18n="List">List</span></a>
                    </li>
                    <li @if(request()->segment(3) == 'users' && request()->segment(3) == 'create') active @endif ><a
                            class="@if(request()->segment(2) == 'users' && request()->segment(3) == 'create') active @endif"
                            href="{{ route('admin.users.create') }}"><i
                                class="material-icons">radio_button_unchecked</i><span
                                data-i18n="View">Create</span></a>
                    </li>
                </ul>
            </div>
        </li>

            <li class="navigation-header"><a class=" navigation-header-text">Employees </a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold @if(request()->segment(2) == 'employees') active @endif "><a
                    @if(request()->segment(2) == 'employees') active
                    @endif  class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">lock_open</i><span class="menu-title"
                                                                  data-i18n="User">Employee</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li @if(request()->segment(2) == 'employees' && request()->segment(3) != 'create' ) active @endif>
                            <a class="@if(request()->segment(2) == 'employees' && request()->segment(3) != 'create' ) active @endif"
                               href="{{ route('admin.employees.index') }}"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="List">List</span></a>
                        </li>
                        <li @if(request()->segment(3) == 'employees' && request()->segment(3) == 'create') active @endif >
                            <a class="@if(request()->segment(2) == 'employees' && request()->segment(3) == 'create') active @endif"
                               href="{{ route('admin.employees.create') }}"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="View">Create</span></a>
                        </li>
                    </ul>
                </div>
            </li>

        @endif

        @if($user_login->role_id==1  || $user_login->role_id==2)
            <li class="navigation-header"><a class=" navigation-header-text">Customers </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>

            <li class="bold @if(request()->segment(2) == 'customers') active @endif "><a @if(request()->segment(2) == 'customers') active @endif  class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">Customers</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li @if(request()->segment(2) == 'customers' && request()->segment(3) != 'create' ) active @endif><a  class="@if(request()->segment(2) == 'customers' && request()->segment(3) != 'create' ) active @endif" href="{{ route('admin.customers.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">List</span></a>
                        </li>
                        <li @if(request()->segment(3) == 'customers' && request()->segment(3) == 'create') active @endif ><a class="@if(request()->segment(2) == 'customers' && request()->segment(3) == 'create') active @endif" href="{{ route('admin.customers.create') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">Create</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold @if(request()->segment(2) == 'actions') active @endif "><a
                    @if(request()->segment(2) == 'actions') active
                    @endif  class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">style</i><span class="menu-title"
                                                                   data-i18n="User">Actions</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li @if(request()->segment(2) == 'actions' && request()->segment(3) != 'create' ) active @endif>
                            <a class="@if(request()->segment(2) == 'actions' && request()->segment(3) != 'create' ) active @endif"
                               href="{{ route('admin.actions.index') }}"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="List">List</span></a>
                        </li>
                        <li @if(request()->segment(3) == 'actions' && request()->segment(3) == 'create') active @endif >
                            <a class="@if(request()->segment(2) == 'actions' && request()->segment(3) == 'create') active @endif"
                               href="{{ route('admin.actions.create') }}"><i
                                    class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="View">Create</span></a>
                        </li>
                    </ul>
                </div>

            </li>
        @endif

        <li class=" bold"><a class=" waves-effect waves-cyan " href="{{ route('admin.employee_customers.index')}}"><i class="material-icons">branding_watermark</i><span
                    class="menu-title" data-i18n="Dashboard">Emp Assign To Customers</span></a>

        </li>

    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
       href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
