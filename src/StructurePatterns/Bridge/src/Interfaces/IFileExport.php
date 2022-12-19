<?php

namespace Bridge\src\Interfaces;

interface IFileExport
{
    function Save(IContentExport $contentExport): string;
}