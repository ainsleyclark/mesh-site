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
<script>
let components = document.querySelectorAll('.component');

for (let i = 0; i < components.length; i++) {
    console.log(components[i].);
}


</script>



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
        <form action="/builder/ajax/render">
            <label for="testcheckbox">Test Checkbox</label>
            <input type="checkbox" name="test" id="testcheckbox" class="component">
            <button type="submit" class="btn btn-primary build-css">Build CSS</button>
        </form>
    </div>

</article>

@endsection