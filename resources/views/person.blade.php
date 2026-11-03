<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-6">
            Person ID: {{ $id }}
        </h1>

        <h2 class="text-xl">
            Name: {{ $data['name'] ?? 'UNKNOWN' }}
        </h2>

        <p class="mt-2">
            Role: {{ $data['role'] ?? 'UNKNOWN' }}
        </p>
    </div>
</body>
</html>