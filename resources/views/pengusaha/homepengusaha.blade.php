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
        <div class="flex flex-col w-full h-full pt-[120px] space-y-12 px-24 overflow-y-auto ml-[350px] mb-12">
            <div class="flex flex-row justify-between  w-full space-x-24">
                <div class="flex flex-col rounded-xl bg-[#7CD0EF] h-[130px] w-full">
                    <p class="p-4">Total Order</p>
                </div>
                <div class="flex flex-col rounded-xl bg-[#7CEF90] h-[130px] w-full">
                    <p class="p-4">Today's Order</p>
                </div>
            </div>
            <div class="flex flex-row justify-between w-full space-x-24">
                <div class="flex flex-col rounded-xl bg-[#E5EF7C] h-[130px] w-full">
                    <p class="p-4">Total Earn</p>
                </div>
                <div class="flex flex-col rounded-xl bg-[#EFB47C] h-[130px] w-full">
                    <p class="p-4">Total Product</p>
                </div>
            </div>
            <div class="border rounded-xl w-full h-[300px] px-24">

            </div>

        </div>
    </div>
    <!-- <x-footer /> -->
</body>
</html>
