<div>

    {{-- livewire component --}}
    <livewire:page-header name="Mario"></livewire:page-header>

    <br>

    <div style="display: flex; justify-content: right">
        <input type="search" placeholder="Search" wire:model.live="searchData">
    </div>
    <br>

    <ul class="list">
        @foreach($books as $book)
            <li wire:key="{{ $book->id }}">
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</h4>
                <p>Rating: {{ $book->rating }}/10</p>
                <button wire:click="deleteBook({{ $book->id }})">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
