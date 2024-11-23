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
        <div class="flex pt-[120px] w-full px-24 justify-center">
            <div class="grid grid-cols-4 gap-4 w-full">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-1.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-4.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-3.png') }}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-7.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-2.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-6.png') }}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-5.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-4.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-1.png') }}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-7.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-3.png') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('picture/gallery-6.png') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
        

    <x-footerMain></x-footerMain>
</body>

</html>