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