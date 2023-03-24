@component('t_project.app')
    

<header>
    <img src="{{ $user->userbgpic }}" class="img-thumbnail" style="height:200px; width:550px;">
    
    <div class="d-flex justify-content-between item-center mt-3">
        <div style="padding-top: 10%;">
            <h2><b>{{ $user->name }}</b></h2>
            <h5 class="text-muted">@<b></b>{{ $user->username }}</h5>
            <p class="text-muted ms-2"><span class="py-2"><i class="fa-regular fa-calendar"></i></span> Joined {{ $user->created_at->diffForHumans() }} </p> 
            
        </div>
        <div class="d-flex">
            @can('edit',$user)

            <div>
                <a class="btn btn-light border rounded-pill shadow me-1 " href="{{ $user->path('edit') }}" ><b>Edit Profile</b></a>
            </div>
                
            @endcan
            @unless (auth()->user()->is($user))
                
            <form method="post" action="/profiles/{{ $user->username }}/follow">
                @csrf
                <button type="submit" class="btn btn-info rounded-pill shadow text-white"><b>{{ auth()->user()->isfollowing($user) ? 'UnFollow' : 'Follow'  }}</b></button>
            </form>
            
            @endunless
        </div>
    </div>
    
    <img src='{{ $user->userpic }}' class="border border-dark rounded-circle ms-3" style="position:absolute; top:10%; height:150px; width:150px;">
        <p>{{ $user->userdesc?: 'Twitter is a service for friends, family, and coworkers to communicate and stay connected through the exchange of quick, frequent messages. 
            People post Tweets, which may contain photos, videos, links, and text. These messages are posted to your profile, sent to your followers, 
            and are searchable on Twitter search.' }}</p>
</header>

<hr>

@include('t_project.t_timeline', [
    'tweets' => $tweets
    ])
 
 
 @endcomponent