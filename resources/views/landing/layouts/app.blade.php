<!DOCTYPE html>
<html lang="en">

@include('landing.layouts.head')

<body>

    @include('landing.layouts.header')

    <!-- Main Content / Konten Dinamis Halaman -->
    @yield('content')

    @include('landing.layouts.footer')

    @include('landing.layouts.script')

</body>
</html>