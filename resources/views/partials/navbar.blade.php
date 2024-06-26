    <nav class="navbar navbar-expand-lg bg-body shadow-sm">
        <div class="container-fluid m-1 ">
            <a href="/" class="navbar-brand">Prima Buana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <span>{{ Auth::user()->name }}</span>
                <img src="img/user.jpeg" width="30px" class="rounded-circle m-1 nav-image" alt="user">
                <div class="list-menu">
                    <ul class="item-list-menu">
                        <li><a href="/">Dashboard</a></li>
                        <li><a href="{{ route('show_profile') }}">Profile</a></li>
                        <li><a href="{{ route('show_tracking') }}">Tracking CV</a></li>
                        <li><a href="#">Lowongan</a></li>
                        <li><a href="#">Akun</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
