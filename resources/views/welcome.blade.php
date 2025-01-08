<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login & Register</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
        <!-- Navigation Tabs -->
        <div class="flex justify-center mb-6">
            <button id="login-tab" class="px-4 py-2 text-sm font-semibold text-gray-600 hover:text-gray-900 border-b-2 border-red-500 focus:outline-none">Login</button>
            <button id="register-tab" class="px-4 py-2 text-sm font-semibold text-gray-600 hover:text-gray-900 border-b-2 border-transparent focus:outline-none">Register</button>
        </div>

        <!-- Login Form -->
        <form id="login-form" method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
            </div>
            <div class="flex justify-between items-center">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-red-600 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 focus:ring focus:ring-red-300">Login</button>
        </form>

        <!-- Register Form -->
        <form id="register-form" method="POST" action="{{ route('register') }}" class="space-y-4 hidden">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input id="name" type="text" name="name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
            </div>
            <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 focus:ring focus:ring-red-300">Register</button>
        </form>
    </div>

    <!-- JavaScript for Tab Navigation -->
    <script>
        const loginTab = document.getElementById('login-tab');
        const registerTab = document.getElementById('register-tab');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');

        loginTab.addEventListener('click', () => {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
            loginTab.classList.add('border-red-500');
            registerTab.classList.remove('border-red-500');
        });

        registerTab.addEventListener('click', () => {
            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
            registerTab.classList.add('border-red-500');
            loginTab.classList.remove('border-red-500');
        });
    </script>
</body>
</html>
