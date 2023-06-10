<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{

    use WithFileUploads;
    
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        $datos = $this->validate();

        //Almacenar el cv
        $cv = $this->cv->store('public/cv');
        $datos['imagen'] = str_replace('public/cv/', '', $cv);

        // Crear Vacantes

        // Crear la notificación y enviar el email
 
        // Mostrar al usuario un mensaje de ok


    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
