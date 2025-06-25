<div>
    <div class="create">
        <h3>Create a new book</h3>

        <form wire:submit="save">
            <div class="field">
                <label for="">Book Title</label>
                <input type="text" wire:model="title">
                @error('title') <span>{{ $message }}</span> @enderror

            </div>

            <div class="field">
                <label for="">Book Author</label>
                <input type="text" wire:model="author">
                @error('author') <span>{{ $message }}</span> @enderror
            </div>

            <div class="field">
                <label for="">Book Rating</label>
                <input type="text" wire:model="rating">
                @error('rating') <span>{{ $message }}</span> @enderror

            </div>

            <button>Add Book</button>
        </form>
    </div>
</div>




