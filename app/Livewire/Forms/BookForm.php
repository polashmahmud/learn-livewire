<?php

namespace App\Livewire\Forms;

use App\Models\Book;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BookForm extends Form
{
    public ?Book $book;

    #[Rule('required', as: 'Title of the book', message: ':attribute is required.')]
    public string $title = '';

    #[Rule('required', as: 'Author of the book', message: ':attribute is required.')]
    public string $author = '';

    #[Rule('nullable')]
    public ?string $notes = '';

    public function setBook(Book $book)
    {
        $this->book = $book;

        $this->fill(
            $this->book->only('title', 'author', 'notes')
        );
    }

    public function update()
    {
        $this->book->update(
            $this->only('title', 'author')
        );

        $this->reset();
    }

    public function create()
    {
        $book = auth()->user()->books()->create(
            $this->only('title', 'author')
        );

        $this->reset();

        return $book;
    }

    public function updatedNotes()
    {
        $this->book->update(
            $this->only('notes')
        );
    }
}
