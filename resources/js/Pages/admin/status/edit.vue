<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Inertia } from '@inertiajs/inertia';


const props = defineProps({
    status: Object
})


const form = useForm({
    status: props.status?.status,
})



const submit = () => {
    Inertia.post(`/admin/status/${props.status.id}`,{
        _method : "put",
         status : form.status,
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
          <h3 class="text-center px-2 py-2 uppercase font-bold">Edit Status</h3>
          <form @submit.prevent="submit">
          <div>
            <InputLabel for="status" value="Status"/>
            <TextInput id="status" type="text" class="w-full mt-1 rounded-full " v-model="form.status" placeholder="Enter Status"/>
            <InputError class="mt-2 text-red" :message="form.errors.status" />
          </div>
          <div class="text-center">
            <PrimaryButton class="ml-4 mt-5" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
           Submit
          </PrimaryButton>
          </div>
        
          </form>
        </div>

      </div>

      

        </AuthenticatedLayout>
    </div>
</template>