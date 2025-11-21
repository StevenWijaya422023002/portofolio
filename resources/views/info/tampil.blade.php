<x-app-layout>
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800 border-b-2 border-indigo-500 inline-block pb-1">
            Info Kamar
        </h2>

        <div class="flex justify-end mb-6">
            <a href="{{ route('info.tambah') }}"  
               class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-700 transition">
               + Tambah
            </a>
        </div>

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
                        <th class="px-6 py-3 text-left text-sm font-semibold">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @foreach ($info as $no => $data)
                    <tr class="hover:bg-indigo-50 transition">
                        <td class="px-6 py-3 text-gray-700">{{ $no + 1 }}</td>
                        <td class="px-6 py-3 font-medium text-gray-900">{{ $data->title }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $data->description }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $data->fasilitas }}</td>
                        <td class="px-6 py-3 text-indigo-700 font-semibold">Rp {{ number_format($data->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $data->stock }}</td>
                        <td>

                             <div class="flex space-x-2">
                                 <a  href="{{ route('info.edit', $data->id) }}"  class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900"">
                                     Edit</a>
     
                                 <form action="{{ route('info.delete', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                     @csrf
                                     <button type="submit"
                                         class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 
                                             font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 
                                             dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                         Hapus
                                     </button>
                                 </form>
                             </div>

                        </td>

                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
