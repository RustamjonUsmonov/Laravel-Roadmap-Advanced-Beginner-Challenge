<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body class="loading authentication-bg" data-layout="detached"
      data-layout-config='{"leftSidebarCondensed":false,"darkMode":true, "showRightSidebarOnStart": false}'>

<!-- Start Content-->
<div class="container-fluid">

    <!-- Begin page -->
    <div class="wrapper">
        <div class="content-page">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- END Container -->
@include('components.scripts')

</body>
</html>
