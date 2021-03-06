<?php

/**
 * Custom helpers.
 */
use REBELinBLUE\Deployer\User;

/**
 * Get the user avatar.
 * @param  User   $user
 * @return string
 */
function avatar(User $user)
{
    if ($user->avatar) {
        return url($user->avatar);
    }

    return Gravatar::get($user->email);
}
