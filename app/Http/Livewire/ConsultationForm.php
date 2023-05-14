<?php

namespace App\Http\Livewire;

use App\Models\Consultation;
use App\Models\Course;
use Livewire\Component;

class ConsultationForm extends Component
{


    public function render()
    {
        return view('livewire.consultation-form');
    }

    public function MakeConsult($formdata)
    {
//dd($formdata);
        $this->dispatchBrowserEvent('make_loader');
        Consultation::create([
            'topic' => $formdata['topic'],
            'consult_status_id' => 1,
            'user_name' => $formdata['user_name'],
            'user_email' => $formdata['user_email'],
            'user_mobile' => $formdata['user_mobile'],
            'user_text' => $formdata['user_text'],
        ]);

        $this->dispatchBrowserEvent('swal_fire', [
            'type' => 'success',
            'showDenyButton' => false,
            'showConfirmButton' => false,
            'title' => 'Отлично!',
            'text' => '<p>Мы перезвоним вам в ближайшее время!</p>',
        ]);

        $this->dispatchBrowserEvent('form_reset');


    }
}
