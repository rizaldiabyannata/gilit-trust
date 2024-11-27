<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('../resources/css/app.css')
    <title>Home</title>
</head>

<body class="font-['poppins'] flex flex-col">
    <x-navPengusaha />
    <div class="flex flex-row h-full">
        <x-sidebar class="h-full" />
        <div class="flex flex-col w-full h-full pt-[100px] px-16 ml-[350px] mb-12">
            <a href="" class="w-[100px] h-[50px] bg-cyan-400 rounded-lg flex justify-center items-center mb-4 hover:bg-slate-200 hover:text-slate-500">Buat</a>
            <div class="grid grid-cols-3 justify-between gap-4">
                <div class="flex flex-col w-[290px] hover:scale-105 transition-all ease-in-out cursor-pointer">
                    <div class="relative flex">
                        <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-xl absolute -right-0 -top-0 mt-2 mr-2">
                            <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                            <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                            </svg>
                        </div>
                        <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[220px] rounded-t-xl" alt="">
                    </div>
                    <div class="border max-h-[200px] rounded-b-xl border-t-0">
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                            </svg>
                            <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                        </div>
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black" />
                            </svg>
                            <p class="pl-2 text-sm">Opi Tour and Travel</p>
                        </div>
                        <div class="flex w-full justify-center text-xl font-bold pt-2">
                            Trip To Gili Trawangan
                        </div>
                        <p class="text-justify p-2 pb-1 text-sm text-montserrat">
                            Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-[290px] hover:scale-105 transition-all ease-in-out cursor-pointer">
                    <div class="relative flex">
                        <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-xl absolute -right-0 -top-0 mt-2 mr-2">
                            <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                            <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                            </svg>
                        </div>
                        <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[220px] rounded-t-xl" alt="">
                    </div>
                    <div class="border max-h-[200px] rounded-b-xl border-t-0">
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                            </svg>
                            <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                        </div>
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black" />
                            </svg>
                            <p class="pl-2 text-sm">Opi Tour and Travel</p>
                        </div>
                        <div class="flex w-full justify-center text-xl font-bold pt-2">
                            Trip To Gili Trawangan
                        </div>
                        <p class="text-justify p-2 pb-1 text-sm text-montserrat">
                            Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-[290px] hover:scale-105 transition-all ease-in-out cursor-pointer">
                    <div class="relative flex">
                        <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-xl absolute -right-0 -top-0 mt-2 mr-2">
                            <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                            <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                            </svg>
                        </div>
                        <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[220px] rounded-t-xl" alt="">
                    </div>
                    <div class="border max-h-[200px] rounded-b-xl border-t-0">
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                            </svg>
                            <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                        </div>
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black" />
                            </svg>
                            <p class="pl-2 text-sm">Opi Tour and Travel</p>
                        </div>
                        <div class="flex w-full justify-center text-xl font-bold pt-2">
                            Trip To Gili Trawangan
                        </div>
                        <p class="text-justify p-2 pb-1 text-sm text-montserrat">
                            Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-[290px] hover:scale-105 transition-all ease-in-out cursor-pointer">
                    <div class="relative flex">
                        <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-xl absolute -right-0 -top-0 mt-2 mr-2">
                            <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                            <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                            </svg>
                        </div>
                        <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[220px] rounded-t-xl" alt="">
                    </div>
                    <div class="border max-h-[200px] rounded-b-xl border-t-0">
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                            </svg>
                            <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                        </div>
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black" />
                            </svg>
                            <p class="pl-2 text-sm">Opi Tour and Travel</p>
                        </div>
                        <div class="flex w-full justify-center text-xl font-bold pt-2">
                            Trip To Gili Trawangan
                        </div>
                        <p class="text-justify p-2 pb-1 text-sm text-montserrat">
                            Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-[290px] hover:scale-105 transition-all ease-in-out cursor-pointer">
                    <div class="relative flex">
                        <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-xl absolute -right-0 -top-0 mt-2 mr-2">
                            <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                            <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                            </svg>
                        </div>
                        <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[220px] rounded-t-xl" alt="">
                    </div>
                    <div class="border max-h-[200px] rounded-b-xl border-t-0">
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                            </svg>
                            <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                        </div>
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black" />
                            </svg>
                            <p class="pl-2 text-sm">Opi Tour and Travel</p>
                        </div>
                        <div class="flex w-full justify-center text-xl font-bold pt-2">
                            Trip To Gili Trawangan
                        </div>
                        <p class="text-justify p-2 pb-1 text-sm text-montserrat">
                            Tour menyenangkan ke Gili Trawangan dengan jasa Opi Tour, Nikmati tour dengan harga murah plus free dokumentasi dan tour guide andalan kami
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-[290px] hover:scale-105 transition-all ease-in-out cursor-pointer">
                    <div class="relative flex">
                        <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-xl absolute -right-0 -top-0 mt-2 mr-2">
                            <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                            <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                            </svg>
                        </div>
                        <img src="{{ asset('picture/E (13).jpg') }}" class="w-full h-[220px] rounded-t-xl" alt="">
                    </div>
                    <div class="border max-h-[200px] rounded-b-xl border-t-0">
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                            </svg>
                            <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                        </div>
                        <div class="flex flex-row pt-2 pl-2">
                            <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black" />
                            </svg>
                            <p class="pl-2 text-sm">Opi Tour and Travel</p>
                        </div>
                        <div class="flex w-full justify-center text-xl font-bold pt-2">
                            Trip To Gili Trawangan
                        </div>
                        <p class="text-justify p-2 pb-1 text-sm text-montserrat">
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

        </div>
    <!-- <x-footer /> -->
</body>
</html>
