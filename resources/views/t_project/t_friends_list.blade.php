<div class="bg-white p-2 shadow" style="border-radius:25px;">
    <h2 class="m-3"><b>Following</b></h2>
    <ul class="list-group list-group-flush m-2 shadow-sm" style="margin-left: 30px; border-radius:25px;">
        
    @forelse (auth()->user()->follows as $user)
    <li class="list-group-item sildehover border-0 shadow-sm">
            <div class="d-flex">
                <a class="text-decoration-none" href="{{ route('profile', $user->username) }}">
                <img src='{{ $user->userpic }}' class="mr-3 rounded-circle" style="height: 50px; width:50px;"> <span class="mt-2">
                    <b>{{ $user->name }}</b></span></a>
            </div>
        </li>
        @empty
        <div class="text-center">
        
            <p class=" h5 text-muted p-4"><q>No Friends....</q></p>
    
        </div>
    @endforelse


    </ul>
</div>