<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    beds : Object
})

</script>


<template>
    <div >
   

      <AuthenticatedLayout>
         <div class="row">
           
            <div class="card" style="background: #D9DDEE;">
            <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 px-8 alert text-center text-white-100" >
                {{ $page.props.flash.message }}
              </div>

            <div class="text-end py-2">
                <Link :href="route('admin.bed.create')" class="btn btn-primary">Add Bed</Link>
            </div>

            <div class="card-body">
                      
                <table class="table table-bordered">
                    <thead class="text-xs text-gray-900 bg-red-300 uppercase dark:text-gray-400">
                    <tr >
                            <th scope="col" class="py-3 px-6 border border-slate-300">
                               Serial
                            </th>
                            <th scope="col" class="py-3 px-6 border border-slate-300">
                           Bed
                            </th>
                            <th scope="col" class="py-3 px-6 border border-slate-300">
                               Action
                            </th>
                        </tr>
                    </thead>
                    <tbody >
                         
                        <tr v-for="(bed ,index) in beds.data" :key="bed.id" class="">
                            <th scope="row" class="">
                               {{index+1}}
                            </th>
                            <td class="">
                               {{bed.bed}}
                            </td>
                            <td class="">
                      <Link :href="route('admin.bed.edit',bed.id)" class="btn btn-sm btn-primary">Edit</Link>
                     <Link :href="route('admin.bed.destroy',bed.id)" method="delete" as="button" type="button" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-sm btn-danger ms-2">Delete</Link>
                            </td>
                        
                        </tr>
                    </tbody>
               
                </table>

                <div class="d-flex justify-content-center">
                         <Link v-for="link in beds.meta.links" :href="link.url" v-html="link.label" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"  />
                      
                </div>
    
            </div>
            
        </div>           
         </div>
      </AuthenticatedLayout>
    </div>
</template>