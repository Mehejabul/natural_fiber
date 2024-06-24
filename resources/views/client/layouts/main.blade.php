@include('client.layouts.header')

<body>
<div class="body">
    @include('client.layouts.menu')


    @yield('content')
</div>
@include('client.layouts.footer')
@stack('scripts')
