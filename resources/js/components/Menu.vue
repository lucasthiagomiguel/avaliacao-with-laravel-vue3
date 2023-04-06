<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex  flex-column align-items-start">
            <a class="navbar-brand" href="#">RH SYSTEMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="menuLateral">
                <ul class="navbar-nav d-flex  flex-column align-items-start">
                    <li class="nav-item">
                        <RouterLink to="/avaliacao" class="nav-link" active-class="active" exact>
                        Avaliação Desempenho
                    </RouterLink>
                    </li>
                    
                    <RouterLink to="/dashboard"  active-class="active" exact>
                        Dashboard
                    </RouterLink>   
                    <RouterLink to="/colaboradores"  active-class="active" exact>
                        Relatorios
                    </RouterLink>                   
                    <RouterLink to="/historico" active-class="active" exact>
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
            font-size: 15px;
            color: #acb0b6;
            padding: 9px 0;
        }
    }
    .active{
        color: #000;
    }
}
    



</style>