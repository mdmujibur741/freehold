<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    cities : Object
})

</script>


<template>
    <div >
   

      <AuthenticatedLayout>
         <div class="row">
           
           <div class="card" style="background:#D9DDEE;">
              <div class="card-body" >
                <div v-if="$page.props.flash.message" class="" >
                    {{ $page.props.flash.message }}
                  </div>
    
                <div class="text-end ">
                    <Link :href="route('admin.city.create')" class="btn btn-primary">Add City</Link>
                </div>
    
         
                          
                    <table class="table table-bordered">
                        <thead class="thead">
                        <tr >
                                <th scope="col" class="py-3 px-6 border border-slate-300">
                                   Serial
                                </th>
                                <th scope="col" class="py-3 px-6 border border-slate-300">
                                  City 
                                </th>
                                <th scope="col" class="py-3 px-6 border border-slate-300">
                                   Action
                                </th>
                            </tr>
                        </thead>
                        <tbody >
                             
                            <tr v-for="(city ,index) in cities.data" :key="city.id">
                                <th scope="row" class="">
                                   {{index+1}}
                                </th>
                                <td class="py-3 px-6 border border-slate-300">
                                   {{city.city}}
                                </td>
                                <td class="py-3 px-6 border border-slate-300">
    
                           <Link :href="route('admin.city.edit', city.id)" class="btn btn-sm btn-primary">Edit</Link>
                           <Link :href="route('admin.city.destroy', city.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger ms-2">Delete</Link>
                              
                        </td>
                            
                            </tr>
                        </tbody>
                   
                    </table>
    
                    <div class="bg-green p-3 text-center">
                             <Link class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-for="link in cities.meta.links" :href="link.url" v-html="link.label" />
                          
                    </div>
        
              </div>
           </div>
         
            
                           
         </div>
      </AuthenticatedLayout>
    </div>
</template>