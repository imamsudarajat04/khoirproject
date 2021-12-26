@extends('pages.users.layouts.master')

@section('title', 'Blog')
@section('blog', 'active')

@section('content')
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
              
              @foreach ($blogs as $blog)
                <article class="entry">
    
                  <div class="entry-img">
                    <img src="{{ Storage::exists('public/' . $blog->cover) && $blog->cover ? Storage::url($blog->cover) : asset('asset/img/imagePlaceholder.png') }}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="#">{{ $blog->title }}</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $blog->user->name }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $blog->publish_date }}">{{ Carbon\Carbon::parse($blog->publish_date)->isoFormat('MMM Do YYYY') }}</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      {{ $blog->description }}
                    </p>
                    <div class="read-more">
                      <a href="#">Read More</a>
                    </div>
                  </div>
    
                </article><!-- End blog entry -->
              @endforeach

              <div class="blog-pagination">
                <ul class="justify-content-center">
                  {{ $blogs->links() }}
                </ul>
              </div>
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
  
                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="" method="POST">
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
                  <div class="post-item clearfix">
                    <img src="{{ asset('asset/img/blog/blog-recent-1.jpg') }}" alt="">
                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="{{ asset('asset/img/blog/blog-recent-2.jpg') }}" alt="">
                    <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="{{ asset('asset/img/blog/blog-recent-3.jpg') }}" alt="">
                    <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="{{ asset('asset/img/blog/blog-recent-4.jpg') }}" alt="">
                    <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="{{ asset('asset/img/blog/blog-recent-5.jpg') }}" alt="">
                    <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                </div><!-- End sidebar recent posts-->
  
              </div><!-- End sidebar -->
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
    </section><!-- End Blog Section -->
@endsection