<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guru;

class DeleteGuru extends Component
{
    public $guruId;

    public function mount($id)
    {
        $this->guruId = $id;
    }

    public function confirmDelete()
    {
        $this->emit('triggerDelete', $this->guruId);
    }

    public function destroy($guruId)
    {
        $guru = Guru::find($guruId);
        
        if ($guru) {
            // Periksa apakah status guru adalah "aktif"
            if ($guru->status === 'aktif') {
                session()->flash('error', 'Guru dengan status aktif tidak dapat dihapus.');
                return redirect()->route('guru.index');
            }
            
            // Jika status guru tidak "aktif", maka lakukan penghapusan
            $guru->delete();
            session()->flash('success', 'Data guru berhasil dihapus.');
            return redirect()->route('guru.index');
    }
    }

    public function render()
    {
        return view('livewire.delete-guru');
    }
}
