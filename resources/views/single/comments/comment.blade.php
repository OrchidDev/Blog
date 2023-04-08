<div class="card mt-3 mb-3" id="comment-{{ $comment->id }}">
    <div class="card-body">
        <div class="row">
            <div class="col-md-1">
                <figure class="avatar">
                    <img src="{{ $comment->user->getProfileUrl() }}" class="img-fluid">
                </figure>
            </div>
            <div class="col-md-11">
                {{ $comment->user->name }}
                <div style="font-size: 12px;">
                    {{ $comment->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
        <p>{{ $comment->content }}</p>
        <a href="#comments" onclick="setReplyValue({{ $comment->id }})" class="text-decoration-none text-dark"><i class="fa-light fa-reply"></i> پاسخ </a>
        @if($comment->approvedReplies->count() > 0)
            @foreach($comment->approvedReplies as $reply)
                @include('single.comments.comment', ['comment' => $reply])
            @endforeach
        @endif
    </div>
</div>
