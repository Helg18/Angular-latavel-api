<?php

use Illuminate\Database\Seeder;

class librostableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Libros::class, 5)->create();
    }
}
