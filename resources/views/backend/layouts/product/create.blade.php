@extends('backend.app')

@section('title', 'Create Product')

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Product</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Product</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}

    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Create Product</h4>
                </div>
                <div class="card-body">
                    <form id="myForm" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control " name="title" placeholder="Enter Title"
                                        id="title" value="{{ old('title') }}">
                                    <span id="title_error" style="color: red; font-weight: bold;"></span>
                                </div>

                                <div class="form-group">
                                    <label for="category" class="form-label">Category:</label>
                                    <select class="form-control " name="category" id="category">
                                        <option value="">Select Category</option>
                                        <option value="stationary" {{ old('category') == 'stationary' ? 'selected' : '' }}>
                                            Stationary</option>
                                        <option value="management" {{ old('category') == 'management' ? 'selected' : '' }}>
                                            Management</option>
                                        <option value="service" {{ old('category') == 'service' ? 'selected' : '' }}>
                                            service
                                        </option>
                                    </select>
                                    <span id="category_error" style="color: red; font-weight: bold;"></span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price" class="form-label">Price:</label>
                                            <input type="number" step="any" class="form-control " name="price"
                                                placeholder="Enter Price" id="price" value="{{ old('price') }}">
                                            <span id="price_error" style="color: red; font-weight: bold;"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="quantity" class="form-label">Quantity:</label>
                                            <input type="number" class="form-control " name="quantity"
                                                placeholder="Enter Quantity" id="quantity" value="{{ old('quantity') }}">
                                            <span id="quantity_error" style="color: red; font-weight: bold;"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="feature_image" class="form-label">Feature Image:</label>
                                    <input type="file" class="dropify" name="feature_image" id="feature_image"
                                        value="{{ old('feature_image') }}">
                                    <span id="feature_image_error" style="color: red; font-weight: bold;"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="feature_details" class="form-label">Feature Details:</label>
                                    <textarea class="form-control" id="feature_details" name="feature_details" placeholder="...">{{ old('feature_details') }}</textarea>
                                    <span id="feature_details_error" style="color: red; font-weight: bold;"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="product_details" class="form-label">Product Details:</label>
                                    <textarea class="form-control" id="product_details" name="product_details" placeholder="...">{{ old('product_details') }}</textarea>
                                    <span id="product_details_error" style="color: red; font-weight: bold;"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="images" class="form-label">Additional Images:</label>
                            <input type="file" class="dropify" name="images[]" id="images" multiple>

                            <span id="images_error" style="color: red; font-weight: bold;"></span>
                            <span id="all_images_error" style="color: red; font-weight: bold;"></span>
                        </div>

                        <div id="file-list"
                            style="display: flex; gap: 20px; flex-wrap: wrap; align-items:center; justify-content: space-around; margin-bottom: 30px;">
                        </div>
                        <input type="hidden" name="media_files" id="media-files">

                    </form>
                    <div class="form-group">
                        <button id="submit" class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('product.index') }}" class="btn btn-danger me-2">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        // Multiple image select
        var allFiles = [];
        $('#images').on('change', function(e) {
            var newFiles = Array.from(e.target.files);

            // Append new files to the array of all selected files
            allFiles = allFiles.concat(newFiles);

            // Clear the input to allow re-selecting files
            $(this).val('');

            // Update the file list display
            updateFileList();
        });


        function updateFileList() {
            $('#file-list').empty(); // Clear the current list

            $.each(allFiles, function(index, file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var fileElement = '';
                    var fileExtension = file.name.split('.').pop().toLowerCase();

                    // Check file extension for images
                    if (['jpeg', 'png', 'jpg', 'gif', 'svg', 'webp'].includes(fileExtension)) {
                        fileElement = '<img src="' + e.target.result +
                            '" style="width: 100px; height: 100px; object-fit: cover; border-radious:5px;"/>';
                    }
                    // Check file extension for videos
                    else if (['avi', 'mpeg', 'mov', 'mp4'].includes(fileExtension)) {
                        fileElement =
                            '<video controls style="width: 100px; height: 100px; object-fit: cover;" muted>' +
                            '<source src="' + e.target.result + '" type="' + file.type + '">' +
                            'Your browser does not support the video tag.' +
                            '</video>';
                    }
                    // If the file is neither an image nor a video
                    else {
                        fileElement = '<p>Unsupported file format: ' + file.name + '</p>';
                    }

                    // Append the file preview and remove button to the file-list
                    $('#file-list').append(
                        '<div class="file-item" style="position: relative;">' +
                        fileElement +
                        '<span class="remove-file" data-index="' + index +
                        '" style="position: absolute; border-radious:5px; top: 5px; right: 5px; color: red; cursor: pointer; font-weight: bold;">&times;</span>' +
                        '</div>'
                    );
                };

                // Read the file as Data URL
                reader.readAsDataURL(file);
            });
        }

        // Remove file event handler
        $(document).on('click', '.remove-file', function() {
            var index = $(this).data('index');
            allFiles.splice(index, 1); // Remove the file from the array
            updateFileList(); // Update the file list display
        });

        $(document).ready(function() {
            // Initialize ClassicEditor instances
            let featureDetailsEditor, productDetailsEditor;

            ClassicEditor
                .create(document.querySelector('#feature_details'))
                .then(editor => {
                    featureDetailsEditor = editor; // Store the editor instance
                })
                .catch(error => {
                    console.error('Error initializing feature_details editor:', error);
                });

            ClassicEditor
                .create(document.querySelector('#product_details'))
                .then(editor => {
                    productDetailsEditor = editor; // Store the editor instance
                })
                .catch(error => {
                    console.error('Error initializing product_details editor:', error);
                });

            $('#submit').click(function(e) {
                e.preventDefault(); // Prevent the default form submission
                console.log('Feature Details Editor:', featureDetailsEditor.getData());
                console.log('Product Details Editor:', productDetailsEditor.getData());
                // Check if editors are initialized
                if (featureDetailsEditor && productDetailsEditor) {
                    // Update the hidden fields with the editor values
                    $('#feature_details').val(featureDetailsEditor.getData());
                    $('#product_details').val(productDetailsEditor.getData());
                } else {
                    console.error('Editor instances are not initialized.');
                    return;
                }

                var formData = new FormData($('#myForm')[0]);
                $.each(allFiles, function(index, file) {
                    formData.append('images[]', file);
                });

                $.ajax({
                    url: $('#myForm').attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Handle success

                        // Clear previous error messages
                        $('#title_error').text('');
                        $('#category_error').text('');
                        $('#feature_image_error').text('');
                        $('#price_error').text('');
                        $('#quantity_error').text('');
                        $('#feature_details_error').text('');
                        $('#product_details_error').text('');
                        $('#images_error').text('');
                        if (response.success) {
                            // Trigger toaster notification
                            toastr.success(response.message, 'Success', {
                                closeButton: true,
                                progressBar: true,
                                timeOut: 3000
                            });

                            // Redirect or reload after a short delay
                            setTimeout(function() {
                                window.location.href = "{{ route('product.index') }}";
                            }, 1000);
                        } else {
                            if (response.errors.title) {
                                $('#title_error').text(response.errors.title.join(', '));
                            }
                            if (response.errors.category) {
                                $('#category_error').text(response.errors.category.join(', '));
                            }
                            if (response.errors.feature_image) {
                                $('#feature_image_error').text(response.errors.feature_image
                                    .join(', '));
                            }
                            if (response.errors.price) {
                                $('#price_error').text(response.errors.price.join(', '));
                            }
                            if (response.errors.quantity) {
                                $('#quantity_error').text(response.errors.quantity.join(', '));
                            }
                            if (response.errors.feature_details) {
                                $('#feature_details_error').text(response.errors.feature_details
                                    .join(', '));
                            }
                            if (response.errors.product_details) {
                                $('#product_details_error').text(response.errors.product_details
                                    .join(', '));
                            }
                            if (response.errors.images) {
                                $('#images_error').text(response.errors.images.join(', '));
                            }
                        }

                    },
                    error: function(xhr) {
                        // Handle error
                        console.log('An error occurred');
                        // window.location.reload();
                    }
                });
            });
        });
    </script>
@endpush
