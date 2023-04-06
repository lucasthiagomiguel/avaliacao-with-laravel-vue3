<template>
  <form  class="row g-3 p-3">
    <select class="form-select" aria-label="Default select example">
        <option selected>Leticia</option>
        <option value="1">Lucas</option>
        <option value="2">Igor</option>
    </select>
    <div class="mb-3" v-for=" question in dados" :key="question.id">
        <label class="form-check-label form-label" for="flexCheckChecked">
            {{ question.questions }}
            
        </label>
        <div class="form-check"  >
            <div class="box-answers" v-for=" answersCheck in answers" :key="answersCheck.id" >
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  v-if="question.typeTest == answersCheck.question_id">
                <label class="form-check-label" for="flexCheckDefault" v-if="question.typeTest == answersCheck.question_id">
                    {{answersCheck.answers}}
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
    props: {
        dados: Object,
        answers: Object
  }
}
</script>

<style>

</style>