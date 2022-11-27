<template>
  <div>
      <AuthenticatedLayout>

          <div class="w-5/6 mx-auto mt-20 rounded-full shadow-lg">
            <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 alert text-center text-white-100" >
              {{ $page.props.flash.message }}
            </div>
            <div class="bg-teal-50 px-8 py-8">
              <h3 class="text-center px-2 py-2 uppercase font-bold">EDIT ZIP CODE</h3>
              <form @submit.prevent="submit">

              <div class="mb-3">
                  <InputLabel for="city" value="City"/>
                  <select id="city" v-model="form.city_id" class="rounded-full px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full">
                        <option v-for="city in cities.data" :value="city.id"> {{city.city}} </option>
                  </select>
                  <InputError class="mt-2 text-red" :message="form.errors.city_id" />
              </div>



              <div class="mb-3">
                <InputLabel for="road_id" value="Road"/>
                <select id="road_id" v-model="form.road_id" class="rounded-full px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full">
                      <option v-for="road in roads.data" :value="road.id"> {{road.road}} </option>
                </select>
                <InputError class="mt-2 text-red" :message="form.errors.road_id" />
            </div>


              <div class="mb-3">
                <InputLabel for="zipCode" value="Zip Code"/>
                <TextInput id="zipCode" type="number" v-model="form.zipCode" placeholder="Enter Zip Code"/>
                <InputError class="mt-2 text-red" :message="form.errors.zipCode" />
              </div>
              <div class="text-center">
                <PrimaryButton class="ml-4 mt-5" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
              Update
              </PrimaryButton>
              </div>
            
              </form>
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
import { Inertia } from '@inertiajs/inertia';

  const props = defineProps({
        cities: Array,
        roads: Array,
        zipCode : Object
   })

   const form = useForm({
        city_id : props.zipCode?.city_id,
        road_id : props.zipCode?.road_id,
        zipCode : props.zipCode?.zipCode,

   })

   const submit = () =>  {
          Inertia.post(`/admin/zipCode/${props.zipCode.id}`,{
              _method: "put",
              city_id: form.city_id,
              road_id: form.road_id,
              zipCode: form.zipCode,

          })
   }





</script>