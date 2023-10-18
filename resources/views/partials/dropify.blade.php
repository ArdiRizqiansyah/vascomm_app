@push('after-styles')
    <link rel="stylesheet" href="{{ asset('vendor/dropify/fonts/*') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dropify/css/dropify.min.css') }}">

    <style>
        .dropify-wrapper .dropify-message .file-icon p{
            font-size: 16px !important;
        }
    </style>
@endpush

@push('after-scripts')
    <script src="{{ asset('vendor/dropify/js/dropify.min.js') }}"></script>

    <script>
        $('.dropify').dropify();
    </script>
@endpush