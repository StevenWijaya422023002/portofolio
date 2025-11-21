<x-app-layout>

<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Data Kamar</h2>

    <form action="{{route('info.update', $info->id)}}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-gray-700 font-medium mb-1">Judul</label>
            <input type="text" name="title" value="{{$info->title}}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                placeholder="Contoh: Kamar Deluxe">
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Deskripsi</label>
            <textarea name="description" rows="3" 
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                placeholder="Tulis deskripsi singkat kamar...">{{$info->description}}</textarea>
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Fasilitas</label>
            <input type="text" name="fasilitas" value="{{$info->fasilitas}}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                placeholder="Wi-Fi, AC, TV, Air Panas, dll">
        </div>
   
        
        <div class="grid grid-cols-2 gap-5">
            <div>
                <label class="block text-gray-700 font-medium mb-1">Harga</label>
                <input type="number" name="price" value="{{$info->price}}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    placeholder="Rp">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Stok</label>
                <input type="number" name="stock" value="{{$info->stock}}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    placeholder="Jumlah kamar tersedia">
            </div>
        </div>

        <div class="flex justify-end pt-4">
            <button type="submit"
                class="rounded-lg bg-indigo-600 px-5 py-2.5 text-white font-semibold shadow hover:bg-indigo-700 transition">
                Update
            </button>
        </div>
    </form>
</div>

</x-app-layout>