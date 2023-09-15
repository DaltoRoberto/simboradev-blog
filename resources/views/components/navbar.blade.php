<!-- begin:navbar  -->
<div class="w-full bg-white py-4">
    <div class="container">
        <div class="font-extrabold text-2xl text-blue-500 flex gap-2 items-center"><span class="fa-solid fa-terminal p-2.5 rounded border border-blue-400"></span> SimboraDev</div>
        <nav class="flex gap-6">
            <ul class="hidden lg:flex items-center gap-4 text-sm font-medium">
                <li>
                    <a href="{{ route('index') }}" class="font-primary">Início</a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}" class="font-primary">Publicações</a>
                </li>
                <li>
                    <a href="#" class="font-primary">Tags</a>
                </li>
            </ul>
            <ul class="flex items-center gap-4">
                <li class="inline-flex lg:hidden">
                    <span class="fa fa-bars"></span>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- end:navbar  -->
