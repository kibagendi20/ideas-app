@props([
    'title' => 'Laracasts'
])

<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>

</head>
<body class="">
    <x-nav />
    <main class="max-w-3xl mx-auto">
        {{$slot}}
    </main>
</body>
</html>
