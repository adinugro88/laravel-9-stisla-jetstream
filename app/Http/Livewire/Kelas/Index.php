<?php

namespace App\Http\Livewire\Kelas;

use Livewire\Component;
use App\Models\Kelas;

class Index extends Component
{
    public function render()
    {
        return view('livewire.kelas.index',[
            'kelas
            ' => Kelas::latest()->paginate(5)
        ]);
    }
}
