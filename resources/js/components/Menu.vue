<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex  flex-column align-items-start">
            <a class="navbar-brand" href="#">RH SYSTEMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="menuLateral">
                <ul class="navbar-nav d-flex  flex-column align-items-start">
                    <RouterLink to="/teste-realizados" active-class="active" exact>
                        Avaliacao Desempenho
                    </RouterLink>
                    <RouterLink to="/dashboard"  active-class="active" exact>
                        Dashboard
                    </RouterLink>
                    <RouterLink to="/usuarios" class="d-none" active-class="active" exact>
                        Usuarios
                    </RouterLink>
                    <RouterLink to="/financeiro" class="d-none" active-class="active" exact>
                        Financeiro
                    </RouterLink>
                    <RouterLink to="/teste-desenpenho" class="d-none" active-class="active" exact>
                        Teste Desempenho
                    </RouterLink>
                    
                    <RouterLink to="/teste-realizados" active-class="active" exact>
                        Historico
                    </RouterLink>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
#menuLateral{
    ul{
        a{
            text-decoration: none;
            font-weight: 800;
            font-size: 24px;
            color: #acb0b6;
            padding: 9px 0;
        }
    }
    .active{
        color: #000;
    }
}
    



</style>