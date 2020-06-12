<?php

namespace App\Repositories;

interface RecordRepositoryInterface 
{
	public function recordTransfer(array $json_decoded_data);	
}