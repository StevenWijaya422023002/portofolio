<x-app-layout>
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-4xl font-bold mb-6 text-center text-gray-800 border-b-2 font-mono ">
            Info Kamar
        </h2>


        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-md bg-white">
            <table class="min-w-full border-collapse">
                <thead class="bg-indigo-100 text-indigo-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">No</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Title</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Description</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Fasilitas</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Price</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Stock</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @foreach ($infos as $no => $data)
                    <tr class="hover:bg-indigo-50 transition">
                        <td class="px-6 py-3 text-gray-700">{{ $no + 1 }}</td>
                        <td class="px-6 py-3 font-medium text-gray-900">{{ $data->title }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $data->description }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $data->fasilitas }}</td>
                        <td class="px-6 py-3 text-indigo-700 font-semibold">Rp {{ number_format($data->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $data->stock }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

         <h2 class="text-4xl font-bold mb-6 text-center text-gray-800 border-b-2 font-mono mt-8  py-8" >
            Foto Kamar
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 max-w-6xl  mx-auto py-8">
            @foreach ($foto as $f)
                <a href="#" class="block">
                    <img alt="Foto" src="{{ asset('storage/' . $f->image) }}"
                    class="w-full h-52 object-cover rounded-xl shadow">

                  
                    </a>
            @endforeach
        </div>


    </div>
</x-app-layout>
