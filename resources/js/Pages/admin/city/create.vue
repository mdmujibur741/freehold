<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const form = useForm({
    city: ''
})

function cleanForm (){
       form.reset();
}

const submit = () => {
    form.post(route('admin.city.store'),{
      onSuccess:() => cleanForm()
    })
}

</script>


<template>
    <div class="">
        <AuthenticatedLayout>
<div class="row">

  <div class="card" style="background: #D9DDEE;">
    <div class="card-body">
   
      <div v-if="$page.props.flash.message" class="bg-blue-300 py-4 alert text-center text-white-100" >
        {{ $page.props.flash.message }}
      </div>
     
        <h3 class="text-center px-2 py-2 uppercase font-bold">Add City</h3>
        <form @submit.prevent="submit">
        <div>
          <InputLabel for="city" value="City"/>
          <TextInput id="city" type="text" class="form-control " v-model="form.city" placeholder="Enter City Name"/>
          <InputError class="mt-2 text-red" :message="form.errors.city" />
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