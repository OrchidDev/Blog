<x-app-layout>
    <x-slot name="title">
        - صفحه اصلی
    </x-slot>
    <main class="container">
        <div class="row mt-4">
            <section class="col-md-8">
                @foreach($posts as $post)
                    <article class="card mb-3">
                        <div class="card-body">
                            <figure>
                                <img src="{{$post->getPostsUrl()}}" class="img-fluid" alt="{{$post->title}}">
                            </figure>
                            <h1 class="fs-4 fw-bold mb-3">{{$post->title}}</h1>
                            <p>{{ Str::limit($post->content, 200) }}</p>
                            <i class="fa-light fa-user"></i> {{$post->user->name}}
                            <i class="fa-light fa-history ms-3"></i> {{$post->getCreateAtShamsi()}}
                            <div class="float-end">
                                <i class="fa-light fa-comments"></i>
                            </div>
                        </div>
                    </article>
                @endforeach
                {{$posts->links()}}
            </section>
            <div class="col-md-4">2</div>
        </div>
    </main>
</x-app-layout>
