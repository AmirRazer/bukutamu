 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 <!-- Heading -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Aplikasi Buku tamu</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{url('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

 <div class="sidebar-heading">
    Interface
</div>
    <!-- Nav Item - Charts -->
 <li class="nav-item">
 <a class="nav-link" href="{{('admin/tamu')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Data Buku Tamu</span></a>
</li>
    <!-- Sidebar - Brand -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>