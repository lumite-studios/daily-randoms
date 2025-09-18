<?php

namespace Database\Seeders;

use App\Models\Noun;
use App\Models\Verb;
use App\Models\Descriptor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoodlesSeeder extends Seeder
{
    public function run(): void
    {
        collect(File::json(dirname(__FILE__).'/data/nouns.json'))->each(function ($i) {
            Noun::updateOrCreate([
                'content' => $i['content'],
            ], [
                'color' => $i['color'] ?? 'gray',
            ]);
        });

        collect(File::json(dirname(__FILE__).'/data/descriptors.json'))->each(function ($i) {
            Descriptor::updateOrCreate([
                'content' => $i,
            ], [
                //
            ]);
        });

        collect(File::json(dirname(__FILE__).'/data/verbs.json'))->each(function ($i) {
            Verb::updateOrCreate([
                'content' => $i,
            ], [
                //
            ]);
        });
    }
}
