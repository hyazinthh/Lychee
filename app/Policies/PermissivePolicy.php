<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissivePolicy
{
	use HandlesAuthorization;

	/**
	 * Perform pre-authorization checks.
	 *
	 * @param User|null $user
	 * @param string    $ability
	 *
	 * @return void|bool
	 */
	public function before(?User $user, $ability)
	{
		if ($user !== null) {
			return true;
		}
	}
}