<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Daryas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == null ? 'active' : '' }}"
                        href="{{ route('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'posts' ? 'active' : '' || request()->segment(1) == 'post') ? 'active' : '' }}"
                        href="{{ route('post') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : '' }}"
                        href="{{ route('category') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
