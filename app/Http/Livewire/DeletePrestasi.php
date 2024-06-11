<?php

namespace App\Http\Livewire;

use App\Models\prestasi;
use Livewire\Component;

class DeletePrestasi extends Component
{
    public function render()
    {
        return view('livewire.delete-prestasi');
    }
    public $prestasiId;

    public function mount($id)
    {
        $this->prestasiId = $id;
    }

    public function confirmDelete()
    {
        $this->emit('triggerDelete', $this->prestasiId);
    }

    public function destroy($prestasiId)
    {
        $prestasi = prestasi::find($prestasiId);
        if ($prestasi) {
            $prestasi->delete();
            session()->flash('success', 'Data Prestasi berhasil dihapus.');
            return redirect()->route('prestasi.index');
        }
    }
}
