<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <hr>
    <ul>
        @forelse($greetings as $greeting)
            <li>{{ $greeting }}</li>
            {{-- @dump($loop) --}}
        @empty
            <li>Nessun saluto</li>
        @endforelse
    </ul>
</body>

</html>
