<template>
  <div>
      <AuthenticatedLayout>
        <template #header>
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Property Add
          </h2>
      </template>

          <div class="mx-auto mt-6 rounded-full shadow-lg" style="width: 96%;">
            <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 alert text-center text-white-100" >
              {{ $page.props.flash.message }}
            </div>
            <div class="bg-teal-50 px-8 py-8">
              <form @submit.prevent="submit">

                <div class="mb-3">
                  <InputLabel for="name" value="Name"/>
                  <TextInput id="name" type="text" v-model="form.name" placeholder="Enter Property Name"/>
                  <InputError class="mt-2 text-red" :message="form.errors.name" />
                </div>

                <div class="mb-3">
                  <InputLabel for="price" value="Price"/>
                  <TextInput id="price" type="number" v-model="form.price" placeholder="Enter Property Price"/>
                  <InputError class="mt-2 text-red" :message="form.errors.price" />
                </div>



                <div class="mb-3">
                  <InputLabel for="agent_id" value="Agent"/>
                  <select id="agent_id" v-model="form.agent_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full rounded-full">
                        <option value="" selected disabled>Choose Agent</option>
                        <option v-for="agent in agents.data" :value="agent.id"> {{agent.name}} </option>
                  </select>
                  <InputError class="mt-2 text-red" :message="form.errors.city_id" />
              </div>

              
              <div class="mb-3">
                <InputLabel for="status_id" value="Status"/>
                <select id="status_id" v-model="form.status_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full rounded-full">
                      <option value="" selected disabled>Choose Status</option>
                      <option v-for="status in statuses.data" :value="status.id"> {{status.status}} </option>
                </select>
                <InputError class="mt-2 text-red" :message="form.errors.status_id" />
            </div>

              <div class="mb-3">
                  <InputLabel for="city" value="City"/>
                  <select id="city" v-model="form.city_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full rounded-full">
                        <option value="" selected disabled>Choose City</option>
                        <option v-for="city in cities.data" :value="city.id"> {{city.city}} </option>
                  </select>
                  <InputError class="mt-2 text-red" :message="form.errors.city_id" />
              </div>



              <div class="mb-3">
                <InputLabel for="road_id" value="Road"/>
                <select id="road_id" v-model="form.road_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full rounded-full">
                     <option value="" disabled selected> Choose Road</option>
                      <option v-for="road in roads.data" :value="road.id"> {{road.road}} </option>
                </select>
                <InputError class="mt-2 text-red" :message="form.errors.road_id" />
            </div>


            <div class="mb-3">
              <InputLabel for="bed_id" value="Bed"/>
              <select id="bed_id" v-model="form.bed_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full rounded-full">
                   <option value="" disabled selected> Choose Bed</option>
                    <option v-for="bed in beds.data" :value="bed.id"> {{bed.bed}} </option>
              </select>
              <InputError class="mt-2 text-red" :message="form.errors.bed_id" />
          </div>


          <div class="mb-3">
            <InputLabel for="shower_id" value="Shower"/>
            <select id="shower_id" v-model="form.shower_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full rounded-full">
                 <option value="" disabled selected> Choose Shower</option>
                  <option v-for="shower in showers.data" :value="shower.id"> {{shower.shower}} </option>
            </select>
            <InputError class="mt-2 text-red" :message="form.errors.shower_id" />
        </div>

        <div class="mb-3">
          <InputLabel for="zipCode_id" value="Zip Code"/>
          <select id="zipCode_id" v-model="form.zipCode_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none w-full rounded-full">
               <option value="" disabled selected> Choose Zip Code</option>
                <option v-for="zip in zipCodes.data" :value="zip.id"> {{zip.zipCode}} </option>
          </select>
          <InputError class="mt-2 text-red" :message="form.errors.road_id" />
      </div>


              <div class="mb-3">
                <InputLabel for="description" value="Description"/>
                 <textarea id="description" v-model="form.description" rows="3" class="w-full rounded-lg my-2 focus:outline-none" placeholder="Enter Property description">
                  
                 </textarea>
                <InputError class="mt-2 text-red" :message="form.errors.description" />
              </div>


              <div class="mb-3 ">
            
                  <InputLabel for="imageOne" value="Image One"/>
                <TextInput id="imageOne" type="file" class="file:border file:border-solid rounded-full" v-model="form.imageOne" @input="form.imageOne = $event.target.files[0]"/>
                <InputError class="mt-2 text-red" :message="form.errors.imageOne" />
             
              
                
           
              </div>


              <div class="mb-3">
                <InputLabel for="imageTwo" value="Image Two"/>
                <TextInput id="imageTwo" type="file" class="file:border file:border-solid rounded-full" v-model="form.imageTwo" @input="form.imageTwo = $event.target.files[0]"/>
                <InputError class="mt-2 text-red" :message="form.errors.imageTwo" />
              </div>

              
              <div class="text-center">
                <PrimaryButton class="ml-4 mt-5" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
              Update
              </PrimaryButton>
              </div>

               <div class="flex justify-end">
             <div class="m-2 w-3/12"> <strong>Image One</strong>  <img :src="'/storage/'+ property.imageOne" :alt="property.name" class="rounded-lg shadow-lg"></div>
               <div class="m-2 w-3/12"><strong>Image Two</strong> <img :src="'/storage/'+ property.imageTwo" :alt="property.name" class="rounded-lg shadow-lg"></div>
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
         beds: Array,
         zipCodes: Array,
         agents: Array,
         showers: Array,
         statuses: Array,
         property:Object
   })

   const form = useForm({
        name: props.property?.name,
        price: props.property?.price,
        agent_id: props.property?.agent_id,
        city_id : props.property?.city_id,
        road_id : props.property?.road_id,
        status_id : props.property?.status_id,
        bed_id: props.property?.bed_id,
        shower_id: props.property?.shower_id,
        zipCode_id : props.property?.zipCode_id,
        description: props.property?.description,
        imageOne: null,
        imageTwo: null,

   })

   const submit = () =>  {
        Inertia.post(`/admin/property/${props.property.id}`,{
          _method: "put",
          name: form.name,
        price: form.price,
        agent_id: form.agent_id,
        city_id : form.city_id,
        road_id : form.road_id,
        status_id : form.status_id,
        bed_id: form.bed_id,
        shower_id: form.shower_id,
        zipCode_id : form.zipCode_id,
        description: form.description,
        imageOne: form.imageOne,
        imageTwo:form.imageTwo

        })
   }





</script>