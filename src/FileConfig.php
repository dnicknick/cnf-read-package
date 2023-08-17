<?php

declare(strict_types=1);

namespace NdybnovHw03\CnfRead;

class FileConfig
{
    private string $fileName;
    private string $filePath;

    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getFullPath(): string
    {
        return \implode(DIRECTORY_SEPARATOR, [$this->filePath, $this->fileName]);
    }

    public function buildFullPath(array $parts): string
    {
        return \implode(DIRECTORY_SEPARATOR, $parts);
    }
}
