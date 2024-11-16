<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen "> <!--border-l-2 border-r-2-->
    <x-navbar></x-navbar>
        <div class="flex justify-center pt-4 border-black">
            <div class="bg-white border border-black shadow-md px-8 py-6 max-w-md w-[710px] h-[470px]">
                <div class="flex justify-center">
                    <p class="font-karantina font-semibold text-4xl">REGISTER</p>
                </div>
                <div class="mt-3">
                    <p class="font-karantina font-semibold text-2xl">USERNAME</p>
                    <div>
                        <form action="">
                            <input type="text" placeholder="" class="mt-2 p-3 border border-gray-300  w-full">
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="font-karantina font-semibold text-2xl">EMAIL</p>
                    <div>
                        <form action="">
                            <input type="text" placeholder="" class="mt-2 p-3 border border-gray-300  w-full">
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="font-karantina font-semibold text-2xl">PASSWORD</p>
                    <div>
                        <form action="">
                            <input type="text" placeholder="" class="mt-2 p-3 border border-gray-300  w-full">
                        </form>
                    </div>
                </div>
                <div class="mt-4 flex">
                    <button class="bg-[#00599D] text-white font-karantina font-semibold text-4xl w-full p-3 border-black shadow-sm">REGISTER</button>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>