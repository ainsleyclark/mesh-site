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

<!-- Notate -->
<article class="section-scroll" id="classes">
    <h2 class="b-b-light hash">How we notate</h2>
    <p class="secondary-lead">We have made everything as simple as possible when it comes to class names and notation.
        Most of the utilities you will encounter start with the letter of the utility, <span class="c-secondary">p for
            position</span> for example, followed by a dash <span class="c-seconary">-</span> then followed by the
        property. Here is a taster, but please see the indiviudal pages on
        the left for more details.</p>
    <ul class="list-line">
        <li>Columns - <code class="inline">col-12 col-mob-6 col-tab-4 col-desk-3 col-hd-1</code></li>
        <li>Order - <code class="inline">order-6</code></li>
        <li>Display - <code class="inline">d-none d-desk-flex</code></li>
        <li>Spacing - <code class="inline">my-0 mt-tab-4 py-0 py-desk-5</code></li>
        <li>Position - <code class="inline">p-relative p-desk-absolute</code></li>
        <li>Sizing - <code class="inline">w-40 w-desk-100</code></li>
        <li>Colors - <code class="inline">c-primary bg-primary</code></li>
        <li>Float - <code class="inline">f-right</code></li>
    </ul>
</article>

<!-- !important -->
<article class="section-scroll" id="important">
    <h2 class="b-b-light hash">!important</h2>
    <p class="secondary-lead">Using !important with CSS can be a logistical nightmare, usually it's best avoided at all
        costs. While we have gone to every effort to avoid it, we have decided that our utility classes should have
        final say in the cascade.
        <br>This is why we have has to add the <code class="inline">!important</code> property to our utility classes
        to override specificity.
    </p>
</article>

@endsection