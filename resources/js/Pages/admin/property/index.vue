<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
   property: Object
})
</script>




<template>
   <div class="">


      <AuthenticatedLayout>
         <template #header>
            <h2 class="bg-info">
               Property Table
            </h2>
         </template>
         <div class="row">





            <div class="card" style="background: #D9DDEE;">

               <div class="card-body" style="background: #D9DDEE;">
                  <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 px-8 alert text-center text-white-100">
                     {{ $page.props.flash.message }}
                  </div>

                  <div class="text-end">
                     <Link :href="route('admin.property.create')" class="btn btn-sm btn-primary">
                     Add Property</Link>
                  </div>
<div class="table-responsive">


                <table class="table table-sm table-bordered">
                   <thead class="thead">
                    <tr>
                     <th scope="col">Serial</th>
                     <th scope="col">Name</th>
                     <th scope="col">City</th>
                     <th scope="col">Price</th>
                     <th scope="col">Road</th>
                     <th scope="col">Agent</th>
                     <th scope="col">Action</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr v-for="(item, index) in property.data" :key="item.index">
                     <th scope="row"> {{index+1}} </th >
                     <td> {{item.name}}  </td>
                     <td> {{item.city.city}}  </td>
                     <td> {{item.price}}  </td>
                     <td> {{item.road.road}} </td>
                     <td> {{item.agent.name}} </td>
                     <td> 
                          <div class="d-flex">
                                <Link :href="route('admin.property.edit', item.id)" class="btn btn-sm btn-primary px-3"> Edit</Link>
                               <Link :href="route('admin.property.destroy', item.id)" as="button" method="delete" class="btn btn-sm btn-danger px-3 ms-1">Delete</Link>
                              </div>   
                     </td>
                    </tr>
                   </tbody>
                </table>
               </div>

               </div>
               <div class="card-footer">

               </div>
            </div>

            <div class="bg-green p-3 text-center">
               <Link
                  class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                  v-for="link in property.meta.links" :href="link.url" v-html="link.label" />

            </div>


         </div>
      </AuthenticatedLayout>
   </div>
</template>