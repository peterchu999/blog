<div wire:poll.keep-alive="refetch" class="justify-center grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 sm:gap-4">
    Current time: {{now()}}
    @foreach ($posts as $post)
        @livewire('post.post-component', ["post"=>$post], key($post->id))
    @endforeach
</div>
