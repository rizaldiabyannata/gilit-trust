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
        <div class="flex flex-col w-full h-full pt-[120px] space-y-12 px-24 ml-[450px] mb-12">
        <div class="flex w-full justify-center">
            <a href="" class="w-[200px] h-[200px] rounded-full bg-slate-300 hover:bg-opacity-50"></a>
        </div>    
            <form action="" method="post" class="w-full"> 
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="name" class="block">Name</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-xl h-14">
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block">Email</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-xl h-14">
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block">Phone</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-xl h-14">
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block">Password</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-xl h-14">
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block">Confirm Password</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-xl h-14">
                    </div>
                </div>
                <div class="flex w-full justify-end">
                    <button class="h-[50px] px-12 bg-cyan-400 rounded-xl mt-4 hover:bg-slate-300 hover:text-slate-500">APPLY</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <x-footer /> -->
</body>


</html>
