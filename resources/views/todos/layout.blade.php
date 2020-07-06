<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
          integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3 border rounded py-4 border-gray-400">
            @yield('content')
        </div>
    </div>
</body>
</html>
