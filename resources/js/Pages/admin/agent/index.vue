<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    agents : Object
})

</script>


<template>
    <div >
   

      <AuthenticatedLayout>
         <div class="row">
           <div class="card" style="background: #d9ddee ;">

    
               
          

           <div class="card-body">
            <div v-if="$page.props.flash.message" class="py-4" >
                {{ $page.props.flash.message }}
              </div>

          
               <div class="text-end">
                <Link :href="route('admin.agent.create')" class="btn btn-primary float-left">Add Agent</Link>
           
               </div>

               <table class="table table-bordered">
                <thead class="thead">
                <tr >
                        <th scope="col">
                           Serial
                        </th>
                        <th scope="col">
                      Name
                        </th>
                        <th scope="col">
                          Title
                              </th>
                              <th scope="col">
                               Image
                                    </th>
                        <th scope="col">
                           Action
                        </th>
                    </tr>
                </thead>
                <tbody >
                     
                    <tr v-for="(agent ,index) in agents.data" :key="agent.id" >
                        <th scope="row" class="">
                           {{index+1}}
                        </th>
                        <td>
                           {{agent.name}}
                        </td>
                        <td>
                            {{agent.title}}
                         </td>
                         <td>
                           <img :src="agent.image" class="shadow-xxl rounded" alt="" style="width: 70px;">
                         </td>
                        <td>

                  <Link :href="route('admin.agent.edit', agent.id)" class="p-2 btn btn-sm btn-primary mx-1">Edit</Link>
                   <Link :href="route('admin.agent.destroy', agent.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="p-2 btn btn-sm btn-danger mx-1">Delete</Link> 
                      
                </td>
                    
                    </tr>
                </tbody>
           
            </table>
           </div>
          
                      
               

                <div class="bg-green p-3 text-center">
                         <Link class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-for="link in agents.meta.links" :href="link.url" v-html="link.label" />
                      
                </div>
    
          
            
        </div>    
         </div>
      </AuthenticatedLayout>
    </div>
</template>