<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BookForm extends Form
{
    #[Rule('required', as: 'Title of the book', message: ':attribute is required.')]
    public string $title = '';

    #[Rule('required', as: 'Author of the book', message: ':attribute is required.')]
    public string $author = '';

    public function create()
    {
       auth()->user()->books()->create([
            'title' => $this->title,
            'author' => $this->author
        ]);

        $this->reset();
    }
}
