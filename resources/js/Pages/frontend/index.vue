<template>
 <div>
   <FrontEndLayout>
    <header class="">
        <div class="page-header min-vh-50 m-3 p-4 border-radius-xl py-9" style="background-image: url(asset('/storage/property/r4kHwZwwGFwyhZdWmOmM4TSeezy4bYUKjA76mWdj.jpg'));">
            <span class="mask bg-gradient-dark opacity-7"></span>
            <div class="container h-100">
                <div class="row">
                    <div class="col-lg-5 mt-auto justify-content-bottom my-auto">

                        <h5 class="text-gradient text-warning fadeIn1 fadeInBottom text-warning mb-0 font-weight-bolder">Houses</h5>
                        <h1 class="text-white fadeIn2 fadeInBottom mb-4 display-4 font-weight-bolder" spellcheck="false">One step closer to your dream house</h1>

                        <a class="btn bg-gradient-warning">Read article</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="mb-5" spellcheck="false">Latest Property</h3>
                </div>
             
                <div class="col-lg-4 mb-lg-0 mb-4" v-for="latest in latests.data" :key="latest.id">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <Link :href="route('web.property',latest.slug)" class="d-block">
                                <img :src="latest.imageOne" class="img-fluid border-radius-lg shadow">
                            </Link>
                        </div>

                        <div class="card-body pt-3">
                            <div class="d-flex align-items-center">
                                <div>
                                   <b> &#36; {{latest.price}}</b> 
                                    <p class="card-description mb-4 text-sm">
             
                                        <Link :href="route('web.city',latest.city.slug)"> {{latest.city.city}}</Link>
                                     
                                    </p>
                                </div>
                                <div class="ms-auto">
                                    <Link :href="route('web.property',latest.slug)" class="btn btn-link text-dark p-0">
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
                                          
                                            <h6 class="font-weight-bolder mb-0"> {{latest.bed.bed}} </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-bath text-gradient text-warning text-lg mb-0" aria-hidden="true"></i>
                                        <div class="ms-3">
                                          
                                            <h6 class="font-weight-bolder mb-0"> {{latest.shower.shower}} </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
            </div>
        </div>
    </section>

    <section class="py-6 bg-gray-100">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <h3 class="mb-5" spellcheck="false">View Properties for Sale</h3>
                </div>
                <div v-for="sell in sells.data" :key="sell.id" class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="card mb-4">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <Link :href="route('web.property', sell.slug)" class="d-block">
                                <img :src="sell.imageOne" class="img-fluid border-radius-lg shadow" style="width:100%; height:210px !important;">
                            </Link>
                        </div>

                        <div class="card-body pt-3">
                            <div class="d-flex align-items-center">
                                <div>
                                   
                                        <b> &#36; {{sell.price}}</b> 
                                    
                                    <p class="card-description mb-4 text-sm">
                                        <Link :href="route('web.city',sell.city.slug)" class="btn btn-link text-dark p-0">
                                        {{sell.city.city}}
                                        </Link>
                                    </p>
                                </div>
                                <div class="ms-auto">
                                    <Link :href="route('web.property',sell.slug)" class="btn btn-link text-dark p-0">
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
                                           
                                            <h6 class="font-weight-bolder mb-0"> {{sell.bed.bed}} </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-bath text-gradient text-warning text-lg mb-0" aria-hidden="true"></i>
                                        <div class="ms-3">
                                       
                                            <h6 class="font-weight-bolder mb-0"> {{sell.shower.shower}} </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 mt-5 text-center">
                <Link :href="route('web.properties')" class="btn bg-gradient-dark">View All</Link>
            </div>

        </div>
    </section>

    <section class="pt-5 pb-0">
        <div class="container ">
            <div class="row lg-px-5 mx-auto">
                <div class="col-12 text-center">
                    <h3 class="mb-5" spellcheck="false">Top Agent</h3>
                </div>
                <div v-for="agent in agents.data" :key="agent.id"  class="col-lg-3 col-md-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block blur-shadow-image text-center">
                                <img :src="agent.image" alt="img-blur-shadow" class="img-fluid shadow rounded-circle" style="width:120px; height:120px !important">
                            </a>
                        </div>
                        <div class="card-body px-1 pt-3">
                            <a href="javascript:;">
                                <h5 class="text-center">
                                {{agent.name}}
                                </h5>
                            </a>
                            <p class="text-center">
                                 {{agent.description.slice(0,50)}}
                            </p>
                           
                        </div>
                    </div>
                </div>
            

            </div>
        </div>
    </section>
    <section class="my-5 py-5 bg-gradient-dark position-relative" style="background-image:url(https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/nastuh.jpg)">
        <span class="mask bg-gradient-dark opacity-8"></span>
        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto text-start">
                    <h5 class="text-white mb-lg-0 mb-5">
                        For being a bright color. For standing out. But the time is now to be okay to be the greatest you.
                    </h5>
                </div>
                <div class="col-lg-6 m-auto">
                    <div class="row">
                        <div class="col-sm-4 col-6 ps-sm-0 ms-auto">
                            <button type="button" class="btn bg-gradient-warning mb-0 ms-lg-3 ms-sm-2 mb-sm-0 mb-2 me-auto w-100 d-block">Start Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</FrontEndLayout>
</div>
</template>



<script setup>
           import FrontEndLayout from '@/Layouts/FrontEndLayout.vue';
           import { Link } from '@inertiajs/inertia-vue3';


           defineProps({
            latests: Object,
            sells: Object,
            agents: Object
           })
</script>