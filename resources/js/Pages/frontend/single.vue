<template>
    <div>
        <FrontEndLayout>

            <div class="section">
                <div class="container mt-2">
                    <div class="row justify-content-between">
                        <div class="col-lg-7">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active rounded-3">
                                    <img :src="'/storage/'+property.imageOne" class="d-block w-100" alt="..." style="height:400px !important;">
                                  </div>
                                  <div class="carousel-item rounded-3">
                                    <img :src="'/storage/'+property.imageTwo" class="d-block w-100" alt="..." style="height:400px !important;">
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="heading text-primary">{{property.name}}</h2>
                            <p class="meta"><b>City: {{property.city.city}} </b></p>
                            <p class="meta"><b>Road: {{property.road.road}} </b></p>
                            <p class="meta"><b>Zip Code: {{property.zip_code.zipCode}} </b></p>
                            <p class="text-black-50"> {{property.description}} </p>
                           
                            
                            <div class="d-block agent-box p-5">
                                <div class="img mb-4">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeaIubItbnZzhuX3Mv2mcOTjLwECoyz-CkCy4jyRj2&s" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h3 class="mb-0"> {{property.agent.name}} </h3>
                                    <div class="meta mb-3">Real Estate</div>
                                    <p> {{property.agent.description}} </p>
                                    <ul class="list-unstyled social dark-hover d-flex">
                                        <li class="me-2"><a :href="property.agent.instagram"><i class="fs-2  fa-brands fa-square-instagram"></i></a></li>
                                        <li class="me-2"><a :href="property.agent.twitter"><i class="fs-2  fa-brands fa-square-twitter"></i></a></li>
                                        <li class="me-2"><a :href="property.agent.facebook"> <i class="fs-2 fa-brands fa-square-facebook"></i> </a></li>
                                        <li class="me-1"><a :href="property.agent.linkedin"><i class="fs-2  fa-brands fa-linkedin"></i></a></li>
            
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

       defineProps({
             property:Array
       })
</script>