<template>
  <div class="d-flex dsh h-screen">
        <div class="col-md-2 border-end" v-if="MenuState.auth.authenticated">
            <Menu/>
        </div>
        <div class="col-md-10">
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
    ...mapState({
      MenuState: authenticated => authenticated
    })
  }
 
}
</script>

<style>

</style>