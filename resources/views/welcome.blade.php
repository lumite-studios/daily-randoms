<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-stone-200 h-screen flex flex-col gap-12 items-center justify-center p-6 md:px-12 lg:px-24 xl:px-48">
        <div class="tracking-wider opacity-50">{{ $date }}</div>
        <div class="w-full grid md:grid-cols-2 gap-6">
            <div class="text-center px-12 relative">
                <div class="text-4xl opacity-75 font-medium z-1 relative tracking-wider">{{ $doodle['content'] }}</div>
                <div class="absolute -translate-y-1/2 h-6 left-6 right-6 bg-{{ $doodle['color'] }}-500 z-0 opacity-25 rounded-full"></div>
                <a class="mt-6 font-mono block text-blue-500" href="https://bsky.app/hashtag/lsdailydoodle" target="_blank">#lsdailydoodle</a>
            </div>
            <div class="text-center px-12">
                <div class="text-4xl font-medium tracking-wider opacity-75">{{ $prompt }}</div>
                <a class="mt-6 font-mono block text-blue-500" href="https://bsky.app/hashtag/lsdailyprompt" target="_blank">#lsdailyprompt</a>
            </div>
        </div>
    </body>
</html>
