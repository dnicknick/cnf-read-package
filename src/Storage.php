<?php

declare(strict_types=1);

namespace NdybnovHw03\CnfRead;

class Storage
{
    private array $storage;

    public function fromArray(array $storage): void
    {
        $this->storage = $storage;
    }

    public function get(string $key, $default = null)
    {
        return array_key_exists($key, $this->storage) ? $this->storage[$key] : $default;
    }
}
