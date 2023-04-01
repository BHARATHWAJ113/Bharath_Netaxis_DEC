@component('t_project.app')

{{-- <h1>Under Maintanance</h1> --}}


<div class="card mb-5">
    <form class="m-5" method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="{{ $user->username }}">
            @error('username')
            <p class="text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="userdesc">User Description</label>
            <textarea class="md-textarea form-control mt-2" name="userdesc" placeholder=" Write a Description" rows="5">{{ $user->userdesc }}</textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">User Pic</label>
            <div>
                <div>
                    <input class="form-control-file p-1" name="userpic" type="file" style="border: 1px solid #d1d1d1; border-radius: 4px;">
                    <div>
                        <img class="img-fluid m-4" src="{{ $user->userpic }}" style="width: 175px; height: 125px; border-radius: 4px; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">User Bg Pic</label>
            <div>
                <div>
                    <input class="form-control-file p-1" name="userbgpic" type="file" style="border: 1px solid #d1d1d1; border-radius: 4px;">
                    <div>
                        <img class="img-fluid m-4" src="{{ $user->userbgpic }}" style="width: 250px; height: 125px; border-radius: 4px; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->email }}">
            @error('email')
            <p class="text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" style="@error('password')  border-color: red;  @enderror">
            @error('password')
            <p class="text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" style="@error('password')  border-color: red;  @enderror">
            @error('password')
            <p class="text text-danger">Enter Correct Password</p>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn text-white" style="background-color: #1874ec;">Update</button>
            <a class="btn btn-danger" href="{{ $user->path() }}">cancel</a>
        </div>
    </form>
</div>



@endcomponent
