<template>
  <div class="">
    <div class="p-3 border border-bottom-0 border-start-0">
      <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <div class="table-responsive border border-start-0">
      <table class="table">
      <thead>
        <tr>   
          <th scope="col">Nome</th>
          <th scope="col">Cargo</th>
          <th scope="col">Data Admissão</th>
          <th scope="col">Status Avaliacão</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Leticia Farnesi</td>
          <td>RH</td>
          
            <td>01/02/2023</td>
            
            <th scope="row"> 
            <span class="done px-3 mr-2"></span>Realizada</th>
            
          
        </tr>
        <tr>
          <td>Igor Almeida</td>
          <td>T.i</td>
         
          
          <td>01/02/2023</td>
          <th scope="row"> 
            <span class="done px-3 mr-2"></span>Realizada</th>
        </tr>
        <tr>
          <td>Claudia Fontana</td>
          <td>Boss</td>
          
          <td>01/02/2023</td>
          <th scope="row"> 
            <span class="done px-3 mr-2"></span>Realizada</th>
        </tr>
      </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {

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