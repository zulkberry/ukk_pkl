<?php

namespace App\Livewire\Industri;

use Livewire\Component;
use App\Models\Industri;

class Edit extends Component
{
    public $industriId;
    public $nama, $alamat, $kontak, $email, $website, $bidang_usaha;

    public function mount($industri)
    {
        $data = Industri::findOrFail($industri);

        $this->industriId = $data->id;
        $this->nama = $data->nama;
        $this->alamat = $data->alamat;
        $this->kontak = $data->kontak;
        $this->email = $data->email;
        $this->website = $data->website;
        $this->bidang_usaha = $data->bidang_usaha;
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'kontak' => 'required|string',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'bidang_usaha' => 'required|string',
        ]);

        Industri::findOrFail($this->industriId)->update([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'kontak' => $this->kontak,
            'email' => $this->email,
            'website' => $this->website,
            'bidang_usaha' => $this->bidang_usaha,
        ]);

        session()->flash('message', 'Data industri berhasil diperbarui!');
        return redirect()->route('industri.index');
    }

    public function render()
    {
        return view('livewire.industri.edit');
    }
}
