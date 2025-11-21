<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WijayaKost</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">

<nav class="relative bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">

      <!-- Mobile menu button -->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>

      <!-- Left: Logo + Menu -->
      <div class="flex flex-1 items-center justify-start">
        <div class="flex shrink-0 items-center">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="WijayaKost" class="h-8 w-auto" />
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Beranda</a>
            <a href="/rooms" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Tipe Kamar</a>
            <a href="/rooms" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Foto</a>
            <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Kontak</a>
          </div>
        </div>
      </div>

      <!-- Right: Auth / User -->
      <div class="flex items-center gap-3">
        @auth
            <!-- Kalau sudah login -->
            <div class="flex items-center gap-3">
              <a href="{{ url('/dashboard') }}" class="text-sm text-gray-200 hover:text-white font-medium">
                {{ Auth::user()->name }}
              </a>

              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-300 hover:text-red-400">
                  Logout
                </button>
              </form>
            </div>
        @else
            <!-- Kalau belum login -->
            <a href="{{ route('login') }}" class="text-sm text-gray-300 hover:text-white font-medium">
              Login
            </a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="text-sm text-gray-300 hover:text-white font-medium">
                Register
              </a>
            @endif
        @endauth
      </div>

    </div>
  </div>

  <!-- Mobile Menu -->
  <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Beranda</a>
      <a href="/rooms" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Tipe Kamar</a>
      <a href="/rooms" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Foto</a>
      <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Kontak</a>
    </div>
  </el-disclosure>
</nav>

</body>
</html>
