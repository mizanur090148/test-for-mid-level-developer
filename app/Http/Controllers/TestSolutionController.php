<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BuyerRepositoryInterface;

class TestSolutionController extends Controller
{
    private $model;

    public function __construct(BuyerRepositoryInterface $model)
    {
        $this->model = $model;
    }

    public function getSecondBuyerEloquent()
    {
    	$second_buyer_eloquent = $this->model->secondBuyerEloquent();

    	return view('pages.second_buyer_eloquent', [
    		'second_buyer_eloquent' => $second_buyer_eloquent
    	]);
    }

    public function getSecondBuyerNoEloquent()
    {
    	$second_buyer_no_eloquent = $this->model->secondBuyerNoEloquent();

    	return view('pages.second_buyer_no_eloquent', [
    		'second_buyer_no_eloquent' => $second_buyer_no_eloquent
    	]);
    }

    public function getPurchaseListEloquent()
    {
    	$purchase_list_eloquent = $this->model->purchaseListEloquent();

    	return view('pages.purchase_list_eloquent', [
    		'purchase_list_eloquent' => $purchase_list_eloquent
    	]);
    }

    public function getPurchaseListNoEloquent()
    {
    	$purchase_list_no_eloquent = $this->model->purchaseListNoEloquent();

    	return view('pages.purchase_list_no_eloquent', [
    		'purchase_list_no_eloquent' => $purchase_list_no_eloquent
    	]);
    }
}
