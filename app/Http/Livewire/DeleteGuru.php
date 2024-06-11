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
