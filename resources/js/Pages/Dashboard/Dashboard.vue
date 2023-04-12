<template>
  <div class="">
    <div class="quantity p-4 d-flex justify-content-around">
        <p>Total Colaboradores: <span>{{ totalColaborador }}</span></p>
        <p>Total Avaliações Realizada: <span>{{ totalColaborador }}</span></p>
    </div>
    <div class="">

    </div>
    <div class="text-center" @click="UserLoged()">
      <h1>9Box</h1>
    </div>
      <div class="nine-box w-[420px] h-[300px] d-flex flex-wrap m-auto mt-5 p-3  justify-content-around">
          <div class="border w-[115px] p-2 mb-2 text-center enigma text-center">
              <p>Enigma</p>
              <div class="quantity-colaborador borde-0 ">
                <span>{{ nineBox.enigma }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center potencial">
              <p>Potencial</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.potencial }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center talento" >
              <p>Talento</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.talento }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center questionavel">
              <p>Questionavel</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.questionavel }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center mantenedor">
              <p>Mantenedor</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.mantenedor }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center desempenho">
              <p>Desempenho</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.desempenho }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center risco">
              <p>Risco</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.risco }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center eficaz">
              <p>Eficaz</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.eficaz }}</span>
              </div>
          </div>
          <div class="border w-[115px] p-2 mb-2 text-center comprometimento">
              <p>Comprometido</p>
              <div class="quantity-colaborador borde-0">
                <span>{{ nineBox.comprometido }}</span>
              </div>
          </div>
      </div>
      <div class="container mb-2">
        <form class="d-flex align-items-center" role="search">
          <div class="form-check mr-2"  >
                      <div class="box-answers"  >
                          <input class="form-check-input" name="pergunta7" type="radio" value="3" id="p3-6" >
                          <label class="form-check-label" for="p3-6">
                              Todos
                          </label>
                      </div>
                      
                  </div>
        <input class="form-control me-2" type="search" placeholder="Pesquisar por colaborador" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
      <div class="">
        <div class="table-responsive border border-start-0">
          <table class="table">
          <thead>
            <tr>   
              <th scope="col">Nome</th>
              <th scope="col">Cargo</th>
              <th scope="col">Data Admissão</th>
              <th scope="col">Performance</th>
              <th scope="col">Competencia</th>
              <th scope="col">Quadrante</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(c,i) in colaboradores" :key="i">
              <td>{{ c.name }} </td>
              <td>{{ c.cargo }}</td>
              
              <td>{{ c.admisao }}</td>
              <th scope="row"> 
                {{ c.total_performance }}  
              </th>
            
              <td class="">
                {{ c.total_competencia }}
              </td>
              <td>
                {{ c.quadrante }}
              </td>
              
            </tr>
          </tbody>
          </table>
        </div>
  
      </div>
  </div>
        
   
  
</template>

<script>
import axiosInstance from '@/axios';

export default {
  data(){
    return{
      colaboradores:[],
      totalColaborador:0,
      nineBox:
        {
          enigma:0,
          potencial:0,
          talento:0,
          questionavel:0,
          mantenedor:0,
          desempenho:0,
          risco:0,
          eficaz:0,
          comprometido:0,

        }
      
    }
  },
  mounted(){
   console.log(axiosInstance)
   this.UsersAvaliation()
  },
    components:{
        
    },
    methods:{
      UsersAvaliation(){
        const idTeam = this.$store.state.auth.user.id;
        const token = this.$store.state.auth.token;
        axiosInstance.defaults.headers.common['Authorization'] = `Bearer ${token}`;
        return   axiosInstance.get(`/avaliacaoDone/`).then(({data})=>{
          this.colaboradores = data
          this.totalColaborador = data.length
          for( var i = 0;i <= data.length;i++){
            if(data[i].quadrante == 'Enigma'){
              this.nineBox.enigma ++
            }
            if(data[i].quadrante == 'Potencial'){
              this.nineBox.potencial ++
              console.log(data[0].quadrante)
            }
            if(data[i].quadrante == 'Talento'){
              this.nineBox.talento ++
              console.log(data[0].quadrante)
            }
            if(data[i].quadrante == 'Questionável'){
              this.nineBox.questionavel ++
            }
            if(data[i].quadrante == 'Mantenedor'){
              this.nineBox.mantenedor ++
            }
            if(data[i].quadrante == 'Desempenho'){
              this.nineBox.desempenho ++
            }
            if(data[i].quadrante == 'Risco'){
              this.nineBox.risco ++
            }
            if(data[i].quadrante == 'Eficaz'){
              this.nineBox.eficaz ++
            }
            if(data[i].quadrante == 'Comprometido'){
              this.nineBox.comprometido ++
            }
            
          }
          }).catch((error)=>{
              console.log(error);
          })
      }
    }
}
</script>

<style lang="scss" scoped>
.nine-box{
    .enigma,.comprometimento,.mantenedor{
        background: #00BFFF;
        color: #fff;
        cursor: pointer;
    }
    .potencial,.desempenho{
        background: #32CD32;
        color: #fff;
        cursor: pointer;
    }
    .talento{
        background: #00764b;
        color: #fff;
        cursor: pointer;
    }
    .questionavel,.eficaz{
        background: #FFA500;
        color: #fff;
        cursor: pointer;
    }
    .risco{
        background: red;
        color: #fff;
        cursor: pointer;
    }
}
</style>