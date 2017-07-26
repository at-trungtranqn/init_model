<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Place::class, 15)->create();//save into database
        Model::reguard();
    }
}