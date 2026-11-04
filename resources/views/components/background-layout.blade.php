<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body style="background-color: #f0f0f0; font-family: Arial, sans-serif; margin: 5px; padding: 0;">
    <h1>There is stuff here</h1>

    {{ $slot }}
</body>
</html>