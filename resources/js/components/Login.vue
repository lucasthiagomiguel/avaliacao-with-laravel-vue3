<template>
    <div class="container-fluid d-flex flex-column justify-content-center h-screen">
        <div class="row d-flex justify-content-center">
            <div class=" col-11">
                <div class="card w-[500px]">
                    <form action="" @submit.prevent="login($event)" class=" d-flex flex-column justify-content-center align-items-center pt-4 pb-4">
                        <div class="pb-3">
                            <input type="text" name="" class="boorder-style-color border-2" v-model="usersData.email" placeholder="E-MAIL">
                        </div>
                        <div class="pb-3">
                            <input type="password" name="" class="boorder-style-color border-2" v-model="usersData.password" placeholder="PASSWORD">
                        </div>
                        <div class="w-full text-center">
                            <button type="submit" class="pt-2 pb-2 p-3 border-2 w-[203.5px] boorder-style-color" >enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions } from 'vuex';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                usersData:{
                    email:'teste@teste.comm',
                    password:'password'
                },
            }
        },
       
        props:[],
        methods:{
            ...mapActions('auth',['ActionSetLogin']),
            login(e){ 
                this.ActionSetLogin(this.usersData)
            }
        }
    }

</script>
<style scoped>
.container-fluid{
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
}
.boorder-style-color{
    border-color: #e5e7eb;
}
.row{
    margin: auto;
}
</style>