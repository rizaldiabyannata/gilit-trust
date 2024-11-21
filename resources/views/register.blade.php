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
    <div class="flex items-center justify-center min-h-screen ">
        <x-navbar></x-navbar>
        <div class="flex justify-center pt-4 border-black">
            <div class="bg-white border border-black shadow-md px-8 py-6 w-[700px] h-[470px] flex items-center">
                <!-- SVG Section -->
                <div class="flex-shrink-0 ml-6">
                    <svg width="200" height="200" viewBox="0 0 264 266" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="132" cy="133" rx="132" ry="133" fill="#00599D" />
                        <g clip-path="url(#clip0_42_93)">
                            <path d="M196.625 139.438H236.375" stroke="white" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M216.5 120.125V158.75" stroke="white" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M120.438 158.75C147.879 158.75 170.125 137.134 170.125 110.469C170.125 83.8038 147.879 62.1875 120.438 62.1875C92.9959 62.1875 70.75 83.8038 70.75 110.469C70.75 137.134 92.9959 158.75 120.438 158.75Z" stroke="white" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M50.875 190.938C67.893 171.263 91.9169 158.75 120.438 158.75C148.958 158.75 172.982 171.263 190 190.938" stroke="white" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_42_93">
                                <rect width="212" height="206" fill="white" transform="translate(31 30)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="ml-20 flex-row w-full mr-6">
                    <div class="flex justify-end">
                        <p class="font-karantina font-semibold text-4xl">COSTUMER REGIST</p>
                    </div>
                    <div class="mt-2">
                        <form action="" method="post">
                            <input type="text" placeholder="USERNAME" class="mt-2 p-2 border border-gray-300 w-full placeholder:font-karantina placeholder:font-semibold placeholder:text-2xl">
                            <input type="text" placeholder="EMAIL" class="mt-2 p-2 border border-gray-300 w-full placeholder:font-karantina placeholder:font-semibold placeholder:text-2xl">
                            <input type="password" placeholder="********" class="mt-2 p-2 border border-gray-300 w-full placeholder:font-karantina placeholder:font-semibold placeholder:text-2xl">
                            <input type="password" placeholder="********" class="mt-2 p-2 border border-gray-300 w-full placeholder:font-karantina placeholder:font-semibold placeholder:text-2xl">
                            <div class="mt-4 flex">
                                <button type="submit" class="bg-[#00599D] text-white font-karantina font-semibold text-4xl w-full p-3 border-black shadow-sm">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>
