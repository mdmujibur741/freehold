<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const form = useForm({
    shower: ''
})

function cleanForm (){
       form.reset();
}

const submit = () => {
    form.post(route('admin.shower.store'),{
      onSuccess:() => cleanForm()
    })
}

</script>


<template>
    <div class="">
        <AuthenticatedLayout>

<div class="row justify-content-center">
   <div class="col-lg-5 col-md-8 col-sm-12">
    <div class="card" style="background: #D9DDEE;">
  <div class="card-body">
    <div v-if="$page.props.flash.message" class="" >
      {{ $page.props.flash.message }}
    </div>
  
   
      <form @submit.prevent="submit">
      <div>
        <InputLabel for="shower" value="Shower"/>
        <TextInput id="shower" type="number" v-model="form.shower" placeholder="Enter Shower Number"/>
        <InputError class="mt-2" :message="form.errors.shower" />
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