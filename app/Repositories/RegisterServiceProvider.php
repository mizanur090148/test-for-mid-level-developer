<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BuyerRepositoryInterface;
use App\Repositories\RecordRepositoryInterface;
use App\Repositories\BuyerRepository;
use App\Repositories\RecordRepository;

class RegisterServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
			BuyerRepositoryInterface::class,
			BuyerRepository::class
		);

		$this->app->bind(
			RecordRepositoryInterface::class,
			RecordRepository::class
		);		
	}
}