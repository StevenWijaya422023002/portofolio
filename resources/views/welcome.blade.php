<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WijayaKost</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body >
 <nav class="bg-slate-900 py-2 top-0 right-0 left-0 z-99 fixed">
        <div class="container mx-auto flex items-center justify-between py-2 px-8  ">

            <div class="flex-1 ml-8 text-white font-bold font-sans">
                <a href="" class="inline-block w-64 text-4xl hover:text-orange-600">
                    WijayaKost
                </a>
            </div>

            <div class="flex gap-8 flex-1 justify-center font-semibold text-white">
                <a class="hover:text-orange-600" href="#home">Home</a>
                <a class="hover:text-orange-600" href="#kamar">Tipe Kamar</a>
                <a class="hover:text-orange-600" href="#foto">Foto Kamar</a>
                <a class="hover:text-orange-600" href="">Lokasi</a>
                <a class="hover:text-orange-600" href="">Review</a>
            </div>

            <div class="flex-1 flex justify-end text-white font-bold font-mono mr-8">
                <button class="bg-orange-600 px-4 py-2 rounded-md hover:bg-orange-800 "><i class="fa-brands fa-whatsapp "></i>   Hubungi</button>
            </div>

        </div>
    </nav>



  <section class="hero h-screen bg-cover bg-center relative flex items-center justify-center" id="home"
          style="background-image: url('{{ asset('storage/foto/kosan.jpg') }}')">

      
      <div class="absolute inset-0 bg-black/60"></div>

      
      <main class="relative text-white text-center mb-24 font-sans">
          <h1 class="text-9xl font-bold mb-8">Wijaya<span class="text-orange-600">Kost</span></h1>
          <p class="text-center text-xl font-normal">tempat tinggal yang nyaman, aman, dan strategis di pusat kota.</p>
          <p class="text-center text-xl font-normal">Nyaman, tenang, terjangkau</p>
      </main>

  </section>



  <section  id="kamar">
      <h1 class="text-center text-6xl mt-12 mb-4 font-sans font-bold text-slate-800">Tipe Kamar</h1>
      <p class="text-center text-xl text-slate-800 font-normal mb-8">Menyediakan Kamar yang nyaman,tenang dan terjangkau di pusat kota.</p>

   <div class="container grid grid-cols-2 gap-32 max-w-7xl mx-auto">

        @foreach ($info as $data)
        <a href="" class="block rounded-md border border-gray-300 p-4 shadow-sm sm:p-6">
            <div class="sm:flex sm:justify-between sm:gap-4 lg:gap-6">

                <div class="mt-4 sm:mt-0 text-slate-700">
                    <h3 class="text-2xl mb-4 font-bold text-pretty">
                        {{ $data->title }}
                    </h3>

                    <p class="mt-4 line-clamp-2 text-lg text-pretty ">
                        {{ $data->description }}
                    </p>

                    <hr>

                    <ul class="mt-4 space-y-3">
                        @foreach(explode(',', $data->fasilitas) as $item)
                            <li class="flex items-center gap-3 text-lg text-slate-700">
                                <i class="fa-solid fa-check text-orange-600 text-xl"></i>
                                {{ trim($item) }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <dl class="mt-6 flex gap-4 lg:gap-6">
                <div class="flex items-center gap-2">
                    <dt class="text-slate-700">
                        <i class="fa-solid fa-bed text-2xl"></i>
                    </dt>

                    <dd class="text-2xl text-slate-700 font-bold">
                        Rp {{ number_format($data->price, 0, ',', '.') }} /Bulan
                    </dd>
                </div>

                <div class="flex items-center gap-2">
                    <dt class="text-slate-700">
                        <i class="fa-solid text-2xl fa-door-open"></i>
                    </dt>

                    <dd class="text-2xl text-gray-700 font-bold">{{ $data->stock }} kamar</dd>
                </div>
            </dl>
        </a>
        @endforeach

    </div>


  </section>



  <section id="foto">
         <h1 class="text-center text-6xl mt-40 mb-4 font-sans font-bold text-slate-800">Foto Kamar</h1>
         <p class="text-center text-xl text-slate-800 font-normal mb-8">Kami menawarkan kamar dengan harga terjangkau dan nyaman</p>

         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 max-w-6xl  mx-auto py-8 ">
            @foreach ($foto as $f)
                <a href="#" class="block">
                    <img alt="Foto" src="{{ asset('storage/' . $f->image) }}"
                    class="w-full h-52 object-cover rounded-xl mb-8 shadow hover:shadow-xl transition duration-300">

                  
                    </a>
            @endforeach
        </div>

  </section>



  <section id="lokasi" class="container mx-auto py-16 px-10 bg-slate-900 mt-32">
    <div class="grid grid-cols-2 gap-16 items-center">

        
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495782.531648329!2d106.20553600578313!3d-6.229379972154764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta!5e1!3m2!1sid!2sid!4v1763906540718!5m2!1sid!2sid"
            class="w-full h-[450px] rounded-xl shadow-lg"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

       
        <div class="w-full text-white">

            <h4 class="text-5xl font-extrabold mb-3">Lokasi</h4>
            <h3 class="text-3xl font-bold mb-5">
                Kami berada di pusat kota yang 
                <span class="text-orange-600">strategis</span>
            </h3>

            <p class="text-lg mb-8 leading-relaxed">
                Lokasi kami berada di pusat kota sehingga kalian dapat menjangkau banyak tempat penting dengan mudah.
            </p>

          
            <div class="flex justify-between max-w-xl">

                <div class="text-center">
                    <h4 class="text-3xl font-bold">40+</h4>
                    <p class="text-sm text-gray-300">Penghuni</p>
                </div>

                <div class="text-center">
                    <h4 class="text-3xl font-bold">4.8</h4>
                    <p class="text-sm text-gray-300">Rating</p>
                </div>

                <div class="text-center max-w-[130px]">
                    <h4 class="text-2xl font-bold">Safety</h4>
                    <p class="text-sm text-gray-300">Lingkungan aman & tenang</p>
                </div>

            </div>

           
            <p class="text-gray-300 mt-8 leading-relaxed">
                <span class="text-orange-500 font-semibold">Info:</span> 
                Sudah lebih dari 40 penghuni memilih kost ini dengan rating 4.8/5.
                Terletak di lingkungan aman dan tenang, hanya 5 menit ke kampus,
                300 meter ke minimarket, dan dekat berbagai fasilitas penting
                seperti ATM, laundry, dan makanan murah. Akses transportasi mudah
                karena dekat halte dan area ramai.
            </p>

        </div>
    </div>
</section>




<section id="review" class="mt-32">

  <h1 class="px-8 font-sans font-bold text-slate-800 text-3xl">Apa Kata Mereka</h1>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-6xl  mx-auto py-8">

    
  </div>
</section>










      {{-- </div> <div class="flex items-center gap-3">
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
      </div> --}}

</body>
</html>
