<script type="text/javascript">
    var table = $("#dataTableCategories");
    $(document).ready(function() {
        table.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.cms.category.datatable') }}",
                'type': "POST",
                'data': (d) => {
                    d._token = '{{ csrf_token() }}'
                }
            },
            columns: [{
                    name: "check",
                    data: "check",
                    orderable: false,
                    searchable: false,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "CATEGORY",
                    data: "category",
                    orderable: false,
                    searchable: false,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "slug",
                    data: "slug",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "posts",
                    data: "posts",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "date_created",
                    data: "date_created",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "date_updated",
                    data: "date_updated",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "status",
                    data: "status",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "",
                    data: "action",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
            ],
            columnDefs: [],
        });
    });
    $(".refresh").click(function() {
        table.DataTable().ajax.reload();
    });

    const editKonfigurasi = (button) => {
        let url_edit = $(button).data("url_edit");
        let url_update = $(button).data("url_update");
        $.ajax({
            url: url_edit,
            type: "GET",
            dataType: "json",
            success: (response) => {
                if (response.success) {
                    const modal = $("#editConfig");
                    const form = modal.find("form");
                    const select = $("#basicSelect");
                    form.attr("action", url_update);
                    form.find("textarea[name=value]").val(response.data.value);
                    form.find("textarea[name=description]").val(
                        response.data.description
                    );
                    form.find("input[name=key]").val(response.data.key);
                    form.find(
                        `select[name="status"] option[value="${response.data.status}"]`
                    ).attr("selected", true);

                    modal.on("show.bs.modal", (event) => {
                        const targetValue = $("#field-value");
                        const targetDescription = $("#field-description");
                        if (targetValue.length) {
                            CKEDITOR.replace("field-value");
                        }

                        if (targetDescription.length) {
                            CKEDITOR.replace("field-description");
                        }
                    });
                    modal.modal("show");
                }
            },
        });
    };
</script>
