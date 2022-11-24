<template>
    <div>
        <FrontEndLayout>
            <section class="conatct-section">

                <div class="container">
                         
   
                          <div class="row py-5 justify-content-center" >

                            <div class="col-md-12 col-lg-6">
        <div class="my-5">
            <p>
                GMail: dsfjhewjjk,@gmail.cpm
               </p>
               <p>
                  PHONE : 05522552225255
               </p>
               <p>
               Address : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ad qui atque possimus iusto soluta!
             </p>
             <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At culpa sed ipsa, doloribus voluptates natus cum magni ea cumque explicabo eveniet reiciendis atque, obcaecati quos dolorem nobis laudantium dicta voluptatem. Distinctio minus quod sint earum suscipit incidunt est quas provident!
             </p>
        </div>
                            </div>
                      
                               <div class="col-md-12 col-lg-6 " >
                                 <div class="shadow-lg px-4 py-3 my-4 m-lg-4" style="background: #D9DDEE;">
                                    <h3 class="text-center">Contact </h3>
                                    <div class="mb-3">
                                             <label for="name">Name</label>
                                             <input type="text" id="name" class="form-control form-control-sm rounded-3" placeholder="Enter name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control form-control-sm rounded-3" placeholder="Enter email">
                                 </div>
                                 <div class="mb-3">
                                    <label for="Phone">Phone</label>
                                    <input type="tel" id="phone" class="form-control form-control-sm rounded-3" form-control-sm placeholder="Enter Phone">
                             </div>
    
                             <div class="mb-3">
                                <label for="message">Message</label>
                                  <textarea  id="message" rows="3" class="form-control rounded-3"></textarea>
                         </div>
    
                         <div class="mb-3 text-center">
                                <input type="submit" class="btn btn-primary" value="Send">
                         </div>
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
</script>