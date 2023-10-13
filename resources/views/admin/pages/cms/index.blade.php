@extends('admin.index')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div class="">
                        <h1 class="mb-1 h2 fw-bold">CMS Dashboard</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">CMS</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Overview
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('admin.cms.posts.create') }}" class="btn btn-primary">New Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <span class="fs-6 text-uppercase fw-semibold">Total Posts</span>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <div class="lh-1">
                                <h2 class="h1 fw-bold mb-1">{{ $data['total_post'] }}</h2>
                                <span>100Last 30Days</span>
                            </div>
                            <div>
                                <span class="bg-light-primary icon-shape icon-xl rounded-3 text-dark-primary">
                                    <i class="mdi mdi-text-box-multiple mdi-24px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <span class="fs-6 text-uppercase fw-semibold">USers</span>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <div class="lh-1">
                                <h2 class="h1 fw-bold mb-1">{{ $data['total_user'] }}</h2>
                                <span>1.5k in 30Days</span>
                            </div>
                            <div>
                                <span class="bg-light-success icon-shape icon-xl rounded-3 text-dark-success">
                                    <i class="mdi mdi-account-multiple mdi-24px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height">
                        <h4 class="mb-0">Recent Posts</h4>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-hover table-centered">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">POST</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data['posts'] as $post)
                                    <tr>
                                        <td>
                                            <h5 class="mb-0">
                                                <a href="#" class="text-inherit">
                                                    {{ $post->title }}
                                                </a>
                                            </h5>
                                        </td>
                                        <td>
                                            <a href="#" class="text-inherit">{{ $post->category->title }}</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-7.jpg" alt=""
                                                    class="rounded-circle avatar-xs me-2">
                                                <h5 class="mb-0">{{ $post->author->name }}</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                            Draft
                                        </td>
                                        <td>
                                            <span class="dropdown dropstart">
                                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                    role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                    <span class="dropdown-header">Settings</span>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-edit dropdown-item-icon"></i>Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-move dropdown-item-icon"></i>Move
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-copy dropdown-item-icon"></i>Copy
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-toggle-left dropdown-item-icon"></i>Publish
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-trash dropdown-item-icon"></i>Delete
                                                    </a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
