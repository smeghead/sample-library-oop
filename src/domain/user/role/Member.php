<?php

declare(strict_types=1);

namespace Smeghead\SampleLibraryOop\User\Role;

use Smeghead\SampleLibraryOop\Library\BookItem;

final class Member implements Role
{
    public function canBorrow(BookItem $bookItem): bool
    {
        return false;
    }
}
