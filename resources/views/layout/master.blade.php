<!DOCTYPE html>
<html lang="en">
    @include('layout.style')
    <style>
        .container {
    max-width: 100%;
    overflow-x: auto; 
}
    </style>

<body>
  
    @include('layout.header')
    @include('layout.nav_header')
    @include('layout.menu')


    <div class="content-body">
        @yield('content')
    </div>
    {{-- <div class="container responsive"> --}}

    {{-- </div> --}}
    @include('layout.footer')
    @include('layout.script')
</body>
</html>
