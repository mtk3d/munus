<?php

declare(strict_types=1);

namespace Munus\Match\Predicates;

use Munus\Match\Is;

/**
 * @template T
 */
class IsNotNull extends Is
{
    /**
     * @param T $value
     */
    public function meet($value): bool
    {
        return !is_null($value);
    }
}
