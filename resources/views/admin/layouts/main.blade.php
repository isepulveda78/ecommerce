@include('admin.layouts.header')
<div id="wrapper">
<!-- Sidebar -->
@include('admin.layouts.sidebar')
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
<!-- TopBar -->
@include('admin.layouts.navbar')
<!-- Topbar -->
@yield('content')
</div>
@include('admin.layouts.footer')