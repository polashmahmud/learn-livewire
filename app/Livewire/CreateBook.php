<?php

namespace App\Livewire;

use App\Livewire\Forms\BookForm;
use Livewire\Component;

class CreateBook extends Component
{
    public BookForm $form;

    public function submit()
    {
        $this->form->validate();

        $book = $this->form->create();

        $this->dispatch('book.create');

        $this->dispatch('alert', [
            'body' => 'Book ' . $book->title . ' was created'
        ]);
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
