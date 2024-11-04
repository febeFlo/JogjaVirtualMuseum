<?php

namespace App\Policies;

use App\Models\Kuesioner1;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class Kuesioner1Policy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Kuesioner1 $kuesioner1): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Kuesioner1 $kuesioner1): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Kuesioner1 $kuesioner1): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Kuesioner1 $kuesioner1): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Kuesioner1 $kuesioner1): bool
    {
        return true;
    }
}
