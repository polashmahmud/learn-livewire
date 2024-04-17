<?php

namespace App\Livewire;

use App\Livewire\Forms\BookForm;
use Livewire\Attributes\On;
use Livewire\Component;

class BookIndex extends Component
{
    protected $listeners = [
        'book.create' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.book-index', [
            'books' => auth()->user()->books()->latest()->get()
        ]);
    }
}
