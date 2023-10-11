@extends('pages.admin.index')

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
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox"
                            id="dataTableCategories">
                            <thead class="table-light">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th>CATEGORY</th>
                                    <th>SLUG</th>
                                    <th>POSTS</th>
                                    <th> DATE CREATED</th>
                                    <th>
                                        DATE UPDATED
                                    </th>
                                    <th>
                                        STATUS
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    @include('pages.admin.cms.category.modals.add')
@endsection

@push('customJsQuery')
    <script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>


    <script src="{{ asset('assets/js/vendors/editor.js') }}"></script>
    <script src="{{ asset('assets/js/admin/datatable_index.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/r-2.4.1/datatables.min.js"></script>
    @include('pages.admin.cms.category.scripts._index-scripts')
@endpush
