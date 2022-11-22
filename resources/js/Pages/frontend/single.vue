<template>
    <div>
        <FrontEndLayout>

            <div class="section">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="assets/image/img_1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/image/img_2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/image/img_3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="heading text-primary">5232 California Ave. 21BC</h2>
                            <p class="meta">California, United States</p>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione laborum quo quos omnis sed magnam id, ducimus saepe, debitis error earum, iste dicta odio est sint dolorem magni animi tenetur.</p>
                            <p class="text-black-50">Perferendis eligendi reprehenderit, assumenda molestias nisi eius iste reiciendis porro tenetur in, repudiandae amet libero. Doloremque, reprehenderit cupiditate error laudantium qui, esse quam debitis, eum cumque perferendis, illum harum expedita.</p>
                            
                            <div class="d-block agent-box p-5">
                                <div class="img mb-4">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeaIubItbnZzhuX3Mv2mcOTjLwECoyz-CkCy4jyRj2&s" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h3 class="mb-0">Alicia Huston</h3>
                                    <div class="meta mb-3">Real Estate</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum quo quos omnis sed magnam id ducimus saepe</p>
                                    <ul class="list-unstyled social dark-hover d-flex">
                                        <li class="me-1"><a href="#"><span class="icon-instagram"></span></a></li>
                                        <li class="me-1"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="me-1"><a href="#"><span class="icon-facebook">  </span></a></li>
                                        <li class="me-1"><a href="#"><span class="icon-linkedin"></span></a></li>
            
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </FrontEndLayout>
    </div>
</template>

<script setup>
       import FrontEndLayout from '@/Layouts/FrontEndLayout.vue';
</script>