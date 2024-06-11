<?php

namespace App\Http\Livewire;

use App\Models\akreditasi;
use Livewire\Component;



class Deleteakreditasi extends Component
{
    public function render()
    {
        return view('livewire.deleteakreditasi');
    }
    public $akreditasiId;

    public function mount($id)
    {
        $this->akreditasiId = $id;
    }

    public function confirmDelete()
    {
        $this->emit('triggerDelete', $this->akreditasiId);
    }

    public function destroy($akreditasiId)
    {
        $akreditasi = akreditasi::find($akreditasiId);
        if ($akreditasi) {
            $akreditasi->delete();
            session()->flash('success', 'Data akreditasi berhasil dihapus.');
            return redirect()->route('akreditasi.index');
        }
    }
}
