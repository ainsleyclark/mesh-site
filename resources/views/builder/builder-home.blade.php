@extends('layout.docs')

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->

@endpush

@push('scripts')
<!-- =====================
    Page JS (Place in <script></script> tags)
    ===================== -->
<script src="{{ asset('js/builder.js') }}"></script>

@endpush

@section('docscontent')
<!-- =====================
    Docs Section - Main HTML
    ===================== -->
<article class="section-scroll" id="usage">
    <h2 class="b-b-light hash">What does it do?</h2>
    <p class="secondary-lead">
        The meshBuilder is an extremley powerful tool allowing you to import individual mesh components and set variables before downloading the compiled CSS. 
        <br>WRITE MORE ABOUT THE MESH BUILDER
    </p>

    <div class="builder-cont">
        <form>
            <div class="d-flex flex-column">
                <h3 class="c-secondary">Global</h3>
                <hr class="c-black">
                <div class="form-group">
                    <label for="testcheckbox">Normalize</label>
                    <input type="checkbox" name="test" id="normalize" class="component">
                </div>
                <div class="form-group">
                    <label for="testcheckbox">Normalize</label>
                    <input type="checkbox" name="test" id="position" class="component">
                </div>
                <div class="form-group">
                    <label for="testcheckbox">Normalize</label>
                    <input type="checkbox" name="test" id="card" class="component">
                </div>
                <h3 class="c-secondary">Utility</h3>

                <h3 class="c-secondary">Components</h3>


            </div>


            
            <label for="testcheckbox">Test Checkbox</label>
            <input type="checkbox" name="test" id="testcheckbox" class="component">
            <button type="button" class="btn btn-primary build-css">Build CSS</button>
        </form>
    </div>

</article>

@endsection