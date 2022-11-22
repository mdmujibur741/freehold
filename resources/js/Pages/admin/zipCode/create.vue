<template>
            <div>
                <AuthenticatedLayout>

                    <div class="row">
                     <div class="card" style="background: #D9DDEE;">
                        <div class="card-body">
                          <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 alert text-center text-white-100" >
                            {{ $page.props.flash.message }}
                          </div>
                          <div class="bg-teal-50 px-8 py-8">
                            <h3 class="text-center px-2 py-2 uppercase font-bold">Add Road</h3>
                            <form @submit.prevent="submit">
    
                            <div class="mb-3">
                                <InputLabel for="city" value="City"/>
                                <select id="city" v-model="form.city_id" class="form-select form-select-sm">
                                      <option value="" selected disabled>Choose City</option>
                                      <option v-for="city in cities.data" :value="city.id"> {{city.city}} </option>
                                </select>
                                <InputError class="mt-2 text-red" :message="form.errors.city_id" />
                            </div>
    
    
    
                            <div class="mb-3">
                              <InputLabel for="road_id" value="Road"/>
                              <select id="road_id" v-model="form.road_id" class="form-select form-select-sm">
                                   <option value="" disabled selected> Choose Road</option>
                                    <option v-for="road in roads.data" :value="road.id"> {{road.road}} </option>
                              </select>
                              <InputError class="mt-2 text-red" :message="form.errors.road_id" />
                          </div>
    
    
                            <div class="mb-3">
                              <InputLabel for="zipCode" value="Zip Code"/>
                              <TextInput id="zipCode" type="number" class="w-full mt-1 rounded-full " v-model="form.zipCode" placeholder="Enter Zip Code"/>
                              <InputError class="mt-2 text-red" :message="form.errors.zipCode" />
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
                  cities: Array,
                  roads: Array,
             })

             const form = useForm({
                  road_id : '',
                  city_id : '',
                  zipCode : '',

             })

             const submit = () =>  {
                   form.post(route('admin.zipCode.store'),{
                       onSuccess:() => form.reset(),
                   })
             }





</script>