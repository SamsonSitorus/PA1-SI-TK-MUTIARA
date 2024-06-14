<?php

namespace App\Http\Livewire;

use App\Models\pengumuman;
use Livewire\Component;

class Deletepengumuman extends Component
{
    public $pengumumanId;

    public function mount($id)
    {
        $this->pengumumanId = $id;
    }

    public function confirmDelete()
    {
        $this->emit('triggerDelete', $this->pengumumanId, 'pengumuman');
    }

    public function destroy($pengumumanId)
    {
        $pengumuman = Pengumuman::find($pengumumanId);
        if ($pengumuman) {
            $pengumuman->delete();
            session()->flash('success', 'Data pengumuman berhasil dihapus.');
            return redirect()->route('pengumuman.index');
        }
    }

    public function render()
    {
        return view('livewire.deletepengumuman');
    }   
}
