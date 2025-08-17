<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-300 flex-col">
    <h1 class="text-2xl">Hello {{ $userName }}</h1>

    <form action="homePage" method="post" class="bg-white p-8 rounded-2xl shadow-lg w-80 space-y-6">
        @csrf
        <div class="space-y-2">
            <label for="taskTitle" class="block text-sm font-medium text-gray-700">Task Title</label>
            <input type="text" name="taskTitle" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Task Title" required>
        </div>
        <div class="space-y-2">
            <label for="description" class="block text-sm font-medium text-gray-700">Task Description</label>
            <textarea name="description" class="w-full px-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Write description here"></textarea>
        </div>
        <div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Confirm</button>
        </div>
    </form>

    <h2 class="text-2xl">Your Tasks</h2>
    <ol>
        @foreach($tasks as $task)
            <li class="text-2xl m-2"><strong>{{ $task['title'] }}</strong>: {{ $task['description'] }}</li>
        @endforeach
    </ol>
</body>
</html>
