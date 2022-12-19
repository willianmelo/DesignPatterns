<?php 

namespace Bridge\src\Services\Content;

use Bridge\src\Interfaces\IContentExport;
use Bridge\src\Models\Request;

class ExportRequest implements IContentExport
{

    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

	public function CreateContent(): array 
    {
        return [
            'request_date' => $this->request->date,
            'client_name' => $this->request->clientName
        ];
	}
}
