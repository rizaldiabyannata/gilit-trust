<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body class="flex flex-col w-full font-poppins">
    <x-navbarMain></x-navbarMain>
    <div class="flex flex-row w-full">
        <x-sidebarUser />>
        <div class="flex flex-row w-full space-y-12 ml-[350px]">
                <div class="w-[250px] h-dvh shadow-xl flex flex-col pt-[100px]">
                    <div class="px-4 flex justify-center w-full">
                        <p class="bg-slate-300 py-4 px-24 rounded-xl shadow-sm">Zidan</p>
                    </div>
                </div>
                <div class="flex flex-col w-full pt-[80px]">
                    <div class="flex flex-row w-full justify-end  px-8">
                        <div class="flex flex-col">
                            <p>You</p>
                            <div class="w-[300px] py-2 bg-green-400 rounded-lg items-center px-4">
                                titik penjemputannya dimana mba?
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-start  px-8">
                        <div class="flex flex-col">
                            <p>Zidan</p>
                            <div class="w-[300px] py-2 bg-blue-300 rounded-lg items-center px-4">
                                titik penjemputannya dimana mba?
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full justify-center">
                        <div class="fixed bottom-0 mb-8">
                            <form action="" method="post">
                                <div class="flex w-full justify-center items-center space-x-2">
                                    <a href="">
                                        <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33317 24C2.59984 24 1.97228 23.7391 1.4505 23.2173C0.928726 22.6956 0.667393 22.0676 0.666504 21.3333V5.33333C0.666504 4.6 0.927837 3.97244 1.4505 3.45067C1.97317 2.92889 2.60073 2.66756 3.33317 2.66667H7.53317L9.99984 0H17.9998L20.4665 2.66667H24.6665C25.3998 2.66667 26.0278 2.928 26.5505 3.45067C27.0732 3.97333 27.3341 4.60089 27.3332 5.33333V21.3333C27.3332 22.0667 27.0723 22.6947 26.5505 23.2173C26.0287 23.74 25.4007 24.0009 24.6665 24H3.33317ZM5.99984 18.6667H21.9998L16.9998 12L12.9998 17.3333L9.99984 13.3333L5.99984 18.6667Z" fill="#009DDA"/>
                                        </svg>
                                    </a>
                                    <input type="text" name="" id="" class="w-[800px]  border rounded-xl ">
                                    <a href="">
                                        <svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.5 24V15L12.5 12L0.5 9V0L29 12L0.5 24Z" fill="#2196F3"/>
                                        </svg>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</body>

</html>