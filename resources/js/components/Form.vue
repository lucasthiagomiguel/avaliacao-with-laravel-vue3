<template>
  <form  class="row g-3 p-3" method="post" @submit.prevent="limpaValoresRepetidos(input)" >
    <label class="form-check-label form-label" for="flexCheckChecked" >
            Colaborador 
        </label>
        <input type="text" :value="name" disabled>
        <input type="hidden" name="" :value="idColaborador">
    <div class="mb-3" v-for=" question in dados" :key="question.id" >
        <label class="form-check-label form-label" for="flexCheckChecked">
            {{ question.questions }}
            
        </label>
        <div class="form-check"  >
            <div class="box-answers" v-for=" (answersCheck,i) in answers" :key="i" >
                <input class="form-check-input" :name="question.id" type="radio" :value="answersCheck.id " :id="`answers${question.id}-${answersCheck.id}`"  v-if="question.typeTest == answersCheck.question_id" @click="avaliationDone(question.id,answersCheck.id)">
                <label class="form-check-label" :for="`answers${question.id}-${answersCheck.id}`" v-if="question.typeTest == answersCheck.question_id">
                    {{answersCheck.answers}} {{ answersCheck.id}} {{ i }} {{ question.id}}
                </label>
            </div>
            
        </div>
    </div>
    <div class="col-12">
        
        <button type="submit" class="btn btn-secondary mr-3">Voltar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
</template>

<script>
export default {
    data(){
        return{
            input:[]
        }
    },
    props: {
        dados: Object,
        answers: Object,
        name: '',
        idColaborador:0
  },
  methods:{
    avaliationDone(q,r){
        if(this.input.length == 0){
            console.log(this.input)
            this.input.push(
                {
                q: q,r
            }
            ) 
        }
        var a=[]
        var b =[]
        for(var i = 0; i < this.input.length;i++){
            if(this.input[i].q == q & this.input[i].r !== r){
                a.push(q)
                b.push(r)
                console.log(a,b)
            }
        }
        // this.input.push(
        //             {
        //             q: q,r
        //         }
        //     ) 
    },

  }
}
</script>

<style>

</style>