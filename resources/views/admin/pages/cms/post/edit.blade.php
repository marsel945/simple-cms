@extends('admin.index')

@push('customCss')
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" />
@endpush

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Edit Post</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.cms.overview') }}">CMS</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Add New Post
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('admin.cms.posts') }}" class="btn btn-outline-secondary">Back to All Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                <!-- Card -->
                <div class="card border-0 mb-4">
                    <!-- Card header -->
                    <div class="card-header">
                        <h4 class="mb-0">Edit Post</h4>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="">
                            <form action="{{ route('admin.cms.post.update', $data['post']->slug) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <!-- Title -->
                                        <label for="postTitle" class="form-label">Title</label>
                                        <input type="text" id="postTitle" name="title" class="form-control text-dark"
                                            placeholder="Post Title" value="{{ $data['post']->title }}">
                                        <small>Keep your post titles under 60 characters. Write
                                            heading that describe the topic content.
                                            Contextualize for Your Audience.</small>
                                    </div>
                                    <!-- Excerpt -->
                                    <div class="mb-3 col-md-12">
                                        <label for="Excerpt" class="form-label">Excerpt</label>
                                        <textarea rows="3" id="Excerpt" class="form-control text-dark" placeholder="Excerpt" name="excerpt">{{ $data['post']->excerpt }}</textarea>
                                        <small>A short extract from writing.</small>
                                    </div>
                                    <!-- Category -->
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Category</label>
                                        <select class="selectpicker" data-width="100%" name="category_id">

                                            <option value="">--Select Category--</option>
                                            @foreach ($data['categories'] as $category)
                                                @if ($data['post']->category_id == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->title }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <!-- Editor -->
                                <div class="mt-2 mb-4">
                                    <textarea id="editor" name="content">
                                        {!! $data['post']->content !!}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <!-- button -->
                                <a href="#" class="btn btn-outline-secondary">
                                    Cancel
                                </a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                <!-- Card -->
                <div class="card mt-4 mt-lg-0 mb-4">
                    <!-- Card Header -->
                    <div class="card-header d-lg-flex">
                        <h4 class="mb-0">Post Info</h4>
                    </div>
                    <!-- List Group -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="text-body">Post Slug</span>
                            <h5>{{ $data['post']->slug }}</h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Status</span>
                            <h5>
                                @if ($data['post']->status == 'published')
                                    <span class="badge-dot bg-success d-inline-block me-1"></span>Published
                                @elseif ($data['post']->status == 'draft')
                                    <span class="badge-dot bg-warning d-inline-block me-1"></span>Draft
                                @elseif ($data['post']->status == 'scheduled')
                                    <span class="badge-dot bg-info d-inline-block me-1"></span>Scheduled
                                @endif
                            </h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Created by</span>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt=""
                                    class="avatar-sm rounded-circle">
                                <div class="ms-2">
                                    <h5 class="mb-n1">{{ $data['post']->author->name }}</h5>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Created at</span>
                            <h5>{{ date('d M Y H:i', strtotime($data['post']->created_at)) }}</h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Updated at</span>
                            <h5>{{ date('d M Y H:i', strtotime($data['post']->updated_at)) }}</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('customJsQuery')
    <script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
    <!--CKEDITOR -->
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function() {

            CKEDITOR.replace('editor');
        })
    </script>
@endpush
