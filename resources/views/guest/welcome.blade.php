@extends('layouts.app')
@section('content')
    <section class="py-7 ">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
                    <div class="text-center mb-5">
                        <h1 class=" display-2 fw-bold">Akatsuki News Room</h1>
                        <p class=" lead">
                            Our features, journey, tips and us being us. Lorem ipsum dolor sit amet, accumsan in,
                            tempor
                            dictum neque.
                        </p>
                    </div>
                    <!-- Form -->
                    <form class="row px-md-20">
                        <div class="mb-3 col ps-0  ms-2 ms-md-0">
                            <input type="email" class="form-control" placeholder="Email Address" required="">
                        </div>
                        <div class="mb-3 col-auto ps-0">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->
    <section class="pb-8">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg">
                        <div class="row g-0">
                            <!-- Image -->
                            <a href="" class="col-lg-8 col-md-12 col-12 bg-cover img-left-rounded"
                                style="background-image: url({{ asset('assets/images/course/course-javascript.jpg') }});">
                                <img src="{{ asset('assets/images/blog/blogpost-1.jpg') }}"
                                    class="img-fluid d-lg-none invisible" alt="blogpost"></a>
                            <div class="col-lg-4 col-md-12 col-12">
                                <!-- Card body -->
                                <div class="card-body">
                                    <a href="#" class="fs-5 mb-3 fw-semibold d-block">Courses</a>
                                    <h1 class="mb-2 mb-lg-4"> <a href="blog-single.html" class="text-inherit">
                                            Getting started the Web App JavaScript in 2023
                                        </a>
                                    </h1>
                                    <p>Our features, journey, tips and us being us. Lorem ipsum dolor sit amet,
                                        accumsan
                                        in, tempor dictum neque.</p>
                                    <!-- Media content -->
                                    <div class="row align-items-center g-0 mt-lg-7 mt-4">
                                        <div class="col-auto">
                                            <!-- Img  -->
                                            <img src="{{ asset('assets/images/avatar/ppp.jpg') }}" alt="avatar"
                                                class="rounded-circle avatar-sm me-2">
                                        </div>
                                        <div class="col lh-1 ">
                                            <h5 class="mb-1">Marselinus Harson Rewo</h5>
                                            <p class="fs-6 mb-0">September 13, 2023</p>
                                        </div>
                                        <div class="col-auto">

                                            <p class="fs-6 mb-0">6 Min Read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($data['posts'] as $post)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <!-- Card -->
                        <div class="card mb-4 shadow-lg">
                            <a href="{{ route('guest.post.single', $post->slug) }}" class="card-img-top ">
                                <!-- Img  -->

                                @isset($post->cover)
                                    <img src="{{ asset('storage/images/' . $post->cover) }}"
                                        class="card-img-top rounded-top-md img-fluid" alt="blogpost" style="max-height: 200px">
                                @endisset

                                @empty($post->cover)
                                    <img src="{{ asset('assets/images/course/course-react.jpg') }}"
                                        class="card-img-top rounded-top-md img-fluid" alt="blogpost">
                                @endempty
                            </a>
                            <!-- Card body -->
                            <div class="card-body">
                                <a href="{{ route('guest.post.single', $post->slug) }}"
                                    class="fs-5 mb-2 fw-semibold d-block text-success">{{ $post->category->title }}</a>
                                <h3><a href="{{ route('guest.post.single', $post->slug) }}" class="text-inherit">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                {!! $post->excerpt !!}
                                <!-- Media content -->
                                <div class="row align-items-center g-0 mt-4">
                                    <div class="col-auto">
                                        <img src="../assets/images/avatar/avatar-7.jpg" alt="avatar"
                                            class="rounded-circle avatar-sm me-2">
                                    </div>
                                    <div class="col lh-1">
                                        <h5 class="mb-1">{{ $post->author->name }}</h5>
                                        <p class="fs-6 mb-0">September 05, 2020</p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="fs-6 mb-0">20 Min Read</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
