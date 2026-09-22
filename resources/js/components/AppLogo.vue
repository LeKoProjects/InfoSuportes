<script setup lang="ts">
interface Props {
    class?: string;
    size?: 'sm' | 'md' | 'lg' | 'xl';
    hideText?: boolean;
}

const props = withDefaults(defineProps<Props>(), {
    size: 'md',
    hideText: false,
});

const sizeMap = {
    sm: 'size-8',
    md: 'size-10',
    lg: 'size-12',
    xl: 'size-16',
};
</script>

<template>
    <div class="flex items-center gap-2">
        <img
            src="/images/infosuporte.png"
            alt="InfoSuporte"
            :class="[sizeMap[props.size], 'rounded-md object-contain transition-transform hover:scale-110']"
        />
        <div v-if="!hideText" class="ml-1 grid flex-1 text-left text-sm">
            <span class="mb-0.5 truncate leading-none font-semibold">InfoSuporte</span>
        </div>
    </div>
</template>
