<div class="col-md-4">
    <form class="d-flex mb-3" role="search" action="{{ route('post.search') }}">
        <input class="form-control me-2" type="search" name="search" placeholder="جستجو در سایت ..." aria-label="Search" value="{{ request()->search ?? '' }}">
    </form>

    <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-light fa-stars"></i> نوشته جدید </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa-light fa-comments"></i> دیدگاه ها</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <ul class="list-group">
                @foreach($posts as $post)
                    <a href="" class="list-group-item">{{$post->title}}</a>
                @endforeach
            </ul>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="list-group">
                @foreach($comments as $comment)
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $comment->user->name }}</h5>
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-1">{{ $comment->content }}.</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>
