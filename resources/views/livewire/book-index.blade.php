<div class="space-y-2">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form wire:submit.prevent="submit" class="flex items-start space-x-3">
                <div class="grow">
                    <label for="title" class="sr-only">Book Title</label>
                    <input type="text" id="title" wire:model.blur="form.title" placeholder="Book title"
                           class="w-full border border-slate-300 rounded-lg">
                    @error('form.title')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="grow">
                    <label for="author" class="sr-only">Book Author</label>
                    <input type="text" id="author" wire:model.blur="form.author" placeholder="Book author"
                           class="w-full border border-slate-300 rounded-lg">
                    @error('form.author')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg disabled:opacity-50">
                    <span wire:loading.delay.long>
                        loading
                    </span>

                    <span wire:loading.remove.delay.long>
                        Submit
                    </span>
                </button>
            </form>
        </div>
    </div>
    <div class="space-y-2">
        @foreach($books as $book)
            <livewire:book-item :book="$book" wire:key="{{ $book->id }}"/>
        @endforeach
    </div>
</div>
