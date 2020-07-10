<template>
  <div class="flex flex-col w-100 min-h-screen">
    <main class="flex-1">
      <router-view/>
    </main>
  </div>
</template>

<script>

  export default {
    name: "MainLayout"
  }
</script>

<style scoped>

</style>
