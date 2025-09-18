<?php

namespace Database\Seeders;

use App\Models\Prompt;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromptsSeeder extends Seeder
{
    public function run(): void
    {
        collect(File::json(dirname(__FILE__).'/data/prompts.json'))->each(function ($i) {
            Prompt::updateOrCreate([
                'content' => $i,
            ], [
                //
            ]);
        });
    }
}
