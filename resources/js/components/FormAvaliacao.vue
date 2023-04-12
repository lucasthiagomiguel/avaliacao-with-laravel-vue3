<template>
    <div class="">
        <div class="alert alert-success" role="alert" v-if="!msg">
            Avaliacão realizada com sucesso!
        </div>
        <form  class="row g-3 p-3" method="post" @submit.prevent="dadosAvaliacao()" v-if="msg">
          <label class="form-check-label form-label" for="flexCheckChecked" >
                  Colaborador 
              </label>
              <input type="text" :value="name" disabled>
              <input type="hidden" name="" :value="idColaborador" >
          <div class="mb-3" >
              <label class="form-check-label form-label" for="flexCheckChecked" >
                  Como foram as entregas deste(a) colaborador(a) de um modo geral?
              </label>
              <div class="form-check"  >
                  <div class="box-answers"  >
                      <input class="form-check-input" name="pergunta1" type="radio" value="3" id="p3" v-model="avaliacao.pergunta1" required>
                      <label class="form-check-label" for="p3">
                          Acima do esperado
                      </label>
                  </div>
                  
              </div>
              <div class="form-check"  >
                  <div class="box-answers"  >
                      <input class="form-check-input" name="pergunta1" type="radio" value="2" id="p2" v-model="avaliacao.pergunta1" required>
                      <label class="form-check-label" for="p2">
                          Dentro do esperado
                      </label>
                  </div>
                  
              </div>
              <div class="form-check"  v-if="msg">
                  <div class="box-answers"  >
                      <input class="form-check-input" name="pergunta1" type="radio" value="1" id="p1" v-model="avaliacao.pergunta1" required>
                      <label class="form-check-label" for="p1">
                          Abaixo do esperado
                      </label>
                  </div>
                  
              </div>
          </div>
              <div class="mb-3" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      As entregas no último semestre foram realizadas dentro do prazo planejado?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta2" type="radio" value="3" id="p3-1" v-model="avaliacao.pergunta2">
                          <label class="form-check-label" for="p3-1">
                              Acima do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta2" type="radio" value="2" id="p2-1" v-model="avaliacao.pergunta2">
                          <label class="form-check-label" for="p2-1">
                              Dentro do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta2" type="radio" value="1" id="p1-1" v-model="avaliacao.pergunta2">
                          <label class="form-check-label" for="p1-1">
                              Abaixo do esperado
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      As entregas no último semestre foram realizadas com a qualidade esperada?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta3" type="radio" value="3" id="p3-2" v-model="avaliacao.pergunta3">
                          <label class="form-check-label" for="p3-2">
                              Acima do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta3" type="radio" value="2" id="p2-2" v-model="avaliacao.pergunta3">
                          <label class="form-check-label" for="p2-2">
                              Dentro do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta3" type="radio" value="1" id="p1-2" v-model="avaliacao.pergunta3">
                          <label class="form-check-label" for="p1-2">
                              Abaixo do esperado
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      O(a) colaborador(a) possui participação ativa nas atividades em equipe?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta4" type="radio" value="3" id="p3-3" v-model="avaliacao.pergunta4">
                          <label class="form-check-label" for="p3-3">
                              Acima do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta4" type="radio" value="2" id="p2-3" v-model="avaliacao.pergunta4">
                          <label class="form-check-label" for="p2-3">
                              Dentro do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta4" type="radio" value="1" id="p1-3" v-model="avaliacao.pergunta4">
                          <label class="form-check-label" for="p1-3">
                              Abaixo do esperado
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      Qual a visão do cliente (Inter/externo) em relação a este colaborador?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta5" type="radio" value="3" id="p3-4" v-model="avaliacao.pergunta5">
                          <label class="form-check-label" for="p3-4">
                              Acima do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta5" type="radio" value="2" id="p2-4" v-model="avaliacao.pergunta5">
                          <label class="form-check-label" for="p2-4">
                              Dentro do esperado
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta5" type="radio" value="1" id="p1-4" v-model="avaliacao.pergunta5">
                          <label class="form-check-label" for="p1-4">
                              Abaixo do esperado
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" data="desempenho" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      Como foi o engajamento do(a) colaborador(a) em relação ao que foi planejado X realizado em suas atividades?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta6" type="radio" value="3" id="p3-5" v-model="avaliacao.pergunta6">
                          <label class="form-check-label" for="p3-5">
                              Alto
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta6" type="radio" value="2" id="p2-5" v-model="avaliacao.pergunta6">
                          <label class="form-check-label" for="p2-5">
                              Médio
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta6" type="radio" value="1" id="p1-5" v-model="avaliacao.pergunta6">
                          <label class="form-check-label" for="p1-5">
                              Baixo
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" data="desempenho" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      O(a) colaborador(a) possui uma disciplina? (ex: Apontamendo de horas diaário, envio de HE no prazo, participação nas dailys, pronto atendimento ao cliente interno/externo)
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta7" type="radio" value="3" id="p3-6" v-model="avaliacao.pergunta7">
                          <label class="form-check-label" for="p3-6">
                              Alto
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta7" type="radio" value="2" id="p2-6" v-model="avaliacao.pergunta7">
                          <label class="form-check-label" for="p2-6">
                              Médio
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta7" type="radio" value="1" id="p1-6" v-model="avaliacao.pergunta7">
                          <label class="form-check-label" for="p1-6">
                              Baixo
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" data="desempenho" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      O(a) colaborador(a) tem facilidade no aprendizado?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta8" type="radio" value="3" id="p3-7" v-model="avaliacao.pergunta8">
                          <label class="form-check-label" for="p3-7">
                              Alto
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta8" type="radio" value="2" id="p2-7" v-model="avaliacao.pergunta8">
                          <label class="form-check-label" for="p2-7">
                              Médio
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta8" type="radio" value="1" id="p1-7" v-model="avaliacao.pergunta8">
                          <label class="form-check-label" for="p1-7">
                              Baixo
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" data="desempenho" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      O(a) colaborador(a) trabalha bem em equipe?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta9" type="radio" value="3" id="p3-8" v-model="avaliacao.pergunta9">
                          <label class="form-check-label" for="p3-8">
                              Sim
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta9" type="radio" value="2" id="p2-8" v-model="avaliacao.pergunta9">
                          <label class="form-check-label" for="p2-8">
                              Parciamelnte
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta9" type="radio" value="1" id="p1-8" v-model="avaliacao.pergunta9">
                          <label class="form-check-label" for="p1-8">
                              Não
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" data="desempenho" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      O(a) colaborador(a) tem como habilidaade "foco no cliente"?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta10" type="radio" value="3" id="p3-9" v-model="avaliacao.pergunta10">
                          <label class="form-check-label" for="p3-9">
                              Sim
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta10" type="radio" value="2" id="p2-9" v-model="avaliacao.pergunta10">
                          <label class="form-check-label" for="p2-9">
                              Parciamelnte
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta10" type="radio" value="1" id="p1-9" v-model="avaliacao.pergunta10">
                          <label class="form-check-label" for="p1-9">
                              Não
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" data="desempenho" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      "Foco no resultado" (independente das dificuldadees), é um fator priorizado pelo(a) colaborador(a)?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta11" type="radio" value="3" id="p3-10" v-model="avaliacao.pergunta11">
                          <label class="form-check-label" for="p3-10">
                              Sim
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta11" type="radio" value="2" id="p2-10" v-model="avaliacao.pergunta11">
                          <label class="form-check-label" for="p2-10">
                              Parciamelnte
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta11" type="radio" value="1" id="p1-10" v-model="avaliacao.pergunta11">
                          <label class="form-check-label" for="p1-10">
                              Não
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="mb-3" data="desempenho" >
                  <label class="form-check-label form-label" for="flexCheckChecked" >
                      O(a) colaborador(a) possui conhecimento técnico suficiente para realizar suas atividades?
                  </label>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta12" type="radio" value="3" id="p3-11" v-model="avaliacao.pergunta12">
                          <label class="form-check-label" for="p3-11">
                              Sim
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta12" type="radio" value="2" id="p2-11" v-model="avaliacao.pergunta12">
                          <label class="form-check-label" for="p2-11">
                              Parciamelnte
                          </label>
                      </div>
                      
                  </div>
                  <div class="form-check"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta12" type="radio" value="1" id="p1-11" v-model="avaliacao.pergunta12">
                          <label class="form-check-label" for="p1-11">
                              Não
                          </label>
                      </div>
                      
                  </div>
              </div>
              <div class="col-12">
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
                  
              </div>
        </form>
    </div>
