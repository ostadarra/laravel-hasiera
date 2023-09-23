<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Entidad;

class ShowEntidades extends Component
{
    
    public $search = '';

    public $sort = 'id';

    public $direccion = 'desc';

    protected $listeners = ['render' => 'render'];
    
    public function orden($columna)
    {
        if ($this->sort == $columna)
        {
            if ($this->direccion == 'desc')
            {
                $this->direccion = 'asc';
            } else {
                $this->direccion = 'desc';
            }
        } else 
        {
            $this->sort = $columna;
            $this->direccion = 'asc';
        }
    }
    
    public function render()
    {
        $entidades = Entidad::where('nombre', 'like', '%' . $this->search . '%')
        ->orderBy($this->sort, $this->direccion)
        ->get();
        
        return view('livewire.show-entidades', compact('entidades'));
    }
}
