<x-app-layout>
    <x-slot name="title">
        - صفحه اصلی
    </x-slot>
    <main class="container">
        <div class="row mt-4">
            <section class="col-md-8">
                @forelse($posts as $post)
                    <a href="{{ route('post.show', $post->slug) }}" class="text-decoration-none text-dark">
                        <article class="card mb-3">
                            <div class="card-body">
                                <figure>
                                    <img src="{{$post->getPostsUrl()}}" class="img-fluid" alt="{{$post->title}}">
                                </figure>
                                <h1 class="fs-4 fw-bold mb-3">{{$post->title}}</h1>
                                <p>{{ $post->limit() }}</p>
                                <i class="fa-light fa-user"></i> {{$post->user->name}}
                                <i class="fa-light fa-history ms-3"></i> {{$post->getCreateAtShamsi()}}
                                <div class="float-end">
                                    <i class="fa-light fa-comments"></i>
                                </div>
                            </div>
                        </article>
                    </a>
                @empty
                    <div class="alert alert-dark" role="alert">
                        هیچ نوشته ای یافت نشد!
                    </div>
                @endforelse
                {{$posts->links()}}
            </section>
            @include('home.sidebar.sidebar')
        </div>
    </main>
</x-app-layout>
