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
                        <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Write a Category"
                            id="title" required />
                        <small>Field must contain a unique value</small>
                    </div>
                    <div class="mb-3 mb-2">
                        <label class="form-label">Slug</label>
                        <label for="basic-url" class="form-label">Your vanity URL</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon3">https://example.com</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                name="slug" />
                        </div>
                        <small>Field must contain a unique value</small>
                    </div>
                    <div class="mb-3 mb-2">
                        <label class="form-label">Parent</label>
                        <select class="selectpicker" data-width="100%" name="parent_id">
                            <option value="">Select</option>
                            <option value="1">Course</option>
                            <option value="1">Tutorial</option>
                            <option value="2">Workshop</option>
                            <option value="2">Company</option>
                        </select>
                    </div>
                    <div class="mb-3 mb-3">
                        <label class="form-label">Description</label>
                        <div id="editor">
                            <br />
                            <h4>One Ring to Rule Them All</h4>
                            <br />
                            <p>
                                Three Rings for the
                                <i> Elven-kingsunder</i> the sky, <br />
                                Seven for the <u>Dwarf-lords</u> in halls of stone, Nine for
                                Mortal Men, <br />
                                doomed to die, One for the Dark Lord on his dark throne.
                                <br />
                                In the Land of Mordor where the Shadows lie.
                                <br />
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Enabled</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="customSwitch1" checked />
                            <label class="form-check-label" for="customSwitch1"></label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                        <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
