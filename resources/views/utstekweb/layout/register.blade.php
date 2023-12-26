<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <!-- Register Form -->
        <form method="post" action="{{ route('registerRequested') }}">
            @csrf
            <h2 class="text-2xl font-semibold mb-4">Register</h2>
            <div class="mb-4">
                <label for="register-name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="register-name" name="name"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="register-email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="register-email" name="email"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="register-password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="register-password" name="password"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600 focus:outline-none focus:shadow-outline-green">
                Register
            </button>
        </form>
    </div>
</body>

</html>
