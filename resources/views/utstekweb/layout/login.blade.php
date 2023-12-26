<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <!-- Login Form -->
        <form class="mb-6" method="POST" action="{{ route('loginRequested') }}">
            @csrf
            <h2 class="text-2xl font-semibold mb-4">Login</h2>
            <div class="mb-4">
                <label for="login-email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="login-email" name="email"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="login-password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="login-password" name="password"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Login
            </button>
        </form>
    </div>
</body>

</html>
