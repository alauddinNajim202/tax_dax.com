@extends('backend.app')

@section('title', 'FAQ Create')

@push('styles')
    <style>
        /* Styling for the FAQ fields */
        .faq-field {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        /* Styling for the remove button */
        .remove-faq-button {
            margin-top: 10px;
        }

        /* Styling for the button group */
        .button-group {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

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
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER END --}}


    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <div style="display: flex; justify-content:end;">
                        <button type="button" class="btn btn-primary" onclick="addFaqField()">Add FAQ</button>
                    </div>
                    <form class="mt-4" id="faq_form" method="POST" action="{{ route('faq.store') }}">
                        @csrf
                        <div id="faq_fields_container">
                            @foreach (old('questions', ['']) as $index => $oldQuestion)
                                <div class="faq-field">
                                    <div class="form-group">
                                        <label class="form-label">Question:</label>
                                        <input type="text"
                                            class="form-control question @error('questions.' . $index) is-invalid @enderror"
                                            placeholder="Enter your question" name="questions[]" value="{{ $oldQuestion }}"
                                            required>
                                        @error('questions.' . $index)
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Answer:</label>
                                        <input type="text"
                                            class="form-control answer @error('answers.' . $index) is-invalid @enderror"
                                            placeholder="Enter your answer" name="answers[]"
                                            value="{{ old('answers.' . $index) }}" required>
                                        @error('answers.' . $index)
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if ($index > 0)
                                        <button type="button" class="btn btn-danger remove-faq-button"
                                            onclick="removeFaqField(this)">Remove</button>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{ route('faq.index') }}" class="btn btn-danger ">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let nextFaqFieldId = {{ count(old('questions', [''])) }};

        function addFaqField() {
            let faqFieldsContainer = document.getElementById("faq_fields_container");
            let newFaqField = document.createElement("div");
            newFaqField.className = "faq-field";
            newFaqField.innerHTML = `
                <div class="form-group">
                    <label class="form-label">Question:</label>
                    <input type="text" class="form-control question" placeholder="Enter your question" name="questions[]" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Answer:</label>
                    <input type="text" class="form-control answer" placeholder="Enter your answer" name="answers[]" required>
                </div>
                <button type="button" class="btn btn-danger remove-faq-button" onclick="removeFaqField(this)">Remove</button>
            `;
            faqFieldsContainer.appendChild(newFaqField);
            nextFaqFieldId++;
        }

        function removeFaqField(button) {
            button.parentElement.remove();
            nextFaqFieldId--;
        }
    </script>
@endpush
