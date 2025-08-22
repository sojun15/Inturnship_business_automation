<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div >
        <div class="bg-white my-3 flex justify-center">
        <a href="{{route('users.create')}}" class="bg-blue-500 text-white border rounded-lg p-2 mt-1">Click for adding new Task</a>
        </div>
        <div class="bg-gray-200 w-full flex flex-col items-center justify-center">
        <table class="table block border border-black bg-white">
            <thead>
                <h1 class="text-center text-indigo-500 text-2xl">Task Information</h1>
            <tr>
                <th class="border border-black px-4 py-2">Title</th>
                <th class="border border-black px-4 py-2">Description</th>
                <th class="border border-black px-4 py-2">Created Time</th>
                <th class="border border-black px-4 py-2">Modify Task</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
            <tr >
                <td class="border border-black px-4 py-2">{{$student->title}}</td>
                <td class="border border-black px-4 py-2">{{$student->description}}</td>
                <td class="border border-black px-4 py-2">{{$student->created_at}}</td>
                <td class="border border-black px-4 py-2">
                    <button class="px-2 bg-green-400 border rounded-lg">Edit</button>
                    <button class="px-2 bg-red-400 border rounded-lg">Delete</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>
