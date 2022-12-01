<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class CreatePost extends Component
{
    public $body;

    protected $rules = [
        'body' => 'required|min:10',
    ];

    protected $messages = [
        'body.required' => 'Postingan tidak boleh kosong',
        'body.min' => 'Minimal 10 karakter',
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createPost()
    {
        $this->validate();
        $post = Post::create([
                    'user_id' => Auth::id(),
                    'body' => $this->body
                ]);

        $this->body = "";
        session()->flash('message', 'Post successfully created.');
        
    }
}
