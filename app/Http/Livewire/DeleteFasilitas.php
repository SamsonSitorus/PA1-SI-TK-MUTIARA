<?php

namespace App\Http\Livewire;

use App\Models\Fasilitas;
use Livewire\Component;

class DeleteFasilitas extends Component
{
    public function render()
    {
        return view('livewire.delete-fasilitas');
    }
    public $fasilitasId;

    public function mount($id)
    {
        $this->fasilitasId = $id;
    }

    public function confirmDelete()
    {
        $this->emit('triggerDelete', $this->fasilitasId);
    }

    public function destroy($fasilitasId)
    {
        $fasilitas = Fasilitas::find($fasilitasId);
        if ($fasilitas) {
            $fasilitas->delete();
            session()->flash('success', 'Data Gallery berhasil dihapus.');
            return redirect()->route('fasilitas.index', ['kategoriId' => $fasilitas->kategori_id]);
        }
    }
}
