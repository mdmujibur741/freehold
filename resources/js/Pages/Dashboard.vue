<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
      

        <div class="row " style="padding-top: 6rem;">
          
                <div class="bg-white overflow-hidden shadow-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                              <h2 class=""> You Are Logged In</h2>
                    </div>
                </div>
          
        </div>
    </AuthenticatedLayout>
</template>
