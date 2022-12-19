<?php 

namespace Bridge\src\Services\Content;

use Bridge\src\Interfaces\IContentExport;
use Bridge\src\Models\Budget;

class ExportBudget implements IContentExport
{
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

	public function CreateContent(): array 
    {
        return [
            'request_date' => $this->budget->date,
            'client_name' => $this->budget->value
        ];
	}
}
