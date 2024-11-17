<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="font-['Karantina'] flex flex-col min-h-screen">
    <div>
        <x-navbar></x-navbar>
        <div class="flex justify-center items-center px-6 py-12 h-lvh">
            <div class="flex flex-row justify-center items-center space-x-16 p-8 border-black border">
                <img class="w-40" src="./assets/inIcon.png" alt="inside">
                <div class="flex flex-col w-72">
                    <h2 class="text-4xl text-end font-semibold">Customer Login</h2>
                    <form class="flex flex-col space-y-2 w-full" action="POST">
                        @csrf
                        <div class="flex flex-col justify-start">
                            <label class="font-semibold text-2xl" for="email">Email</label>
                            <input type="text" name="email" id="email" class="border border-gray-300 p-2">
                        </div>
                        <div class="flex flex-col justify-start">
                            <label class="font-semibold text-2xl" for="password">Password</label>
                            <input type="password" name="password" id="password" class="border border-gray-300 p-2">
                            <button type="button" id="togglePassword" class="flex justify-end items-center space-x-2 mt-2 text-black text-lg">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                                    <path fill="black" d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0" />
                                </svg>
                                <span>Show Password</span>
                            </button>
                        </div>
                        <div>
                            <button type="submit" class="w-full px-6 text-start font-semibold bg-[#00599D] border border-black text-4xl py-2 special-shadow">
                                <p class="text-white">Login...</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', () => {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            if (type === 'password') {
                eyeIcon.innerHTML = `
                    <path fill="black" d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0"/>
                `;
            } else {
                eyeIcon.innerHTML = `
                    <path fill="black" d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54zM12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.8 11.8 0 0 1-4 5.19l-1.42-1.43A9.86 9.86 0 0 0 20.82 12A9.82 9.82 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.82 9.82 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13"/>
                `;
            }
        });
    </script>
</body>

</html>