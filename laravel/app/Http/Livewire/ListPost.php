<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ListPost extends Component
{
    public $StateId = 0;
    public $body;

    protected $listeners = [
        'postCreated' => '$refresh'
    ];


    public function render()
    {
        return view('livewire.list-post',[
            'posts' => Post::latest()->get()
        ]); 
    }

    public function showUpdateFrom($id)
    {
        $post = Post::find($id);
        $this->body = $post->body;
        $this->StateId = $id;
    }

    public function updatePost($id)
    {
        $post = Post::find($id);
        $post->body = $this->body;
        $post->save();
        $this->StateId = 0;
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
    }

    
}
