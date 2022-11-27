<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const form = useForm({
    status: ''
})

function cleanForm (){
       form.reset();
}

const submit = () => {
    form.post(route('admin.status.store'),{
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
              <div v-if="$page.props.flash.message" class="" >
                {{ $page.props.flash.message }}
              </div>
            
                <h3 class="text-center px-2 py-2 uppercase font-bold">Add Status</h3>
                <form @submit.prevent="submit">
                <div>
                  <InputLabel for="status" value="Status"/>
                  <TextInput id="status" type="text" v-model="form.status" placeholder="Enter Status"/>
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
       

      </div>

      

        </AuthenticatedLayout>
    </div>
</template>