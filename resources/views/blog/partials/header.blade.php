@php use App\Models\Category; @endphp
        <!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img {{ asset('blog/src="img') }}/logo.png" alt=""> -->
            <h1>ZenBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                @foreach(Category::all() as $category)
                    <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->