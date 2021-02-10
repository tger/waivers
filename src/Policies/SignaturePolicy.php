<?php

namespace Tipoff\Waivers\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Tipoff\Waivers\Models\Signature;

class SignaturePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view signatures') ? true : false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param Signature $signature
     * @return mixed
     */
    public function view(User $user, Signature $signature)
    {
        return $user->hasPermissionTo('view signatures') ? true : false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param Signature $signature
     * @return mixed
     */
    public function update(User $user, Signature $signature)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param Signature $signature
     * @return mixed
     */
    public function delete(User $user, Signature $signature)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param Signature $signature
     * @return mixed
     */
    public function restore(User $user, Signature $signature)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param Signature $signature
     * @return mixed
     */
    public function forceDelete(User $user, Signature $signature)
    {
        return false;
    }
}
