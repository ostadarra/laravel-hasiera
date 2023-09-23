<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Entidad;

class CreateEntidad extends Component
{
    public $open = false;

    public $nombre;
    public $padre_id;
    public $ficha = 0;
    
    protected $rules = [
        'nombre'    =>  'required|max:100|min:5',
        'padre_id'  =>  'required|numeric'
    ];
    
    /* 
    public function updated($nombrePropiedad){
        $this->validateOnly($nombrePropiedad);
    }
     */
    
    public function save(){

        $this->validate();

       Entidad::create([
        "nombre" => $this->nombre,
        "padre_id" => $this->padre_id,
        "ficha" => $this->ficha
       ]); 

       //$this->dispatch('render');
       $this->dispatch('render')->to(ShowEntidades::class);
       $this->dispatch('alerta');

       $this->reset(['open', 'nombre', 'padre_id', 'ficha']);
       
    }
    
    
    public function render()
    {
        return view('livewire.create-entidad');
    }
}
