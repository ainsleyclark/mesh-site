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
        Use of the epic component is simple, just add the <code class="inline">epic</code> class to the parent of the content you wish to wrap. This will add padding on the x and y axis of the container.
        <br><strong>Note:</strong> Be sure to add the <code class="inline">bg-{color}</code> class to display the appropriate background. 
    </p>
    <div class="epic bg-primary c-white br">
        <h1 class="normal-headings">Epic section</h1>
        <p class="lead mb-3">This section is pretty epic, you can put all sorts inside of me, headings, leads & CTA's.</p>
        <button class="btn btn-white btn-outline">Call to action!</button>
    </div>
    <pre class="highlight"><code class="html">&lt;div class=&quot;epic bg-primary c-white br&quot;&gt;
    &lt;h1&gt;Epic section&lt;/h1&gt;
    &lt;p class=&quot;lead&quot;&gt;This section is pretty epic...&lt;/p&gt;
    &lt;button class=&quot;btn btn-white btn-outline&quot;&gt;Call to action!&lt;/button&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Change the default epic padding with the variables below.
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
                        <td style="vertical-align: middle;"><pre class="variables highlight"><code class="scss">$epic-mobile-padding: 2rem 1rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Padding amount for the mobile epic section in pixels, em's or rem's.</td>
                    </tr>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$epic-default-padding: 4rem 2rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Padding amount for the default epic section (tablet and above) in pixels, em's or rem's.</td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection