<?php

namespace iAxel\Shared;

use Illuminate\Contracts\Support\Renderable;

class Shared implements Renderable
{
    /**
     * @var array
     */
    protected array $data = [];

    /**
     * @param array $data
     *
     * @return $this
     */
    public function run(array $data = []): Shared
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return "<script>window.config = {$this->generate()};</script>";
    }

    /**
     * @return string
     */
    protected function generate(): string
    {
        return json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }
}
