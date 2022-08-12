<?php

namespace App\Http\Livewire;

use App\Models\Joke;
use Livewire\Component;
use Livewire\WithPagination;

class Jokes extends Component
{

    use WithPagination;

    public $paginationLinks = 15;
    protected $listeners = ['jokeAdded' => '$refresh'];

    public function render()
    {
        return view('livewire.jokes',['jokes' => Joke::orderBy('created_at','desc')->paginate($this->paginationLinks) ]);
    }
}
