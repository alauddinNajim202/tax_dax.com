@extends('backend.app')

@section('title', 'Fabrication Technology')

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Fabrication Technology</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fabrication Technology</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}

    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <form method="post" action="{{ route('fabrication-technology.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="video" class="form-label">Video:</label>
                            <input type="hidden" name="remove_video" value="0">
                            <input type="file" class="dropify @error('video') is-invalid @enderror" name="video"
                                id="video" accept="video/*"
                                data-default-file="{{ isset($fabricationTechnology->video) ? asset($fabricationTechnology->video) : '' }}">
                            @error('video')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if (isset($fabricationTechnology->video))
                            <div class="form-group">
                                <label for="video-preview" class="form-label">Video Preview:</label>
                                <video id="video-preview" width="100%" controls>
                                    <source src="{{ asset($fabricationTechnology->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="...">{{ old('description', $fabricationTechnology->description ?? '') }}</textarea>
                            @error('description')
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

        $(document).ready(function() {
            $('#video').on('change', function(event) {
                var file = event.target.files[0];
                var videoPreview = document.getElementById('video-preview');
                var reader = new FileReader();

                reader.onload = function(e) {
                    if (videoPreview) {
                        videoPreview.src = e.target.result;
                        videoPreview.load();
                    } else {
                        var videoContainer = document.createElement('div');
                        videoContainer.classList.add('form-group');
                        videoContainer.innerHTML = `
                            <label for="video-preview" class="form-label">Video Preview:</label>
                            <video id="video-preview" width="100%" controls>
                                <source src="${e.target.result}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        `;
                        document.querySelector('form').insertBefore(videoContainer, document
                            .querySelector('form').children[2]);
                    }
                };

                reader.readAsDataURL(file);
            });

            $('#video').on('dropify.afterClear', function(event, element) {
                $('input[name="remove_video"]').val('1');
                $('#video-preview').attr('src', '');
            });
        });
    </script>
@endpush
