<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Entidad;

class ShowEntidades extends Component
{
    
    public $search = '';
    
    public function render()
    {
        $entidades = Entidad::where('nombre', 'like', '%' . $this->search . '%')
        ->get();
        
        return view('livewire.show-entidades', compact('entidades'));
    }
}