</template>

<script>
import axiosInstance from '@/axios';
export default {
    data(){
        return{
            msg: true,
            avaliacao:{
                pergunta1:'',
                pergunta2:'',
                pergunta3:'',
                pergunta4:'',
                pergunta5:'',
                pergunta6:'',
                pergunta7:'',
                pergunta8:'',
                pergunta9:'',
                pergunta10:'',
                pergunta11:'',
                pergunta12:'',
                id_gestor:0,
                id_users:'',
                total_performance:0,
                total_competencia:0,
                quadrante:'',
                name:''
            },
        }
    },
    props: {
        name: '',
        idColaborador:0,
    },
    methods:{
        dadosAvaliacao(e){ 
            this.avaliacao.name = this.name;
            this.avaliacao.id_users = this.idColaborador;
            this.avaliacao.id_gestor = this.$store.state.auth.user.id;
            const token = this.$store.state.auth.token;
            axiosInstance.defaults.headers.common['Authorization'] = `Bearer ${token}`;
            return   axiosInstance.post(`/avaliacaoDone/`,this.avaliacao).then(({data})=>{
                console.log(data);    
                this.msg = false            
                // setInterval(function () {this.msg = true}, 10);
                }).catch((error)=>{
                    console.log(error);
                })

            console.log(this.avaliacao)
        }
        
    }
}
</script>

<style>

</style>