<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Games</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="/laracasts-logo.svg"
                        alt="video-games" class="w-32 flex-none">
                </a>

                <ul class="flex ml-16 space-x-8">
                    <li>
                        <a href="#" class="hover:text-gray-400">Games</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-400">Reviews</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-400">Coming Soon</a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center">
                <div class="relative">
                    <input type="text"
                        placeholder="Search..."
                        class="bg-gray-800 text-sm w-64 focus:outline-none focus:shadow-outline rounded-full px-3 pl-8 py-1">

                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-current text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>zoom-2</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" fill="#111111" stroke="#111111"><line fill="none" stroke-miterlimit="10" x1="22" y1="22" x2="16.4" y2="16.4"></line> <circle fill="none" stroke="#111111" stroke-miterlimit="10" cx="10" cy="10" r="9"></circle></g></svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#">
                        <img src="/avatar.jpg" alt="avatar" class="rounded-full w-8">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by
            <a href="#" class="underline hover:text-gray-400">
                IGDB API
            </a>
        </div>
    </footer>
</body>
</html>
