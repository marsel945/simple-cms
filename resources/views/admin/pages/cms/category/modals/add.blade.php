<div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">
                    Create New Category
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.cms.category.create') }}" method="POST">
                    @csrf
                    <div class="mb-3 mb-2">
                        <label class="form-label" for="title">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Category Name"
                            id="title" required />
                        @error('title')
                            <small>{{ $message }}</small>
                        @enderror
                        <small>Field must contain a unique value</small>
                    </div>

                    <div class="mb-3 mb-2">
                        <label class="form-label">Parent</label>
                        <select class="selectpicker" data-width="100%" name="parent_id">
                            <option value="">Select</option>
                            @foreach ($data['categories'] as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
