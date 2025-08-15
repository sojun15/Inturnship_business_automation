<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment7</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">

    <!-- it is navbar section -->
    <header class="fixed w-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-md shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">Modify welcome page</h1>
            <nav class="space-x-6">
                <a href="/" class="hover:text-indigo-500 transition">Home</a>
                <a href="/header" class="hover:text-indigo-500 transition">Header</a>
                <a href="/element" class="hover:text-indigo-500 transition">Element</a>
                <a href="/portfolio" class="hover:text-indigo-500 transition">Portfolio</a>
                <a href="/blog" class="hover:text-indigo-500 transition">Blog</a>
            </nav>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2 px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-600 hover:text-white transition">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>

    <!-- it is background image section -->
    <section class="relative h-screen flex items-center justify-center text-center bg-cover bg-center" 
        style="background-image: url('{{ asset('river.png') }}');">
        <div class="relative z-10 px-6">
            <h1 class="text-5xl font-extrabold text-white drop-shadow-lg">Create Amazing Website With Amazing Graphics</h1>
            <p class="mt-4 text-lg text-gray-200 max-w-xl mx-auto">
                This is a simple webpage created for completing my assignment.
            </p>
            <div class="mt-6 space-x-4">
                <a href="#features" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Explore More</a>
                <a href="#docs" class="px-6 py-3 border border-white text-white rounded-lg hover:bg-white hover:text-gray-900 transition">Buy Now</a>
            </div>
        </div>
    </section>

    <!-- about company section -->
    <section id="features" class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Three core things</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-4">Responsive Web Design</h3>
                    <p>We create stunning and responsive web designs that captivate your audience.</p>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-4">Visual Page Builder</h3>
                    <p>Our Web page structure is very wonderful which seeing visually.</p>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-4">Strong Admin Panel</h3>
                    <p>In our company there have a strong admin panel where have multy security level.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- it is footer section -->
    <footer class="bg-gray-900 text-gray-400 py-6 text-center">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})  
        <br>© {{ date('Y') }} Your Company Name
    </footer>

</body>
</html>
