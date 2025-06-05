<div>
    {{-- The whole world belongs to you. --}}
</div>
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Industri</h1>

    @if (session()->has('message'))
        <div class="text-green-500">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="update" class="space-y-4">
        <input type="text" wire:model="nama" placeholder="Nama" class="w-full border rounded p-2">
        <input type="text" wire:model="alamat" placeholder="Alamat" class="w-full border rounded p-2">
        <input type="text" wire:model="kontak" placeholder="Kontak" class="w-full border rounded p-2">
        <input type="email" wire:model="email" placeholder="Email" class="w-full border rounded p-2">
        <input type="text" wire:model="website" placeholder="Website" class="w-full border rounded p-2">
        <textarea wire:model="bidang_usaha" placeholder="Bidang Usaha" class="w-full border rounded p-2"></textarea>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
