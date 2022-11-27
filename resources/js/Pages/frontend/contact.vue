<template>
   <div>
      <FrontEndLayout>
         <section class="conatct-section">
            <div class="container">
               <div class="row py-5 justify-content-center">
                  <div class="col-md-12 col-lg-6">
                     <div class="my-5 des p-3 text-dark">
                        <p>
                           GMail: dsfjhewjjk,@gmail.cpm
                        </p>
                        <p>
                           PHONE : 05522552225255
                        </p>
                        <p>
                           Address : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ad qui atque
                           possimus iusto soluta!
                        </p>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. At culpa sed ipsa, doloribus
                           voluptates natus cum magni ea cumque explicabo eveniet reiciendis atque, obcaecati quos
                           dolorem nobis laudantium dicta voluptatem. Distinctio minus quod sint earum suscipit incidunt
                           est quas provident!
                        </p>
                     </div>
                  </div>

                  <div class="col-md-12 col-lg-6 ">

                     <!-- Alert Message Show -->
                     <div v-if="ShowMsg" class="bg-warning m-lg-4 px-2 rounded-3 text-center shadow-lg text-success">
                        <h3> <b> <Strong> Thanks For Message <i class="fa-regular fa-circle-check"></i> </Strong></b>
                        </h3>
                     </div>

                     <!-- Contact Message Form -->
                     <div class="shadow-lg px-4 py-3 my-4 m-lg-4" style="background: #D9DDEE;">
                        <form @submit.prevent="submit">
                           <h3 class="text-center">Contact </h3>
                           <div class="mb-3">
                              <InputLabel id="name" value="Name" />
                              <TextInput type="text" v-model="form.name" id="name" placeholder="Enter name" />
                              <InputError :message="form.errors.name" />
                           </div>
                           <div class="mb-3">
                              <InputLabel id="email" value="Email" />
                              <TextInput type="email" v-model="form.email" id="email" placeholder="Enter email" />
                              <InputError :message="form.errors.email" />
                           </div>
                           <div class="mb-3">
                              <InputLabel id="phone" value="Phone" />
                              <TextInput type="tel" v-model="form.phone" id="phone" placeholder="Enter Phone" />
                              <InputError :message="form.errors.phone" />
                           </div>

                           <div class="mb-3">
                              <InputLabel id="message" value="Message" />
                              <textarea id="message" :spellcheck="false" v-model="form.message" rows="3"
                                 class="form-control rounded-3"></textarea>
                              <InputError :message="form.errors.message" />
                           </div>

                           <div class="text-center">
                              <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                 Send
                              </PrimaryButton>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </FrontEndLayout>
   </div>
</template>

<script setup>
import FrontEndLayout from '@/Layouts/FrontEndLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import InputLabel from '@/Components/InputLabel.vue';
import { ref } from 'vue';

const ShowMsg = ref(false);
function SetShowMsg(value) {
   ShowMsg.value = value
}

const form = useForm({
   name: '',
   email: '',
   phone: '',
   message: '',
})


const submit = () => {
   form.post(route('web.message'), {
      preserveScroll: true,
      onSuccess: () => CleanFrom(),
   })
}


function CleanFrom() {
   form.reset();
   SetShowMsg(true);
   setTimeout(() => SetShowMsg(false), 5000)
}


</script>


<style scoped>
.des {
   background: #e0dddd;
}
</style>