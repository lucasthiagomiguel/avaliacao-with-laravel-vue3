import { routes as auth } from '../pages/Auth'//login e tudo que for relacionado a autenticacao
import { routes as dashboard } from '../pages/Dashboard'
import { routes as avaliacao } from '../pages/Avaliacao'
import { routes as colaboradores } from '../pages/Colaboradores'
import { routes as historico } from '../pages/Historico'

export default [
  ...auth,
  ...dashboard,
  ...avaliacao,
  ...colaboradores,
  ...historico
]