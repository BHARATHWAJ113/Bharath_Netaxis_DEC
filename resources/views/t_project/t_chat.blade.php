@component('t_project.app')
<div class="bg-white p-2 shadow" style="border-radius:25px;" ng-init="homeCtrl.initFunction('{{$chater_name}}')" ng-controller="HomeController as homeCtrl">

@{{homeCtrl.name}} @{{homeCtrl.chat_user }}
    @foreach($chater_name as $chatUser)
    <div class="d-flex m-3 justify-content-between fixed-top-name" style="background-color:  rgb(59, 123, 207); border-radius:15px;">
        <img src="{{ $chatUser->userpic }}" class="m-4 rounded-circle " style="height: 60px; width:50px;">
        <h3 class=" text-white" style="padding-top: 40px;"><b>{{ $chatUser->name }}</b></h3>
        <h4 style="padding-top: 40px; float:left;"><a href="{{ route('chating') }}" style="text-decoration: none; color: rgb(255, 250, 250); "><i class="fa-solid fa-backward fa-fade me-2" style="color: #f0f2f4;"></i></a></h4>

    </div>

    @endforeach

<div class="scroll">
    <ul class="list-group list-group-flush" style="margin-left: 20px; border-radius:25px;">

        @foreach($messages as $chat)

        {{-- Reciver chat --}}
        <li class="list-group-item sildehover m-2 p-0 border-0 shadow-lg" style="{{ auth()->user()->id == $chat->from_user ? 'display: none;' : '' }} border-radius:25px; ">
            {{-- <li class="list-group-item sildehover m-2 p-0 border-0 shadow-lg" style=" border-radius:25px; "> --}}
            <div class="d-flex justify-content-between">
                <p class="pt-3 tweethash text-danger h5 ps-2">
                    {{ $chat->content}} <span class=" p-2 text-dark" style="font-size: 10px;">{{ $chat->created_at->shortRelativeDiffForHumans() }}</p>
                <a class="text-decoration-none text-info" href="{{ route('profile', $chat->sender->username) }}">
                    <p class="mb-0 "><img src='{{ $chat->sender->userpic }}' class="rounded-circle " style="height: 60px; width:50px;">
                </a></p>
            </div>
        </li>
        <div class="d-flex justify-content-end">
            {{-- <h6 class="text-muted" style=" padding-right: 25px;{{ auth()->user()->id == $chat->from_user ? 'display: none;' : '' }}">{{ $chat->sender->username }}</h6> --}}
        </div>

        {{-- Sender chat --}}
        <li class="list-group-item sildehover m-2 p-0 border-0 shadow-lg" style="{{ auth()->user()->id == $chat->from_user ? '' : 'display: none;' }} border-radius:25px; ">
            <div class="d-flex justify-content-between">
                <a class="text-decoration-none text-info" href="{{ route('profile', $chat->sender->username) }}">
                    <img src='{{ $chat->sender->userpic }}' class="rounded-circle " style="height: 60px; width:50px; float:left;"></a>
                <p class="pt-3 tweethash text-info h5">
                    {{ $chat->content}}<span class=" p-2 text-dark" style="font-size: 10px;">{{ $chat->created_at->shortRelativeDiffForHumans() }}</span> </p>
            </div>
            </a>
        </li>
        {{-- <h6 class="text-muted" style=" padding-left: 25px;  {{ auth()->user()->id == $chat->from_user ? '' : 'display: none;' }}">{{ $chat->sender->username }}</h6> --}}

        @endforeach
    </ul>
</div>
    
    <div class="border border-darkt mt-2 p-3  shadow-sm" style="border-radius:25px;">
        <form method="POST" action="{{ route('send_chat')}}">
            @csrf
            <input type="hidden" name="to_user" value="{{ $to_user }}">
            <textarea id="form10" class="md-textarea form-control border-0" name="content" placeholder=" Write a Chat" rows="1"></textarea>
            <hr class="bg-dark">
            <div class="d-flex justify-content-between p-2">
                <button class="btn text-white  rounded-pill  ps-4 pe-4" type="submit" style="background-color: #1874ec;"><i class='fas fa-pencil-alt prefix'></i> Send</button>
            </div>
        </form>
        @error('content')
        <p class="alert alert-danger m-2 ">{{ $message }}</p>
        @enderror
    </div>
</div>







@endcomponent
 <!-- Scripts -->
 <script src="{{ asset('js/sample.js') }}" defer></script>
{{-- <div class=""> --}}
