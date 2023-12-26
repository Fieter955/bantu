<x-home-layout>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-lg mb-11">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Contact Us</h1>
        <form action="#" method="post">
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Name:</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-600">Message:</label>
                <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full shadow-md">Send Message</button>
        </form>
    </div>

</x-home-layout>