<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.topscrip')
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('layouts.components.side')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('layouts.components.navbar')
                <!-- end topbar -->
                <!-- dashboard inner -->
                @yield('content')
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    
    @include('components.bottomscrip')

</body>

</html>
