@include('partials.admin-header')

    <div id="app">

            <div id="main-wrapper">
                @include('partials.admin-navbar')

                @include('partials.admin-sidebar')
                @include('sweet::alert')
                   @yield('admin-content')
                @include('partials.admin-footer')
            </div>

    </div>

