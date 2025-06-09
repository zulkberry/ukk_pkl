<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            
            <!-- Search & Tambah Post -->
            <div class="flex justify-between items-center mb-4">
                <div class="flex justify-start w-full">
                    <!-- <form action="{{ route('industri.index') }}" method="GET" class="inline-flex items-center w-1/3"> -->
                    <div class="inline-flex items-center px-2 py-1 bg-white border border-gray-300 rounded-md shadow-sm w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M16.5 10a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                        </svg>
                        <input
                            wire:model.live="search"
                            type="search"
                            placeholder="Search"
                            class="text-xs text-gray-700 bg-transparent border-none focus:outline-none placeholder-gray-400 w-24"
                        >
                    </div>
                </div>     
                     
                <a href="{{ route('industri.create') }}" class="flex items-center gap-2 px-6 py-1 bg-blue-600 text-black rounded-md hover:bg-blue-700">
                    <span class="text-xl">+</span>
                    <span>Tambah</span>
                </a>

            </div>

            <!-- Tabel Post -->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-600 border-collapse">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 w-1/3 text-center">Nama</th>
                            <th class="px-6 py-3 w-1/3 text-center">Bidang Usaha</th>
                            <th class="px-6 py-3 w-1/2 text-center">Alamat</th>
                            <th class="px-6 py-3 w-1/4 text-center">Kontak</th>  
                            <th class="px-6 py-3 w-1/4 text-center">Email</th>     
                            <th class="px-6 py-3 w-1/4 text-center">Website</th>                                               
                            <!-- <th class="px-6 py-3 w-1/4 text-center">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($industris as $indus)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $indus->nama }}</td>
                            <td class="px-6 py-4 break-words">
                                {{ Str::limit($indus->bidang_usaha, 100, '...') }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $indus->alamat }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $indus->kontak }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $indus->email }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $indus->website }}</td>
                            <!-- <td class="px-6 py-4 text-center">
                                <a href="{{ route('industri.index') }}"> class="text-blue-600 hover:underline">Edit</a> |
                                    @csrf
                                    @method('DELETE')
                                     <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td> -->
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-500">Tidak ada post ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $industris->links() }}
            </div>
        </div>
    </div>
</div>
