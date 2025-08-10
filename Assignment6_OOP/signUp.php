<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-300">
<?php
require_once 'classes/SessionManager.php';
require_once 'classes/Student.php';

SessionManager:: requireLogin();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $data = [
        "userid" => $_POST['id'],
        "name" => $_POST['name'],
        'age' => $_POST['age'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    $student = new Student();
    $student -> signupStudent($data);
    header('Location: login.php');
    exit();
}
?>
<form method="post" class="bg-white p-5 rounded-2xl shadow-lg w-80 space-y-3">
    <h2 class="font-bold text-2xl text-center">Sign Up</h2>
    <section class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">ID: </label>
        <input type="number" name="id" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </section>

    <section class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Name: </label>
        <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </section>

    <section class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Age: </label>
        <input type="number" name="age" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required min="1">
    </section>

    <section class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Email: </label>
        <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </section>

    <section class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Password: </label>
        <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </section>

    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Confirm</button>
</form>
</body>
</html>