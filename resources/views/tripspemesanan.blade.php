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
    <div class="relative w-full h-[600px] pt-[80px]">
        <!-- Gambar Latar -->
        <img src="{{ asset('picture/E (13).jpg') }}" class="object-cover w-full h-full z-0 blur-[4px]" alt="Background">

        <!-- Teks di atas gambar -->
        <div class="absolute top-1/2 transform -translate-y-1/2 z-10 text-white text-4xl font-bold flex justify-center">
            <div class="flex flex-col px-10 space-y-4">
                <div class="text-4xl font-medium ">Detail Pemesanan</div>
                <div class="text-6xl font-bold">Trips To Gili Trawangan</div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="flex flex-row w-full justify-between items-center px-12">
            <div class="flex flex-col space-y-4">
                <div class="flex flex-row pt-2 pl-2 items-center">
                    <svg width="40" height="40" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                    </svg>
                    <p class="pl-3 text-md">Opi Tour and Travel</p>
                </div>
                <div class="flex flex-row pt-2 pl-2 items-center">
                    <svg width="36" height="40" viewBox="0 0 24 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 15.25C12.825 15.25 13.5315 14.9565 14.1195 14.3695C14.7075 13.7825 15.001 13.076 15 12.25C14.999 11.424 14.7055 10.718 14.1195 10.132C13.5335 9.546 12.827 9.252 12 9.25C11.173 9.248 10.467 9.542 9.882 10.132C9.297 10.722 9.003 11.428 9 12.25C8.997 13.072 9.291 13.7785 9.882 14.3695C10.473 14.9605 11.179 15.254 12 15.25ZM12 30.25C7.975 26.825 4.969 23.644 2.982 20.707C0.995 17.77 0.001 15.051 0 12.55C0 8.8 1.2065 5.8125 3.6195 3.5875C6.0325 1.3625 8.826 0.25 12 0.25C15.174 0.25 17.968 1.3625 20.382 3.5875C22.796 5.8125 24.002 8.8 24 12.55C24 15.05 23.0065 17.769 21.0195 20.707C19.0325 23.645 16.026 26.826 12 30.25Z" fill="black"/>
                    </svg>
                    <p class="pl-4 text-md">Gili Meno, Nusa Tenggara Barat</p>
                </div>
                <div class="flex flex-row pt-2 pl-2 items-center">
                    <svg width="44" height="40" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 6.75V0.75H18.5V6.75H15.5ZM25.475 10.875L23.375 8.775L27.6125 4.5L29.7125 6.6375L25.475 10.875ZM27.5 18.75V15.75H33.5V18.75H27.5ZM27.6125 29.9625L23.375 25.725L25.475 23.625L29.75 27.825L27.6125 29.9625ZM8.525 10.875L4.2875 6.6375L6.425 4.5L10.625 8.775L8.525 10.875ZM8 27.75H14.75C15.375 27.75 15.9065 27.5315 16.3445 27.0945C16.7825 26.6575 17.001 26.126 17 25.5C16.999 24.874 16.7865 24.343 16.3625 23.907C15.9385 23.471 15.4135 23.252 14.7875 23.25H12.875L12.125 21.45C11.775 20.625 11.225 19.969 10.475 19.482C9.725 18.995 8.9 18.751 8 18.75C6.75 18.75 5.6875 19.1875 4.8125 20.0625C3.9375 20.9375 3.5 22 3.5 23.25C3.5 24.5 3.9375 25.5625 4.8125 26.4375C5.6875 27.3125 6.75 27.75 8 27.75ZM8 30.75C5.925 30.75 4.1565 30.0185 2.6945 28.5555C1.2325 27.0925 0.501001 25.324 0.500001 23.25C0.499001 21.176 1.2305 19.4075 2.6945 17.9445C4.1585 16.4815 5.927 15.75 8 15.75C9.5 15.75 10.869 16.1565 12.107 16.9695C13.345 17.7825 14.2635 18.876 14.8625 20.25C16.3125 20.25 17.5315 20.7875 18.5195 21.8625C19.5075 22.9375 20.001 24.225 20 25.725C19.95 27.15 19.419 28.344 18.407 29.307C17.395 30.27 16.176 30.751 14.75 30.75H8ZM20 25.725C19.875 25.225 19.75 24.7375 19.625 24.2625C19.5 23.7875 19.375 23.3 19.25 22.8C20.375 22.325 21.2815 21.5875 21.9695 20.5875C22.6575 19.5875 23.001 18.475 23 17.25C23 15.6 22.4125 14.1875 21.2375 13.0125C20.0625 11.8375 18.65 11.25 17 11.25C15.5 11.25 14.1875 11.7375 13.0625 12.7125C11.9375 13.6875 11.275 14.925 11.075 16.425C10.575 16.3 10.0625 16.1875 9.5375 16.0875C9.0125 15.9875 8.5 15.875 8 15.75C8.35 13.55 9.3815 11.75 11.0945 10.35C12.8075 8.95 14.776 8.25 17 8.25C19.5 8.25 21.625 9.125 23.375 10.875C25.125 12.625 26 14.75 26 17.25C26 19.175 25.45 20.9065 24.35 22.4445C23.25 23.9825 21.8 25.076 20 25.725Z" fill="black"/>
                    </svg>
                    <p class="pl-4 text-md">3 Days and 3 Night</p>
                </div>
            </div>
            <div class="mt-6 items-center px-4 flex flex-row w-[700px] h-[320px] bg-[#E0E6E9] rounded-3xl">
                <svg width="12" height="221" viewBox="0 0 12 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6" cy="6" r="6" fill="black"/>
                    <circle cx="6" cy="130" r="6" fill="black"/>
                    <line x1="6.5" y1="15" x2="6.5" y2="126" stroke="black" stroke-dasharray="2 2"/>
                    <line x1="6.5" y1="138" x2="6.5" y2="221" stroke="black" stroke-dasharray="2 2"/>
                </svg>
                <div class="flex flex-col items-start justify-start w-full space-x-4">
                    <div class="text-xl font-bold pl-4 pb-4">
                        Pilih Tanggal Keberangkatan
                    </div>
                    <form action="" class="space-x-4">
                        <input type="date" class="rounded-lg w-[300px]" name="tanggalpesan" id="">
                        <input type="time" class="rounded-lg w-[300px]" name="tanggalpesan" id="">
                    </form>
                    <div class="text-xl font-bold pt-4">
                        Jumlah Peserta
                    </div>
                    <div class="flex flex-row space-x-5">
                        <form action="" class="">
                            <p class="pb-2">Dewasa</p>
                            <div class="flex items-center relative">
                                <select class="rounded-lg w-[300px] pr-10" name="tanggalpesan" id="">
                                    <option value="" disabled selected>Pilih Angka</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <!-- SVG icon on the right of the select input -->
                                <!-- <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                    <path d="M7 5.83333C7.26812 5.83333 7.53361 5.78052 7.78131 5.67792C8.02902 5.57532 8.25409 5.42493 8.44368 5.23534C8.63326 5.04576 8.78365 4.82069 8.88625 4.57298C8.98886 4.32527 9.04167 4.05978 9.04167 3.79167C9.04167 3.52355 8.98886 3.25806 8.88625 3.01035C8.78365 2.76265 8.63326 2.53758 8.44368 2.34799C8.25409 2.1584 8.02902 2.00802 7.78131 1.90541C7.53361 1.80281 7.26812 1.75 7 1.75C6.45852 1.75 5.93921 1.9651 5.55632 2.34799C5.17344 2.73088 4.95833 3.25018 4.95833 3.79167C4.95833 4.33315 5.17344 4.85246 5.55632 5.23534C5.93921 5.61823 6.45852 5.83333 7 5.83333ZM1.75 11.9V12.25H12.25V11.9C12.25 10.5933 12.25 9.94 11.9957 9.44067C11.772 9.00164 11.415 8.6447 10.976 8.421C10.4767 8.16667 9.82333 8.16667 8.51667 8.16667H5.48333C4.17667 8.16667 3.52333 8.16667 3.024 8.421C2.58497 8.6447 2.22803 9.00164 2.00433 9.44067C1.75 9.94 1.75 10.5933 1.75 11.9Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> -->
                            </div>
                        </form>
                        <form action="" class="">
                            <p class="pb-2">Anak-anak</p>
                            <div class="flex items-center relative">
                                <select class="rounded-lg w-[300px] pr-10" name="tanggalpesan" id="">
                                    <option value="" disabled selected>Pilih Angka</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <!-- SVG icon on the right of the select input -->
                                <!-- <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                    <path d="M7 5.83333C7.26812 5.83333 7.53361 5.78052 7.78131 5.67792C8.02902 5.57532 8.25409 5.42493 8.44368 5.23534C8.63326 5.04576 8.78365 4.82069 8.88625 4.57298C8.98886 4.32527 9.04167 4.05978 9.04167 3.79167C9.04167 3.52355 8.98886 3.25806 8.88625 3.01035C8.78365 2.76265 8.63326 2.53758 8.44368 2.34799C8.25409 2.1584 8.02902 2.00802 7.78131 1.90541C7.53361 1.80281 7.26812 1.75 7 1.75C6.45852 1.75 5.93921 1.9651 5.55632 2.34799C5.17344 2.73088 4.95833 3.25018 4.95833 3.79167C4.95833 4.33315 5.17344 4.85246 5.55632 5.23534C5.93921 5.61823 6.45852 5.83333 7 5.83333ZM1.75 11.9V12.25H12.25V11.9C12.25 10.5933 12.25 9.94 11.9957 9.44067C11.772 9.00164 11.415 8.6447 10.976 8.421C10.4767 8.16667 9.82333 8.16667 8.51667 8.16667H5.48333C4.17667 8.16667 3.52333 8.16667 3.024 8.421C2.58497 8.6447 2.22803 9.00164 2.00433 9.44067C1.75 9.94 1.75 10.5933 1.75 11.9Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-12 flex flex-col">
        <p class="text-3xl font-bold ">Deskripsi Paket</p>
        <p class="pt-4 text-lg text-justify">Paket Trip 3 Hari 3 Malam Gili Trawangan menghadirkan pengalaman liburan yang tak terlupakan di surga tropis. Nikmati keindahan pantai berpasir putih, air laut jernih, dan suasana santai khas pulau. Hari pertama dimulai dengan perjalanan menuju Gili Trawangan, check-in di penginapan, dan waktu bebas untuk menjelajah. Hari kedua diisi dengan aktivitas seru seperti snorkeling ke spot-spot terbaik, mengunjungi taman bawah laut, dan menikmati sunset indah. Hari ketiga adalah waktu bersantai di pulau atau mencoba paddle boarding sebelum kembali ke destinasi asal. Semua kebutuhan seperti transportasi, akomodasi, dan makanan tertentu sudah termasuk, memastikan perjalanan Anda nyaman dan menyenangkan.
        </p>
        <p class="pt-4 text-lg text-justify">Paket ini juga dirancang untuk memberikan kebebasan bagi Anda menikmati keunikan Gili Trawangan. Anda bisa berkeliling pulau menggunakan sepeda, menikmati hidangan khas lokal di pasar malam, atau bersantai di tepi pantai dengan pemandangan yang menenangkan. Cocok untuk keluarga, pasangan, maupun solo traveler, trip ini akan membuat Anda merasakan momen liburan yang sempurna, jauh dari hiruk pikuk kota.
        </p>
    </div>
    <div class="flex flex-row w-full px-12 space-x-4 justify-center pt-8">
        <div class="w-full h-[310px] bg-[#E0E6E9] rounded-3xl flex flex-col px-8 py-6">
            <p class="font-bold text-xl">Isi Biodata Diri Anda</p>
            <form action="" method="post" class="grid grid-cols-2 gap-4 pt-4">
                <div class="flex flex-col">
                    <label for="">Nama</label>
                    <input type="text" class="rounded-lg" name="" id="">
                </div>
                <div class="flex flex-col">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" class="rounded-lg" name="" id="">
                </div>
                <div class="flex flex-col">
                    <label for="">Nomor HP</label>
                    <input type="text" class="rounded-lg" name="" id="">
                </div>
                <div class="flex flex-col">
                    <label for="">Umur</label>
                    <input type="text" class="rounded-lg" name="" id="">
                </div>
            </form>
            <p class="pt-2 font-light text-sm">*Note: Setelah membeli anda akan di hubungi oleh penjasa</p>
            <div class="flex flex-row pt-2 items-center justify-between">
                <p class="font-bold text-red-700 text-xl">Total : 1.500.000 IDR</p>
                <button class="bg-[#4CB9E0] px-12 py-2 rounded-lg text-white font-semibold text-lg">Pesan</button>
            </div>
        </div>
        <div class="flex flex-col w-full h-[310px] border border-dashed rounded-3xl">
            <img src="{{ asset('picture/E (13).jpg') }}" class="rounded-t-3xl object-cover w-full h-[60%] blur-[2px]" alt="Background">
            <div class="flex flex-row justify-between px-6 rounded-b-3xl w-full h-[40%] bg-[#B7E7FB]">
                <div class="flex flex-col">
                    <div class="flex flex-row pt-4 items-center">
                        <svg width="30" height="30" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-2">Opi Tour and Travel</p>
                    </div>
                    <button class="w-[300px] h-[50px] bg-white border rounded-lg flex justify-between items-center mt-2">
                        <p class="pl-2">Kunjungi penjasa</p>
                        <div class="pr-2">
                            <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2H18C19.1 2 20 2.9 20 4V20C20 21.1 19.1 22 18 22H9C7.9 22 7 21.1 7 20V18H9V20H18V4H9V6H7V4C7 2.9 7.9 2 9 2Z" fill="black"/>
                            <path d="M10.09 15.59L11.5 17L16.5 12L11.5 7L10.09 8.41L12.67 11H3V13H12.67L10.09 15.59Z" fill="black"/>
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-row pl-4 pt-4 items-center">
                        <svg width="26" height="30" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                        </svg>
                        <p class="pl-3 text-sm">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <button class="w-[300px] h-[50px] bg-white border rounded-lg flex justify-between items-center ml-4 mt-2">
                        <p class="pl-2">Kunjungi penjasa</p>
                        <div class="pr-2">
                            <svg width="24" height="24" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 1.64286C6.0564 1.64286 1.64287 6.05639 1.64287 11.5C1.64287 13.2784 2.11272 14.9443 2.93497 16.3834C2.98932 16.4784 3.02415 16.5832 3.03741 16.6919C3.05067 16.8005 3.04209 16.9106 3.01219 17.0159L1.83015 21.1715L5.9874 19.9886C6.09266 19.9587 6.20283 19.9502 6.31144 19.9634C6.42006 19.9767 6.52493 20.0115 6.6199 20.0659C8.10607 20.9147 9.7885 21.3599 11.5 21.3571C16.9444 21.3571 21.3571 16.9436 21.3571 11.5C21.3571 6.05639 16.9444 1.64286 11.5 1.64286ZM9.54835e-06 11.5C9.54835e-06 5.14871 5.14872 0 11.5 0C17.8513 0 23 5.14871 23 11.5C23 17.8513 17.8513 23 11.5 23C9.55486 23 7.71979 22.5162 6.11143 21.6619L1.57058 22.9532C1.35954 23.013 1.13635 23.0154 0.924076 22.9601C0.711798 22.9049 0.518124 22.7939 0.363058 22.6388C0.207992 22.4836 0.0971558 22.2899 0.0419975 22.0776C-0.0131609 21.8653 -0.0106417 21.6421 0.0492952 21.4311L1.34058 16.891C0.457987 15.2313 -0.00241778 13.3798 9.54835e-06 11.5ZM6.57144 9.03571C6.57144 8.81786 6.65798 8.60892 6.81203 8.45488C6.96607 8.30083 7.17501 8.21429 7.39286 8.21429H15.6071C15.825 8.21429 16.0339 8.30083 16.188 8.45488C16.342 8.60892 16.4286 8.81786 16.4286 9.03571C16.4286 9.25357 16.342 9.4625 16.188 9.61655C16.0339 9.7706 15.825 9.85714 15.6071 9.85714H7.39286C7.17501 9.85714 6.96607 9.7706 6.81203 9.61655C6.65798 9.4625 6.57144 9.25357 6.57144 9.03571ZM7.39286 13.1429C7.17501 13.1429 6.96607 13.2294 6.81203 13.3834C6.65798 13.5375 6.57144 13.7464 6.57144 13.9643C6.57144 14.1821 6.65798 14.3911 6.81203 14.5451C6.96607 14.6992 7.17501 14.7857 7.39286 14.7857H12.3214C12.5393 14.7857 12.7482 14.6992 12.9023 14.5451C13.0563 14.3911 13.1429 14.1821 13.1429 13.9643C13.1429 13.7464 13.0563 13.5375 12.9023 13.3834C12.7482 13.2294 12.5393 13.1429 12.3214 13.1429H7.39286Z" fill="black"/>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <x-footerMain></x-footerMain>
</body>

</html>