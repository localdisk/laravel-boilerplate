<div>
  <input type="file" wire:model="image">

    @if ($image && $image->isImage())
      image Preview:
      <img src="{{ $image->temporaryUrl() }}">
    @endif

    <button class="py-1 px-2 bg-blue-700 text-white font-semibold rounded shadow">Save Image</button>

    @error('image') <p class="text-red-500">{{ $message }}</p> @enderror
</div>
