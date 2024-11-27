<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('../resources/css/app.css')
    <title>Home</title>
</head>

<body class="font-['poppins'] flex flex-col">
    <x-navbarMain />
    <div class="flex flex-row h-full">
        <x-sidebarUser class="h-full" />
        <div class="flex flex-col w-full h-full pt-[120px] space-y-4 px-24 ml-[350px] mb-12">
            <div class="flex flex-row w-full justify-between">
                <div class="flex flex-col">
                    <p class="text-xl  font-semibold">Order id @58932bakl12</p>
                    <p>Tanggal : 25 mei</p>
                    <p>Pembayaran: DANA</p>
                    <p>Kategori : Trips</p>
                    <p>Status : Done</p>    
                </div>
                <div class="flex flex-col">
                    <p class="text-xl  font-semibold">Trip To Gili Trawangan</p>
                    <p>Penjasa : Opi Tour and Travel</p>
                    <p>Phone: 082363484854DANA</p>
                    <p>Lokasi : Gili Trawangan</p>   
                </div>
                <div>
                    <img src="{{ asset('picture/E (13).jpg') }}" alt="" class="h-[130px] rounded-xl">
                </div>
            </div>
            <div class="border-t w-full"></div>
            <div class="flex flex-row w-full justify-between">
                <div class="flex flex-col">
                    <p class="text-xl  font-semibold">Order id @58932bakl12</p>
                    <p>Tanggal : 25 mei</p>
                    <p>Pembayaran: DANA</p>
                    <p>Kategori : Trips</p>
                    <p>Status : Done</p>    
                </div>
                <div class="flex flex-col">
                    <p class="text-xl  font-semibold">Trip To Gili Trawangan</p>
                    <p>Penjasa : Opi Tour and Travel</p>
                    <p>Phone: 082363484854DANA</p>
                    <p>Lokasi : Gili Trawangan</p>   
                </div>
                <div>
                    <img src="{{ asset('picture/E (13).jpg') }}" alt="" class="h-[130px] rounded-xl">
                </div>
            </div>
            <div class="border-t w-full"></div>
            <div class="flex flex-row w-full justify-between">
                <div class="flex flex-col">
                    <p class="text-xl  font-semibold">Order id @58932bakl12</p>
                    <p>Tanggal : 25 mei</p>
                    <p>Pembayaran: DANA</p>
                    <p>Kategori : Trips</p>
                    <p>Status : Done</p>    
                </div>
                <div class="flex flex-col">
                    <p class="text-xl  font-semibold">Trip To Gili Trawangan</p>
                    <p>Penjasa : Opi Tour and Travel</p>
                    <p>Phone: 082363484854DANA</p>
                    <p>Lokasi : Gili Trawangan</p>   
                </div>
                <div>
                    <img src="{{ asset('picture/E (13).jpg') }}" alt="" class="h-[130px] rounded-xl">
                </div>
            </div>
            <div class="border-t w-full"></div>
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
