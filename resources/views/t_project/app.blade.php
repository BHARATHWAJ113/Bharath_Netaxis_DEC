@component('t_project.t_master')
    
<main   class="container  py-4" style="margin-top:8%">
    <div class="row">
        <div class="col-md-3 mx-auto">
            @if(auth()->user())
            @include('t_project.t_sidebar')
            @endif
        </div>
        <div class="col-md-6  Scrollboxtweet" style="border-radius:15px; height:1000px; max-height: 1000px; ">
           {{ $slot }}
           
           
        </div>
        <div class="col-md-3 mx-auto">
            @if(auth()->user())
            @include('t_project.t_friends_list')
            @endif
        </div>
    </div>

</main>
@endcomponent