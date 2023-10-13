@extends('admin.index')

@push('customCss')
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" />

    <!-- FilePond Css -->
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Add New Post</h1>
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
            <div class=" col-12">
                <!-- Card -->
                <div class="card border-0 mb-4">
                    <!-- Card header -->
                    <div class="card-header">
                        <h4 class="mb-0">Create Post</h4>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div>
                            <form action="{{ route('admin.cms.posts.store') }}" method="POST">
                                @csrf
                                <div class="mb-3 col-md-12">
                                    <label for="image" class="form-label">Attachment</label>

                                    <input class="form-control text-dark" name="image" type="file" multiple>
                                </div>
                                <!-- Form -->
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <!-- Title -->
                                        <label for="postTitle" class="form-label">Title</label>
                                        <input type="text" id="postTitle" name="title" class="form-control text-dark"
                                            placeholder="Post Title">
                                        <small>Keep your post titles under 60 characters. Write
                                            heading that describe the topic content.
                                            Contextualize for Your Audience.</small>
                                    </div>
                                    <!-- Excerpt -->
                                    <div class="mb-3 col-md-12">
                                        <label for="Excerpt" class="form-label">Excerpt</label>
                                        <textarea rows="3" id="Excerpt" class="form-control text-dark" placeholder="Excerpt" name="excerpt"></textarea>
                                        <small>A short extract from writing.</small>
                                    </div>
                                    <!-- Category -->
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Category</label>
                                        <select class="selectpicker" data-width="100%" name="category_id">
                                            <option value="">--Select Category--</option>
                                            @foreach ($data['categories'] as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- Editor -->
                                <div class="mt-2 mb-4">
                                    <textarea id="editor" name="content">
                                        {{-- <h4>One Ring to Rule Them All</h4> --}}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Publish</button>
                                <!-- button -->
                                <a href="{{ route('admin.cms.posts') }}" class="btn btn-outline-secondary">
                                    Cancel
                                </a>
                            </form>
                        </div>

                    </div>
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

    <!-- FilePond Js -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>


    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                process: "{{ route('admin.cms.post.upload.attachment') }}",
                revert: "{{ route('admin.cms.post.delete.attachment') }}",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            },
        });
        $(document).ready(function() {

            CKEDITOR.replace('editor');
        })
    </script>
@endpush
