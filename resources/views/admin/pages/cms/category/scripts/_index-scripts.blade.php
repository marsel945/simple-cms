<script type="text/javascript">
    var table = $("#dataTableCategories");
    $(document).ready(function() {
        table.DataTable({
            processing: true,
            serverSide: true,
            language:{
                paginate:{
                    first: '<i class="mdi-chevron-double-left"></i>',
                    last: '<i class="mdi-chevron-double-right"></i>',
                    previous: '<i class="mdi mdi-chevron-left"></i>',
                    next : '<i class="mdi mdi-chevron-right"></i>'
                }
            },
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
                    searchable: true,
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
                    name: "action",
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

    const editCategory = (button) =>{
        let url_edit = $(button).data('url_edit');
        let url_update = $(button).data('url_update');

        $.ajax({
            url : url_edit,
            type: 'GET',
            dataType: 'json',
            success:(response) =>{
                if(response.success){
                    const modal = $('#editCategory');
                    const form = modal.find('form');
                    const select = $('#basicSelect');
                    form.attr('action', url_update);
                    form.find('input[name=title]').val(response.data.title);
                    form.find(
                        `select[name="parent_id"] option[value="${response.data.parent_id}"]`
                        ).attr('selected', true)
                        
                        modal.modal('show')
                    }
                    
            }
        })
    }
</script>
