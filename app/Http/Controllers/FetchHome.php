<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Noun;
use App\Models\Verb;
use App\Models\Prompt;
use App\Models\Descriptor;

class FetchHome extends Controller
{
    public function __invoke()
    {
        $date = now()->toDateString();

        $doodle = cache()->rememberForever("{$date}-doodle", function () {
            $noun = Noun::inRandomOrder()->first()->toArray();
            $descriptor = Descriptor::inRandomOrder()->first()->content;
            $verb = Verb::inRandomOrder()->first()->content;
            return ['color' => $noun['color'], 'content' => "{$noun['content']} {$descriptor} {$verb}"];
        });

        $prompt = cache()->rememberForever("{$date}-prompt", function () {
            return Prompt::inRandomOrder()->first()->content;
        });

        return view('welcome', [
            'date' => Carbon::parse($date)->toFormattedDateString(),
            'doodle' => $doodle,
            'prompt' => $prompt,
        ]);
    }
}
