<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
           city: Object
})

const form = useForm({
     city: props.city?.city,
})


const submit = () => {
    Inertia.post(`/admin/city/${props.city.id}`,{
       _method : "put",
       city: form.city,
    })
}



</script>


<template>
    <div class="h-screen">
        <AuthenticatedLayout>

      <div class="w-5/12 mx-auto mt-20 rounded-full shadow-lg">
        <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 alert text-center text-white-100" >
          {{ $page.props.flash.message }}
        </div>
        <div class="bg-teal-50 px-8 py-8">
          <h3 class="text-center px-2 py-2 uppercase font-bold">Edit City</h3>
          <form @submit.prevent="submit">
          <div>
            <InputLabel for="city" value="City"/>
            <TextInput id="city" type="text" v-model="form.city"/>
            <InputError class="mt-2" :message="form.errors.city" />
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