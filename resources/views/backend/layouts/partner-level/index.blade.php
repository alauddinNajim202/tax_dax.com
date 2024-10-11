@extends('backend.app')

@section('title', 'Partner Level')

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Partner Level</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Partner Level List</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom"
                    style="margin-bottom: 0; display: flex; justify-content: space-between;">
                    <h3 class="card-title">Partner Level List</h3>
                    <a class="btn btn-primary" data-bs-target="#createModal" data-bs-toggle="modal"
                        href="javascript:void(0)" onclick="showCreateModal()">Add New</a>
                </div>

                {{-- CREATE MODAL START --}}
                <div class="modal fade" id="createModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label text-muted">Name:</label>
                                    <select id="createPartnerLevelName" class="form-control">
                                        <option value="">Select Partner Level</option>
                                        <option value="Bronze Partner">Bronze Partner</option>
                                        <option value="Silver Partner">Silver Partner</option>
                                        <option value="Gold Partner">Gold Partner</option>
                                        <option value="Platinum Partner">Platinum Partner</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-muted">Min Units Sold:</label>
                                    <input type="number" id="createMinUnitsSold" class="form-control"
                                        placeholder="Enter Minimum Units Sold">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-muted">Max Units Sold:</label>
                                    <input type="number" id="createMaxUnitsSold" class="form-control"
                                        placeholder="Enter Maximum Units Sold">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-muted">Discount Percentage:</label>
                                    <input type="number" id="createDiscountPercentage" class="form-control"
                                        placeholder="Enter Discount Percentage">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" onclick="storePartnerLevel()">Save</button>
                                <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- CREATE MODAL END --}}

                {{-- EDIT MODAL START --}}
                <div class="modal fade" id="editModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label text-muted">Name:</label>
                                    <select id="editPartnerLevelName" class="form-control">
                                        <option value="">Select Partner Level</option>
                                        <option value="Bronze Partner">Bronze Partner</option>
                                        <option value="Silver Partner">Silver Partner</option>
                                        <option value="Gold Partner">Gold Partner</option>
                                        <option value="Platinum Partner">Platinum Partner</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-muted">Min Units Sold:</label>
                                    <input type="number" id="editMinUnitsSold" class="form-control"
                                        placeholder="Enter Minimum Units Sold">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-muted">Max Units Sold:</label>
                                    <input type="number" id="editMaxUnitsSold" class="form-control"
                                        placeholder="Enter Maximum Units Sold">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-muted">Discount Percentage:</label>
                                    <input type="number" id="editDiscountPercentage" class="form-control"
                                        placeholder="Enter Discount Percentage">
                                </div>
                                <input type="hidden" id="editPartnerLevelId">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" onclick="updatePartnerLevel()">Save</button>
                                <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- EDIT MODAL END --}}

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Min Units Sold</th>
                                    <th class="wd-15p border-bottom-0">Max Units Sold</th>
                                    <th class="wd-15p border-bottom-0">Discount Percentage</th>
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                }
            });

            if (!$.fn.DataTable.isDataTable('#datatable')) {
                $('#datatable').DataTable({
                    order: [],
                    lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "All"]
                    ],
                    processing: true,
                    responsive: true,
                    serverSide: true,

                    language: {
                        processing: '<div class="text-center"><div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="visually-hidden">Loading...</span></div></div>'
                    },

                    scroller: {
                        loadingIndicator: false
                    },
                    pagingType: "full_numbers",
                    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                    ajax: {
                        url: "{{ route('partner-level.index') }}",
                        type: "GET",
                    },

                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'min_units_sold',
                            name: 'min_units_sold',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'max_units_sold',
                            name: 'max_units_sold',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'discount_percentage',
                            name: 'discount_percentage',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'status',
                            name: 'status',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                });
            }
        });

        // storing data
        function showCreateModal() {
            $('#createPartnerLevelName').val('');
            $('#createMinUnitsSold').val('');
            $('#createMaxUnitsSold').val('');
            $('#createDiscountPercentage').val('');
            $('#createModal').modal('show');
        }

        function storePartnerLevel() {
            let name = $('#createPartnerLevelName').val();
            let minUnitsSold = $('#createMinUnitsSold').val();
            let maxUnitsSold = $('#createMaxUnitsSold').val();
            let discountPercentage = $('#createDiscountPercentage').val();

            if (name.trim() === '' || discountPercentage === '') {
                toastr.error('Please fill in all required fields.');
                return;
            }

            $.ajax({
                url: "{{ route('partner-level.store') }}",
                type: "POST",
                data: {
                    name: name,
                    min_units_sold: minUnitsSold,
                    max_units_sold: maxUnitsSold,
                    discount_percentage: discountPercentage
                },
                success: function(response) {
                    if (response.success) {
                        $('#createModal').modal('hide');
                        $('#datatable').DataTable().ajax.reload();
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while storing the data.');
                }
            });
        }

        // Edit data
        function editPartnerLevel(id) {
            $.ajax({
                url: '{{ route('partner-level.edit', ':id') }}'.replace(':id', id),
                type: 'GET',
                success: function(response) {
                    if (response.success) {
                        $('#editPartnerLevelName').val(response.data.name);
                        $('#editMinUnitsSold').val(response.data.min_units_sold);
                        $('#editMaxUnitsSold').val(response.data.max_units_sold);
                        $('#editDiscountPercentage').val(response.data.discount_percentage);
                        $('#editPartnerLevelId').val(response.data.id);
                        $('#editModal').modal('show');
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while fetching the data.');
                }
            });
        }

        // update data
        function updatePartnerLevel() {
            let id = $('#editPartnerLevelId').val();
            let name = $('#editPartnerLevelName').val();
            let minUnitsSold = $('#editMinUnitsSold').val();
            let maxUnitsSold = $('#editMaxUnitsSold').val();
            let discountPercentage = $('#editDiscountPercentage').val();

            if (name.trim() === '' || discountPercentage === '') {
                toastr.error('Please fill in all required fields.');
                return;
            }

            $.ajax({
                url: "{{ route('partner-level.update', ':id') }}".replace(':id', id),
                type: "PUT",
                data: {
                    name: name,
                    min_units_sold: minUnitsSold,
                    max_units_sold: maxUnitsSold,
                    discount_percentage: discountPercentage
                },
                success: function(response) {
                    if (response.success) {
                        $('#editModal').modal('hide');
                        $('#datatable').DataTable().ajax.reload();
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while updating the data.');
                }
            });
        }

        // Status Change Confirm Alert
        function showStatusChangeAlert(id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to update the status?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                    statusChange(id);
                }
            });
        }

        // Status Change
        function statusChange(id) {
            let url = '{{ route('partner-level.status', ':id') }}';
            $.ajax({
                type: "GET",
                url: url.replace(':id', id),
                success: function(resp) {
                    $('#datatable').DataTable().ajax.reload();
                    if (resp.success) {
                        toastr.success(resp.message);
                    } else {
                        toastr.error(resp.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while updating the status.');
                }
            });
        }

        // Delete Confirmation Alert
        function showDeleteConfirm(id) {
            Swal.fire({
                title: 'Are you sure you want to delete this record?',
                text: 'If you delete this, it will be gone forever.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    deletePartnerLevel(id);
                }
            });
        }

        // Delete Data
        function deletePartnerLevel(id) {
            $.ajax({
                url: '{{ route('partner-level.destroy', ':id') }}'.replace(':id', id),
                type: 'DELETE',
                success: function(response) {
                    if (response.success) {
                        $('#datatable').DataTable().ajax.reload();
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while deleting the data.');
                }
            });
        }
    </script>
@endpush
