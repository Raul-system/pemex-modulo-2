<?php

namespace App\View\Components;

use Illuminate\View\Component;

class verCandidatoDepartamento extends Component
{
    public $modelo_usuario;
    public $departamento_files;
    public function __construct($modelouser, $departamentoStorage)
    {
        $this->modelo_usuario = $modelouser;
        $this->departamento_files = $departamentoStorage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ver-candidato-departamento');
    }
}
