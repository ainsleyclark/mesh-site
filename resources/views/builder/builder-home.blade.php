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
        <br>This is achievable by using our scss files, by editing the <code class="inline">_variables.scss</code> file to edit the component & utility variables and the <code class="inline">mesh.scss</code> file to import different files.
        <br>That being said its extremley easy and quick to do so using our builder.
    </p>
    <p>
        <strong>Note:</strong> We only support import & colors for the time being. There are more features coming, if you want to see something included in the meshBuilder that isn't already, visit the github page to create a feature request.
    </p>
</article>
<article class="section-scroll" id="import">
    <h2 class="b-b-light hash">Import</h2>
    <p class="secondary-lead">
        Please select what features you would like to include in your project. Please note that the mesh grid (grid, display, flex & order) and colors will automatically be included. This helps to prevent any errors when compiling the scss.
    </p>
    <div class="builder-cont my-3">
        <div class="row">
            <div class="col-6">
                <form>
                    <div class="d-flex flex-column">
                        <h3>Global</h3>
                        <div class="form-group">
                            <label for="normalize">Normalize</label>
                            <input type="checkbox" data-type="global" id="normalize" class="component" checked>
                        </div>
                        <h3>Utility</h3>
                        <div class="form-group">
                            <label for="spacing">Spacing</label>
                            <input type="checkbox" data-type="util" id="spacing" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="checkbox" data-type="util" id="position" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="sizing">Sizing</label>
                            <input type="checkbox" data-type="util" id="sizing" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="checkbox" data-type="util" id="type" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="borders">Borders</label>
                            <input type="checkbox" data-type="util" id="borders" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="spacers">Spacers</label>
                            <input type="checkbox" data-type="util" id="spacers" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="float">Float</label>
                            <input type="checkbox" data-type="util" id="float" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="visibility">Visibility</label>
                            <input type="checkbox"  data-type="util" id="visibility" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="media">Media</label>
                            <input type="checkbox" data-type="util" id="media" class="component" checked>
                        </div>
                        <h3>Components</h3>
                        <div class="form-group">
                            <label for="alerts">Alerts</label>
                            <input type="checkbox" data-type="components" id="alerts" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="badges">Badges</label>
                            <input type="checkbox" data-type="components" id="badges" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="breadcrumb">Breadcrumb</label>
                            <input type="checkbox" data-type="components" id="breadcrumb" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="button">Button</label>
                            <input type="checkbox" data-type="components" id="button" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="card">Card</label>
                            <input type="checkbox" data-type="components" id="card" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="collapse">Collapse</label>
                            <input type="checkbox" data-type="components" id="collapse" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="epic">Epic</label>
                            <input type="checkbox" data-type="components" id="epic" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="form">Form</label>
                            <input type="checkbox" data-type="components" id="form" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="list">List</label>
                            <input type="checkbox" data-type="components" id="list" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="modal">Modal</label>
                            <input type="checkbox" data-type="components" id="modal" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="pagination">Pagination</label>
                            <input type="checkbox" data-type="components" id="pagination" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="table">Table</label>
                            <input type="checkbox" data-type="components" id="table" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="tabs">Tabs</label>
                            <input type="checkbox" data-type="components" id="tabs" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="tooltip">Tooltip</label>
                            <input type="checkbox" data-type="components" id="tooltip" class="component" checked>
                        </div>
                        <div class="form-group">
                            <label for="toast">Toast</label>
                            <input type="checkbox" data-type="components" id="toast" class="component" checked>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <pre class="variables highlight"><code class="scss hljs">@import 'base/normalize';
@import 'util/_spacing';
@import 'util/_position';
@import 'util/_sizing';
@import 'util/_type';
@import 'util/_borders';
@import 'util/_spacers';
@import 'util/_float';
@import 'util/_visibility';
@import 'util/_media';
@import 'components/_alerts';
@import 'components/_badges';
@import 'components/_breadcrumb';
@import 'components/_button';
@import 'components/_card';
@import 'components/_collapse';
@import 'components/_epic';
@import 'components/_list';
@import 'components/_modal';
@import 'components/_pagination';
@import 'components/_table';
@import 'components/_tabs';
@import 'components/_tooltip';
@import 'components/_toast';</code></pre>
            </div>

        </div>

    </div>

</article>

<article class="section-scroll" id="colors">
    <h2 class="b-b-light hash">Colors</h2>
    <p class="secondary-lead">
        Something about colors
    </p>
</article>
<button type="button" class="btn btn-primary build-css">Build CSS</button>

@endsection