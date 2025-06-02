<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg">
            <!-- Header dengan tombol -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-700"></h3>

                <div class="flex justify-start w-full">
                    <form action="{{ route('industri.index') }}" method="GET" class="w-1/5 relative">
                        <input wire:model.live="search" type="search" id="search" name="search" 
                            class="block w-full py-1.5 pr-10 px-3 text-sm text-gray-900 border rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" 
                            placeholder="Search..."/>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 text-gray-500 absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M16.5 10a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                    </form>
                </div>

                <a href="{{ route('industri.create') }}" class="h-8 w-12 bg-white border border-gray-700 text-gray-700 rounded-md hover:shadow-sm flex items-center justify-center transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                    </svg>
                </a>
            </div>

            <div class="relative overflow-x-auto">
            @if (session()->has('message'))
                <div class="bg-green-500 text-white p-2 rounded mb-4">
                    {{ session('message') }}
                </div>
            @endif
                <table class="w-full text-sm text-left text-gray-500 border border-gray-200 rounded-lg">
                    <thead class="text-xs text-gray-700 uppercase" style="background-color: #F3E1E1;">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Bidang Usaha</th>
                            <th scope="col" class="px-6 py-3">Alamat</th>
                            <th scope="col" class="px-6 py-3">Kontak</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Website</th>
                            <!-- <th scope="col" class="px-6 py-3">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody style="background-color: #FAF2F2;">
                    @php
                        $no = $industris->firstItem() - 1;
                    @endphp

                    @foreach($industris as $index => $industri)
                        @php
                            $no++;
                        @endphp
                        <tr class="border-b">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $no }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $industri->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $industri->bidang_usaha }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $industri->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $industri->kontak }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $industri->email }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ $industri->website }}" class="text-blue-600" target="_blank">{{ $industri->website }}</a>
                            </td>
                            <!-- <td class="px-6 py-4">
                                <a href="" class="text-blue-500 hover:bg-blue-100 hover:text-blue-700 inline-flex items-center px-3 py-2 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M16.862 2.488a2.07 2.07 0 0 1 2.928 0l1.722 1.722a2.07 2.07 0 0 1 0 2.928l-1.484 1.484-4.65-4.65 1.484-1.484zm-2.254 2.254-10.608 10.61a4.125 4.125 0 0 0-1.015 1.684l-1.842 5.8a.75.75 0 0 0 .95.95l5.8-1.842a4.125 4.125 0 0 0 1.684-1.015l10.61-10.608-4.65-4.65z"/>
                                    </svg>
                                </a>

                                <a href="" class="text-blue-500 hover:bg-blue-100 hover:text-blue-700 inline-flex items-center px-3 py-2 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 4.5c-4.2 0-7.9 2.5-10 6 2.1 3.5 5.8 6 10 6s7.9-2.5 10-6c-2.1-3.5-5.8-6-10-6zm0 10c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zm0-6.5c-1.4 0-2.5 1.1-2.5 2.5S10.6 13 12 13s2.5-1.1 2.5-2.5S13.4 8 12 8z"/>
                                    </svg>
                                </a>

                                <form wire:submit.prevent="" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:bg-red-100 hover:text-red-700 inline-flex items-center px-3 py-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M9 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h5a1 1 0 1 1 0 2h-1v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6H3a1 1 0 1 1 0-2h5V3zm2 4a1 1 0 1 0-2 0v10a1 1 0 1 0 2 0V7zm4 0a1 1 0 1 0-2 0v10a1 1 0 1 0 2 0V7z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </form>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $industris->links() }}
                </div>
            </div>
        </div>
    </div>
</div>