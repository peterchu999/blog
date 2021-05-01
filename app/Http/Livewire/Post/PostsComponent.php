<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostsComponent extends Component
{
    public $posts;

    public function refetch() {
        $this->posts = Post::all();
        return $this->posts;
    }

    public function mount() {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.post.posts-component');
    }
}
