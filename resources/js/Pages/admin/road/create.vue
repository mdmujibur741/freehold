<template>
            <div>
                <AuthenticatedLayout>

                    <div class="row justify-content-center">
             
                      <div class="col-lg-5">
                           <div class="card">
                                <div class="card-body">
                                  <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 alert text-center text-white-100" >
                                    {{ $page.props.flash.message }}
                                  </div>
                           
                                    <h3 class="text-center px-2 py-2 uppercase font-bold">Add Road</h3>
                                    <form @submit.prevent="submit">
            
                                    <div class="mb-3">
                                        <InputLabel for="city" value="City"/>
                                        <select id="city" v-model="form.city_id" class="form-select form-select-sm">
                                              <option value="" selected disabled>Choose City</option>
                                              <option v-for="cit in city.data" :value="cit.id"> {{cit.city}} </option>
                                        </select>
                                        <InputError class="mt-2 text-red" :message="form.errors.city_id" />
                                    </div>
            
                                    <div class="mb-3">
                                      <InputLabel for="road" value="Road"/>
                                      <TextInput id="road" type="text" class="w-full mt-1 rounded-full " v-model="form.road" placeholder="Enter Road Name"/>
                                      <InputError class="mt-2 text-red" :message="form.errors.road" />
                                    </div>
                                    <div class="text-center">
                                      <PrimaryButton class="ml-4 mt-5" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                     Submit
                                    </PrimaryButton>
                                    </div>
                                  
                                    </form>
                                
                                </div>
                           </div>
                      </div>
              
                    </div>
              
                      </AuthenticatedLayout>

            </div>



</template>


<script setup>
             import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
             import InputError from '@/Components/InputError.vue';
             import InputLabel from '@/Components/InputLabel.vue';
             import TextInput from '@/Components/TextInput.vue';
             import {useForm } from '@inertiajs/inertia-vue3';
             import PrimaryButton from '@/Components/PrimaryButton.vue';

             defineProps({
                  city: Array
             })

             const form = useForm({
                  road : '',
                  city_id : ''

             })

             const submit = () =>  {
                   form.post(route('admin.road.store'),{
                       onSuccess:() => form.reset(),
                   })
             }





</script>