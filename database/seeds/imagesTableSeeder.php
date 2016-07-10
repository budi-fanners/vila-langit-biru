<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Http\Models\Villa;
use App\Http\Models\Image;

use Illuminate\Support\Facades\DB;

class imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('images')->truncate();
        
		foreach(range(1, 3) as $index)
		{
			$data = new image;
			$data->fill([
				'tipe'							=> 'slider',
				'sumber'						=> 'images/slider' . $index . '.png',
			]);

			if (!$data->save())
			{
				print_r($data->getError());
				exit;
			}
		}

		foreach(range(1, 6) as $index)
		{
			$data = new image;
			$data->fill([
				'tipe'							=> 'cover',
				'sumber'						=> 'images/Villa' . $index . '.jpg',
				'owner_id'						=> $index
			]);

			if (!$data->save())
			{
				print_r($data->getError());
				exit;
			}
		}	
    }
}
