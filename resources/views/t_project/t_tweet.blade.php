
<div class="row p-3 tweethover border-bottom">

    <div class="col-1">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src='{{ $tweet->user->userpic }}' class="rounded-circle me-1" style="height:50px; width:50px;">
        </a>
    </div>


    <div class="col-10 ml-3 ">
        <h5 class="mt-2">
            <a class="text-decoration-none text-dark" href="{{ route('profile', $tweet->user) }}">
                <b>{{ $tweet->user->name }}</b>
            </a>
        </h5>
        <p class="card-text text-muted">
            {{ $tweet->body }}
        </p>
        <div class="LikeOrDislike d-flex">
            <form method="POST" action="/tweets/{{ $tweet->id }}/like">

                @csrf
                <div class="like">
                    <button type="submit" class="btnn m-0 border-0">
                        <i class="fa-solid fa-heart fa-beat fa-xl pe-2 likehover {{ $tweet->isLikedBy(auth()->user()) ? 'text-danger' : 'text-secondary'   }}"></i><span class="text-muted">{{ $tweet->likes ?: 0 }}</span>
                    </button>
                </div>
            </form>
            <form method="POST" action="/tweets/{{ $tweet->id }}/like">

                @csrf
                @method('delete')
                <div class="dislike  ">
                    <button type="submit" class="btnn m-0  border-0">
                        <i class="fa-solid fa-heart-crack fa-fade fa-xl likehover pe-2 {{ $tweet->isDislikedBy(auth()->user()) ? 'text-dark' : 'text-secondary'   }}"></i><span class="text-muted">{{ $tweet->dislikes ?: 0 }}</span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>


