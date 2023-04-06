<template>
  <div class="">
      <div class="p-3 d-flex">
       <p> <span class="not-done px-3 mr-2 ml-2"></span>Não Realizada</p>
       <p><span class="pendente px-3 mr-2 ml-2"></span>Incompleta</p>
       <p> <span class="done px-3 mr-2 ml-2"></span>Realizada</p>
      </div>
    <div class="form-avaliacao" v-if="avaliacaoCreate">
      <Form :dados="avaliacaoQuestion" :answers="answers"/>
    </div>
    <div class="pdi p-3" v-if="pdiCreate">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Colaborador</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Leticia</option>
          <option value="1">Lucas</option>
          <option value="2">Igor</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">PDI</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
    <div class="table-responsive border border-start-0">
      <table class="table">
      <thead>
        <tr>   
          <th scope="col">Nome</th>
          <th scope="col">Cargo</th>
          <th scope="col">Data Admissão</th>
          <th scope="col">Status Avaliacão</th>
          <th scope="col">Ações/AD</th>
          <th scope="col">PDI/AD</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Leticia Farnesi</td>
          <td>RH</td>
          
            <td>01/02/2023</td>
            
            <th scope="row"> 
            <span class="done px-3 mr-2"></span></th>
            
          
            <td class="d-flex text-center">
            <span class="w-[20px] mr-2" @click="createAvaliacao()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></span>
            <span class="w-[17px] mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></span>
          </td>
          <td>
            <span  @click="createPdi()">pdi</span>
          </td>
        </tr>
        <tr>
          <td>Igor Almeida</td>
          <td>T.i</td>
         
          
          <td>01/02/2023</td>
          <th scope="row"> 
            <span class="pendente px-3 mr-2"></span></th>
          
          <td class="d-flex text-center">
            <span class="w-[20px] mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></span>
            <span class="w-[17px] mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></span>
            <span class="w-[20px] mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></span>
          </td>
        </tr>
        <tr>
          <td>Claudia Fontana</td>
          <td>Boss</td>
          
          <td>01/02/2023</td>
          <th scope="row"> 
            <span class="not-done px-3 mr-2"></span></th>
         
          <td class="d-flex text-center">
            <span class="w-[20px] mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></span>
            <span class="w-[17px] mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></span>
            
          </td>
        </tr>
      </tbody>
      </table>
    </div>
  </div>
  
  
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
import Form from '@/components/Form.vue';
export default {
  data(){
    return{
      avaliacaoCreate:false,
      pdiCreate:false
    }
  },
  mounted() {
    console.log(this.$store)
    this.avaliacao()
    this.answersTeste()
  },
  computed:{
    ...mapGetters({
      avaliacaoQuestion:'auth/questionAvaliation',
      answers:'auth/questionAnswers'
    })
  },
  methods:{
      ...mapActions({
        ActionQuestion:'auth/ActionQuestion',
        ActionAnswers:'auth/ActionAnswers'
      }),
      avaliacao(e){ 
        return this.ActionQuestion()
      },
      answersTeste(e){ 
        return this.ActionAnswers()
      },
      createAvaliacao(){
        if(this.avaliacaoCreate){
          this.avaliacaoCreate = false
        }else{
          this.avaliacaoCreate = true
        }
        
      },
      createPdi(){
        if(this.pdiCreate){
          this.pdiCreate = false
        }else{
          this.pdiCreate = true
        }
      }
  },
  components:{
    Form
  }
}
</script>

<style scoped lang="scss">
.done{
  background: greenyellow;
  height: 4vh;
  width: 1px;
}
.pendente{
  background: yellow;
}
.not-done{
  background: red;
}

</style>