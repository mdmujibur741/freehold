<template>
  <FrontEndLayout>
         
    <section class="py-6 bg-gray-100">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <!-- <h3 class="mb-5" spellcheck="false">#{{city.city}}</h3> -->
                </div>

                <div v-for="property in properties.data" :key="property.id" class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="card mb-4">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <Link :href="route('web.property',property.slug)" class="d-block text-center">
                                <img :src="property.imageOne" class="img-fluid border-radius-lg shadow" style="width:316px; height:210px !important;">
                            </Link>
                        </div>

                     <div class="card-body pt-3">
                            <div class="d-flex align-items-center">
                                <div>
                                    
                                    <b>&#36;</b>  {{property.price}} 
                                  
                                    <p class="card-description mb-4 text-sm">
                                    <Link :href="route('web.city',property.city.slug)">
                                        {{property.city.city}}
                                    </Link>
                                    </p>
                                </div>
                                <div class="ms-auto">
                                    <Link :href="route('web.property',property.slug)" class="btn btn-link text-dark p-0">
                                        View details
                                    </Link>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-sitemap text-gradient text-warning text-lg mb-0" aria-hidden="true"></i>
                                        <div class="ms-3">
                                         
                                            <h6 class="font-weight-bolder mb-0">230m
                                                <small class="position-absolute text-xs justify-align-top mt-n0">2</small>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-bed text-gradient text-warning text-lg mb-0" aria-hidden="true"></i>
                                        <div class="ms-3">
                                           
                                            <h6 class="font-weight-bolder mb-0"> {{property.bed.bed}} </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-bath text-gradient text-warning text-lg mb-0" aria-hidden="true"></i>
                                        <div class="ms-3">
                                       
                                            <h6 class="font-weight-bolder mb-0"> {{property.shower.shower}} </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
              
            </div>
       
           
            <div class="row mb-4">
                <div class=" p-3 text-center">
                    <Link
                       class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                       v-for="link in properties.meta.links" :href="link.url" v-html="link.label" />
     
                 </div>
            </div>

        </div>
    </section>




  </FrontEndLayout>
</template>




<script setup>
     import FrontEndLayout from '@/Layouts/FrontEndLayout.vue';
     import { Link } from '@inertiajs/inertia-vue3';
     defineProps({
        properties: Object,        
     })
</script>