<x-app-layout>
<div class="px-6 py-8  min-h-screen">
  <h2 class="text-4xl font-bold mb-6 text-center text-gray-800 border-b-2 font-mono">
    Foto Kamar
  </h2>

  <div class="flex justify-end mb-6">
    <a href="{{ route('foto.tambah') }}"
      class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-700 transition">
      + Tambah
    </a>
  </div>

  <!-- Grid foto -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 max-w-6xl  mx-auto py-8">
    @foreach ($foto as $f)
    <div class=" bg-gray-100 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
      <img src="{{ asset('storage/' . $f->image) }}" 
           alt="Foto" 
           class="w-full h-52 sm:h-48 object-cover ">

      <div class="p-4">
        <div class="flex justify-between">
          <a href="{{ route('foto.edit', $f->id) }}" 
             class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-md text-sm px-4 py-1.5">
            Edit
          </a>

          <form action="{{ route('foto.delete', $f->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            <button type="submit"
              class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-md text-sm px-4 py-1.5">
              Hapus
            </button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
</div>


</x-app-layout>
