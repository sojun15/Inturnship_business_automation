<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex flex-col justify-center items-center">
    <section class="w-60 flex flex-col justify-center items-center bg-white p-4 rounded-lg shadow">
        <h1 class="text-lg font-bold mb-3">Task creation form</h1>

        @if($errors->any())
        <div class="mb-3">
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-red-500 text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Open Form --}}
        {!! Form::open(['route' => 'users.store', 'method' => 'post', 'class' => 'space-y-2 h-auto w-full']) !!}

            <div>
                {!! Form::label('title', 'Task Title', ['class' => 'block']) !!}
                {!! Form::text('title', null, ['required', 'class' => 'w-full p-2 border border-black rounded-lg']) !!}
            </div>

            <div>
                {!! Form::label('Description', 'Task description', ['class' => 'block']) !!}
                {!! Form::textarea('description', null, ['required', 'class' => 'w-full  border border-black rounded-lg']) !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'bg-blue-400 text-white p-2 w-full rounded-lg']) !!}

        {!! Form::close() !!}
    </section>
</body>
</html>
