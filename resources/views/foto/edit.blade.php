<x-app-layout>
    <div class="max-w-xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Update Foto</h2>

        <form action="{{route('foto.update', $foto->id)}}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="image" class="block text-gray-700 font-medium mb-2">Update Foto</label>
                <input  value="{{$foto->image}}"
                    type="file" 
                    name="image" 
                    id="image" 
                    accept="image/*"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    required
                >
                <p class="text-sm text-gray-500 mt-1">Format yang didukung: JPG, PNG, JPEG. Maksimal 2MB.</p>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="rounded-lg bg-indigo-600 px-6 py-2.5 text-white font-semibold shadow hover:bg-indigo-700 transition">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
