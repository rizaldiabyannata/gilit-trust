<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body class="font-['Karantina']">
    <div class="flex items-center justify-center min-h-screen "> <!--border-l-2 border-r-2-->
        <x-navbar></x-navbar>
        <div class="flex justify-center pt-4 border-black">
            <div class="bg-white border border-black shadow-md px-8 py-6 max-w-md w-[710px] h-[470px]">
                <div class="flex justify-center">
                    <p class="font-semibold text-4xl">REGISTER</p>
                </div>
                <form action="" method="post">
                    <div class="mt-3">
                        <label class="font-semibold text-2xl">USERNAME</label>
                        <div>
                            <input type="text" placeholder="" class="mt-2 p-3 border border-gray-300  w-full">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="font-semibold text-2xl">EMAIL</label>
                        <div>
                            <input type="text" placeholder="" class="mt-2 p-3 border border-gray-300  w-full">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="font-semibold text-2xl">PASSWORD</label>
                        <input type="text" placeholder="" class="mt-2 p-3 border border-gray-300  w-full">
                    </div>
                    <div class="mt-4 flex">
                        <button type="submit" class="bg-[#00599D] text-white font-semibold text-4xl w-full p-3 border-black hover:[box-shadow:0.5rem_0.5rem_black] hover:translate-y-[-0.05rem] transition-all duration-300 ease-in-out">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <x-footer></x-footer>
</body>

</html>