<div class="border border-primary mt-2 mb-3 p-3 bg-white shadow-sm" style="border-radius:25px;">
   
        
   
    <form method="POST" action="/tweets">
        @csrf
        <textarea id="form10" class="md-textarea form-control border-0" name="body" placeholder=" Write a tweet" rows="3"></textarea>
        <hr class="bg-dark">


        <div class="d-flex justify-content-between p-2">
            <img src='{{ auth()->user()->userpic }}' class="rounded-circle" style="height: 50px; width:50px;">
            <button class="btn text-white  rounded-pill  ps-4 pe-4" type="submit" style="background-color: #1874ec;"><i class='fas fa-pencil-alt prefix'></i> Tweet</button>
        </div>

    </form>
    @error('body')
        <p class="alert alert-danger m-2 ">{{ $message }}</p>
    @enderror
</div>