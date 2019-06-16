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
<script src="{{ asset('js/docs/toast.js') }}"></script>
@endpush

@section('docscontent')
<!-- =====================
    Docs Section - Main HTML
    ===================== -->

<!-- Variables -->
<article class="section-scroll" id="variables">

    <div class="toast pin-b w-100">


    </div>

    
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Create 
    </p>

    <div class="toast p-relative">
        <div class="toast-body bg-primary">
            <span>Mmmmmmm Toast</span>
        </div>
    </div>
    <div class="toast toast-rounded p-relative">
        <div class="toast-body bg-primary">
            <span>Rounded slice</span>
        </div>
    </div>
    <div class="toast toast-block p-relative">
        <div class="toast-body bg-primary">
            <span>Big slice</span>
        </div>
    </div>
    <div class="toast p-relative">
        <div class="toast-body bg-primary">
            <span>Action slice</span>
            <span class="t-uppercase t-bold toast-action">Undo</span>
        </div>
    </div>





    {{-- <div class="table-scroll">
        <table class="table">
            <thead>
                <tr>
                    <th>Variable</th>
                    <th class="w-20">Value</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="vertical-align: middle;"><pre class="variables highlight"><code class="scss"></code></pre></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><pre class="variables highlight"><code class="scss"></code></pre></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><pre class="variables highlight"><code class="scss"></code></pre></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><pre class="variables highlight"><code class="scss"></code></pre></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div> --}}
</article>

@endsection