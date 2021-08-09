<?php

namespace iAxel\Shared\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \iAxel\Shared\Shared
 *
 * @method static \iAxel\Shared\Shared run(array $data = [])
 *
 * @method static string render()
 *
 * @mixin Facade
 */
class Shared extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \iAxel\Shared\Shared::class;
    }
}
