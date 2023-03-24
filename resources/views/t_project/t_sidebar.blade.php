<nav class="navbar navbar-expand-md navbar-light bg-light">

    <button class="navbar-toggler mt-5 m-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="sidebar collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="list-group list-group-flush shadow mb-5" style="border-radius:25px;">
            <li class="list-group-item nav-item sildehover border-0">
                <a href="{{ route('home') }}" style="text-decoration: none; color: black;">
                    <h4 class="btnn"><i class="fa-solid fa-house px-2 " style="color: #1874ec;"></i>Home</h4>
                </a>
            </li>
            <li class="list-group-item nav-item sildehover border-0">
                <a href="{{ route('explore') }}" style="text-decoration: none; color: black;">
                    <h4 class="btnn"><i class="fa-solid fa-hashtag px-2 " style="color: #1874ec;"></i>Explore</b></h4>
                </a>
            </li>
            <li class="list-group-item nav-item sildehover border-0">
                <a style="text-decoration: none; color: black;">
                    <button type="button" class="btnn h4" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">
                        <i class="fa-solid fa-d px-1 " style="color: #1874ec;"></i>Tweety Blue</b>
                    </button>
                </a>
            </li>
            <li class="list-group-item nav-item sildehover border-0">
                <a href="{{ route('profile', auth()->user()) }}" style="text-decoration: none; color: black;">
                    <h4 class="btnn"><i class="fa-regular fa-user px-2  " style="color: #1874ec;"></i>Profile</b></h4>
                </a>
            </li>
            <li class="list-group-item nav-item sildehover border-0">
                <a style="text-decoration: none; color: black;">
                    <form method="post" action="/logout">
                        @csrf
                        <button class="btnn h4"><i class="fa-solid fa-arrow-right-from-bracket fa-lg px-1 " style="color: #1874ec;"></i>Logout</button>
                    </form>
                </a>
            </li>
        </ul>
    </div>

</nav>















<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="p-3">
                <div class="text-center">
                    <h5 class=" h3"><b>Tweety Blue</b></h5>
                </div>
            </div>
            <div class="modal-body" style="background-image: url('{{ url('tweety_img/bg.jpg') }}');width:550px; background-size:cover;">
                <div class="card shadow mb-3" style="max-width: 460px; border-radius:25px;">
                    <div class="row">
                        <div class="col-8">
                            <h3 class="p-3"><b>Blue subscribers with a verified phone number will get a blue checkmark once approved.</b></h3>
                        </div>
                        <div class="col-3">
                            <i class="fa-brands fa-slack fa-4x p-4 " style="color: #26a0fd; "></i>
                        </div>
                    </div>
                </div>
                <div class="m-5 p-3">
                    <div class="row"><br>
                        <div class="col-1">
                            <i class="fa-solid fa-gifts fa-3x pt-4" style="color: #bf4084;"></i>
                        </div>
                        <div class="col-10 px-5">
                            <h3><b>All the existing Blue features</b></h3>
                            <h6 class="text-muted">Edit Tweet, 1080p video uploads, Reader, custom navigation, Bookmark Folders, Top Articles and more.</h6>
                        </div>
                    </div>
                    <br>
                    <div class="row"><br>
                        <div class="col-1">
                            <i class="fa-solid fa-eye fa-3x pt-4" style="color: #df4ebf;"></i>
                        </div>
                        <div class="col-10 px-5">
                            <h3><b>Rocket to the top of replies, mentions and search</b></h3>
                            <h6 class="text-muted">Tweets from verified users will be prioritized — helping to fight scams and spam.</h6>
                        </div>
                    </div>
                    <br>
                    <div class="row"><br>
                        <div class="col-1">
                            <i class="fa-solid fa-volume-low fa-3x pt-3" style="color: #dd469e;"></i>
                        </div>
                        <div class="col-10 px-5">
                            <h3><b>See half the ads</b></h3>
                            <h6 class="text-muted">See 50% fewer ads in the home timeline.</h6>
                        </div>
                    </div>
                    <br>
                    <div class="row"><br>
                        <div class="col-1">
                            <i class="fa-solid fa-tv fa-2x pt-3" style="color: #f551df;"></i>
                        </div>
                        <div class="col-10 px-5">
                            <h3><b>Post longer videos</b></h3>
                            <h6 class="text-muted">You’ll finally be able to post longer videos to Twitter.</h6>
                        </div>
                    </div>
                    <br>
                    <div class="row"><br>
                        <div class="col-1">
                            <i class="fa-solid fa-gears fa-3x pt-4" style="color: #ea53ba;"></i>
                        </div>
                        <div class="col-10 px-5">
                            <h3><b>Get early access</b></h3>
                            <h6 class="text-muted">Get early access to select new features with Twitter Blue Labs.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 p-2">
                <button type="button" class="btn btn-dark">Subscribes</button>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
