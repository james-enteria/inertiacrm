<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Dashboard</h1>
    <p class="mb-12 leading-normal">Hey there! Welcome to Ping CRM, a demo app designed to help illustrate how <a class="text-indigo-500 underline hover:text-orange-600" href="https://github.com/inertiajs">Inertia.js</a> works.</p>
    <div>
      <h1>Number of contacts: {{contacts}}</h1>
    </div>
    <div>

      <RandomChart />
    </div>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'
import RandomChart from './RandomChart.vue'

export default {
  components: {
    RandomChart
  },
  props:['contacts'],
  metaInfo: { title: 'Dashboard' },
  layout: Layout,
}
</script>
