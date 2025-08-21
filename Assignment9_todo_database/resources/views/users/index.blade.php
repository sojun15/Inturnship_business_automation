<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div>
        <h1>Home Page</h1>
        <a href="{{route('users.create')}}">Create Student</a>
        <table class="table block border border-black">
            <thead>
            <tr>
                <th class="border border-black px-4 py-2">Title</th>
                <th class="border border-black px-4 py-2">Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
            <tr >
                <td class="border border-black px-4 py-2">{{$student->title}}</td>
                <td class="border border-black px-4 py-2">{{$student->description}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
