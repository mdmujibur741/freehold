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
           <div class="py-6">
             
              <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 px-8 alert text-center text-white-100" >
                  {{ $page.props.flash.message }}
                </div>
  
              <div class="text-end px-8 ">
                  <Link :href="route('admin.road.create')" class="text-white bg-blue-700 px-3 py-2 rounded-full">Add Road</Link>
              </div>
  
              <div class="overflow-x-auto relative m-7">
                        
                  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-lg border-collapse border border-slate-400">
                      <thead class="text-xs text-gray-900 bg-red-300 uppercase dark:text-gray-400">
                      <tr >
                              <th scope="col" class="py-3 px-6 border border-slate-300">
                                 Serial
                              </th>
                              <th scope="col" class="py-3 px-6 border border-slate-300">
                                City 
                              </th>
                              <th scope="col" class="py-3 px-6 border border-slate-300">
                                 Road
                              </th>
                              <th scope="col" class="py-3 px-6 border border-slate-300">
                                 Action
                              </th>
                          </tr>
                      </thead>
                      <tbody >
                           
                          <tr v-for="(road ,index) in roads.data" :key="road.id" class="bg-white dark:bg-gray-800">
                              <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-slate-300">
                                 {{index+1}}
                              </th>
                              <td class="py-3 px-6 border border-slate-300">
                                 {{road.city.city}}
                              </td>
                              <td class="py-3 px-6 border border-slate-300">
                                {{road.road}}
                             </td>
                              <td class="py-3 px-6 border border-slate-300">
  
                         <Link :href="route('admin.road.edit', road.id)" class="p-2 bg-blue-400 rounded-full text-white mx-2">Edit</Link>
                         <Link :href="route('admin.road.destroy', road.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="p-2 bg-blue-400 rounded-full text-white mx-2">Delete</Link>
                            
                      </td>
                          
                          </tr>
                      </tbody>
                 
                  </table>
  
                  <div class="bg-green p-3 text-center">
                           <Link class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-for="link in roads.meta.links" :href="link.url" v-html="link.label" />
                        
                  </div>
      
              </div>
              
                             
           </div>
        </AuthenticatedLayout>
      </div>
</template>