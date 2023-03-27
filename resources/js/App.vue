<template>
  <div class="d-flex dsh h-screen">
      <div class="col-md-4 border-end">
          <Menu/>
      </div>
      <div class="col-md-8">
        <router-view></router-view>
      </div>
      
  </div>
  
</template>

<script>

import Menu from '@/components/Menu.vue';

export default {
  name: 'App',
  components: {
    Menu
  },
}
</script>

<style>

</style>