<template>
  <div class="">
    <div class="quantity p-4 d-flex justify-content-around">
        <p>Total Colaboradores: <span>10</span></p>
        <p>Total Avaliações Realizada: <span>10</span></p>
    </div>
      <div class="nine-box w-[420px] h-[300px] d-flex flex-wrap m-auto mt-5 p-3  justify-content-around">
          <div class="border w-[115px] p-2 mb-2 enigma">
              <p>Enigma</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 potencial">
              <p>Potencial</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 talento" >
              <p>Talento</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 questionavel">
              <p>Questionavel</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 mantenedor">
              <p>Mantenedor</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 desempenho">
              <p>Desempenho</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 risco">
              <p>Risco</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 eficaz">
              <p>Eficaz</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 comprometimento">
              <p>Comprometido</p>
              <div class="quantity-colaborador borde-0">
                <span>1</span>
              </div>
          </div>
      </div>
      
  </div>
        
   
  
</template>

<script>


export default {
    components:{
        
    }
}
</script>

<style lang="scss" scoped>
.nine-box{
    .border{
        border-left: 2px solid !important;
    }
    .enigma,.comprometimento{
        border-left-color: #2677ea !important;
    }
    .potencial,.desempenho{
        border-left-color: #b9faf5 !important;
    }
    .talento{
        border-left-color: #11b69a !important;
    }
    .questionavel,.eficaz{
        border-left-color: #fccd1d !important;
    }
    .mantenedor{
        border-left-color: #0e59fe !important;
    }
    .risco{
        border-left-color: red !important;
    }
}
</style>