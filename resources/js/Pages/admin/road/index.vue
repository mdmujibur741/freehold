<script setup>
           import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
           import { Link } from '@inertiajs/inertia-vue3';

           defineProps({
            roads: Object
           })
</script>




<template>
    <div >
   

        <AuthenticatedLayout>
           <div class="row">
             <div class="card" style="background: #D9DDEE;">
              <div v-if="$page.props.flash.message" class="" >
                  {{ $page.props.flash.message }}
                </div>
  
              <div class="text-end ">
                  <Link :href="route('admin.road.create')" class="btn btn-primary my-2">Add Road</Link>
              </div>
  
              <div class="card-body">
                        
                  <table class="table table-bordered">
                      <thead class="">
                      <tr >
                              <th scope="col" >
                                 Serial
                              </th>
                              <th scope="col" >
                                City 
                              </th>
                              <th scope="col">
                                 Road
                              </th>
                              <th scope="col" >
                                 Action
                              </th>
                          </tr>
                      </thead>
                      <tbody >
                           
                          <tr v-for="(road ,index) in roads.data" :key="road.id" class="">
                              <th scope="row" >
                                 {{index+1}}
                              </th>
                              <td >
                                 {{road.city.city}}
                              </td>
                              <td >
                                {{road.road}}
                             </td>
                              <td >
  
                         <Link :href="route('admin.road.edit', road.id)" class="btn btn-sm btn-primary me-2">Edit</Link>
                         <Link :href="route('admin.road.destroy', road.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger ">Delete</Link>
                            
                      </td>
                          
                          </tr>
                      </tbody>
                 
                  </table>
  
                  <div class="text-center">
                           <Link class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-for="link in roads.meta.links" :href="link.url" v-html="link.label" />
                        
                  </div>
      
              </div>
              
            </div>            
           </div>
        </AuthenticatedLayout>
      </div>
</template>