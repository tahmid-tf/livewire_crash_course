<div>
    <header class="flex justify-between">
        <div>
            <h2>Hi {{ $name }}</h2>
            <p>Here's is a list of your book reviews...</p>
        </div>

        <form wire:submit.prevent="$refresh">
            <span class="mr-2">Your Name: </span>
            <input type="text" wire:model="name">
            <button type="submit">Update</button>
        </form>
    </header>
</div>
