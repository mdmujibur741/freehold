<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    showers: Object
})

</script>


<template>
    <div>


        <AuthenticatedLayout>
            <div class="row">

               <div class="card" style="background: #D9DDEE;">
                <div v-if="$page.props.flash.message" class="">
                    {{ $page.props.flash.message }}
                </div>

                <div class="text-end py-2">
                    <Link :href="route('admin.shower.create')" class="btn btn-primary">Add
                    Shower</Link>
                </div>

                <div class="card-body">

                    <table
                        class="table table-bordered">
                        <thead class="">
                            <tr>
                                <th scope="col" >
                                    Serial
                                </th>
                                <th scope="col">
                                    Shower
                                </th>
                                <th scope="col" >
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="(shower, index) in showers.data" :key="shower.id"
                                class="">
                                <th scope="row" class=""> {{ index + 1 }}  </th>
                                <td class="py-3">
                                    {{ shower.shower }}
                                </td>
                                <td class="py-3 ">
                                    <Link :href="route('admin.shower.edit', shower.id)"
                                        class="btn btn-sm btn-primary">Edit</Link>
                                    <Link :href="route('admin.shower.destroy', shower.id)" method="delete" as="button"
                                        type="button"
                                        onclick="return confirm('Are you sure you want to delete this item')"
                                        class="p-2 btn btn-danger mx-2">Delete</Link>
                                </td>

                            </tr>
                        </tbody>

                    </table>

                    <div class="bg-green p-3 text-center">
                        <Link v-for="link in showers.meta.links" :href="link.url" v-html="link.label"
                            class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-black-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" />

                    </div>

                </div>

               </div>

            </div>
        </AuthenticatedLayout>
    </div>
</template>