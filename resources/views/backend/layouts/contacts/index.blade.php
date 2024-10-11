@extends('backend.app')

@section('title', 'Review')

@push('styles')
    <style>
        .image-gallery img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 100px;
            height: 100px;
        }

        #image-preview {
            max-height: 90vh;
            /* Ensure the image doesn't exceed the viewport height */
            width: auto;
            margin: 0 auto;
        }

        .img-thumbnail {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            cursor: pointer;
        }

        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
    </style>
@endpush

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Contacts</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Table</a></li>
                <li class="breadcrumb-item active" aria-current="page">Client List</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-15p border-bottom-0">Phone Number</th>
                                    <th class="wd-15p border-bottom-0">Interest</th>
                                    <th class="wd-15p border-bottom-0">Problems</th>
                                    <th class="wd-15p border-bottom-0">Appointment Schedule</th>
                                    <th class="wd-15p border-bottom-0">Status</th>
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

    {{-- Contact Details Modal Start --}}
    <div class="modal fade" id="contactDetailsModal" tabindex="-1" role="dialog"
        aria-labelledby="contactDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactDetailsModalLabel">Contact Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- Contact Details will be dynamically populated here --}}
                    <div id="contact-details-content"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact Details Modal End --}}

    {{-- Image Viewer Modal Start --}}
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered"> <!-- Use modal-xl for larger modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    {{-- Adjust image size to be large and responsive --}}
                    <img id="image-preview" src="" class="img-fluid" style="max-width: 100%;" alt="Image Preview">
                </div>
            </div>
        </div>
    </div>
    {{-- Image Viewer Modal End --}}
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
                let dTable = $('#datatable').DataTable({
                    order: [],
                    lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "All"]
                    ],
                    processing: true,
                    responsive: true,
                    serverSide: true,

                    language: {
                        processing: `<div class="text-center">
                            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                            </div>`
                    },

                    scroller: {
                        loadingIndicator: false
                    },
                    pagingType: "full_numbers",
                    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                    ajax: {
                        url: "{{ route('contacts.index') }}",
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
                            data: 'email',
                            name: 'email',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'phone_number',
                            name: 'phone_number',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'interested_in',
                            name: 'interested_in',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'problems',
                            name: 'problems',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'appointment_schedule',
                            name: 'appointment_schedule',
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

                dTable.buttons().container().appendTo('#file_exports');
                new DataTable('#example', {
                    responsive: true
                });
            }
        });

        // Show Contact Details in Modal
        function showContactDetails(id) {
            event.preventDefault();
            let url = '{{ route('contacts.show', ':id') }}';
            url = url.replace(':id', id);

            $.ajax({
                type: "GET",
                url: url,
                success: function(data) {
                    // Format "Interested In" as a list
                    let interestedInList = '';
                    if (data.interested_in) {
                        let interestedInArray = JSON.parse(data.interested_in);
                        interestedInList = '<ul style="list-style-type: disc; padding-left: 20px;">';
                        interestedInArray.forEach(function(item) {
                            interestedInList += `<li>${item}</li>`;
                        });
                        interestedInList += '</ul>';
                    } else {
                        interestedInList = 'N/A';
                    }

                    // Format "Problems" as a list
                    let problemsList = '';
                    if (data.problems) {
                        let problemsArray = JSON.parse(data.problems);
                        problemsList = '<ul style="list-style-type: disc; padding-left: 20px;">';
                        problemsArray.forEach(function(item) {
                            problemsList += `<li>${item}</li>`;
                        });
                        problemsList += '</ul>';
                    } else {
                        problemsList = 'N/A';
                    }

                    // Format "Appointment Schedule" in human-readable format
                    let appointmentSchedule = '';
                    if (data.appointment_schedule) {
                        appointmentSchedule = moment(data.appointment_schedule).format('D MMM YYYY, h:mm A');
                    } else {
                        appointmentSchedule = 'N/A';
                    }

                    // Check if notes exist
                    let notes = data.notes ? data.notes : 'N/A';

                    // Display images if available
                    let imagesList = '';
                    if (data.photo_galleries && data.photo_galleries.length > 0) {
                        imagesList = '<div class="image-gallery">';
                        data.photo_galleries.forEach(function(image) {
                            let imageUrl = `{{ asset('') }}${image.image}`;
                            imagesList += `
                        <img src="${imageUrl}" alt="Contact Image" class="img-thumbnail" style="max-width: 100px; max-height: 100px; margin: 5px; cursor: pointer;" onclick="showImagePreview('${imageUrl}')">
                    `;
                        });
                        imagesList += '</div>';
                    } else {
                        imagesList = 'No images available';
                    }

                    // Populate the modal with the contact details
                    let content =
                        `
                            <p><strong>Name:</strong> ${data.firstName} ${data.lastName}</p>
                            <p><strong>Email:</strong> ${data.email}</p>
                            <p><strong>Phone:</strong> ${data.phone_number}</p>
                            <p><strong>Address:</strong> ${data.house_address}, ${data.city}, ${data.postal_code}</p>
                            <p><strong>Are You A:</strong> ${data.user_type}</p>
                            <p><strong>Consulted About:</strong> ${data.property_consult.charAt(0).toUpperCase() + data.property_consult.slice(1)}</p>
                            <p><strong>Interested In:</strong> ${interestedInList}</p>
                            <p><strong>Problems:</strong> ${problemsList}</p>
                            <p><strong>Appointment Schedule:</strong> ${appointmentSchedule}</p>
                            <p><strong>Notes:</strong> ${notes}</p>
                            <p><strong>Status:</strong> ${data.status}</p>
                            <p><strong>Images:</strong> ${imagesList}</p>
                        `;
                    $('#contact-details-content').html(content);
                    $('#contactDetailsModal').modal('show');
                },
                error: function(error) {
                    toastr.error('An error occurred while fetching the contact details.');
                }
            });
        }

        // Show Image Preview in Larger Modal
        function showImagePreview(imageUrl) {
            $('#image-preview').attr('src', imageUrl);
            $('#imageModal').modal('show');
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
            let url = '{{ route('contacts.status', ':id') }}';
            $.ajax({
                type: "GET",
                url: url.replace(':id', id),
                success: function(resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#datatable').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);
                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                },
                error: function(error) {
                    // location.reload();
                }
            });
        }

        // delete Confirm
        function showDeleteConfirm(id) {
            event.preventDefault();
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
                    deleteItem(id);
                }
            });
        }

        // Delete Button
        function deleteItem(id) {
            let url = '{{ route('contacts.destroy', ':id') }}';
            let csrfToken = '{{ csrf_token() }}';
            $.ajax({
                type: "DELETE",
                url: url.replace(':id', id),
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(resp) {
                    $('#datatable').DataTable().ajax.reload();
                    if (resp['t-success']) {
                        toastr.success(resp.message);
                    } else {
                        toastr.error(resp.message);
                    }
                },
                error: function(error) {
                    toastr.error('An error occurred. Please try again.');
                }
            });
        }
    </script>
@endpush
