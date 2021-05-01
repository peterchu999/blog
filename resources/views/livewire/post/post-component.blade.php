<div class="my-4 bg-white rounded-xl shadow-md overflow-hidden ">
  <div class="flex">
    <div class="flex flex-col items-start flex-1 p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$post->type}}</div>
      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{$post->title}}</a>
      <p class="mt-2 text-gray-500">
          {{$post->content}}
      </p>
       <button class="self-end mt-5 px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
           Message
        </button>
    </div>
  </div>
</div>

