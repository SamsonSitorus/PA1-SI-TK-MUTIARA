<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class DeleteGallery extends Component
{
    public function render()
    {
        return view('livewire.delete-gallery');
    }
    public $galleryId;

    public function mount($id)
    {
        $this->galleryId = $id;
    }

    public function confirmDelete()
    {
        $this->emit('triggerDelete', $this->galleryId);
    }

    public function destroy($galleryId)
    {
        $gallery = Gallery::find($galleryId);
        if ($gallery) {
            $gallery->delete();
            session()->flash('success', 'Data Gallery berhasil dihapus.');
            return redirect()->route('gallery.index');
        }
    }
}
