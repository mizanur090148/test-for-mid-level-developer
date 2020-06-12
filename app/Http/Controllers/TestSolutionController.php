<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\Record;
use DB, Session;

class TestSolutionController extends Controller
{    
    public function getSecondBuyerEloquent()
    {
    	$second_buyer_eloquent = Buyer::leftJoin('diary_taken', 'buyers.id', 'diary_taken.buyer_id')
    		->leftJoin('eraser_taken', 'buyers.id', 'eraser_taken.buyer_id')
    		->leftJoin('pen_taken', 'buyers.id', 'pen_taken.buyer_id')
    		->selectRaw('
    			buyers.id,buyers.name, 
			    sum(IFNULL(diary_taken.amount, 0)) as total_diary_taken,
				sum(IFNULL(pen_taken.amount, 0)) as total_pen_taken,
				sum(IFNULL(eraser_taken.amount, 0)) as total_eraser_taken,
				sum(IFNULL(diary_taken.amount, 0)) + sum(IFNULL(pen_taken.amount, 0)) + sum(IFNULL(eraser_taken.amount, 0)) as total_items_taken
    		')
    		->orderBy('total_items_taken', 'DESC')
    		->groupBy('buyers.id','buyers.name')
    		->skip(1)
    		->first();

    	return view('pages.second_buyer_eloquent', [
    		'second_buyer_eloquent' => $second_buyer_eloquent
    	]);
    }

    public function getSecondBuyerNoEloquent()
    {
    	$second_buyer_no_eloquent = DB::table('buyers')
    		->leftJoin('diary_taken', 'buyers.id', 'diary_taken.buyer_id')
    		->leftJoin('eraser_taken', 'buyers.id', 'eraser_taken.buyer_id')
    		->leftJoin('pen_taken', 'buyers.id', 'pen_taken.buyer_id')
    		->selectRaw('
    			buyers.id,buyers.name, 
			    sum(IFNULL(diary_taken.amount, 0)) as total_diary_taken,
				sum(IFNULL(pen_taken.amount, 0)) as total_pen_taken,
				sum(IFNULL(eraser_taken.amount, 0)) as total_eraser_taken,
				sum(IFNULL(diary_taken.amount, 0)) + sum(IFNULL(pen_taken.amount, 0)) + sum(IFNULL(eraser_taken.amount, 0)) as total_items_taken
    		')
    		->orderBy('total_items_taken', 'DESC')
    		->groupBy('buyers.id','buyers.name')
    		->skip(1)
    		->first();

    	return view('pages.second_buyer_no_eloquent', [
    		'second_buyer_no_eloquent' => $second_buyer_no_eloquent
    	]);
    }

    public function getPurchaseListEloquent()
    {
    	$purchase_list_eloquent = Buyer::leftJoin('diary_taken', 'buyers.id', 'diary_taken.buyer_id')
    		->leftJoin('eraser_taken', 'buyers.id', 'eraser_taken.buyer_id')
    		->leftJoin('pen_taken', 'buyers.id', 'pen_taken.buyer_id')
    		->selectRaw('
    			buyers.id,buyers.name, 
			    sum(IFNULL(diary_taken.amount, 0)) as total_diary_taken,
				sum(IFNULL(pen_taken.amount, 0)) as total_pen_taken,
				sum(IFNULL(eraser_taken.amount, 0)) as total_eraser_taken,
				sum(IFNULL(diary_taken.amount, 0)) + sum(IFNULL(pen_taken.amount, 0)) + sum(IFNULL(eraser_taken.amount, 0)) as total_items_taken
    		')
    		->orderBy('total_items_taken', 'ASC')
    		->groupBy('buyers.id','buyers.name')    		
    		->get();

    	return view('pages.purchase_list_eloquent', [
    		'purchase_list_eloquent' => $purchase_list_eloquent
    	]);
    }

    public function getPurchaseListNoEloquent()
    {
    	$purchase_list_no_eloquent = DB::table('buyers')
    		->leftJoin('diary_taken', 'buyers.id', 'diary_taken.buyer_id')
    		->leftJoin('eraser_taken', 'buyers.id', 'eraser_taken.buyer_id')
    		->leftJoin('pen_taken', 'buyers.id', 'pen_taken.buyer_id')
    		->selectRaw('
    			buyers.id,buyers.name, 
			    sum(IFNULL(diary_taken.amount, 0)) as total_diary_taken,
				sum(IFNULL(pen_taken.amount, 0)) as total_pen_taken,
				sum(IFNULL(eraser_taken.amount, 0)) as total_eraser_taken,
				sum(IFNULL(diary_taken.amount, 0)) + sum(IFNULL(pen_taken.amount, 0)) + sum(IFNULL(eraser_taken.amount, 0)) as total_items_taken
    		')
    		->orderBy('total_items_taken', 'ASC')
    		->groupBy('buyers.id','buyers.name')    		
    		->get();

    	return view('pages.purchase_list_no_eloquent', [
    		'purchase_list_no_eloquent' => $purchase_list_no_eloquent
    	]);
    }

    public function getSortJs()
    {
    	return view('pages.sort_js');
    }

    public function getRecordTransfer()
    {
    	try {
    		DB::beginTransaction();
    		$jsonData = file_get_contents(storage_path('app/public/records.json'));
	    	$json_decoded_data = json_decode($jsonData, true);

	    	Record::truncate();
	    	foreach ($json_decoded_data as $data)  {
				foreach (array_chunk($data, 1000) as $chunkData) {
					$inputArr = [];
					foreach ($chunkData as $value) {
						$inputArr[] = $value;
					}
					Record::insert($inputArr);
				}
			}
			DB::commit();
			Session::flash('success', 'Successfully inserted');

    	} catch (Exception $e) {
    		DB::rollback();
    		Session::flash('fail', 'Something went wrong!');
    	}
    	return redirect()->back();
    }

    public function getFilterJs()
    {
    	return view('pages.filter_js');
    }

    public function getMapJs()
    {
    	return view('pages.map_js');
    }

    public function getReduceJs()
    {
    	return view('pages.reduce_js');
    }

    public function getForeachJs()
    {
    	return view('pages.foreach_js');
    }

    public function getAnimation()
    {
    	return view('pages.animation');
    }

    public function getImFunny()
    {
    	return view('pages.i_m_funny');
    }

}
