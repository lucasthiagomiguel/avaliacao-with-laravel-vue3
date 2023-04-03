import Colaborador from '@/Pages/Colaboradores/Colaboradores.vue'
export default [
    {
      path: '/colaboradores',
      name: 'colaboradores',
      component: Colaborador,
      meta: {
        requiresAuth:true,
        title: `Colaboradores`
      }
    }
    
  ]
