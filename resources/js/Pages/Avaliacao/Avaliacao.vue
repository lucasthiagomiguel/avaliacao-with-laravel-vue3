<template>
  <div class="">
{{ usersData }}
    <div class="" v-for=" teste in avaliacaoQuestion" :key="teste.id">
      <p>{{ teste.questions }}</p>
  
    </div>
  </div>
  
  
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
export default {
  data(){
    return{
        usersData:[
          {teste:'teste'}
        ]
    }
  },
  mounted() {
    console.log(this.avaliacaoQuestion[0].id)
    this.avaliacao()
  },
  computed:{
    ...mapGetters({
      avaliacaoQuestion:'auth/questionAvaliation'
    })
  },
  methods:{
      ...mapActions('auth',['ActionQuestion']),
      avaliacao(e){ 
        return this.ActionQuestion()
      },
  }
}
</script>

<style>

</style>