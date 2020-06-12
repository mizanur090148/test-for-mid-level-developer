<?php

namespace App\Repositories;

interface BuyerRepositoryInterface 
{
	public function secondBuyerEloquent();
	public function secondBuyerNoEloquent();
	public function purchaseListEloquent();
	public function purchaseListNoEloquent();	
}