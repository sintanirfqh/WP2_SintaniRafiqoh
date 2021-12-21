 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-book-reader"></i>
         </div>
         <div class="si debar-brand-text mx-3">GOBIMBEL</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- QUERY MENU -->
     <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`. `id`, `menu`
                       FROM `user_menu` JOIN `user_access_menu`
                         ON `user_menu`. `id` = `user_access_menu`. `menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";
        $menu = $this->db->query($queryMenu)->result_array();
        var_dump($menu);
        die;

        ?>

     <!-- Heading -->
     <div class="sidebar-heading">
         Admin
     </div>

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="index.html">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">




     <!-- Heading -->
     <div class="sidebar-heading">
         User
     </div>
     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-user"></i>
             <span>My profile</span></a>
     </li>









     <!-- Heading -->
     <div class="sidebar-heading">

     </div>



     <!-- Divider -->
     <hr class="sidebar-divider">

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('auth/logout') ?>">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>logout</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">



     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>



 </ul>
 <!-- End of Sidebar -->