
    @include('layout.components.head')
    @include('layout.components.symbol')
    @include('layout.components.navbar')
    <style>
        html {
          scroll-behavior: smooth;
          scroll-padding-top: 1rem; /* Optional: Mencegah section tertutup oleh navbar */
          scroll-padding-bottom: 1rem; /* Optional: Mencegah section tertutup oleh navbar */
        }
      </style>
    {{-- <div class="mx-5 mt-5"> --}}
        @yield('container')
    {{-- </div> --}}

    @include('layout.components.js')
    @include('layout.components.footer')
