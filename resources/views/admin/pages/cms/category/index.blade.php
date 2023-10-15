@extends('admin.index')

@push('customCss')
    <!-- Bootsrap Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" />

    <!-- Datatable Css -->
    <link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Category</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">CMS</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Category
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Add
                            New
                            Category</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4 ">
                    <!-- Card Header -->
                    <div class="card-header border-bottom-0">
                        <!-- Form -->
                        <form class="d-flex align-items-center ">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" placeholder="Search Category">
                        </form>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table mb-0 text-nowrap table-centered table-hover table-centered"
                            id="dataTableCategories" style="width: 100%;">
                            <thead class="table-light">
                                <tr>
                                    <th>TITLE</th>
                                    <th>SLUG</th>
                                    <th>POSTS</th>
                                    <th>DATE CREATED</th>
                                    <th>DATE UPDATED</th>
                                    <th>STATUS</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['categories'] as $category)
                                    <tr>
                                        <td>
                                            <a href="#" class="text-inherit">
                                                <h5 class="mb-0 text-primary-hover">{{ $category->title }}</h5>
                                            </a>
                                        </td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->post->count() }}</td>
                                        <td>{{ date('d M Y H:i:s', strtotime($category->created_at)) }}</td>
                                        <td>{{ date('d M Y H:i:s', strtotime($category->updated_at)) }}</td>
                                        <td>
                                            @if ($category->status == 'draft')
                                                <span class="badge bg-warning">Draft</span>
                                            @else
                                                <span class="badge bg-success">Live</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="dropdown dropstart">
                                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                    role="button" id="courseDropdown3" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                                    <span class="dropdown-header">Action</span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-inbox dropdown-item-icon"></i>Moved
                                                        Draft</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Delete</a>
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


@push('customJsQuery')
    <script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

    @include('admin.pages.cms.category.scripts._index-scripts');
@endpush

@section('modal')
    @include('admin.pages.cms.category.modals.add')
@endsection
