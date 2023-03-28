import { routes as auth } from '../pages/Auth'//login e tudo que for relacionado a autenticacao
import { routes as dashboard } from '../pages/Dashboard'

export default [
  ...auth,
  ...dashboard
]