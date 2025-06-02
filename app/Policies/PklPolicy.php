<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pkl;
use Illuminate\Auth\Access\HandlesAuthorization;

class PklPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_p::k::l');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pkl $pkl): bool
    {
        return $user->can('view_p::k::l');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_p::k::l');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pkl $pkl): bool
    {
        return $user->can('update_p::k::l');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pkl $pkl): bool
    {
        return $user->can('delete_p::k::l');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_p::k::l');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Pkl $pkl): bool
    {
        return $user->can('force_delete_p::k::l');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_p::k::l');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Pkl $pkl): bool
    {
        return $user->can('restore_p::k::l');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_p::k::l');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Pkl $pkl): bool
    {
        return $user->can('replicate_p::k::l');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_p::k::l');
    }
}
