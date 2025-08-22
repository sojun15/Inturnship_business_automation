<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">

    {!! Form::model($student, [
        'route' => ['users.update', $student->id],
        'method' => 'PUT',
        'class' => 'space-y-4'
    ]) !!}

        <div>
            {!! Form::label('title', 'Title', ['class' => 'block font-semibold']) !!}
            {!! Form::text('title', null, ['class' => 'border p-2 w-full']) !!}
        </div>

        <div>
            {!! Form::label('description', 'Description', ['class' => 'block font-semibold']) !!}
            {!! Form::textarea('description', null, ['class' => 'border p-2 w-full']) !!}
        </div>

        {!! Form::submit('Update', ['class' => 'bg-green-500 text-white px-4 py-2 rounded']) !!}

    {!! Form::close() !!}

</body>
</html>
