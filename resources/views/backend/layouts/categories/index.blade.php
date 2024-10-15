@extends('backend.app')

@section('title', 'Category List')

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Categories List</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories Page</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}


    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom"
                    style="margin-bottom: 0; display: flex; justify-content: space-between;">
                    <h3 class="card-title">Categories Page Table</h3>
                    <button class="btn btn-success mb-2" id="createCategory">Add Category</button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>

                                    <th class="wd-20p border-bottom-0">Status</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- dynamic data --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Edit Category Modal -->
<!-- Modal for Create/Edit Category -->
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="category-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="category-id">
                    <div class="mb-3">
                        <label for="category-name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category-name" placeholder="Enter category name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@push('scripts')

<!-- jQuery and DataTables Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        var table = $('#categories-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('categories.index') }}", // Fetch the data using the route
    columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'status', name: 'status' },
        { data: 'action', name: 'action', orderable: false, searchable: false }
    ]
});


        // Open modal for creating a new category
        $('#createCategory').click(function () {
            $('#category-form').trigger("reset");
            $('#categoryModalLabel').text("Add Category");
            $('#categoryModal').modal('show');
            $('#category-id').val('');
        });

        // Open modal for editing a category
        $('body').on('click', '.editCategory', function () {
            var id = $(this).data('id');
            $.get("{{ url('categories') }}/" + id + "/edit", function (data) {
                $('#categoryModalLabel').text("Edit Category");
                $('#categoryModal').modal('show');
                $('#category-id').val(data.id);
                $('#category-name').val(data.name);
            });
        });

        // Save (create/edit) category
        $('#category-form').submit(function (e) {
    e.preventDefault();
    var id = $('#category-id').val();
    var url = id ? "categories/" + id : "{{ route('categories.store') }}";
    var method = id ? 'POST' : 'POST';

    $.ajax({
        url: url,
        type: method,
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            name: $('#category-name').val(),
        },
        success: function (response) {
            $('#categoryModal').modal('hide');
            $('#category-form').trigger("reset"); // Reset the form after submission
            table.ajax.reload(); // Reload the DataTable to show updated data
        },
        error: function (response) {
            alert(response.responseJSON.error);
        }
    });
});
    });
    </script>
@endpush
