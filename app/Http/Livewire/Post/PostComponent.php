<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public Post $post;

    public function mount($post) {
        $this->post = $post;
    }

    public function update() {
        $this->post->title = $this->post->title."updated";
        $this->post->save();
    }

    public function render()
    {
        return view('livewire.post.post-component');
    }
}
