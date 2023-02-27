<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="g-sidenav-show bg-gray-200">

    <!-- SIDEBAR -->
    @if ( Str::length(Auth::guard('humas')->user()) > 0)
        @include('partials.sidebar-humas')
    @elseif ( Str::length(Auth::guard('guru')->user()) > 0)
        @include('partials.sidebar-guru')
        @elseif ( Str::length(Auth::guard('dudi')->user()) > 0)
        @include('partials.sidebar-dudi')
    @endif

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('partials.navbar')
        <div class="container-fluid py-4">
            @yield('content')
        </div>
        @include('sweetalert::alert')
        @include('partials.footer')
    </main>

    @include('partials.script')

</body>

</html>