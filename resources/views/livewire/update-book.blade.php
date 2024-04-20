<form wire:submit.prevent="submit" class="flex items-start space-x-3">
    <div class="grow">
        <label for="title" class="sr-only">Book Title</label>
        <input type="text" id="title" wire:model.blur="title" placeholder="Book title"
               class="w-full border border-slate-300 rounded-lg">
        @error('title')
        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="grow">
        <label for="author" class="sr-only">Book Author</label>
        <input type="text" id="author" wire:model.blur="author" placeholder="Book author"
               class="w-full border border-slate-300 rounded-lg">
        @error('author')
        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg disabled:opacity-50">
                    <span wire:loading.delay.long>
                        loading
                    </span>

        <span wire:loading.remove.delay.long>
                        Save
                    </span>
    </button>
</form>
