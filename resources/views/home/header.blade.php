<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><h2>YOUR <em>GARAGE</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('products')}}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="offers.html">Offers</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog.html">Blog</a>
                            <a class="dropdown-item" href="team.html">Team</a>
                            <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                            <a class="dropdown-item" href="terms.html">Terms</a>
                        </div>
                    </li>


                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>

                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('loginview')}}">Login</a>
                            <a class="dropdown-item" href="{{route('registerview')}}">Register</a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
