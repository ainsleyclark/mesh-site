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

@endpush

@section('docscontent')
<!-- =====================
    Docs Section - Main HTML
    ===================== -->

<!-- Usage -->
<article class="section-scroll" id="usage">
    <h2 class="b-b-light hash">Usage</h2>
    <p class="secondary-lead">
        Toasts are great for showing meaningfull content easily and provide breif messages about proccesses of the app the user is working with.
        <br>As they only appear temporarily, <strong>they can't be done with CSS alone</strong>. Which is why we have provided a stupidly simple script to help you at the bottom of the page.
        <br>Checkout the demo below.
    </p>
    <button class="btn btn-primary" id="makeToast">Make me some toast</button>
    <div class="toast-cont">
        <div class="toast pin-r"></div>
    </div>

</article>

{{-- <div class="toast p-relative">
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
<div class="toast p-relative">
    <div class="toast-body bg-primary">
        <span>Message sent</span>
        <i class="fab fa-telegram-plane toast-action fa-lg"></i>
    </div>
</div> --}}

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Add a description here:
    </p>
    <div class="table-scroll">
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
        </div>
</article>

@endsection