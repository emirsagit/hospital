<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ __('Yeni Hizmet Oluştur') }}
        </h2>
        <a href="{{ route('admin.services.index') }}" class="p-1 bg-gray-200 rounded">Geri</a>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.services.store') }}" method="POST" class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    <div class="w-full">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Başlık</label>
                        <input 
                            name="title"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                            type="text">
                    </div>

                    <div class="mt-4 w-full">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Message</label>

                        <textarea
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full h-40 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                    </div>

                    <div class="flex justify-center mt-6">
                        <button
                            class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>