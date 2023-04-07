<x-app-layout>
    <x-slot name="title">
        - {{$post->title}}
    </x-slot>
    <main class="container">
        <div class="row mt-4">
            <section class="col-md-8">
                <article class="card mb-3">
                    <div class="card-body">
                        <figure>
                            <img src="{{ $post->getPostsUrl() }}" class="img-fluid" alt="{{$post->title}}">
                        </figure>
                        <h1 class="fs-4 fw-bold mb-3">{{$post->title}}</h1>
                        <p>{!! $post->content !!}</p>
                        <i class="fa-light fa-user"></i> {{$post->user->name}}
                        <i class="fa-light fa-history ms-3"></i> {{$post->getCreateAtShamsi()}}
                        <i class="fa-light fa-comments ms-3"></i>
                    </div>
                </article>
            </section>
            @include('home.sidebar.sidebar')
        </div>
    </main>
</x-app-layout>
