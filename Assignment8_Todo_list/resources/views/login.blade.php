<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-300">
<form action="/login" method="POST" class="bg-white p-8 rounded-2xl shadow-lg w-80 space-y-6">
    @csrf {{-- VERY important --}}
    
    <h2 class="font-bold text-2xl text-center">Login</h2>
    
    <section class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">User ID:</label>
        <input type="text" name="userid" placeholder="UserId"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
    </section>

    <section class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" placeholder="Password"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
    </section>

    <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
        Login
    </button>
</form>
</body>
</html>