<?php

declare(strict_types=1);

namespace NdybnovHw03\CnfRead;

class ReadConfig
{
    private string $pathToFileConfigLikeDotEnv;
    private array $storage;

    public function __construct(string $pathToEnv)
    {
        $this->pathToFileConfigLikeDotEnv = $pathToEnv;
    }

    public function read(): void
    {
        $pathFull = $this->pathToFileConfigLikeDotEnv;
        $this->storage = \parse_ini_file($pathFull);
    }

    public function toArray(): array
    {
        return $this->storage;
    }
}
