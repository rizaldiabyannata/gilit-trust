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
    <div class="flex flex-row h-full ">
        <x-sidebar />
        <div class="flex flex-col w-full ml-[350px]">
            <div class="relative w-full h-[600px] ">
                <img src="{{ asset('picture/E (13).jpg') }}" class="object-cover w-full h-full z-0 blur-[4px]" alt="Background">
    
                <div class="absolute top-1/2 transform -translate-y-1/2 z-10 text-white text-4xl font-bold flex justify-center">
                    <div class="flex flex-col px-10 space-y-4">
                        <div class="text-4xl font-medium ">Detail Pemesanan</div>
                        <div class="text-6xl font-bold">Trips To Gili Trawangan</div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row w-full pt-4 justify-between items-center px-8">
                <div class="flex flex-col space-y-4 ">
                    <div class="flex flex-row pt-2 pl-2 items-center">
                        <svg width="30" height="30" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 2V0H17V2H1ZM1 16V10H0V8L1 3H17L18 8V10H17V16H15V10H11V16H1ZM3 14H9V10H3V14Z" fill="black"/>
                        </svg>
                        <p class="pl-3 text-md">Opi Tour and Travel</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2 items-center">
                        <svg width="26" height="30" viewBox="0 0 24 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15.25C12.825 15.25 13.5315 14.9565 14.1195 14.3695C14.7075 13.7825 15.001 13.076 15 12.25C14.999 11.424 14.7055 10.718 14.1195 10.132C13.5335 9.546 12.827 9.252 12 9.25C11.173 9.248 10.467 9.542 9.882 10.132C9.297 10.722 9.003 11.428 9 12.25C8.997 13.072 9.291 13.7785 9.882 14.3695C10.473 14.9605 11.179 15.254 12 15.25ZM12 30.25C7.975 26.825 4.969 23.644 2.982 20.707C0.995 17.77 0.001 15.051 0 12.55C0 8.8 1.2065 5.8125 3.6195 3.5875C6.0325 1.3625 8.826 0.25 12 0.25C15.174 0.25 17.968 1.3625 20.382 3.5875C22.796 5.8125 24.002 8.8 24 12.55C24 15.05 23.0065 17.769 21.0195 20.707C19.0325 23.645 16.026 26.826 12 30.25Z" fill="black"/>
                        </svg>
                        <p class="pl-4 text-md">Gili Meno, Nusa Tenggara Barat</p>
                    </div>
                    <div class="flex flex-row pt-2 pl-2 items-center">
                        <svg width="34" height="30" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 6.75V0.75H18.5V6.75H15.5ZM25.475 10.875L23.375 8.775L27.6125 4.5L29.7125 6.6375L25.475 10.875ZM27.5 18.75V15.75H33.5V18.75H27.5ZM27.6125 29.9625L23.375 25.725L25.475 23.625L29.75 27.825L27.6125 29.9625ZM8.525 10.875L4.2875 6.6375L6.425 4.5L10.625 8.775L8.525 10.875ZM8 27.75H14.75C15.375 27.75 15.9065 27.5315 16.3445 27.0945C16.7825 26.6575 17.001 26.126 17 25.5C16.999 24.874 16.7865 24.343 16.3625 23.907C15.9385 23.471 15.4135 23.252 14.7875 23.25H12.875L12.125 21.45C11.775 20.625 11.225 19.969 10.475 19.482C9.725 18.995 8.9 18.751 8 18.75C6.75 18.75 5.6875 19.1875 4.8125 20.0625C3.9375 20.9375 3.5 22 3.5 23.25C3.5 24.5 3.9375 25.5625 4.8125 26.4375C5.6875 27.3125 6.75 27.75 8 27.75ZM8 30.75C5.925 30.75 4.1565 30.0185 2.6945 28.5555C1.2325 27.0925 0.501001 25.324 0.500001 23.25C0.499001 21.176 1.2305 19.4075 2.6945 17.9445C4.1585 16.4815 5.927 15.75 8 15.75C9.5 15.75 10.869 16.1565 12.107 16.9695C13.345 17.7825 14.2635 18.876 14.8625 20.25C16.3125 20.25 17.5315 20.7875 18.5195 21.8625C19.5075 22.9375 20.001 24.225 20 25.725C19.95 27.15 19.419 28.344 18.407 29.307C17.395 30.27 16.176 30.751 14.75 30.75H8ZM20 25.725C19.875 25.225 19.75 24.7375 19.625 24.2625C19.5 23.7875 19.375 23.3 19.25 22.8C20.375 22.325 21.2815 21.5875 21.9695 20.5875C22.6575 19.5875 23.001 18.475 23 17.25C23 15.6 22.4125 14.1875 21.2375 13.0125C20.0625 11.8375 18.65 11.25 17 11.25C15.5 11.25 14.1875 11.7375 13.0625 12.7125C11.9375 13.6875 11.275 14.925 11.075 16.425C10.575 16.3 10.0625 16.1875 9.5375 16.0875C9.0125 15.9875 8.5 15.875 8 15.75C8.35 13.55 9.3815 11.75 11.0945 10.35C12.8075 8.95 14.776 8.25 17 8.25C19.5 8.25 21.625 9.125 23.375 10.875C25.125 12.625 26 14.75 26 17.25C26 19.175 25.45 20.9065 24.35 22.4445C23.25 23.9825 21.8 25.076 20 25.725Z" fill="black"/>
                        </svg>
                        <p class="pl-4 text-md">3 Days and 3 Night</p>
                    </div>
                </div>

                <div class="mt-6 items-center flex flex-row w-[700px] h-[320px] bg-[#E0E6E9] rounded-3xl px-8">
                <svg width="12" height="221" viewBox="0 0 12 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6" cy="6" r="6" fill="black"/>
                    <circle cx="6" cy="130" r="6" fill="black"/>
                    <line x1="6.5" y1="15" x2="6.5" y2="126" stroke="black" stroke-dasharray="2 2"/>
                    <line x1="6.5" y1="138" x2="6.5" y2="221" stroke="black" stroke-dasharray="2 2"/>
                </svg>
                <div class="flex flex-col items-start justify-start w-full space-x-4">
                    <div class="text-xl font-bold pl-4 pb-4">
                        Tanggal Keberangkatan
                    </div>
                    <div class="flex w-full space-x-4">
                        <div class="h-[50px] w-full bg-slate-300 rounded-xl justify-center items-center flex flex-col">
                            12/12/1212
                        </div>
                        <div class="h-[50px] w-full bg-slate-300 rounded-xl justify-center items-center flex flex-col">
                           10:59 am
                        </div>
                    </div>
                    
                    <div class="text-xl font-bold pt-4">
                        Jumlah Peserta
                    </div>
                    <div class="flex w-full space-x-4">
                        <div class="flex flex-col w-full">
                            <p>Dewasa</p>
                            <div class="h-[50px] w-full bg-slate-300 rounded-xl justify-center items-center flex flex-col">
                                9
                            </div>
                        </div>
                        <div class="flex flex-col w-full">
                            <p>Anak</p>
                            <div class="h-[50px] w-full bg-slate-300 rounded-xl justify-center items-center flex flex-col">
                                11
                            </div>
                        </div>
                        
                    </div>
                    <div class="flex flex-row space-x-5">

                    </div>
                </div>
            </div>
            </div>

            
            <!-- <div class="flex flex-col w-full text-justify pt-6 px-8 space-y-4">
                <p class="text-2xl font-bold">Deskripsi Paket</p>
                <p>Paket Trip 3 Hari 3 Malam Gili Trawangan menghadirkan pengalaman liburan yang tak terlupakan di surga tropis. Nikmati keindahan pantai berpasir putih, air laut jernih, dan suasana santai khas pulau. Hari pertama dimulai dengan perjalanan menuju Gili Trawangan, check-in di penginapan, dan waktu bebas untuk menjelajah. Hari kedua diisi dengan aktivitas seru seperti snorkeling ke spot-spot terbaik, mengunjungi taman bawah laut, dan menikmati sunset indah. Hari ketiga adalah waktu bersantai di pulau atau mencoba paddle boarding sebelum kembali ke destinasi asal. Semua kebutuhan seperti transportasi, akomodasi, dan makanan tertentu sudah termasuk, memastikan perjalanan Anda nyaman dan menyenangkan.
                <p>Paket ini juga dirancang untuk memberikan kebebasan bagi Anda menikmati keunikan Gili Trawangan. Anda bisa berkeliling pulau menggunakan sepeda, menikmati hidangan khas lokal di pasar malam, atau bersantai di tepi pantai dengan pemandangan yang menenangkan. Cocok untuk keluarga, pasangan, maupun solo traveler, trip ini akan membuat Anda merasakan momen liburan yang sempurna, jauh dari hiruk pikuk kota.</p>
                </p>
            </div> -->
            
            <div class="h-[250px] flex flex-row w-full px-8 pt-4 space-x-6 pb-4">
                <div class="flex flex-col rounded-xl bg-[#E0E6E9] w-full px-4 pt-4">
                    <p class="text-xl font-bold">Biodata Pelanggan</p>
                    <div class="grid grid-cols-2 gap-4 w-full">
                        <div class="flex flex-col w-full">
                            <p>Nama</p>
                            <div class="bg-slate-300 flex justify-center py-2 rounded-xl">Aldi Subianto</div>
                        </div>
                        <div class="flex flex-col w-full">
                            <p>Jenis Kelamin</p>
                            <div class="bg-slate-300 flex justify-center py-2 rounded-xl">Aldi Subianto</div>
                        </div>
                        <div class="flex flex-col w-full">
                            <p>Nomor HP</p>
                            <div class="bg-slate-300 flex justify-center py-2 rounded-xl">Aldi Subianto</div>
                        </div>
                        <div class="flex flex-col w-full">
                            <p>Umur</p>
                            <div class="bg-slate-300 flex justify-center py-2 rounded-xl">Aldi Subianto</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-xl bg-[#E0E6E9] w-full px-4 pt-4">
                    <p class="text-xl font-bold">Detail Pembayaran</p>
                    <div class="grid grid-cols-2 gap-4 w-full">
                        <div class="flex flex-col w-full">
                            <p>Order ID</p>
                            <div class="bg-slate-300 flex justify-center py-2 rounded-xl">Aldi Subianto</div>
                        </div>
                        <div class="flex flex-col w-full">
                            <p>Metode Pembayaran</p>
                            <div class="bg-slate-300 flex justify-center py-2 rounded-xl">Aldi Subianto</div>
                        </div>
                        <div class="flex flex-col w-full">
                            <p>Total Pembayaran</p>
                            <div class="bg-slate-300 flex justify-center py-2 rounded-xl">Aldi Subianto</div>
                        </div>
                        <div class="flex flex-col w-full">
                            <p>Chat</p>
                            <a href="" class="bg-slate-300 flex justify-center py-2 rounded-xl">=></a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>
