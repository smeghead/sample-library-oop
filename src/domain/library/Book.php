<?php

declare(strict_types=1);

namespace Smeghead\SampleLibraryOop\Library;

final class Book
{
    private string $bookId;
    /** @var BookItem[] */
    private array $bookItems;
}
