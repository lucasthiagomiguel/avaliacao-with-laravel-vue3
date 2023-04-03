<template>
  <div class="d-flex dsh h-screen">
        <div class="col-md-2 border-end" >
            <Menu/>
        </div>
        <div class="col-12" :class="{'col-md-10':MenuState}">
          <router-view></router-view>
        </div>
        
    </div>
  
</template>

<script>

import Menu from '@/components/Menu.vue';

import { mapGetters,mapState } from 'vuex';
export default {
  name: 'App',
  components: {
    Menu
  },
  mounted() {
    
    
  },
  computed:{
    ...mapGetters({
      MenuState: 'auth/authenticated'
    }),

  }
 
}
</script>

<style>

</style>