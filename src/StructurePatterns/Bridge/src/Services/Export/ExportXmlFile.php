<?php

namespace Bridge\src\Services\Export;

use Bridge\src\Interfaces\IContentExport;
use Bridge\src\Interfaces\IFileExport;

class ExportXmlFile implements IFileExport
{
    private string $sourceElement;

    public function __construct(string $sourceElement)
    {
        $this->sourceElement = $sourceElement;
    }

    public function Save(IContentExport $contentExport): string
    {
        $xmlElement = new \SimpleXMLElement("<{$this->sourceElement} />");
        foreach ($contentExport->CreateContent() as $item => $value) {
            $xmlElement->addChild($item, $value);
        }

        $filePath = tempnam(sys_get_temp_dir(), 'xml');
        $xmlElement->asXML($filePath);

        return $filePath;
    }
}
