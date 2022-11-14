<template>
    <div>
        <AuthenticatedLayout>

            <div class="w-5/12 mx-auto mt-20 rounded-full shadow-lg">
              <div class="bg-teal-50 px-8 py-8">
                <h3 class="text-center px-2 py-2 uppercase font-bold">Edit Road</h3>
                <form @submit.prevent="submit">

                <div class="mb-3">
                    <InputLabel for="city" value="City"/>
                    <select id="city" v-model="form.city_id" class="mt-1 rounded-full px-2 w-full">
                          <option v-for="cit in cities.data" :value="cit.id"> {{cit.city}} </option>
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
          road: Object

     })

     const form = useForm({
          road : props.road?.road, 
          city_id : props.road?.city_id,

     })

     const submit = () =>  {
         Inertia.post(`/admin/road/${props.road.id}`,{
               _method : "put",
               city_id : form.city_id,
               road : form.road,
         })
     }





</script>