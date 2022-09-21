 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-code"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Jogosetran Admin <sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Admin
     </div>

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('user/dashboard'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Kelola Data
     </div>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('user/profileAdmin'); ?>">
             <i class="fas fa-fw fa-user"></i>
             <span>Profil Admin</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-church"></i>
             <span>Kelola data Gereja</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('profile/index'); ?>">
             <i class="fas fa-users"></i>
             <span>Kelola Profil Gembala</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-bullhorn"></i>
             <span>Kelola Pengumuman</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-book-open"></i>
             <span>Kelola Warta</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-folder-open"></i>
             <span>Kelola Dokumen</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fa fa-images"></i>
             <span>Kelola Dokumentasi</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-clipboard-list"></i>
             <span>Kelola Jadwal Pelayanan</span></a>
     </li>

<!-- Divider -->
<hr class="sidebar-divider">

     <li class="nav-item"> 
         <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-fw "></i>
            <span>Logout</span>
        </a>
    </li>
        

    

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->