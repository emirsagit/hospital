<div class="container relative mx-auto lg:mt-12">
    <div class="items-center flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
            <h1 class="text-white font-semibold text-4xl lg:text-5xl">
                {{ __('Evde Sağlık Hizmeti') }}
            </h1>
            <p class="mt-4 text-md lg:text-lg text-white">
                {{ __('Evde sağlık hizmeti sunabilmek için her branşta uzman doktorlarımız ve diğer sağlık personelimizle 7/24 hizmet vermekteyiz. Bir telefon kadar yakınız...') }}
            </p>
            <div class="mt-4 mb-0 lg:mb-4 flex flex-row justify-evenly">
                <a
                    class="bg-blue-500 text-white active:bg-blue-100 text-lg font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md hover:bg-blue-400 outline-none focus:outline-none cursor-pointer flex flex-row select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        {{ Config::get('admin.tel') }}
                </a>
                <a
                    class="hidden md:flex bg-green-500 text-white active:bg-green-100 text-lg font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md hover:bg-green-400 outline-none focus:outline-none cursor-pointer select-none">
                    {{ __('ONLİNE GÖRÜŞME') }}
                </a>
            </div>
        </div>
    </div>
</div>