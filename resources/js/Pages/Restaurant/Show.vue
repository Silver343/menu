<script setup>
import { Head, Link } from "@inertiaJs/inertia-vue3";

defineProps({
    restaurant: Object,
})
</script>

<template>
    <Head>
        <title>{{ restaurant.data.name }}</title>
    </Head>
    <div>
        {{ restaurant.data.name }}

        <li v-for="menu in restaurant.data.menus" :key="menu.id">
            {{ menu.name}}
        </li>
    </div>
</template>
