<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="font-['Karantina'] flex flex-col min-h-screen">
    <div>
        <x-navbar></x-navbar>
        <div class="flex justify-center items-center px-6 py-12 h-lvh">
            <div class="flex flex-col justify-center items-center w-96 p-8 border-black border">
                <div class="flex justify-center items-center">
                    <h2 class="text-4xl">Login</h2>
                </div>
                <form class="flex flex-col space-y-4 w-full" action="POST">
                    @csrf
                    <div class="flex flex-col justify-start">
                        <label class="text-xl" for="emai">Email</label>
                        <input class="rounded-md" type="text" name="email" id="email">
                    </div>
                    <div class="flex flex-col justify-start">
                        <label class="text-xl" for="password">Password</label>
                        <input class="rounded-md" type="password" name="password" id="password">
                    </div>
                    <div>
                        <button type="submit" class="flex w-full justify-center bg-blue-500 border border-black text-3xl py-2 hover:[box-shadow:0.5rem_0.5rem_black] hover:translate-y-[-0.05rem] transition-all duration-300 ease-in-out">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>