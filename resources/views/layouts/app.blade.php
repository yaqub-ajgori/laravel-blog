<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $metaTitle ?: 'Newsbdjob.com | Largest Job Site in Bangladesh' }}</title>
    <meta name="author" content="Newsbdjob.com">
    <meta name="description" content="{{ $metaDescription }}">
    <link href="{{ asset('favicon.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>

        .bottom-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        body, p, h1, h2, h3, h4, h5, h6 {
        font-family: 'Hind Siliguri', sans-serif;
        }

    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

    <!-- Nav -->
    <div class="header-2 bottom-shadow">
        <nav class="bg-white py-2 md:py-4">
          <div class="container px-4 mx-auto md:flex md:items-center">

            <div class="flex justify-between items-center">
              <a href="/">
                <img class="w-32" alt="logo" src="/storage/logo.png" alt="">
            </a>
              <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                <i class="fas fa-bars"></i>
              </button>
            </div>

            <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
              @foreach ($categories as $category)
              <a href="{{ route('by-category', $category) }}" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-green-700 hover:text-white transition-colors duration-3000 {{ request('category')?->slug === $category->slug
                ? 'bg-green-600 text-white' :  ''}}">{{ $category->title }}</a>
              @endforeach
            </div>
          </div>
        </nav>
      </div>

    <div class="container mx-auto flex flex-wrap py-6">

        {{ $slot }}

    </div>

    <footer class="bg-gray-900">
        <div class="container px-4 mx-auto py-4 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
          <!-- Grid -->
          <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <div class="col-span-full lg:col-span-1">
              <h2 class="font-semibold text-gray-100">About Us</h2>
              <p class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200">Welcome to Newsbdjob.com, the largest job site in Bangladesh. Our mission is to provide the latest and most relevant job news and opportunities. Our team works tirelessly to bring you up-to-date information on the job market.</p>
            </div>
            <!-- End Col -->

            <div class="col-span-1">
              <h4 class="font-semibold text-gray-100">Categories</h4>

              <div class="mt-3 grid space-y-3">
                @foreach ($categories as $category)
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="{{ route('by-category', $category) }}">{{ $category->title }} ({{ $category->total }})</a></p>
                @endforeach
              </div>
            </div>
            <!-- End Col -->

            <div class="col-span-1">
              <h4 class="font-semibold text-gray-100">Quick Links</h4>

              <div class="mt-3 grid space-y-3">
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="/">About us</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="/">Contact Us</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" href="/">Privacy Policy</a></p>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-span-2">
              <h4 class="font-semibold text-gray-100">Stay up to date</h4>

              <form action="/">
                <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-md p-2">
                  <div class="w-full">
                    <label for="hero-input" class="sr-only">Search</label>
                    <input type="text" id="hero-input" name="hero-input" class="py-3 px-4 block w-full border-transparent shadow-sm rounded-md focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Enter your email">
                  </div>
                  <a class="w-full sm:w-auto whitespace-nowrap inline-flex justify-center items-center gap-x-3 text-center bg-green-600 hover:bg-green-700 border border-transparent text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4" href="#">
                    Subscribe
                  </a>
                </div>
                <p class="mt-3 text-sm text-gray-400">
                  Never spam.
                </p>
              </form>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Grid -->

          <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
            <div class="flex justify-between items-center">
              <p class="text-sm text-gray-400">© {{ date('Y') }} Newsbdjob.com. All rights reserved.</p>
            </div>
            <!-- End Col -->
            <div class="flex justify-between items-center">
                <a class="text-sm text-gray-400" href="https://yaqub.me/" target="_blank">Developed by Yaqub Ajgori</a>
              </div>
            <!-- Social Brands -->
            <div>
              <a class="inline-flex justify-center items-center gap-x-3.5 w-10 h-10 text-center text-gray-200 hover:bg-white/[.1] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-gray-900 transition" href="https://www.facebook.com/Newsbdjob.com.Ltd">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
              </a>
              <a class="inline-flex justify-center items-center gap-x-3.5 w-10 h-10 text-center text-gray-200 hover:bg-white/[.1] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-gray-900 transition" href="#">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
              </a>
              <a class="inline-flex justify-center items-center gap-x-3.5 w-10 h-10 text-center text-gray-200 hover:bg-white/[.1] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-gray-900 transition" href="#">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </svg>
              </a>
              <a class="inline-flex justify-center items-center gap-x-3.5 w-10 h-10 text-center text-gray-200 hover:bg-white/[.1] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-gray-900 transition" href="#">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                </svg>
              </a>
            </div>
            <!-- End Social Brands -->
          </div>
        </div>
      </footer>

    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }

        let toggleBtn = document.querySelector("#navbar-toggle");
        let collapse = document.querySelector("#navbar-collapse");

        toggleBtn.onclick = () => {
        collapse.classList.toggle("hidden");
        collapse.classList.toggle("flex");
        };
    </script>

</body>
</html>
