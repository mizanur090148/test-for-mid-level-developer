<?php

namespace App\Repositories;

use App\Repositories\BuyerRepositoryInterface;
use App\Models\Buyer;
use DB;

class BuyerRepository implements BuyerRepositoryInterface
{
	public function secondBuyerEloquent()
	{
		return Buyer::leftJoin('diary_taken', 'buyers.id', 'diary_taken.buyer_id')
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
	}

    public function secondBuyerNoEloquent()
    {
        return DB::table('buyers')
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
    }

    public function purchaseListEloquent()
    {
        return Buyer::leftJoin('diary_taken', 'buyers.id', 'diary_taken.buyer_id')
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
    }

    public function purchaseListNoEloquent()
    {
        return DB::table('buyers')
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
    }	
}