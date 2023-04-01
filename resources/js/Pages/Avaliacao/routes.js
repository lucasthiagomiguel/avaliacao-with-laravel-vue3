import Avaliacao from '@/Pages/Avaliacao/Avaliacao.vue'

export default [
    {
      path: '/avaliacao',
      name: 'avaliacao',
      component: Avaliacao,
      meta: {
        requiresAuth:true,
        title: `Avaliacao`
      }
    }
    
  ]
