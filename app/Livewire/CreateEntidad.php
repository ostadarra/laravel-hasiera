<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Entidad;

use Livewire\WithFileUploads;

class CreateEntidad extends Component
{
    use WithFileUploads;
    
    public $open = false;

    public $nombre;
    public $padre_id;
    public $ficha = 0;

    public $imagen;
    
    protected $rules = [
        'nombre'    =>  'required|max:100|min:5',
        'padre_id'  =>  'required|numeric',
        'imagen'    =>  'required|image|max:2048'
    ];
    
    /* 
    public function updated($nombrePropiedad){
        $this->validateOnly($nombrePropiedad);
    }
     */
    
    public function save(){

        $this->validate();

        $imagen = $this->imagen->store('entidades');
       
        Entidad::create([
        "nombre" => $this->nombre,
        "padre_id" => $this->padre_id,
        "ficha" => $this->ficha,
        "imagen" => $imagen
       ]); 

       //$this->dispatch('render');
       $this->dispatch('render')->to(ShowEntidades::class);
       $this->dispatch('alerta');

       $this->reset(['open', 'nombre', 'padre_id', 'ficha', 'imagen']);
       
    }
    
    
    public function render()
    {
        return view('livewire.create-entidad');
    }
}
