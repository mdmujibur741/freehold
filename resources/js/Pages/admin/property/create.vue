<template>
            <div>
                <AuthenticatedLayout>
               
                  <div class="row">
                    <div class="card" style="background: #D9DDEE;">
                       <div class="card-body">
                        <div v-if="showMessage" class="bg-blue-300 py-3 shadow">
                          <h2 class="text-center "><strong>Data Added Success</strong></h2>
                         </div>
        
                         
                       
                         
                                <form @submit.prevent="submit">
        
                                  <div class="mb-3">
                                    <InputLabel for="name" value="Name"/>
                                    <TextInput id="name" type="text" v-model="form.name" placeholder="Enter Property Name"/>
                                    <InputError class="mt-2 " :message="form.errors.name" />
                                  </div>
        
                                  <div class="mb-3">
                                    <InputLabel for="price" value="Price"/>
                                    <TextInput id="price" type="number" v-model="form.price" placeholder="Enter Property Price"/>
                                    <InputError class="mt-2 " :message="form.errors.price" />
                                  </div>
        
        
        
                                  <div class="mb-3">
                                    <InputLabel for="agent_id" value="Agent"/>
                                    <select id="agent_id" v-model="form.agent_id" class="form-select form-select-sm fs-6 rounded-4">
                                          <option value="" selected disabled>Choose Agent</option>
                                          <option v-for="agent in agents.data" :value="agent.id"> {{agent.name}} </option>
                                    </select>
                                    <InputError class="mt-2 " :message="form.errors.city_id" />
                                </div>
        
                                
                                <div class="mb-3">
                                  <InputLabel for="status_id" value="Status"/>
                                  <select id="status_id" v-model="form.status_id" class="form-select form-select-sm fs-6 rounded-4">
                                        <option value="" selected disabled>Choose Status</option>
                                        <option v-for="status in statuses.data" :value="status.id"> {{status.status}} </option>
                                  </select>
                                  <InputError class="mt-2 " :message="form.errors.status_id" />
                              </div>
        
                                <div class="mb-3">
                                    <InputLabel for="city" value="City"/>
                                    <select id="city" v-model="form.city_id" class="form-select form-select-sm fs-6 rounded-4">
                                          <option value="" selected disabled>Choose City</option>
                                          <option v-for="city in cities.data" :value="city.id"> {{city.city}} </option>
                                    </select>
                                    <InputError class="mt-2 text-red" :message="form.errors.city_id" />
                                </div>
        
        
        
                                <div class="mb-3">
                                  <InputLabel for="road_id" value="Road"/>
                                  <select id="road_id" v-model="form.road_id" class="form-select form-select-sm fs-6 rounded-4">
                                       <option value="" disabled selected> Choose Road</option>
                                        <option v-for="road in roads.data" :value="road.id"> {{road.road}} </option>
                                  </select>
                                  <InputError class="mt-2 text-red" :message="form.errors.road_id" />
                              </div>
        
        
                              <div class="mb-3">
                                <InputLabel for="bed_id" value="Bed"/>
                                <select id="bed_id" v-model="form.bed_id" class="form-select form-select-sm fs-6 rounded-4">
                                     <option value="" disabled selected> Choose Bed</option>
                                      <option v-for="bed in beds.data" :value="bed.id"> {{bed.bed}} </option>
                                </select>
                                <InputError class="mt-2 text-red" :message="form.errors.bed_id" />
                            </div>
        
        
                            <div class="mb-3">
                              <InputLabel for="shower_id" value="Shower"/>
                              <select id="shower_id" v-model="form.shower_id" class="form-select form-select-sm fs-6 rounded-4">
                                   <option value="" disabled selected> Choose Shower</option>
                                    <option v-for="shower in showers.data" :value="shower.id"> {{shower.shower}} </option>
                              </select>
                              <InputError class="mt-2 text-red" :message="form.errors.shower_id" />
                          </div>
        
                          <div class="mb-3">
                            <InputLabel for="zipCode_id" value="Zip Code"/>
                            <select id="zipCode_id" v-model="form.zipCode_id" class="form-select form-select-sm fs-6 rounded-4">
                                 <option value="" disabled selected> Choose Zip Code</option>
                                  <option v-for="zip in zipCodes.data" :value="zip.id"> {{zip.zipCode}} </option>
                            </select>
                            <InputError class="mt-2 text-red" :message="form.errors.road_id" />
                        </div>
        
        
                                <div class="mb-3">
                                  <InputLabel for="description" value="Description"/>
                                   <textarea id="description" v-model="form.description" rows="3" class="form-control rounded-3" placeholder="Enter Property description">
                                    
                                   </textarea>
                                  <InputError class="mt-2 text-red" :message="form.errors.description" />
                                </div>
        
        
                                <div class="mb-3">
                                  <InputLabel for="imageOne" value="Image One"/>
                                  <TextInput id="imageOne" type="file" class="form-control" v-model="form.imageOne" @input="form.imageOne = $event.target.files[0]"/>
                                  <InputError class="mt-2 text-red" :message="form.errors.imageOne" />
                                </div>
        
        
                                <div class="mb-3">
                                  <InputLabel for="imageTwo" value="Image Two"/>
                                  <TextInput id="imageTwo" type="file" class="file:border file:border-solid rounded-full" v-model="form.imageTwo" @input="form.imageTwo = $event.target.files[0]"/>
                                  <InputError class="mt-2 text-red" :message="form.errors.imageTwo" />
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
             import { ref } from 'vue';

 const showMessage = ref(false);

 function setShowMessage(value){
    showMessage.value = value
 }

  function cleanFrom(){
          form.reset();
          setShowMessage(true);
          setTimeout(()=>setShowMessage(false),50000);
  }

             defineProps({
                  cities: Array,
                  roads: Array,
                   beds: Array,
                   zipCodes: Array,
                   agents: Array,
                   showers: Array,
                   statuses: Array
             })

             const form = useForm({
                  name: '',
                  price: '',
                  agent_id: '',
                  city_id : '',
                  road_id : '',
                  status_id : '',
                  bed_id: '',
                  shower_id: '',
                  zipCode_id : '',
                  description: '',
                  imageOne: '',
                  imageTwo: '',

             })

             const submit = () =>  {
                   form.post(route('admin.property.store'),{
                       onSuccess:() => cleanFrom(),
                   })
             }





</script>