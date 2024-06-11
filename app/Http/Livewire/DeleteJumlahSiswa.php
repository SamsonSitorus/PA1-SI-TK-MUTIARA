<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\jumlah_siswa;

class DeleteJumlahSiswa extends Component
{
 
    public $jumlahSiswaId; // Mengganti $Id menjadi $jumlahSiswaId untuk konsistensi

    public function mount($id)
    {
        $this->jumlahSiswaId = $id;
    }

    public function confirmDelete()
    {
        $this->emit('triggerDelete', $this->jumlahSiswaId);
    }

    public function destroy($jumlahSiswaId)
    {
        $jumlahSiswa = Jumlah_Siswa::find($jumlahSiswaId);
        if ($jumlahSiswa) {
            $jumlahSiswa->delete();
            session()->flash('success', 'Data jumlah siswa berhasil dihapus.');
            return redirect()->route('jumlah.index');
        }
    }

    public function render()
    {
        return view('livewire.delete-jumlah-siswa');
    }
}
