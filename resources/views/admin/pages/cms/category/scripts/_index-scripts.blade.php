<script type="text/javascript">
    var table = $("#dataTableCategories");
    $(document).ready(function() {
        table.DataTable({
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
                    name: "title",
                    data: "title",
                    orderable: true,
                    searchable: true,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "slug",
                    data: "slug",
                    orderable: true,
                    searchable: true
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "posts",
                    data: "posts",
                    orderable: false,
                    searchable: false,
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
                    orderable: false,
                    searchable: false,
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
                    orderable: false,
                    searchable: false,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
            ],
            columnDefs: [],
        });
    });
</script>
