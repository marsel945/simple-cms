@extends('layouts.app')

@section('content')
    <section class="py-7 py-lg-8 pb-14">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
                    <div class="text-center mb-4">
                        <a href="#"
                            class="fs-5 fw-semibold d-block mb-4 text-primary">{{ $data['post']->category->title }}</a>
                        <h1 class="display-3 fw-bold mb-4">{{ $data['post']->title }}</h1>
                        <span class="mb-3 d-inline-block">4 min read</span>
                    </div>
                    <!-- Media -->
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/avatar/ppp.jpg') }}" alt="avatar"
                                class="rounded-circle avatar-md">
                            <div class="ms-2 lh-1">
                                <h5 class="mb-1 ">{{ $data['post']->author->name }}</h5>
                                <span class="text-primary">Marketing Manager</span>
                            </div>
                        </div>
                        <div>
                            <span class="ms-2 text-muted">Share</span>
                            <a href="#" class="ms-2 text-muted"><i class="mdi mdi-facebook fs-4"></i></a>
                            <a href="#" class="ms-2 text-muted"><i class="mdi mdi-twitter fs-4"></i></a>
                            <a href="#" class="ms-2 text-muted "><i class="mdi mdi-linkedin fs-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Image -->
                <div class="col-xl-10 col-lg-10 col-md-12 col-12 mb-6">

                    @if ($data['post']->attachment->count() > 0)
                        <img src="{{ asset('storage/images/' . $data['post']->attachment->first()->path . '/' . $data['post']->attachment->first()->file) }}"
                            alt="blogpost" class="img-fluid rounded-3 w-100">
                    @else
                        <img src="{{ asset('assets/images/blog/blogpost-1.jpg') }}" class="img-fluid  rounded-3 w-100"
                            alt="cover">
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
                    <!-- Descriptions -->
                    <div>
                        <hr class="mt-lg-10 mb-lg-6 my-md-6">
                        <blockquote class="blockquote text-center ">
                            <p class="text-primary font-italic fw-semibold lh-lg h1 px-2 px-lg-14">
                                "{{ $data['post']->excerpt }}"</p>
                            <footer class="blockquote-footer mt-3 text-muted">
                                <cite title="Source Title">{{ $data['post']->author->name }}</cite>
                            </footer>
                        </blockquote>
                        <hr class="mt-lg-6 mb-lg-10 my-md-6">
                        <div class="mb-4">
                        </div>


                    </div>
                    <!-- List unstyled -->

                    <div class="overflow-x-hidden">
                        {!! $data['post']->content !!}
                    </div>


                </div>

                <!-- Media -->
                <hr class="mt-8 mb-5">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <img src="../assets/images/avatar/avatar-4.jpg" alt="avatar" class="rounded-circle avatar-md">
                        <div class="ms-2 lh-1">
                            <h5 class="mb-1 ">{{ $data['post']->author->name }}</h5>
                            <span class="text-primary">Marketing Manager</span>
                        </div>
                    </div>
                    <div>
                        <span class="ms-2 text-muted">Share</span>
                        <a href="#" class="ms-2 text-muted"><i class="mdi mdi-facebook fs-4"></i></a>
                        <a href="#" class="ms-2 text-muted"><i class="mdi mdi-twitter fs-4"></i></a>
                        <a href="#" class="ms-2 text-muted "><i class="mdi mdi-linkedin fs-4"></i></a>
                    </div>
                </div>
                <!-- Subscribe to Newsletter -->
                <div class="py-lg-12 py-6">
                    <div class="text-center mb-6">
                        <h2 class="display-4 fw-bold">Sign up for our Newsletter</h2>
                        <p class="mb-0 lead">Join our newsletter and get resources, curated content, and design
                            inspiration
                            delivered straight to your inbox.</p>
                    </div>
                    <!-- Form -->
                    <form class="row px-md-20">
                        <div class="mb-3 col ps-0 ms-2 ms-md-0">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3 col-auto ps-0">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="my-5">
                        <h2>Related Post</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg ">
                        <a href="blog-single.html" class="card-img-top"> <img
                                src="{{ asset('assets/images/blog/blogpost-1.jpg') }}" class="card-img-top rounded-top-md"
                                alt="blogpost"></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <a href="#" class="fs-5 fw-semibold d-block mb-3 text-primary">Workshop</a>
                            <a href="blog-single.html">
                                <h3>The Best DevOps Tools for Your Application Lifecycle</h3>
                            </a>
                            <p>Inventore pariatur veritatis maxime fugiat sint dolorem officiis nemo quis!
                            </p>
                            <!-- Media content -->
                            <div class="row align-items-center g-0 mt-4">
                                <div class="col-auto">
                                    <img src="{{ asset('assets/images/avatar/ppp.jpg') }}" alt="avatar"
                                        class="rounded-circle avatar-sm me-2">
                                </div>
                                <div class="col lh-1">
                                    <h5 class="mb-1">{{ $data['post']->author->name }}</h5>
                                    <p class="fs-6 mb-0">October 09, 2023</p>
                                </div>
                                <div class="col-auto">
                                    <p class="fs-6 mb-0">12 Min Read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg ">
                        <a href="blog-single.html" class="card-img-top"> <img src="../assets/images/blog/blogpost-6.jpg"
                                class="card-img-top rounded-top-md" alt="blogpost"></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <a href="#" class="fs-5 fw-semibold d-block mb-3 text-info">Courses</a>
                            <h3><a href="blog-single.html" class="text-inherit">
                                    How to become modern Stack Developer in 2023
                                </a>
                            </h3>
                            <p>At beatae non sit dicta simili quepers lem piciatis facilis veritatis quam.
                                corrupti?</p>
                            <div class="row align-items-center g-0 mt-4">
                                <div class="col-auto">
                                    <img src="{{ asset('assets/images/avatar/ppp.jpg') }}" alt="avatar"
                                        class="rounded-circle avatar-sm me-2">
                                </div>
                                <div class="col lh-1">
                                    <h5 class="mb-1">{{ $data['post']->author->name }}</h5>
                                    <p class="fs-6 mb-0">October 10, 2023</p>
                                </div>
                                <div class="col-auto">
                                    <p class="fs-6 mb-0">10 Min Read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg ">
                        <a href="blog-single.html" class="card-img-top"> <img
                                src="{{ asset('assets/images/blog/blogpost-5.jpg') }}"
                                class="card-img-top rounded-top-md" alt="blogpost"></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <a href="#" class="fs-5 fw-semibold d-block mb-3 text-warning">Warning</a>
                            <h3><a href="blog-single.html" class="text-inherit">
                                    How to Become a Data Scientist?
                                </a>
                            </h3>
                            <p>Nulla voluptate in facere saepe est alias et iste, accusantium sint enim!</p>
                            <!-- Media content -->
                            <div class="row align-items-center g-0 mt-4">
                                <div class="col-auto">
                                    <img src="{{ asset('assets/images/avatar/ppp.jpg') }}" alt="avatar"
                                        class="rounded-circle avatar-sm me-2">
                                </div>
                                <div class="col lh-1">
                                    <h5 class="mb-1">{{ $data['post']->author->name }}</h5>
                                    <p class="fs-6 mb-0">October 11, 2023</p>
                                </div>
                                <div class="col-auto">
                                    <p class="fs-6 mb-0">14 Min Read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
