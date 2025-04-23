<?php

declare(strict_types=1);

namespace Spendstream\Favicon;

interface GeneratorInterface
{
    /**
     * @throws \ImagickException
     */
    public function generate(): string;
}
