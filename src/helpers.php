<?php

if (! function_exists('shared')) {

    /**
     * @param array $data
     *
     * @return \iAxel\Shared\Shared
     */
    function shared(array $data = [])
    {
        return app(\iAxel\Shared\Shared::class)->run($data);
    }
}
