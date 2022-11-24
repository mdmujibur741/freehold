<template>
  <div class="">
   

    <nav class="navbar navbar-expand-lg bg-transparent py-3 shadow-none">
        <div class="container">
            <a class="navbar-brand w-8" href="#" data-config-id="brand">
                <img src="https://www.loopple.com/img/loopple-logo.png" alt="" width="80">
            </a>
  
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <li class="nav-item mx-2">
                        <Link :href="route('web.home')" class="nav-link px-2 rounded-3 cursor-pointer" :class="{ 'active': $page.url === '/' }">
                           <b> Home</b>
                        </Link>
                    </li>
                    <li class="nav-item mx-2">
                        <Link :href="route('web.properties')" class="nav-link ps-2 cursor-pointer rounded-3" :class="{ 'active': $page.url.startsWith('/properties') }"><b>Properties</b></Link>
                    </li>
                    <li class="nav-item mx-2">
                        <Link :href="route('web.contact')" class="nav-link ps-2 cursor-pointer rounded-3" :class="{ 'active': $page.url === '/contact' }">
                           <b> Contact Us</b>
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



<main>
   <slot />
</main>









    <footer class="footer py-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 mb-5 mb-lg-0">
                  <h6 class="text-uppercase mb-2">Houses</h6>
                  <p class="mb-4 pb-2">Find your next home.</p>
                  <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                      <span class="text-lg fab fa-facebook" aria-hidden="true"></span>
                  </a>
                  <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                      <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                  </a>
                  <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                      <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                  </a>
                  <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                      <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                  </a>
                  <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                      <span class="text-lg fab fa-github" aria-hidden="true"></span>
                  </a>
              </div>
              <div class="col-md-2 col-6 ms-lg-auto mb-md-0 mb-4">
                  <h6 class="text-sm">Company</h6>
                  <ul class="flex-column ms-n3 nav">
                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:void(0);">
                              About Us
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Careers
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Press
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Blog
                          </a>
                      </li>
                  </ul>
              </div>

              <div class="col-md-2 col-6 mb-md-0 mb-4">
                  <h6 class="text-sm">Pages</h6>
                  <ul class="flex-column ms-n3 nav">
                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Login
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Register
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Add list
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Contact
                          </a>
                      </li>
                  </ul>
              </div>

              <div class="col-md-2 col-6 mb-md-0 mb-4">
                  <h6 class="text-sm">Legal</h6>
                  <ul class="flex-column ms-n3 nav">
                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Terms
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              About Us
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Team
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Privacy
                          </a>
                      </li>
                  </ul>
              </div>

              <div class="col-md-2 col-6 mb-md-0 mb-4">
                  <h6 class="text-sm">Resources</h6>
                  <ul class="flex-column ms-n3 nav">
                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Blog
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Service
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Product
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-secondary" href="javascript:;">
                              Pricing
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <hr class="horizontal dark mt-lg-5 mt-4 mb-sm-4 mb-1">
          <div class="row">
              <div class="col-8 mx-lg-auto text-lg-center">
                  <p class="text-sm text-secondary">
                      Copyright © 2022 Soft &amp; Loopple by Creative Tim.
                  </p>
              </div>
          </div>
      </div>
  </footer>
  </div>
</template>



<script setup>
        import { Link } from '@inertiajs/inertia-vue3';
       
</script>