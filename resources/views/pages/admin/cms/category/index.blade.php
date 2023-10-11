@extends('pages.admin.index')


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
                        <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
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
                                <tr class="accordion-toggle collapsed" id="accordion1" data-bs-toggle="collapse"
                                    data-bs-parent="#accordion1" data-bs-target="#collapseOne">
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck1">
                                            <label class="form-check-label" for="categoryCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit position-relative">
                                            <h5 class="mb-0 text-primary-hover"><i
                                                    class="fe fe-chevron-down fs-4 me-2 text-muted position-absolute ms-n4 mt-1"></i>
                                                Courses
                                            </h5>
                                        </a>
                                    </td>
                                    <td>
                                        desgincourse
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown1" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
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
                                <tr id="collapseOne">
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck2">
                                            <label class="form-check-label" for="categoryCheck2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover ms-3">Child Category</h5>
                                        </a>
                                    </td>
                                    <td>
                                        childcategory
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-warning">Draft</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown2">
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
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck3">
                                            <label class="form-check-label" for="categoryCheck3"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                        </a>
                                    </td>
                                    <td>
                                        Workshop
                                    </td>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
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
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck4">
                                            <label class="form-check-label" for="categoryCheck4"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                        </a>
                                    </td>
                                    <td>
                                        tutorial
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown4" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
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
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck5">
                                            <label class="form-check-label" for="categoryCheck5"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Company</h5>
                                        </a>
                                    </td>
                                    <td>
                                        company
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown5" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
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
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck6">
                                            <label class="form-check-label" for="categoryCheck6"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Technology</h5>
                                        </a>
                                    </td>
                                    <td>
                                        technology
                                    </td>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown6" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
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
                                <tr>
                                    <td class="align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck7">
                                            <label class="form-check-label" for="categoryCheck7"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Business</h5>
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        business
                                    </td>
                                    <td class="align-middle">
                                        2
                                    </td>
                                    <td class="align-middle">
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-warning">Draft</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown7" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
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
                                <tr>
                                    <td class="align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck8">
                                            <label class="form-check-label" for="categoryCheck8"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Technology</h5>
                                        </a>
                                    </td>
                                    <td>
                                        technology
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown8" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
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
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck9">
                                            <label class="form-check-label" for="categoryCheck9"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Business</h5>
                                        </a>
                                    </td>
                                    <td>
                                        business
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown9" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
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
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck10">
                                            <label class="form-check-label" for="categoryCheck10"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                        </a>
                                    </td>
                                    <td>
                                        tutorial
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown10" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
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
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck11">
                                            <label class="form-check-label" for="categoryCheck11"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                        </a>
                                    </td>
                                    <td>
                                        workshop
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        16 Oct, 2020
                                    </td>
                                    <td>16 Nov, 2020</td>
                                    <td>
                                        <span class="badge bg-success">Live</span>
                                    </td>
                                    <td class="text-muted align-middle border-bottom-0 ">
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown11" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
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
@endpush
