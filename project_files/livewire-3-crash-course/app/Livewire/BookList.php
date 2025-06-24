<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title;

class BookList extends Component
{
    public $name = "Mario";

    #[Title('Book List - Home')]

    public function deleteBook(Book $book)
    {
        $book->delete();
    }

    public function render()
    {
        return view('livewire.book-list',
            [
                'books' => Book::all(),
            ]);
    }
}
