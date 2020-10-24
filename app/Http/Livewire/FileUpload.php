<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $image;

    protected $rules = [
        'image' => 'image|max:1024',
    ];

    public function updatedImage(): void
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function save(): void
    {
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
