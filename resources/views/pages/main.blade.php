<x-layouts title="">
    <main class="flex flex-col justify-between w-full antialiased">

        @php
            $LIST_THUMBNAILS = [
                'https://images.unsplash.com/photo-1457369804613-52c61a468e7d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZGlnaXRhbCUyMGxpYnJhcnl8ZW58MHx8MHx8fDA%3D',
                'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGRpZ2l0YWwlMjBsaWJyYXJ5fGVufDB8fDB8fHww',
                'https://images.unsplash.com/photo-1472173148041-00294f0814a2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGRpZ2l0YWwlMjBsaWJyYXJ5fGVufDB8fDB8fHww',
                'https://images.unsplash.com/photo-1485322551133-3a4c27a9d925?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGRpZ2l0YWwlMjBsaWJyYXJ5fGVufDB8fDB8fHww',
                'https://plus.unsplash.com/premium_photo-1730112231198-b958b5cce6c8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjV8fGRpZ2l0YWwlMjBsaWJyYXJ5fGVufDB8fDB8fHww',
                'https://images.unsplash.com/photo-1526243741027-444d633d7365?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzF8fGRpZ2l0YWwlMjBsaWJyYXJ5fGVufDB8fDB8fHww',
            ];

            $LIST_PILIHAN = [
                'Sejarah Peradaban Dunia',
                'Teknik Dasar Pemrograman',
                'Panduan Hidup Sehat',
                'Kisah Inspiratif Dunia',
                'Strategi Bisnis Modern',
                'Novel Petualangan Anak',
            ];
        @endphp

        <section class="text-gray-600 body-font">
            <div class="container px-5 mb-24 mt-10 mx-auto">

                <div class="text-gray-600 body-font">
                    <div class="container px-5 py-10 mx-auto">
                        <div class="text-center mb-20">
                            <h1
                                class="sm:text-5xl text-3xl max-w-2xl mx-auto font-black text-center title-font text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mb-4">
                                Perpustakaan Digital Dalam Satu Genggaman!</h1>
                            <p class="text-xl leading-relaxed max-w-xl mx-auto">Temukan buku favoritmu dari
                                berbagai genre. Akses mudah, cepat, dan tanpa batas hanya dalam satu klik.</p>
                        </div>
                        <div id="rekomendasi" class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">

                            @foreach ($LIST_PILIHAN as $item)
                                <div class="p-2 sm:w-1/2 w-full">
                                    <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="3"
                                            class="text-primary w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
                                        <span class="title-font font-medium">{{ $item }}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div id="gallery" class="text-gray-600 body-font">
                    <div class="container px-5 pt-10 mx-auto flex h-fit flex-wrap">
                        <div class="mx-auto">
                            <div class="flex flex-wrap w-full bg-gray-100 mb-4">
                                <img alt="gallery" class="w-full object-cover h-72 rounded-xl object-center"
                                    src="https://images.unsplash.com/photo-1601104809254-c399171b9fa3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bGlicmFyeSUyMGRpZ2l0YWx8ZW58MHwwfDB8fHww">
                            </div>
                            <div class="flex flex-wrap -mx-2">
                                <div class="px-2 w-1/2">
                                    <div class="flex flex-wrap w-full bg-gray-100">
                                        <img alt="gallery" class="w-full object-cover h-full rounded-xl object-center"
                                            src="https://plus.unsplash.com/premium_photo-1664300897489-fd98eee64faf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxpYnJhcnklMjBkaWdpdGFsfGVufDB8MHwwfHx8MA%3D%3D">
                                    </div>
                                </div>
                                <div class="px-2 w-1/2">
                                    <div class="flex flex-wrap w-full bg-gray-100">
                                        <img alt="gallery" class="w-full object-cover rounded-xl  h-full object-center"
                                            src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGxpYnJhcnklMjBkaWdpdGFsfGVufDB8MHwwfHx8MA%3D%3D">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @auth
                    <div id="about" class="text-gray-600 body-font mt-20">
                        <div
                            class="container mx-auto flex px-5 mb-24 md:flex-row flex-col items-center bg-gradient-to-r from-transparent via-custom/40 to-transparent p-4 overflow-hidden">
                            <div class="lg:max-w-xs md:w-1/2 w-5/6 mb-10 md:mb-0">
                                <img class="object-cover drop-shadow-2xl object-center -mb-5" alt="hero"
                                    src="/me-pian.png">
                            </div>
                            <div
                                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                                <h1 class="title-font sm:text-4xl text-3xl mb-16 font-semibold">
                                    <span class="font-black text-white drop-shadow-xl">PIAN SOPIAN</span>
                                    <br>
                                    <span class="font-bold text-3xl text-black">220101010035 / SI 501</span>
                                </h1>
                                <p class="leading-relaxed uppercase font-black bg-orange-500/50 text-2xl text-white">
                                    Jurusan sistem informasi
                                </p>
                                <p class="leading-relaxed uppercase font-black text-white drop-shadow-md text-2xl">
                                    Pemrograman berbasis web</p>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </section>
    </main>
</x-layouts>
