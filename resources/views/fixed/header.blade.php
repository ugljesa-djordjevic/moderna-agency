<header id="header" class="fixed-top d-flex align-items-center @if(request()->routeIs("home")) header-transparent @endif">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href="{{ route('home') }}"><span>Moderna</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @foreach($menu as $link)
                    <li>
                        <a class="@if(request()->routeIs($link["route"])) active @endif" href="{{ route($link["route"]) }}">
                            {{ $link["name"] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
