{{-- large screen whatsapp --}}
<a class="fixed bottom-0 right-0 p-3 m-2 lg:m-4 z-50 bg-whatsapp rounded-full text-white hidden lg:flex cursor-pointer hover:bg-green-500 transition duration-500 ease-in-out"
href="https://wa.me/{{ Config::get('admin.whatsapp') }}?text=Merhabalar, Web Siteniz Aracılığı ile size ulaşıyorum.">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 418.135 418.135" fill="currentColor" stroke="currentColor"
  class="w-10 h-10 lg:w-12 lg:h-12">
  <g fill="#F7F4F2">
    <path
      d="M198.929.242C88.5 5.5 1.356 97.466 1.691 208.02c.102 33.672 8.231 65.454 22.571 93.536L2.245 408.429c-1.191 5.781 4.023 10.843 9.766 9.483l104.723-24.811c26.905 13.402 57.125 21.143 89.108 21.631 112.869 1.724 206.982-87.897 210.5-200.724C420.113 93.065 320.295-5.538 198.929.242zm124.957 321.955c-30.669 30.669-71.446 47.559-114.818 47.559-25.396 0-49.71-5.698-72.269-16.935l-14.584-7.265-64.206 15.212 13.515-65.607-7.185-14.07c-11.711-22.935-17.649-47.736-17.649-73.713 0-43.373 16.89-84.149 47.559-114.819 30.395-30.395 71.837-47.56 114.822-47.56 43.372.001 84.147 16.891 114.816 47.559 30.669 30.669 47.559 71.445 47.56 114.817-.001 42.986-17.166 84.428-47.561 114.822z" />
    <path
      d="M309.712 252.351l-40.169-11.534a14.971 14.971 0 00-14.816 3.903l-9.823 10.008c-4.142 4.22-10.427 5.576-15.909 3.358-19.002-7.69-58.974-43.23-69.182-61.007-2.945-5.128-2.458-11.539 1.158-16.218l8.576-11.095a14.97 14.97 0 001.847-15.21l-16.9-38.223c-4.048-9.155-15.747-11.82-23.39-5.356-11.211 9.482-24.513 23.891-26.13 39.854-2.851 28.144 9.219 63.622 54.862 106.222 52.73 49.215 94.956 55.717 122.449 49.057 15.594-3.777 28.056-18.919 35.921-31.317 5.362-8.453 1.128-19.679-8.494-22.442z" />
  </g>
</svg>
</a>
{{-- large screen whatsapp end --}}
{{-- mobile whaptsapp and phone --}}
<div class="fixed bottom-0 w-full flex flex-row z-50 lg:hidden">
<a class="py-1 w-1/2 flex justify-center content-center text-lg bg-blue-500 text-white font-bold rounded-l items-center cursor-pointer "
  href="tel:{{ Config::get('admin.tel') }}">
  <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 py-1" fill="none" viewBox="0 0 24 24"
    stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
  </svg>
  {{ __('Ara') }}
</a>
<a class="py-1 w-1/2 flex justify-center content-center bg-whatsapp text-lg text-white font-bold rounded-r items-center cursor-pointer "
  href="https://wa.me/{{ Config::get('admin.whatsapp') }}?text=Merhabalar, Web Siteniz Aracılığı ile size ulaşıyorum.">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 418.135 418.135" fill="currentColor" stroke="currentColor"
    class="w-8 h-8 py-1">
    <g fill="#F7F4F2">
      <path
        d="M198.929.242C88.5 5.5 1.356 97.466 1.691 208.02c.102 33.672 8.231 65.454 22.571 93.536L2.245 408.429c-1.191 5.781 4.023 10.843 9.766 9.483l104.723-24.811c26.905 13.402 57.125 21.143 89.108 21.631 112.869 1.724 206.982-87.897 210.5-200.724C420.113 93.065 320.295-5.538 198.929.242zm124.957 321.955c-30.669 30.669-71.446 47.559-114.818 47.559-25.396 0-49.71-5.698-72.269-16.935l-14.584-7.265-64.206 15.212 13.515-65.607-7.185-14.07c-11.711-22.935-17.649-47.736-17.649-73.713 0-43.373 16.89-84.149 47.559-114.819 30.395-30.395 71.837-47.56 114.822-47.56 43.372.001 84.147 16.891 114.816 47.559 30.669 30.669 47.559 71.445 47.56 114.817-.001 42.986-17.166 84.428-47.561 114.822z" />
      <path
        d="M309.712 252.351l-40.169-11.534a14.971 14.971 0 00-14.816 3.903l-9.823 10.008c-4.142 4.22-10.427 5.576-15.909 3.358-19.002-7.69-58.974-43.23-69.182-61.007-2.945-5.128-2.458-11.539 1.158-16.218l8.576-11.095a14.97 14.97 0 001.847-15.21l-16.9-38.223c-4.048-9.155-15.747-11.82-23.39-5.356-11.211 9.482-24.513 23.891-26.13 39.854-2.851 28.144 9.219 63.622 54.862 106.222 52.73 49.215 94.956 55.717 122.449 49.057 15.594-3.777 28.056-18.919 35.921-31.317 5.362-8.453 1.128-19.679-8.494-22.442z" />
    </g>
  </svg>
  Whatsapp
</a>
</div>
{{-- Mobile whatspp and phone end --}}