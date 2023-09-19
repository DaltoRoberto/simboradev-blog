<article class="border-t border-t-gray-200 py-8 grid grid-cols-6">
    <div class="lg:col-span-2  col-span-6">
        <span class="text-gray-400 font-thin ">{{$post->created_at->format('d/m/Y')}}</span>
    </div>
    <div class="lg:col-span-4  col-span-6">
        <a href="{{route('posts.show', ['slug'=>$post->slug])}}" class="">
            <h1 class="text-xl font-medium text-gray-700 mb-2">{{ $post->title }}</h1>
        </a>
        <div class="flex gap-2">
            <span class="tag">PHP</span>
            <span class="tag">Programação</span>
            <span class="tag">Banco de dados</span>
        </div>
        <div class="pt-4 text-gray-400 font-light text-sm">
            {{$post->content}}
        </div>
        <div class="">
            <span class="font-thin text-xs text-gray-300">Publicado por</span>
            <p class="text-blue-500 text-sm font-thin">{{$post->user->name}}</p>
        </div>
    </div>
</article>
