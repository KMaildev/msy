@include('layouts.includes.header')
@include('layouts.includes.top')
@include('layouts.includes.menu')


<div class="page-wrapper">
    <div class="container-fluid">
        @include('layouts.includes.alert')
        @yield('content')
    </div>
</div>

@include('layouts.includes.footer')
