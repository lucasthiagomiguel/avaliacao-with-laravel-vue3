<?php

namespace App\Policies;

use App\Models\AvaliacaoFeita;
use App\Models\Users;
use Illuminate\Auth\Access\HandlesAuthorization;

class AvaliacaoFeitaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Users $users)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Users  $users
     * @param  \App\Models\AvaliacaoFeita  $avaliacaoFeita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Users $users, AvaliacaoFeita $avaliacaoFeita)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Users $users)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Users  $users
     * @param  \App\Models\AvaliacaoFeita  $avaliacaoFeita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Users $users, AvaliacaoFeita $avaliacaoFeita)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users  $users
     * @param  \App\Models\AvaliacaoFeita  $avaliacaoFeita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Users $users, AvaliacaoFeita $avaliacaoFeita)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users  $users
     * @param  \App\Models\AvaliacaoFeita  $avaliacaoFeita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Users $users, AvaliacaoFeita $avaliacaoFeita)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users  $users
     * @param  \App\Models\AvaliacaoFeita  $avaliacaoFeita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Users $users, AvaliacaoFeita $avaliacaoFeita)
    {
        //
    }
}
