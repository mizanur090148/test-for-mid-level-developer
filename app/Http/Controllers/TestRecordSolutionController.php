<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RecordRepositoryInterface;
use Session;

class TestRecordSolutionController extends Controller
{
    private $model;

    public function __construct(RecordRepositoryInterface $model)
    {
        $this->model = $model;
    }

    public function getRecordTransfer()
    {
    	try {
    		$jsonData = file_get_contents(storage_path('app/public/records.json'));
	    	$json_decoded_data = json_decode($jsonData, true);

            $this->model->recordTransfer($json_decoded_data);
			Session::flash('success', 'Successfully inserted');

    	} catch (Exception $e) {
    		Session::flash('fail', 'Something went wrong!');
    	}
    	return redirect()->back();
    }
}
