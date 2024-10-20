<script setup>
import {defineAsyncComponent} from "vue";

defineProps({
    page: {
        type: Object,
        default: {
            sections: []
        }
    }
})
</script>

<template>
    <div class="w-full h-full">
        <div v-for="section in page.sections">
            <component
                :is="defineAsyncComponent(() => import(`../../../../../../../../resources/js/Blocks/${section.block}.vue`))"
                :section="section"
            ></component>
        </div>
    </div>
</template>

<style scoped>

</style>
