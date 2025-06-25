<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title;

class BookList extends Component
{
    public $name = "Mario";
    public $searchData = "";

    #[Title('Book List - Home')]

    public function deleteBook(Book $book)
    {
        $book->delete();
    }

    public function books()
    {
        if ($this->searchData == "") {
          return Book::all();
        }else{
            return Book::where('title', 'like', '%' . $this->searchData . '%')->get();
        }
    }

    public function render()
    {
        return view('livewire.book-list',
            [
                'books' => $this->books(),
            ]);
    }
}
