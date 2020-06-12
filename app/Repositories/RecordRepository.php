<?php

namespace App\Repositories;

use App\Repositories\RecordRepositoryInterface;
use App\Models\Record;
use DB;

class RecordRepository implements RecordRepositoryInterface
{
	public function recordTransfer(array $json_decoded_data)
	{
        return DB::transaction(function () use ($json_decoded_data) {
            // delete exisitng data
            Record::truncate();
            // insert new data
            foreach ($json_decoded_data as $data)  {
                foreach (array_chunk($data, 1000) as $chunkData) {
                    $inputArr = [];
                    foreach ($chunkData as $value) {
                        $inputArr[] = $value;
                    }
                    Record::insert($inputArr);
                }
            }
        });
	}   
}