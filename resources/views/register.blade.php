<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="flex flex-col min-h-screen">
    <div>
        <x-navbar></x-navbar>
        <div class="flex justify-center items-center px-6 py-12 h-lvh">
            <div class="">
                    <img src="./picture/loginpic.png" class="h-[500px] w-[400px] rounded-tl-xl rounded-bl-xl" alt="">
            </div>
            <div class="flex flex-col justify-center  w-[500px] h-[500px] px-8 border-l-0 border-black border rounded-tr-xl rounded-br-xl">
                <div class="flex-col justify-center pb-3">
                    <h2 class="text-4xl font-bold">Welcome To Gili Trust</h2>
                    <h2 class="text-xl font-semibold">Welcome To Gili Trust</h2>
                </div>
                <form class="flex flex-col  w-full" action="POST">
                    @csrf
                    <div class="flex flex-col justify-start pb-2">
                        <label class="text-xl font-semibold pb-2" for="emai">Username</label>
                        <input class="rounded-xl" type="text" name="username" id="username">
                    </div>
                    <div class="flex flex-col justify-start pb-2">
                        <label class="text-xl font-semibold pb-2" for="email">email</label>
                        <input class="rounded-xl" type="password" name="email" id="email">
                    </div>
                    <div class="flex flex-col justify-start pb-2">
                        <label class="text-xl font-semibold pb-2" for="password">Password</label>
                        <input class="rounded-xl" type="password" name="password" id="password">
                    </div>
                    <div class="flex flex-col justify-start pb-2">
                        <label class="text-xl font-semibold pb-2" for="password">Confirm Password</label>
                        <input class="rounded-xl" type="password" name="password" id="password">
                    </div>
                    <div>
                        <button type="submit" class="flex w-full justify-center bg-[#1595A8] rounded-xl text-2xl py-2 text-white font-bold">LOGIN</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>