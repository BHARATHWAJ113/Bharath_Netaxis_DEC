<div class="border border-0  mb-3  mt-2 shadow" >
    @forelse($tweets as $tweet)
    @include('t_project.t_tweet')

    @empty

    <div class="text-center">

        <p class=" h3 text-muted p-4"><q>No tweet Yet!....</q></p>
        <img src="{{ url('/tweety_img/no_tweet.jpg') }}" class="mt-3" style="max-height:450px">

    </div>


    @endforelse
</div>
