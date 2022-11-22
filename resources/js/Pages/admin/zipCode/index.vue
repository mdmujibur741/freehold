<script setup>
           import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
           import { Link } from '@inertiajs/inertia-vue3';

           defineProps({
            zipCode: Object
           })
</script>




<template>
    <div >
   

        <AuthenticatedLayout>
           <div class="row">
             
              <div class="card" style="background: #D9DDEE;">
                    <div class="card-body">
                     <div v-if="$page.props.flash.message" class="" >
                        {{ $page.props.flash.message }}
                      </div>
        
                    <div class="text-end">
                        <Link :href="route('admin.zipCode.create')" class="my-3 p-2 btn btn-primary float-right">Add Zip Code</Link>
                    </div>
        
                              
                        <table class="table table-bordered">
                            <thead class="thead">
                            <tr >
                                    <th scope="col">
                                       Serial
                                    </th>
                                    <th scope="col">
                                      City 
                                    </th>
                                    <th scope="col">
                                       Road
                                    </th>
                                    <th scope="col">
                                      Zip Code
                                    </th>
                                    <th scope="col">
                                       Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody >
                                 
                                <tr v-for="(zip, index) in zipCode.data" :key="zip.id" class="">
                                    <th scope="row">
                                       {{index+1}}
                                    </th>
                                    <td >
                                       {{zip.city.city}}
                                    </td>
                                    <td >
                                      {{zip.road.road}}
                                   </td>
                                   <td >
                                    {{zip.zipCode}}
                                 </td>
                                    <td>
        
                               <Link :href="route('admin.zipCode.edit', zip.id)" class="p-2 btn btn-sm btn-primary">Edit</Link>
                               <Link :href="route('admin.zipCode.destroy', zip.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger p-2 ms-1">Delete</Link>
                                  
                            </td>
                                
                                </tr>
                            </tbody>
                       
                        </table>
        
                        <div class="d-flex justify-content-center my-4">
                               
                           <Link class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-for="link in zipCode.meta.links" :href="link.url" v-html="link.label" />
                        </div>
            
              
                    
                    </div>
              </div>
                             
           </div>
        </AuthenticatedLayout>
      </div>
</template>