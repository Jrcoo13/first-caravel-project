<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>
</head>

<body>
    <nav>
        <a href="{{ $nav ?? '#'}}">{{ $navName ?? 'Default Name' }}</a>
    </nav>
    {{ $slot }}
</body>
</html>