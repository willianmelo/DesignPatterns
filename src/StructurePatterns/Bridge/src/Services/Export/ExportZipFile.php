<?php

namespace Bridge\src\Services\Export;

use Bridge\src\Interfaces\IContentExport;
use Bridge\src\Interfaces\IFileExport;

class ExportZipFile implements IFileExport
{
    private string $internalFileName;

    public function __construct(string $internalFileName)
    {
        $this->internalFileName = $internalFileName;
    }

    public function Save(IContentExport $contentExport): string
    {
        $filePath = tempnam(sys_get_temp_dir(), 'zip');
        $zipFile = new \ZipArchive();
        $zipFile->open($filePath, \ZipArchive::CREATE);
        $zipFile->addFromString($this->internalFileName, serialize($contentExport->CreateContent()));
        $zipFile->close();

        return $filePath;
    }
}