<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>500 Internal Server Error</title>
</head>

<body>
    <div class="h-screen w-full flex flex-col justify-center items-center bg-red-300">
        <h1 class="text-9xl font-extrabold text-white tracking-widest">500</h1>
        <div class="bg-[#FF6A3D] px-2 text-sm rounded rotate-12 absolute">
            Internal Server Error
        </div>
        <button class="mt-5">
            <a
                class="relative inline-block text-sm font-medium text-[#FF6A3D] group active:text-orange-500 focus:outline-none focus:ring">
                <span
                    class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-[#FF6A3D] group-hover:translate-y-0 group-hover:translate-x-0"></span>

                <span class="relative block px-8 py-3 bg-[#1A2238] border border-current">
                    <router-link to="/">Go Home</router-link>
                </span>
            </a>
        </button>
    </div>
</body>