<?php

use Illuminate\Database\Seeder;
use App\Eventos;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Eventos::class, 10)->create();
    }
}
