import Historico from '@/Pages/Historico/Historico.vue'
export default [
    {
      path: '/historico',
      name: 'historico',
      component: Historico,
      meta: {
        requiresAuth:true,
        title: `Historico`
      }
    }
    
  ]
