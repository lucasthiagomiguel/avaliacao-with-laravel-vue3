import Home from "@/Pages/Dashboard/Dashboard.vue";

export default [
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Home,
      meta: {
        requiresAuth:true,
        title: `Dashboard`
      }
    }
    
  ]
