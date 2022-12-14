@extends('layouts.main')


@section('container')
<section class="hero pt-5  section">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center">
                <h1 class="mb-3">Selamat Datang di Aspirasiku</h1>
                <p class="mb-3">Gabung Sekarang untuk menyalurkan aspirasi</p>
                <a href="/" class="text-decoration-none mb-4 btn btn-primary">Log In</a>
            </div>
            <div class="col-12 col-md-6 algin-self-center">
                <img src="../img/loud.jpg" class="rounded-circle img-fluid" width="500px" alt="aspiration logo">
            </div>
        </div>
    </div>

</section>


<section class="main-section pt-5  ">
    <div class="container ">
        <div class="row justify-content-end">
            <div class="col-12 col-md-3">
                <h1 class="mb-3">Forum</h1>
                {{-- for left components --}}
                <form action="/posts">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search"
                            value="{{ request('search') }}">
                    </div>
                </form>

                <a class="btn btn-secondary my-2" href="/createmessage">Create Aspiration!</a>
                <h4 class="my-3">Tags</h4>
                    <div class="border align-center">
                        <p>All tag</p>
                    </div>
                    @foreach ($categories as $category )
                    <div class="border align-center ">
                    <p>{{ $category->name }}</p>

                </div>
                  @endforeach
                </div>


            <div class="col-12 col-md-9 ">
                <h1 class="mb-2">Usulan</h1>
                {{-- for right --}}

                {{-- container for aspirasi content --}}
                <div class="row container ">
                    @foreach ( $messages as $message )
                    <div class="container my-4 main-message border">
                        <p>{{ $message->title }}</p>
                         <p>{{ $message->users->username }}</p>
                         <p>{{ $message->categories->slug }}</p>
                           <div class="border-bottom  border-dark">

                           </div>
                           <p>{{ $message->excerpt }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
