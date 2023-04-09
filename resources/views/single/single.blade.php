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
                        <i class="fa-light fa-comments ms-3"></i> {{$post->comments_count }}
                        <div class="float-end">
                            <span class="@if($post->is_user_liked) fa-solid @endif fa-regular fa-heart""></span>
                        </div>
                    </div>
                </article>
                <div class="mt-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-end">({{$post->comments_count }}) نظر</div>
                            @auth()
                            <h4> دیدگاه خود را بنویسید </h4>
                            <form action="{{ route('comment.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <input type="hidden" name="comment_id" value="" id="reply-input">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">متن نظر</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa-light fa-send"></i> ثبت دیدگاه </button>
                            </form>
                            @else
                                <div class="alert alert-success mt-3" role="alert">
                                    شما برای ارسال نظر باید اول <a href="{{ route('login') }}" class="fw-bold text-decoration-none text-dark">وارد سایت شوید</a>
                                </div>
                            @endauth

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3 text-center">
                                    {{$message}}
                                </div>
                            @endif

                            @foreach($post->comments as $comment)
                                @include('single.comments.comment', ['comment' => $comment])
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            @include('home.sidebar.sidebar')
        </div>
    </main>
    <x-slot name="scripts">
        <script>
            function setReplyValue(id) {
                document.getElementById('reply-input').value = id;
            }

            $(".fa-regular").on("click", function () {
                fetch('{{ route("like.post", $post->slug) }}', {
                    method: 'post',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    }
                }).then((response) => {
                    if(response.ok) {
                        $(this).toggleClass("fa-solid");
                    }
                })
            })
        </script>
    </x-slot>
</x-app-layout>
