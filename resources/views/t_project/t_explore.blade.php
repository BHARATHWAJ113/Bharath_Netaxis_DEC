@component('t_project.app')

{{-- <h1>Under Maintanance</h1> --}}


<div class="mt-2">
    <h1><b>Explore :-</b></h1>
    <div class="row Scrollboxtweet" style="max-height: 700px; ">
        @foreach($users as $user)

        <div class="col-md-6">
            <div class="card shadow-sm tweethover m-2 p-2" style="border-radius:15px;">
                <a href="{{ $user->path() }}" class="text-decoration-none text-dark">
                    <img src="{{ $user->userpic}}" alt="Error" width="60px" class="rounded-circle">

                    <h5 class="px-2 pt-3"><b>@ {{ $user->username }}</b></h5>
                </a>
            </div>
        </div>



        @endforeach
    </div>
</div>



@endcomponent
