<template>
  <div>
    <p>{{ org }}</p>
    <p>{{ domain }}</p>
    <p>{{ spoof_domain }}</p>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';

// Define props
const props = defineProps({
  org: {
    type: Object,
    required: true
  },
  domain: {
    type: Object,
    default: null // Ensure default value for reactive prop
  },
  spoof_domain: {
    type: Object,
    required: true
  }
});

// Accessing props directly
const { org, domain, spoof_domain } = props;
</script>
