<div class="{{  (!is_null($comment->parent_id)) ? 'reply' : 'comment'  }}" id="com-{{ $comment->id }}" style="margin-left:15px">
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->body }}</p>
    @auth
    <a href="javascript:void()" class="show-reply">Reply</a>
    <form method="post" action="{{ route('reply.add') }}" class="replyForm" id="form-{{$comment->id}}">
        @csrf
        
        <div class="form-group">
            <textarea placeholder="Place Your Reply here"  name="comment_body" class="form-control comment_body"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="post_id" id="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="comment_id" class="comment_id" value="{{ $comment->id }}" />
            <input type="submit" class="btn btn-warning r-sub" value="Reply" />
        </div>
    </form>
    
    @endauth
    @include('partials._comment_replies', ['comments' => $comment->replies])
</div>