@extends('pages.users.layouts.master')

@section('title', $news->title)
@section('blog', 'active')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('blog.index') }}">Blog</a></li>
            </ol>
            <h2>{{ $news->title }}</h2>
        </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">

                <div class="entry-img">
                    <img src="{{ Storage::exists('public/' . $news->cover) && $news->cover ? Storage::url($news->cover) : asset('asset/img/imagePlaceholder.png') }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                    <a href="{{ route('blog.show', $news->slug) }}">{{ $news->title }}</a>
                </h2>

                <div class="entry-meta">
                    <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $news->user->name }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $news->publish_date }}">{{ Carbon\Carbon::parse($news->publish_date)->isoFormat('MMM Do, YYYY') }}</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
                    </ul>
                </div>

                <div class="entry-content">
                    {!! $news->content !!}
                </div>

                </article><!-- End blog entry -->

                <div class="blog-author d-flex align-items-center">
                <img src="{{ Storage::exists('public/' . $news->cover) && $news->cover ? Storage::url($news->cover) : asset('asset/img/blog/blog-author.jpg') }}" class="rounded-circle float-left" alt="{{ $news->title }}">
                <div>
                    <h4>Jane Smith</h4>
                    <div class="social-links">
                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                    </div>
                    <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                    </p>
                </div>
                </div><!-- End blog author bio -->

                <div class="blog-comments">

                <h4 class="comments-count">8 Comments</h4>

                <div id="comment-1" class="comment">
                    <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                    <div>
                        <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                        Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                        </p>
                    </div>
                    </div>
                </div><!-- End comment #1 -->

                <div class="reply-form">
                    <h4>Leave a Reply</h4>
                    <p>Your email address will not be published. Required fields are marked * </p>
                    <form action="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="col-md-6 form-group">
                        <input name="email" type="text" class="form-control" placeholder="Your Email*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                        <input name="website" type="text" class="form-control" placeholder="Your Website">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Comment</button>

                    </form>

                </div>

                </div><!-- End blog comments -->

            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                    <form action="{{ route('blog.search') }}" method="GET">
                        <input type="text" name="search">
                        <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div><!-- End sidebar search formn-->

                <h3 class="sidebar-title">Kategori</h3>
                <div class="sidebar-item categories">
                    <ul>
                        <li><a href="{{ route('blog.index') }}">Semua</a></li>
                        @foreach ($categories as $category)
                          <li><a href="{{ $category->id }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div><!-- End sidebar categories-->

                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                    @foreach ($recent_posts as $recent_post)
                        <div class="post-item clearfix">
                            <img src="{{ Storage::exists('public/' . $recent_post->cover) && $recent_post->cover ? Storage::url($recent_post->cover) : asset('asset/img/imagePlaceholder.png') }}" alt="">
                            <h4><a href="#">{{ $recent_post->title }}</a></h4>
                            <time datetime="{{ $recent_post->publish_date }}">{{ Carbon\Carbon::parse($recent_post->publish_date)->isoFormat('MMM Do, YYYY') }}</time>
                        </div>
                    @endforeach

                </div><!-- End sidebar recent posts-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

            </div>

        </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection