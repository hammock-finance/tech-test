<?php

namespace App\Http\Livewire;

use App\Services\OpenDataCommunitiesService;
use Livewire\Component;

class EpcSearch extends Component
{

    public ?String $postcode = null;

    public function render()
    {
        return view('livewire.epc-search', [
            'results' => $this->search()
        ]);
    }

    public function search()
    {
        $data = (new OpenDataCommunitiesService)->go(['postcode' => $this->postcode]);

        return collect($data['rows']);

    }
}
