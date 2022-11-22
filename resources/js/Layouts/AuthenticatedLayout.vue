<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
   <div>
    <div class="container-fluid overflow-hidden" >
        

<!--Main Navigation-->
<header>
   <!-- Sidebar -->
   <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <Link :href="route('dashboard')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.url === '/dashboard' }" aria-current="true" >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </Link>
          <Link :href="route('admin.property.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/property') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Property </span>
          </Link>
          <Link :href="route('admin.agent.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/agent') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Agent </span>
          </Link>
          <Link :href="route('admin.city.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/city') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>City </span>
          </Link>
          <Link :href="route('admin.bed.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/bed') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Bed </span>
          </Link>
          <Link :href="route('admin.shower.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/shower') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Shower </span>
          </Link>
          <Link :href="route('admin.road.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/road') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Road </span>
          </Link>
          <Link :href="route('admin.zipCode.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/zipCode') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Zip Code </span>
          </Link>
          <Link :href="route('admin.status.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/status') }">
            <i class="fas fa-chart-area fa-fw me-3"></i><span> Status </span>
          </Link>
          <Link :href="route('logout')" method="post" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-area fa-fw me-3"></i><span> Logout </span>
          </Link>
        
          <Link :href="route('web.home')" class="btn btn-info my-5 mx-3"> Website </Link>
         
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
 
   <!-- Navbar -->
   <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
     <!-- Container wrapper -->
     <div class="container-fluid">
       <!-- Toggle button -->
       <button
         class="navbar-toggler"
         type="button"
         data-mdb-toggle="collapse"
         data-mdb-target="#sidebarMenu"
         aria-controls="sidebarMenu"
         aria-expanded="false"
         aria-label="Toggle navigation"
       >
         <i class="fas fa-bars"></i>
       </button>
 
       <!-- Brand -->
       <a class="navbar-brand" href="#">
         <img
           src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
           height="25"
           alt="MDB Logo"
           loading="lazy"
         />
       </a>
       <!-- Search form -->
       <form class="d-none d-md-flex input-group w-auto my-auto">
         <input
           autocomplete="off"
           type="search"
           class="form-control rounded"
           placeholder='Search (ctrl + "/" to focus)'
           style="min-width: 225px;"
         />
         <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
       </form>
 
       <!-- Right links -->
       <ul class="navbar-nav ms-auto d-flex flex-row">
         <!-- Notification dropdown -->
         <li class="nav-item dropdown">
           <a
             class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
           >
             <i class="fas fa-bell"></i>
             <span class="badge rounded-pill badge-notification bg-danger">1</span>
           </a>
           <ul
             class="dropdown-menu dropdown-menu-end"
             aria-labelledby="navbarDropdownMenuLink"
           >
             <li>
               <a class="dropdown-item" href="#">Some news</a>
             </li>
             <li>
               <a class="dropdown-item" href="#">Another news</a>
             </li>
             <li>
               <a class="dropdown-item" href="#">Something else here</a>
             </li>
           </ul>
         </li>
 
         <!-- Icon -->
         <li class="nav-item">
           <a class="nav-link me-3 me-lg-0" href="#">
             <i class="fas fa-fill-drip"></i>
           </a>
         </li>
         <!-- Icon -->
         <li class="nav-item me-3 me-lg-0">
           <a class="nav-link" href="#">
             <i class="fab fa-github"></i>
           </a>
         </li>
 
         <!-- Icon dropdown -->
         <li class="nav-item dropdown">
           <a
             class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
             href="#"
             id="navbarDropdown"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
           >
             <i class="united kingdom flag m-0"></i>
           </a>
           <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
             <li>
               <a class="dropdown-item" href="#"
                 ><i class="united kingdom flag"></i>English
                 <i class="fa fa-check text-success ms-2"></i
               ></a>
             </li>
             <li><hr class="dropdown-divider" /></li>
             <li>
               <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
             </li>
             <li>
               <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
             </li>
             <li>
               <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
             </li>
             <li>
               <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
             </li>
             <li>
               <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
             </li>
             <li>
               <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
             </li>
             <li>
               <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
             </li>
             <li>
               <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
             </li>
           </ul>
         </li>
 
         <!-- Avatar -->
         <li class="nav-item dropdown">
           <a
             class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
           >
             <img
               src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
               class="rounded-circle"
               height="22"
               alt="Avatar"
               loading="lazy"
             />
           </a>
           <ul
             class="dropdown-menu dropdown-menu-end"
             aria-labelledby="navbarDropdownMenuLink"
           >
             <li>
               <a class="dropdown-item" href="#">My profile</a>
             </li>
             <li>
               <a class="dropdown-item" href="#">Settings</a>
             </li>
             <li>
               <a class="dropdown-item" href="#">Logout</a>
             </li>
           </ul>
         </li>
       </ul>
     </div>
     <!-- Container wrapper -->
   </nav>
   <!-- Navbar -->
 </header>
 <!--Main Navigation-->
 
 <!--Main layout-->
 <main style="margin: 80px 10px; ">
   
   <slot />
 </main>
 <!--Main layout-->













        

   
    </div>
  </div>
</template>

<style scoped>
body {
   background-color: #fbfbfb;
 }
 @media (min-width: 991.98px) {
   main {
     padding-left: 240px;
   }
 }
 
 /* Sidebar */
 .sidebar {
   position: fixed;
   top: 0;
   bottom: 0;
   left: 0;
   padding: 58px 0 0; /* Height of navbar */
   box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
   width: 240px;
   z-index: 600;
 }
 
 @media (max-width: 991.98px) {
   .sidebar {
     width: 100%;
   }
 }
 .sidebar .active {
   border-radius: 5px;
   box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
 }
 
 .sidebar-sticky {
   position: relative;
   top: 0;
   height: calc(100vh - 48px);
   padding-top: 0.5rem;
   overflow-x: hidden;
   overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
 }
</style>