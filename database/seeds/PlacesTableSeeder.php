<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
        factory(App\Model\Place::class, 10)->create();
        $slug = SlugService::createSlug(App\Model\Place::class, 'slug', 'My First Place');
        Model::reguard();
    }
}
