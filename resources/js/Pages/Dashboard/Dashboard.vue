<template>
  <div class="">
    <div class="quantity p-4 d-flex justify-content-around">
        <p>Total Colaboradores: <span>10</span></p>
        <p>Total Avaliações Realizada: <span>10</span></p>
    </div>
    <div class="">
      <p>Para filtrar, click no nine box desejado</p>
    </div>
      <div class="nine-box w-[420px] h-[300px] d-flex flex-wrap m-auto mt-5 p-3  justify-content-around">
          <div class="border w-[115px] p-2 mb-2 text-center enigma text-center">
              <p>Enigma</p>
              <div class="quantity-colaborador borde-0 ">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center potencial">
              <p>Potencial</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center talento" >
              <p>Talento</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center questionavel">
              <p>Questionavel</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center mantenedor">
              <p>Mantenedor</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center desempenho">
              <p>Desempenho</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center risco">
              <p>Risco</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center eficaz">
              <p>Eficaz</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center comprometimento">
              <p>Comprometido</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
      </div>
      
  </div>
        
   
  
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
import axiosInstance from '@/axios';

export default {
  mounted(){
  },
    components:{
        
    },
    methods:{
      ...mapActions({
        UserLoged:'auth/UserLoged'
      }),
    }
}
</script>

<style lang="scss" scoped>
.nine-box{
    .enigma,.comprometimento,.mantenedor{
        background: #00BFFF;
        color: #fff;
    }
    .potencial,.desempenho{
        background: #32CD32;
        color: #fff;
    }
    .talento{
        background: #00764b;
        color: #fff;
    }
    .questionavel,.eficaz{
        background: #FFA500;
        color: #fff;
    }
    .risco{
        background: red;
        color: #fff;
    }
}
</style>