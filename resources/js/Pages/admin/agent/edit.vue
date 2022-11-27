<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Inertia } from '@inertiajs/inertia';


const props = defineProps({
         agent: Object
})

const form = useForm({
    name: props.agent?.name,
    title: props.agent?.title,
    description: props.agent?.description,
    image: null,
    facebook: props.agent?.facebook,
    twitter: props.agent?.twitter,
    linkedin: props.agent?.linkedin,
    instagram: props.agent?.instagram,


})



const submit = () => {
   Inertia.post(`/admin/agent/${props.agent.id}`,{
      _method : "put",
      name : form.name,
      title : form.title,
      description : form.description,
      facebook : form.facebook,
      twitter : form.twitter,
      linkedin : form.linkedin,
      instagram : form.instagram,
      image : form.image


   })
}

</script>


<template>
    <div class="h-screen">
        <AuthenticatedLayout>

      <div class="w-11/12 mx-auto my-20 rounded-full shadow-lg">
        <div v-if="$page.props.flash.message" class="py-4 alert text-center" >
          {{ $page.props.flash.message }}
        </div>
        <div class="bg-teal-50 px-8 py-8">
          <h3 class="text-center px-2 py-2 uppercase font-bold">Add Agent</h3>
          <form @submit.prevent="submit">

          <div class="mb-2">
            <InputLabel for="name" value="Name"/>
            <TextInput id="name" type="text" v-model="form.name" placeholder="Enter Agent Name"/>
            <InputError class="mt-2" :message="form.errors.name" />
          </div>


          <div class="mb-2">
            <InputLabel for="title" value="Title"/>
            <TextInput id="title" type="text" v-model="form.title" placeholder="Enter Title"/>
            <InputError class="mt-2 " :message="form.errors.title" />
          </div>

          <div class="mb-2">
            <InputLabel for="facebook" value="Facebook Url"/>
            <TextInput id="facebook" type="text" v-model="form.facebook" placeholder="Enter Facebook Url"/>
            <InputError class="mt-2 " :message="form.errors.facebook" />
          </div>

          <div class="mb-2">
            <InputLabel for="twitter" value="Twitter Url"/>
            <TextInput id="twitter" type="text" v-model="form.twitter" placeholder="Enter Twitter Url"/>
            <InputError class="mt-2 " :message="form.errors.twitter" />
          </div>


          <div class="mb-2">
            <InputLabel for="linkedin" value="linkedin Url"/>
            <TextInput id="linkedin" type="text" v-model="form.linkedin" placeholder="Enter linkedin Url"/>
            <InputError class="mt-2 " :message="form.errors.linkedin" />
          </div>


          <div class="mb-2">
            <InputLabel for="instagram" value="Instagram Url"/>
            <TextInput id="instagram" type="text" v-model="form.instagram" placeholder="Enter Instagram Url"/>
            <InputError class="mt-2 " :message="form.errors.instagram" />
          </div>

          <div class="mb-2">
            <InputLabel for="description" value="Description"/>
             <textarea id="description" rows="2" v-model="form.description" class="form-control rounded-lg my-2 focus:outline-none"></textarea>
            <InputError class="mt-2 " :message="form.errors.description" />
          </div>

          <div class="mb-2">
            <InputLabel for="image" value="Image"/>
            <TextInput id="image" type="file" class="file:border file:border-solid rounded-full " v-model="form.image" @input="form.image = $event.target.files[0]"/>
            <InputError class="mt-2 text-danger" :message="form.errors.image" />
          </div>

 
          <div class="text-center">
            <PrimaryButton class="ml-4 mt-5" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
          Update
          </PrimaryButton>
          </div>
          <div class="flex justify-end">
            <img :src="'/storage/'+props.agent.image" alt="" class="rounded-lg shadow-lg justify-end" style="width: 160px;">
           </div>
        
          </form>
        </div>

      </div>

      

        </AuthenticatedLayout>
    </div>
</template>