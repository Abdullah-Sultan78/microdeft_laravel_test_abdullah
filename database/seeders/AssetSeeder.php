<?php

namespace Database\Seeders;

use App\Models\Asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json =File::get(path:'database/json/assets.json');
        $assets =collect(json_decode($json));
        $assets->each(function($asset){
            Asset::create(
                [
                    'name'=>$asset->name,
                ]
                );
        });
    }
}
