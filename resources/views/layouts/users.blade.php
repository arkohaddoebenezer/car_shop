<!DOCTYPE html>
<html lang="en">


@include('includes.users.head')


<body class="body-wrapper">
    @include('includes.users.navbar')


@yield('content')

    <!--============================
=            Footer            =
=============================-->

   @include('includes.users.footer')
 
</body>
@include('includes.users.scripts')
</html>
