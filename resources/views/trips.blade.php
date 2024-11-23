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
        <div class="pt-[90px] px-24">
            <p>Search</p>
            <form action="" method="post">
                <div class="relative w-[220px] h-[46px]">
                    <!-- Input -->
                    <input
                    type="text"
                    class="border rounded-xl h-full w-full pl-4 pr-10"
                    placeholder="Cari sesuatu..."
                    />
                    <!-- SVG Icon -->
                    <svg
                    class="absolute right-2 top-1/2 transform -translate-y-1/2"
                    width="19"
                    height="18"
                    viewBox="0 0 19 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M16.8059 18L10.5726 11.7C10.0779 12.1 9.50904 12.4167 8.86594 12.65C8.22283 12.8833 7.53849 13 6.81293 13C5.01552 13 3.49449 12.3707 2.24982 11.112C1.00516 9.85333 0.382496 8.316 0.381836 6.5C0.381177 4.684 1.00384 3.14667 2.24982 1.888C3.49581 0.629333 5.01684 0 6.81293 0C8.60902 0 10.1304 0.629333 11.377 1.888C12.6237 3.14667 13.246 4.684 13.244 6.5C13.244 7.23333 13.1286 7.925 12.8977 8.575C12.6669 9.225 12.3536 9.8 11.9578 10.3L18.191 16.6L16.8059 18ZM6.81293 11C8.04968 11 9.10108 10.5627 9.96714 9.688C10.8332 8.81333 11.2659 7.75067 11.2652 6.5C11.2646 5.24933 10.8319 4.187 9.96714 3.313C9.1024 2.439 8.051 2.00133 6.81293 2C5.57486 1.99867 4.52379 2.43633 3.65972 3.313C2.79564 4.18967 2.36261 5.252 2.36063 6.5C2.35866 7.748 2.79168 8.81067 3.65972 9.688C4.52775 10.5653 5.57882 11.0027 6.81293 11Z"
                        fill="black"
                    />
                    </svg>
                </div>
            </form>

        </div>
        <div class="flex flex-row w-full items-center space-x-6 justify-between px-24 pt-4">
            <!-- Dropdown 1 -->
            <div class="flex flex-col w-[230px]">
                <label for="countries1" class="block text-sm font-medium">Location</label>
                <select id="countries1" class="h-[50px] w-full text-gray-900 text-sm rounded-xl shadow-xl focus:shadow-3xl border-none">
                    <option selected class="font-extralight">Select Location</option>
                    <option value="US">ft</option>
                    <option value="CA">fh</option>
                    <option value="FR">fkip</option>
                    <option value="DE">fk</option>
                </select>
            </div>

            <!-- Dropdown 2 -->
            <div class="flex flex-col w-[230px]">
                <label for="countries2" class="block text-sm font-medium">Activity</label>
                <select id="countries2" class="h-[50px] w-full text-gray-900 text-sm rounded-xl shadow-xl focus:shadow-3xl border-none">
                    <option selected class="font-extralight">Select Activity</option>
                    <option value="US">ew</option>
                    <option value="CA">ew</option>
                    <option value="FR">ew</option>
                    <option value="DE">ew</option>
                </select>
            </div>

            <!-- Search and Divider -->
            <form class="flex flex-row items-center space-x-4">
                <!-- Search 1 -->
                <div class="flex flex-col w-[150px]">
                    <label for="search1" class="block text-sm font-medium">Range Amount</label>
                    <input id="search1" name="search1" type="text" 
                        class="h-[50px] w-full rounded-xl shadow-xl px-3 border">
                </div>

                <!-- Divider -->
                <div class="pt-4">
                    <svg width="31" height="2" viewBox="0 0 31 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.572754" y1="1" x2="30.4271" y2="1" stroke="black"/>
                    </svg>
                </div>

                <!-- Search 2 -->
                <div class="flex flex-col w-[150px]">
                    <label for="search2" class="block text-sm font-medium text-transparent">.</label>
                    <input id="search2" name="search2" type="text" 
                        class="h-[50px] w-full rounded-xl shadow-xl px-3 border">
                </div>
            </form>

            <!-- Button -->
            <div class="flex flex-col w-[230px] pt-4">
                <button class="h-[50px] w-full bg-[#4CB9E0] text-white text-2xl rounded-xl shadow-xl">
                    Apply
                </button>
            </div>
        </div>
        <div class="grid grid-cols-3 justify-items-center pt-12 px-16 gap-y-8">
            <div class="flex flex-col w-[380px] ">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-b-2xl rounded-t-lg absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[290px] rounded-t-xl"  alt="">
                </div>
                <div class="border h-[200px] rounded-b-xl border-t-0">
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                        </svg>
                        <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-2 text-sm">Opi Tour and Travel</p>
                    </div>
                    <div class="flex w-full justify-center text-xl font-bold pt-2">
                        Trip To Gili Trawangan
                    </div>
                    <p class="px-2 text-justify py-2">
                    Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-[380px] ">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-b-2xl rounded-t-lg absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[290px] rounded-t-xl"  alt="">
                </div>
                <div class="border h-[200px] rounded-b-xl border-t-0">
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                        </svg>
                        <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-2 text-sm">Opi Tour and Travel</p>
                    </div>
                    <div class="flex w-full justify-center text-xl font-bold pt-2">
                        Trip To Gili Trawangan
                    </div>
                    <p class="px-2 text-justify py-2">
                    Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-[380px] ">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-b-2xl rounded-t-lg absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[290px] rounded-t-xl"  alt="">
                </div>
                <div class="border h-[200px] rounded-b-xl border-t-0">
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                        </svg>
                        <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-2 text-sm">Opi Tour and Travel</p>
                    </div>
                    <div class="flex w-full justify-center text-xl font-bold pt-2">
                        Trip To Gili Trawangan
                    </div>
                    <p class="px-2 text-justify py-2">
                    Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-[380px] ">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-b-2xl rounded-t-lg absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[290px] rounded-t-xl"  alt="">
                </div>
                <div class="border h-[200px] rounded-b-xl border-t-0">
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                        </svg>
                        <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-2 text-sm">Opi Tour and Travel</p>
                    </div>
                    <div class="flex w-full justify-center text-xl font-bold pt-2">
                        Trip To Gili Trawangan
                    </div>
                    <p class="px-2 text-justify py-2">
                    Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-[380px] ">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-b-2xl rounded-t-lg absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[290px] rounded-t-xl"  alt="">
                </div>
                <div class="border h-[200px] rounded-b-xl border-t-0">
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                        </svg>
                        <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-2 text-sm">Opi Tour and Travel</p>
                    </div>
                    <div class="flex w-full justify-center text-xl font-bold pt-2">
                        Trip To Gili Trawangan
                    </div>
                    <p class="px-2 text-justify py-2">
                    Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-[380px] ">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-b-2xl rounded-t-lg absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[290px] rounded-t-xl"  alt="">
                </div>
                <div class="border h-[200px] rounded-b-xl border-t-0">
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                        </svg>
                        <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2">
                        <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-2 text-sm">Opi Tour and Travel</p>
                    </div>
                    <div class="flex w-full justify-center text-xl font-bold pt-2">
                        Trip To Gili Trawangan
                    </div>
                    <p class="px-2 text-justify py-2">
                    Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                    </p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center space-x-1 pt-6">
            <button class="w-[40px] h-[40px] bg-[#C4CDD5] rounded-lg text-white flex justify-center items-center">
                <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.16016 1.41L3.58016 6L8.16016 10.59L6.75016 12L0.750156 6L6.75016 0L8.16016 1.41Z" fill="white"/>
                </svg>
            </button>
            <button class="w-[40px] h-[40px] border border-[#C4CDD5] rounded-lg text-black">1</button>
            <button class="w-[40px] h-[40px] border border-[#C4CDD5] rounded-lg text-black">2</button>
            <button class="w-[40px] h-[40px] border border-[#C4CDD5] rounded-lg text-black">3</button>
            <button class="w-[40px] h-[40px] border border-[#C4CDD5] rounded-lg text-black">4</button>
            <button class="w-[40px] h-[40px] border border-[#C4CDD5] rounded-lg text-[#C4CDD5] flex justify-center items-center">
                <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.839844 1.41L5.41984 6L0.839844 10.59L2.24984 12L8.24984 6L2.24984 0L0.839844 1.41Z" fill="#C4CDD5"/>
                </svg>
            </button>
        </div>

    <x-footerMain></x-footerMain>
</body>

</html>