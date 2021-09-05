<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body class="loading" data-layout="detached"
      data-layout-config='{"leftSidebarCondensed":false,"darkMode":true, "showRightSidebarOnStart": false}'>

<!-- Topbar Start -->
@include('components.navbar')
<!-- end Topbar -->

<!-- Start Content-->
<div class="container-fluid">

    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
    @include('components.leftsidebar')
    <!-- Left Sidebar End -->

        <div class="content-page">
            <div class="content">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0" style="background-color: transparent !important;">
                                @yield('breadcrumb')
                            </ol>
                        </div>
                        <h4 class="page-title">@yield('page-title', 'Dashboard')</h4>
                    </div>
                </div>
                @if(session('message'))
                    <div class="col-12">
                        <div role="alert" class="alert badge-success-lighten font-20 text-center">
                            <i class="mdi mdi-bookmark-check-outline"></i> {{session('message')}}
                        </div>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert badge-danger-lighten font-15">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>
            <!-- End Content -->

            <!-- Footer Start -->
        @include('components.footer')
        <!-- end Footer -->

        </div>
        <!-- content-page -->

    </div>
    <!-- end wrapper-->
</div>
<!-- END Container -->
@include('components.scripts')

</body>
</html>
