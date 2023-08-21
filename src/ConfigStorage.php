<?php

declare(strict_types=1);

namespace NdybnovHw03\CnfRead;

class ConfigStorage
{
    public function fromDotEnvFile(array $partsOfPathFull): Storage
    {
        $pathFull = (new FileConfig())->buildFullPath($partsOfPathFull);

        $readerConfig = new ReadConfig($pathFull);
        $readerConfig->read();
        $arrayConfig = $readerConfig->toArray();

        $storage = new Storage();
        $storage->fromArray($arrayConfig);

        return $storage;
    }
}
