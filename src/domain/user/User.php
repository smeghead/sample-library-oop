<?php

declare(strict_types=1);

namespace Smeghead\SampleLibraryOop\User;

use Smeghead\SampleLibraryOop\User\Role\Role;

final class User
{
    private Role $role;

    public function authenticate(string $email, string $password): bool
    {
        return false;
    }
}
