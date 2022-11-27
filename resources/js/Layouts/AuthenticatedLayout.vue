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
            <i class="fa-solid fa-tree-city me-3 text-info"></i><span>Property </span>
          </Link>
          <Link :href="route('admin.agent.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/agent') }">
            <i class="fa-solid fa-user-tie me-3 text-info"></i><span>Agent </span>
          </Link>
          <Link :href="route('admin.city.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/city') }">
            <i class="fa-solid fa-city me-3 text-info"></i><span>City </span>
          </Link>
          <Link :href="route('admin.bed.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/bed') }">
            <i class="fa-solid fa-bed me-3 text-info"></i><span>Bed </span>
          </Link>
          <Link :href="route('admin.shower.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/shower') }">
            <i class="fa-solid fa-bath me-3 text-info"></i><span>Shower </span>
          </Link>
          <Link :href="route('admin.road.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/road') }">
            <i class="fa-solid fa-road me-3 text-info"></i><span>Road </span>
          </Link>
          <Link :href="route('admin.zipCode.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/zipCode') }">
            <i class="fa-solid fa-envelopes-bulk me-3 text-info"></i><span>Zip Code </span>
          </Link>
          <Link :href="route('admin.status.index')" class="list-group-item list-group-item-action py-2 ripple" :class="{ 'active': $page.component.startsWith('admin/status') }">
            <i class="fa-solid fa-signal me-3 text-info"></i><span> Status </span>
          </Link>
          <Link :href="route('admin.setting.create')" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fa-solid fa-gear me-3 text-info"></i><span> Setting </span>
          </Link>
          <Link :href="route('logout')" method="post" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fa-solid fa-right-from-bracket me-3 text-info"></i><span> Logout </span>
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
       <a class="navbar-brand" >
         <img
           src="https://img.freepik.com/premium-vector/real-estate-logo-template_23-2147501949.jpg?w=740"
           height="40"
           alt="Logo"
           loading="lazy"
           class="rounded-circle"
          />
       </a>
    
 
       <!-- Right links -->
       <ul class="navbar-nav ms-auto d-flex flex-row">
 
         <!-- Icon -->
         <li class="nav-item me-3 me-lg-0">
           <a class="nav-link" target="_blank">
            <i class="fa-solid fa-user me-2"></i>
         <b>   {{ $page.props.auth.name }}</b>
           </a>
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