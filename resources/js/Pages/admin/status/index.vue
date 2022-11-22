<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    statuses : Object
})

</script>


<template>
    <div >
   

      <AuthenticatedLayout>
         <div class="row">
           
          <div class="card">
                 <div class="card-body">
                    <div v-if="$page.props.flash.message" class="" >
                        {{ $page.props.flash.message }}
                      </div>
        
                    <div class="text-end px-8 ">
                        <Link :href="route('admin.status.create')" class="btn btn-primary float-right">Add Status</Link>
                    </div>
        
                    
                              
                        <table class="table table-bordered">
                            <thead class="">
                            <tr >
                                    <th scope="col" >
                                       Serial
                                    </th>
                                    <th scope="col" >
                                      City 
                                    </th>
                                    <th scope="col" >
                                       Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody >
                                 
                                <tr v-for="(status ,index) in statuses.data" :key="status.id" >
                                    <th scope="row">
                                       {{index+1}}
                                    </th>
                                    <td class="py-3 ">
                                       {{status.status}}
                                    </td>
                                    <td class="py-3 ">
        
                               <Link :href="route('admin.status.edit', status.id)" class="btn btn-sm btn-primary p-2">Edit</Link>
                               <Link :href="route('admin.status.destroy', status.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger ms-1 p-2">Delete</Link>
                                  
                            </td>
                                
                                </tr>
                            </tbody>
                       
                        </table>
            
                   
                    
                 </div>
          </div>
                           
         </div>
      </AuthenticatedLayout>
    </div>
</template>