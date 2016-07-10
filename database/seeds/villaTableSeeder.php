<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Http\Models\Villa;

use Illuminate\Support\Facades\DB;

class villaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('villas')->truncate();

		$deskripsi	= "Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.";

		foreach(range(1, 6) as $index)
		{
			$data = new villa;
			$data->fill([
				'nama'							=> 'Villa ' . $index,
				'deskripsi'						=> $deskripsi,
				'slug'							=> 'villa' . $index
			]);

			if (!$data->save())
			{
				print_r($data->getError());
				exit;
			}
		}
	
    }
}
