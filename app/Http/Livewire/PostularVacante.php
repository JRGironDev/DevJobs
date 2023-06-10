<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostularVacante extends Component
{
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        $this->validate();

        // Almacenar el CV

        // Crear Vacantes

        // Crear la notificación y enviar el email
 
        // Mostrar al usuario un mensaje de ok

        
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
