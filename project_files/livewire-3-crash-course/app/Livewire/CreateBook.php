<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateBook extends Component
{

    public $title;
    public $author;
    public $rating;

    protected $rules = [
        'title' => 'required',
        'author' => 'required',
        'rating' => 'required|integer|between:1,10',
    ];

    public function save()
    {
        $validatedData = $this->validate();
        Book::create($validatedData);
        $this->redirect('/', navigate: true);
    }

    public
    function render()
    {
        return view('livewire.create-book');
    }
}
