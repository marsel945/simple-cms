@extends('pages.admin.index')

@push('customCss')
    <!-- Datatable Css -->
    <link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div class="">
                        <h1 class="mb-1 h2 fw-bold">All Posts</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">CMS</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    All Post
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
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">
                    <!-- Card Header -->
                    <div class="card-header  p-0">
                        <ul class="nav nav-lb-tab border-bottom-0" id="tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-post-tab" data-bs-toggle="pill" href="#all-post"
                                    role="tab" aria-controls="all-post" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="published-tab" data-bs-toggle="pill" href="#published"
                                    role="tab" aria-controls="published" aria-selected="false">Published</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="scheduled-tab" data-bs-toggle="pill" href="#scheduled"
                                    role="tab" aria-controls="scheduled" aria-selected="false">Scheduled</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="draft-tab" data-bs-toggle="pill" href="#draft" role="tab"
                                    aria-controls="draft" aria-selected="false">Draft</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="deleted-tab" data-bs-toggle="pill" href="#deleted" role="tab"
                                    aria-controls="deleted" aria-selected="false">Deleted</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-4 row">
                        <!-- Form -->
                        <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" placeholder="Search Post" />
                        </form>
                    </div>
                    <div>
                        <div class="tab-content" id="tabContent">
                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="all-post" role="tabpanel"
                                aria-labelledby="all-post-tab">
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table
                                        class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox table-centered table-hover"
                                        id="dataTablePosts">
                                        <!-- Table Head -->
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="checkAll" />
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">POST</th>
                                                {{-- <th scope="col">TYPE</th> --}}
                                                <th scope="col">CATEGORY</th>
                                                <th scope="col">DATE</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card Footer -->

                    <!--
                                                    <div class="card-footer">
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination justify-content-center mb-0">
                                                                <li class="page-item disabled">
                                                                    <a class="page-link mx-1 rounded" href="#" tabindex="-1"
                                                                        aria-disabled="true"><i class="mdi mdi-chevron-left"></i></a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a class="page-link mx-1 rounded" href="#">1</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link mx-1 rounded" href="#">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link mx-1 rounded" href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link mx-1 rounded" href="#"><i
                                                                            class="mdi mdi-chevron-right"></i></a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>

                                                -->
                </div>
            </div>
        </div>
    </section>
@endsection
@push('customJsQuery')
    <script src="{{ asset('assets/js/admin/datatable_index.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/r-2.4.1/datatables.min.js"></script>
    @include('pages.admin.cms.post.scripts._index-scripts')
@endpush
