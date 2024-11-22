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
        <img src="{{ asset('picture/mainpage.jpg') }}" class="object-cover w-full h-full z-0" alt="Background">

        <!-- Teks di atas gambar -->
        <div class="absolute top-1/2 transform -translate-y-1/2 z-10 text-white text-4xl font-bold flex justify-center">
            <div class="flex flex-col px-10">
                <div class="text-3xl font-medium ">Welcome To</div>
                <div class="text-8xl font-bold">GILI TRUST</div>
                <div class="text-xl font-normal">Aplikasi Wisata Gili MATRA yang terpercaya</div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="flex justify-center font-bold text-3xl pt-9 pb-8">
            Aktivitas Populer
        </div>
        <div class="flex flex-col px-48">
            <div class="flex flex-row justify-between">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-full absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-[350px] h-[300px] object-cover" alt="">
                </div>
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-full absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-[350px] h-[300px] object-cover" alt="">
                </div>
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-full absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-[350px] h-[300px] object-cover" alt="">
                </div>
            </div>
            <div class="flex justify-end">
                <a href="" class="underline font-semibold text-blue-500 pt-2 text-lg">Show All</a>
            </div>
        </div>
    </div>
    <div class="flex flex-col mb-12">
        <div class="flex justify-center font-bold text-3xl pt-9 pb-8">
            Penyewaan Populer
        </div>
        <div class="flex flex-col px-48">
            <div class="flex flex-row justify-between">
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-full absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-[350px] h-[300px] object-cover" alt="">
                </div>
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-full absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-[350px] h-[300px] object-cover" alt="">
                </div>
                <div class="relative flex">
                    <div class="flex flex-row justify-center items-center h-[35px] w-[100px] bg-white border rounded-full absolute -right-0 -top-0 mt-2 mr-2">
                        <p class="text-[14px] font-semibold pr-1">4.8/5.0</p>
                        <svg width="20" height="18" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 4.40001L8.425 0.775005C8.625 0.508339 8.86267 0.312672 9.138 0.188005C9.41333 0.0633386 9.70067 0.00067193 10 5.26316e-06C10.2993 -0.000661404 10.587 0.0620052 10.863 0.188005C11.139 0.314005 11.3763 0.509672 11.575 0.775005L14.375 4.40001L18.625 5.82501C19.0583 5.95834 19.4 6.20434 19.65 6.563C19.9 6.92167 20.025 7.31734 20.025 7.75001C20.025 7.95001 19.9957 8.15001 19.937 8.35001C19.8783 8.55001 19.7827 8.74167 19.65 8.92501L16.9 12.825L17 16.925C17.0167 17.5083 16.825 18 16.425 18.4C16.025 18.8 15.5583 19 15.025 19C14.9917 19 14.8083 18.975 14.475 18.925L10 17.675L5.525 18.925C5.44167 18.9583 5.35 18.9793 5.25 18.988C5.15 18.9967 5.05833 19.0007 4.975 19C4.44167 19 3.975 18.8 3.575 18.4C3.175 18 2.98333 17.5083 3 16.925L3.1 12.8L0.375 8.92501C0.241667 8.74167 0.145667 8.55001 0.0869999 8.35001C0.0283333 8.15001 -0.000666636 7.95001 3.03207e-08 7.75001C3.03207e-08 7.33334 0.121 6.94601 0.363 6.58801C0.605 6.23001 0.942333 5.97567 1.375 5.82501L5.625 4.40001ZM6.85 6.12501L2 7.72501L5.1 12.2L5 16.975L10 15.6L15 17L14.9 12.2L18 7.775L13.15 6.12501L10 2.00001L6.85 6.12501Z" fill="#F3BA00" />
                        </svg>
                    </div>
                    <img src="{{ asset('picture/E (13).jpg') }}" class="w-[350px] h-[300px] object-cover" alt="">
                </div>
            </div>
            <div class="flex justify-end">
                <a href="" class="underline font-semibold text-blue-500 pt-2 text-lg">Show All</a>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center w-full h-[550px] bg-[#E0E6E9]">
        <div class="text-black [text-shadow:3px_3px_0px_white,-3px_3px_0px_white,3px_-3px_0px_white,-3px_-3px_0px_white] text-[40px] font-bold py-6">Kenapa Memilih Kita</div>
        <div class="flex flex-row w-full justify-center space-x-12">
            <div class="relative flex">
                <!-- Div pertama -->
                <div class="flex h-[344px] w-[458px] bg-white rounded-[20px] justify-center items-center">
                    <img src="{{ asset('picture/mainpage.jpg') }}"
                        class="h-[324px] w-[438px] rounded-2xl"
                        alt="Main Page">
                </div>
                <!-- Div kedua -->
                <div class="absolute -bottom-2 -left-10 flex h-[180px] w-[220px] bg-white rounded-[20px] justify-center items-center shadow-lg">
                    <img src="{{ asset('picture/penyu.jpg') }}"
                        class="h-[160px] w-[200px] rounded-2xl"
                        alt="Main Page">
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row space-x-6 items-center">
                    <div class="flex w-[70px] h-[70px] bg-white rounded-full justify-center items-center">
                        <p class="font-semibold text-3xl">1</p>
                    </div>
                    <div class="flex flex-col w-[700px]">
                        <p class="font-semibold text-2xl text-justify">
                            Semua yang Anda Butuhkan untuk Liburan, Tanpa Biaya Tersembunyi.
                        </p>
                        <p class="text-justify pt-2">
                            Kami memahami pentingnya transparansi bagi wisatawan. Gili Trust memberikan informasi harga yang jelas untuk semua layanan dan destinasi yang kami tawarkan, tanpa biaya tambahan yang tidak terduga. Nikmati liburan Anda tanpa kekhawatiran soal anggaran.
                        </p>
                    </div>
                </div>
                <div class="flex flex-row space-x-6 items-center pt-2">
                    <div class="flex w-[70px] h-[70px] bg-white rounded-full justify-center items-center">
                        <p class="font-semibold text-3xl">2</p>
                    </div>
                    <div class="flex flex-col w-[700px]">
                        <p class="font-semibold text-2xl text-justify">
                            Wisata Hemat, Fasilitas Lengkap – Hanya di Gili Trust!
                        </p>
                        <p class="text-justify pt-2">
                            Gili Trust menawarkan solusi liburan yang terjangkau tanpa mengurangi kualitas pengalaman Anda. Dari akomodasi hingga aktivitas wisata, kami menyediakan pilihan terbaik dengan harga kompetitif untuk memenuhi kebutuhan semua jenis pelancong.
                        </p>
                    </div>
                </div>
                <div class="flex flex-row space-x-6 items-center pt-2">
                    <div class="flex w-[70px] h-[70px] bg-white rounded-full justify-center items-center">
                        <p class="font-semibold text-3xl">3</p>
                    </div>
                    <div class="flex flex-col w-[700px]">
                        <p class="font-semibold text-2xl text-justify">
                            Wisata Hemat, Fasilitas Lengkap – Hanya di Gili Trust!
                        </p>
                        <p class="text-justify pt-2">
                            Kami menghadirkan platform inovatif yang mendukung UMKM lokal sambil memberikan harga bersahabat untuk wisatawan. Dengan Gili Trust, Anda tidak hanya menikmati liburan hemat, tetapi juga berkontribusi pada pertumbuhan ekonomi lokal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-center pt-8 pb-4 text-3xl font-bold">
        Blog
    </div>
    <div class="flex flex-row justify-center space-x-24 pb-24">
        <div class="flex flex-col">
            <img src="{{ asset('picture/E (13).jpg') }}" class="w-[370px] h-[300px]" alt="">
            <div class="flex flex-row pt-2 items-center">
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                </svg>
                <p class="pl-2">Gili Meno, Nusa Tenggara Barat</p>
            </div>
            <div class="flex justify-center font-semibold text-lg py-2">
                Wisata Asik di Gili Meno
            </div>
            <div class="w-[370px] text-justify">
                Gili Meno, salah satu dari Tiga Gili di Lombok, Nusa Tenggara Barat, memang menjadi destinasi yang menakjubkan bagi para pecinta keindahan bawah laut. Keunikan dari Gili Meno terletak pada spot snorkeling atau diving yang sangat terkenal, yaitu "Nest" atau.....
            </div>
        </div>
        <div class="flex flex-col">
            <img src="{{ asset('picture/E (13).jpg') }}" class="w-[370px] h-[300px]" alt="">
            <div class="flex flex-row pt-2 items-center">
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 10C8.55 10 9.021 9.80433 9.413 9.413C9.805 9.02167 10.0007 8.55067 10 8C9.99933 7.44933 9.80367 6.97867 9.413 6.588C9.02233 6.19733 8.55133 6.00133 8 6C7.44867 5.99867 6.978 6.19467 6.588 6.588C6.198 6.98133 6.002 7.452 6 8C5.998 8.548 6.194 9.019 6.588 9.413C6.982 9.807 7.45267 10.0027 8 10ZM8 17.35C10.0333 15.4833 11.5417 13.7877 12.525 12.263C13.5083 10.7383 14 9.384 14 8.2C14 6.38333 13.421 4.896 12.263 3.738C11.105 2.58 9.684 2.00067 8 2C6.316 1.99933 4.89533 2.57867 3.738 3.738C2.58067 4.89733 2.00133 6.38467 2 8.2C2 9.38333 2.49167 10.7377 3.475 12.263C4.45833 13.7883 5.96667 15.484 8 17.35ZM8 20C5.31667 17.7167 3.31267 15.596 1.988 13.638C0.663333 11.68 0.000666667 9.86733 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.02167 0.741667 5.884 0 8 0C10.116 0 11.9787 0.741667 13.588 2.225C15.1973 3.70833 16.0013 5.7 16 8.2C16 9.86667 15.3377 11.6793 14.013 13.638C12.6883 15.5967 10.684 17.7173 8 20Z" fill="black" />
                </svg>
                <p class="pl-2">Gili Meno, Nusa Tenggara Barat</p>
            </div>
            <div class="flex justify-center font-semibold text-lg py-2">
                Wisata Asik di Gili Meno
            </div>
            <div class="w-[370px] text-justify">
                Gili Meno, salah satu dari Tiga Gili di Lombok, Nusa Tenggara Barat, memang menjadi destinasi yang menakjubkan bagi para pecinta keindahan bawah laut. Keunikan dari Gili Meno terletak pada spot snorkeling atau diving yang sangat terkenal, yaitu "Nest" atau.....
            </div>
        </div>
    </div>
    <x-footerMain></x-footerMain>
</body>

</html>