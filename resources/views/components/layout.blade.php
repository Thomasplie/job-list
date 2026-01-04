<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white pb-20">

<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/15">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/squirtlejob.png') }}" class="size-12" alt="">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>

        @auth
            <div class="space-x-6 font-bold flex">
                <a href="/jobs/create">Post a Job</a>
                <form method="post" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Log Out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
        @endguest
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>

</body>
</html>
