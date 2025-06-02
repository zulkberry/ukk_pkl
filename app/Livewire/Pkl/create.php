<?php

namespace App\Livewire\Pkl;

use App\Models\Guru;
use App\Models\Industri;
use App\Models\Pkl;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $siswa_id, $industri_id, $mulai, $selesai;

    public $siswaList, $industriList;

    public function mount()
    {
        $userEmail = Auth::user()->email;
        $this->siswaList = Siswa::where('email', $userEmail)->get();
        $this->industriList = Industri::all();

        if ($this->siswaList->count() === 1) {
            $this->siswa_id = $this->siswaList->first()->id;
        }
    }

    public function store()
    {
        $this->validate([
            'siswa_id' => 'required|integer',
            'industri_id' => 'required|integer',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after:mulai',
        ]);

        DB::beginTransaction();

        try {
            // Cek apakah siswa sudah lapor PKL
            $exists = Pkl::where('siswa_id', $this->siswa_id)->exists();

            if ($exists) {
                DB::rollBack(); // batalkan transaksi
                session()->flash('error', 'Gagal lapor! Siswa ini sudah melakukan lapor PKL');
                return redirect()->route('pkl.index');
            }

            Pkl::create([
                'siswa_id' => $this->siswa_id,
                'industri_id' => $this->industri_id,
                'mulai' => $this->mulai,
                'selesai' => $this->selesai,
            ]);

            DB::commit(); // simpan transaksi
            session()->flash('success', 'Data PKL berhasil ditambahkan!');
            return redirect()->route('pkl.index');
        } catch (\Exception $e) {
            DB::rollBack(); // jika error, batalkan transaksi
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            return redirect()->route('pkl.index');
        }
    }

    public function render()
    {
        return view('livewire.pkl.create', [
            'siswaList' => $this->siswaList,
            'industriList' => $this->industriList,
        ]);
    }
}