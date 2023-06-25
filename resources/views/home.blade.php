@extends('layout.layout')
@section('container')

<section id="hero" class="bg-gray-900 dark:bg-gray-900 mt-16">
    <div class="py-32">
        <div class="grid grid-cols-2 gap-10 md:gap-4">
            <div class="col-span-2 md:col-span-1 flex justify-center">
                <img id="logo-vokasi" src="{{ asset('img/logo-pandan-l35.png') }}" class="h-72" alt="Logo Vokasi" />
            </div>
            <div class="col-span-2 md:col-span-1 text-center md:text-start">
                <p id='welcome' class="pop-out font-extrabold text-4xl md:text-5xl text-amber-400">
                    Breeding Room <br> Humidity & Temperature Monitoring</p>
                <p class="pop-out font-semibold text-lg mt-7 text-white">Dapatkan Informasi Terkini tentang Kelembapan & Temperatur
                    <br>Peternakan dengan <a class="text-amber-400 font-bold"
                        href="{{ route('dashboard') }}">Monitoring</a> Online</p>
                        <br>
                        <br>
                <div class="mt-2 md:mt-5">
                    <a href="{{ route('dashboard') }}">
                        <button type="button" class="mt-3 text-white bg-amber-400 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            <span class="text-lg">Monitor Sekarang</span>
                        </button>
                    </a>
                    <a href="#about">
                        <button type="button" class="mt-3 text-amber-400 outline outline-amber-400 hover:bg-amber-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-amber-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            <span class="text-lg">Pelajari lebih lanjut</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kemudahan"
    class="bg-gradient-to-r from-amber-500 to-amber-400 px-14 py-14 md:px-20 md:py-32">
    <div class="grid grid-cols-3 gap-10">
        <div class="col-span-3 justify-self-center text-center">
            <h1
                class="mb-4 lg:text-6xl md:text-5xl sm:text-4xl max-[639px]:text-3xl font-extrabold text-gray-900 dark:text-white md:text-4xl lg:text-5xl">
                Kemudahan yang Ditawarkan
            </h1>
            <p class="text-xl font-semibold text-gray-900">Beberapa kemudahan yang ditawarkan oleh Web Monitoring ialah :</p>
        </div>
        <div class="lg:col-span-1 md:col-span-1 sm:col-span-3 max-[639px]:col-span-3">
            <a href="#"
                class="transition ease-in-out duration-300 block max-w-sm p-6 bg-white border hover:scale-110 border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="mb-1">
                    <svg class="w-12 bg-amber-400 justify-self-center p-2 rounded-full stroke-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Mudah Diakses
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Mudah diakses karena tidak perlu mengunduh aplikasi terlebih dahulu
                </p>
            </a>
        </div>
        <div class="lg:col-span-1 md:col-span-1 sm:col-span-3 max-[639px]:col-span-3">
            <a href="#"
                class="transition ease-in-out duration-300 block max-w-sm p-6 bg-white border hover:scale-110 border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="mb-1">
                    <svg class="w-12 bg-amber-400 justify-self-center p-2 rounded-full stroke-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Dapat Diakses Dimana Saja
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Web Monitoring mendukung tampilan mobile sehingga dapat diakses dari mana saja
                </p>
            </a>
        </div>
        <div class="lg:col-span-1 md:col-span-1 sm:col-span-3 max-[639px]:col-span-3">
            <a href="#"
                class="transition ease-in-out duration-300 block max-w-sm p-6 bg-white border hover:scale-110 border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="mb-1">
                    <svg class="w-12 bg-amber-400 justify-self-center p-2 rounded-full stroke-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Real-Time
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Data yang diunggah pada website dilakukan secara Real-Time
                </p>
            </a>
        </div>
    </div>
</section>

<section id="about" class="bg-gray-900 dark:bg-gray-900 px-20">
    <div class="py-32">
        <div class="grid grid-cols-2 gap-4">
            <div class="text-amber-400 col-span-2 md:col-span-1">
                <figure class="max-w-lg transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-500">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/ternak-burung-kenari.webp') }}"
                        alt="image description">
                    <figcaption class="mt-2 text-sm text-center text-gray-100 dark:text-gray-400">Photo by : <a
                            href="https://gdm.id/cara-ternak-kenari/">https://gdm.id/cara-ternak-kenari/</a></figcaption>
                </figure>
            </div>
            <div class="text-center col-span-2 md:col-span-1">
                <h3 class="text-amber-400 text-4xl md:text-6xl font-bold mb-3 md:mb-10">
                    Tentang Kami
                </h3>
                <p class="text-lg md:text-2xl text-white">
                    Kami adalah <span class="underline decoration-amber-400">peternakan burung kenari</span> yang berkomitmen
                    untuk menghasilkan burung kenari berkualitas tinggi,
                    dengan fokus pada perawatan yang baik dan pemuliaan
                    selektif guna menciptakan keturunan yang sehat dan memiliki
                    sifat unggul.
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    window.addEventListener("load", function() {
        var myDiv = document.getElementById("welcome");
        myDiv.style.animation = "none";
        void myDiv.offsetWidth; // Memaksa browser untuk me-repaint elemen

        myDiv.classList.add("pop-out");
    });
</script>

@endsection
