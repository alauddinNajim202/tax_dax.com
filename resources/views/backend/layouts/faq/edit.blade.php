@extends('backend.app')

@section('title', 'FAQ Update')

@push('styles')
    <style>
        /* Styling for the form inputs */
        .form-control {
            border-radius: 8px;
        }

        /* Styling for error messages */
        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
@endpush

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Frequently Asked Questions</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">FAQ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER END --}}


    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <form method="POST" action="{{ route('faq.update', ['id' => $faq->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="question" class="form-label">Question:</label>
                            <input type="text" placeholder="Enter your question" id="question"
                                class="form-control @error('question') is-invalid @enderror" name="question"
                                value="{{ old('question', $faq->question) }}" />
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="answer" class="form-label">Answer:</label>
                            <input type="text" placeholder="Enter your answer" id="answer"
                                class="form-control @error('answer') is-invalid @enderror" name="answer"
                                value="{{ old('answer', $faq->answer) }}" />
                            @error('answer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('faq.index') }}" class="btn btn-danger me-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
