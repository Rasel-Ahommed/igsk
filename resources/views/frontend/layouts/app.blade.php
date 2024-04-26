@include('frontend.layouts.header')


{{-- @extends('backoffice.layouts.topBar') --}}
<div class="content">
    @yield('content')
</div>


<!-- Add your JavaScript links here -->
@include('frontend.layouts.footer')
