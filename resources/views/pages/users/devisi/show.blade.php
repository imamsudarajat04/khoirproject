@extends('pages.users.layouts.master')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li>{{ $cek->name }}</li>
        </ol>
        <h2>Halaman {{ $cek->name }}</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page pt-3">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section>

</main><!-- End #main -->
@endsection