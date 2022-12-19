<?php

use Bridge\src\Models\Request;
use Bridge\src\Services\Content\ExportRequest;
use Bridge\src\Services\Export\ExportXmlFile;
use Bridge\src\Services\Export\ExportZipFile;

require_once 'autoload.php';

$request = new Request('Willian Melo', '19/12/2022');

$exportRequest = new ExportRequest($request);
$exportXmlFile = new ExportXmlFile('Request');

$exportZipFile = new ExportZipFile('internalDocument');

echo $exportXmlFile->Save($exportRequest);
echo $exportZipFile->Save($exportRequest);