<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message">
        <p class="ms-3 text-sm text-danger">
            {{ message }}
        </p>
    </div>
</template>
