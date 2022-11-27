<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const form = useForm({
    bed: ''
})

function cleanForm (){
       form.reset();
}

const submit = () => {
    form.post(route('admin.bed.store'),{
      onSuccess:() => cleanForm()
    })
}

</script>


<template>
    <div class="h-screen">
        <AuthenticatedLayout>

      <div class="w-5/12 mx-auto mt-20 rounded-full shadow-lg">
        <div v-if="$page.props.flash.message" class="py-4 alert text-center" >
          {{ $page.props.flash.message }}
        </div>
        <div class="bg-teal-50 px-8 py-8">
          <h3 class="text-center px-2 py-2 uppercase font-bold">Add Bed</h3>
          <form @submit.prevent="submit">
          <div>
            <InputLabel for="bed" value="Bed"/>
            <TextInput id="bed" type="number" v-model="form.bed" placeholder="Enter Bed Number"/>
            <InputError class="mt-2" :message="form.errors.bed" />
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