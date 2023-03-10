<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('languages')->delete();
        
        DB::collection('languages')->insert([
            [
                'label' => 'fr',
                'title' => "Français",
                'icon' => "fr.png"
            ],
            [
                'label' => 'en',
                'title' => "English",
                'icon' => "en.png"
            ],

        ]);
    }
}
