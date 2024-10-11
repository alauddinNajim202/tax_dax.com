@extends('backend.app')

@section('title', 'About Us')

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">About Us</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}


    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <form method="post" action="{{ route('about-us.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Enter your name" id="name"
                                        value="{{ old('name', $aboutUs->name ?? '') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_name" class="form-label">Company Name:</label>
                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                        name="company_name" placeholder="Enter your company name" id="company_name"
                                        value="{{ old('company_name', $aboutUs->company_name ?? '') }}">
                                    @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="designation" class="form-label">Designation:</label>
                            <input type="text" class="form-control @error('designation') is-invalid @enderror"
                                name="designation" placeholder="Enter your designation" id="designation"
                                value="{{ old('designation', $aboutUs->designation ?? '') }}">
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="...">{{ old('description', $aboutUs->description ?? '') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class="form-label">Image:</label>
                            <input type="hidden" name="remove_image" value="0">
                            <input type="file" class="dropify @error('image') is-invalid @enderror" name="image"
                                id="image"
                                data-default-file="{{ isset($aboutUs->image) ? asset($aboutUs->image) : '' }}">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $(document).ready(function() {
            $('#signature').on('dropify.afterClear', function(event, element) {
                $('input[name="remove_signature"]').val('1');
                $(element.element).dropify('resetPreview');
            });

            $('#image').on('dropify.afterClear', function(event, element) {
                $('input[name="remove_image"]').val('1');
                $(element.element).dropify('resetPreview');
            });
        });
    </script>
@endpush
