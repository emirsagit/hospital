<div class="h-screen w-screen flex justify-center items-center fixed top-0 z-50" x-show.transition.duration.300ms="form" x-cloak>
    <form class="w-screen h-screen md:w-1/2 bg-white rounded-lg p-4 overflow-auto">
        <div class="flex justify-between flex-row">
            <p class="block text-gray-700 font-bold mb-1 text-xl text-center">{{ __('Online Muayene Randevusu Alın') }}
            </p>
            <p class="text-red-700 hover:text-red-800 cursor-pointer text-lg font-bold" @click="form = false">
                X
            </p>
        </div>
        <p class="block text-blue-700 font-bold mb-1 text-lg">{{ __('Sistem Nasıl Çalışır?') }}
        </p>
        <ul class="list-decimal list-inside">
            <li>
                {{ __('onlineAppointment.step1') }} <a href="{{ config('admin.tel') }}"
                class="text-blue-600 underline"> {{ config('admin.tel') }} </a>
            </li>
            <li>
                {{ __('onlineAppointment.step2') }} 
            </li>
            <li>
                {{ __('onlineAppointment.step3') }} 
            </li>
            <li>
                {{ __('onlineAppointment.step4') }} 
            </li>
        </ul>
        <p class="block text-blue-700 mb-1 text-md text-center">{{ __('Randevu Formu') }}
        </p>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                {{ __('İsim') }}
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="name" id="name" type="text" placeholder="{{ __('İsim') }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="telefon">
                {{ __('Telefon') }}
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="tel" id="tel" type="tel" placeholder="{{ __('Telefon') }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
                {{ __('Randevu Tarihi') }}
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="date" id="date" type="date" placeholder="{{ __('Randevu Tarihi') }}" required>
        </div>

        <div class="mb-4">

            <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                 {{ __('Konu') }}
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="body" id="body" type="text" placeholder="{{ __('Kısaca probleminizi yazınız.') }}" required></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button id="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-4"
                type="submit">
                {{ __('Randevu oluştur') }}
            </button>
            <p class="bg-gray-100 mb-4 hover:bg-gray-200 text-gray-800 py-2 px-4 cursor-pointer rounded focus:outline-none focus:shadow-outline"
                @click="form = false">
                {{ __('Geri') }}
            </p>
        </div>
    </form>
</div>