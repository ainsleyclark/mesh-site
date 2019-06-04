@extends('layout.docs')

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->
<style>
.height-200 {
    height: 200px;
}
</style>
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
        You can change the width and height of an element by using <code class="inline">{property}-{breakpoint}</code>
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>You can target the position class by using <code class="inline">p-{breakpoint}-{property}</code>. The breakpoint being optional and one of our five breakpoints, the properties being outlined below.</li>
            <li>These classes effect the breakpoint and upwards, for example - <code class="inline">p-tab-absolute</code> will make the element's position absolute on tablet, desktop & HD screens.</li>
        </ul>
    </div>
    <div class="text-cont">
        <h3>Properties:</h3>
        <div class="d-flex flex-column flex-desk-row">
            <table class="table-code w-100 t-left">
                <col width="80">
                <col width="100">
                <thead>
                    <tr>
                        <th>Width</th>
                        <th>Properties</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>.w-10</td>
                        <td>width: 10%;</td>
                    </tr>
                    <tr>
                        <td>.w-20</td>
                        <td>width: 20%;</td>
                    </tr>
                    <tr>
                        <td>.w-30</td>
                        <td>width: 30%;</td>
                    </tr>
                    <tr>
                        <td>.w-40</td>
                        <td>width: 40%;</td>
                    </tr>
                    <tr>
                        <td>.w-50</td>
                        <td>width: 50%;</td>
                    </tr>
                    <tr>
                        <td>.w-60</td>
                        <td>width: 60%;</td>
                    </tr>
                    <tr>
                        <td>.w-70</td>
                        <td>width: 70%;</td>
                    </tr>
                    <tr>
                        <td>.w-80</td>
                        <td>width: 80%;</td>
                    </tr>
                    <tr>
                        <td>.w-90</td>
                        <td>width: 90%;</td>
                    </tr>
                    <tr>
                        <td>.w-10</td>
                        <td>width: 100%;</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-code w-100 t-left mt-4 mt-desk-0">
                <col width="80">
                <col width="100">
                <thead>
                    <tr>
                        <th>Height</th>
                        <th>Properties</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>.h-10</td>
                        <td>height: 10%;</td>
                    </tr>
                    <tr>
                        <td>.h-20</td>
                        <td>height: 20%;</td>
                    </tr>
                    <tr>
                        <td>.h-30</td>
                        <td>height: 30%;</td>
                    </tr>
                    <tr>
                        <td>.h-40</td>
                        <td>height: 40%;</td>
                    </tr>
                    <tr>
                        <td>.h-50</td>
                        <td>height: 50%;</td>
                    </tr>
                    <tr>
                        <td>.h-60</td>
                        <td>height: 60%;</td>
                    </tr>
                    <tr>
                        <td>.h-70</td>
                        <td>height: 70%;</td>
                    </tr>
                    <tr>
                        <td>.h-80</td>
                        <td>height: 80%;</td>
                    </tr>
                    <tr>
                        <td>.h-90</td>
                        <td>height: 90%;</td>
                    </tr>
                    <tr>
                        <td>.h-10</td>
                        <td>height: 100%;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</article>

<!-- Examples -->
<article class="section-scroll" id="examples">
    <h2 class="b-b-light hash">Examples</h2>
    <h3 class="mt-3">Responsive width:</h3>
    <p>
        Here these divs are 100% width at mobile then scale up at tablet to become 40% width of the container. Go ahead and resize the screen to see the effect.
    </p>
    <div class="column-demo c-white mb-3">
        <div class="br d-flex mb-3 justify-content-center t-center flex-wrap">
            <div class="text px-3 mx-2 br w-100 w-tab-40">
                w-100 w-tab-40
            </div>
            <div class="text px-3 mx-2 mt-2 mt-tab-0 br w-100 w-tab-40">
                w-100 w-tab-40
            </div>
        </div>
    </div>
    <pre class="highlight"><code class="html">&lt;div class="w-100 w-tab-40"&gt;w-100 w-tab-40&lt;/div&gt;
&lt;div class="w-100 w-tab-40"&gt;w-100 w-tab-40&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <h3 class="mt-3">Responsive height:</h3>
    <p>
        Here the first div is 60% height of the container and then moves down to 40% for desktop, the last div is doing the reverse.
    </p>
    <div class="column-demo c-white mb-3">
        <div class="br d-flex mb-3 justify-content-center py-2 t-center flex-wrap align-items-baseline height-200">
            <div class="text px-3 br w-100 h-60 h-desk-40 mb-1 d-flex align-items-center justify-content-center">
                <span>w-100 h-60 h-desk-40</span>
            </div>
            <div class="text px-3 br w-100 h-40 h-desk-60 d-flex align-items-center justify-content-center">
                <span>w-100 h-40 h-desk-60</span>
            </div>
        </div>
    </div>
    <pre class="highlight"><code class="html">&lt;div class="w-100 h-60 h-desk-40"&gt;w-100 h-60 h-desk-40&lt;/div&gt;
&lt;div class="w-100 h-40 h-desk-60"&gt;w-100 h-40 h-desk-60&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variations -->
<article class="section-scroll" id="variations">
    <h2 class="b-b-light hash">Variations</h2>
    <pre class="highlight mt-3"><code class="html">&lt;!-- Default --&gt;
&lt;div class="w-10"&gt;&lt;/div&gt;
&lt;div class="w-20"&gt;&lt;/div&gt;
&lt;div class="w-30"&gt;&lt;/div&gt;
&lt;div class="w-40"&gt;&lt;/div&gt;
&lt;div class="w-50"&gt;&lt;/div&gt;
&lt;div class="w-60"&gt;&lt;/div&gt;
&lt;div class="w-70"&gt;&lt;/div&gt;
&lt;div class="w-80"&gt;&lt;/div&gt;
&lt;div class="w-90"&gt;&lt;/div&gt;
&lt;div class="w-100"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="w-mob-10"&gt;&lt;/div&gt;
&lt;div class="w-mob-20"&gt;&lt;/div&gt;
&lt;div class="w-mob-30"&gt;&lt;/div&gt;
&lt;div class="w-mob-40"&gt;&lt;/div&gt;
&lt;div class="w-mob-50"&gt;&lt;/div&gt;
&lt;div class="w-mob-60"&gt;&lt;/div&gt;
&lt;div class="w-mob-70"&gt;&lt;/div&gt;
&lt;div class="w-mob-80"&gt;&lt;/div&gt;
&lt;div class="w-mob-90"&gt;&lt;/div&gt;
&lt;div class="w-mob-100"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="w-tab-10"&gt;&lt;/div&gt;
&lt;div class="w-tab-20"&gt;&lt;/div&gt;
&lt;div class="w-tab-30"&gt;&lt;/div&gt;
&lt;div class="w-tab-40"&gt;&lt;/div&gt;
&lt;div class="w-tab-50"&gt;&lt;/div&gt;
&lt;div class="w-tab-60"&gt;&lt;/div&gt;
&lt;div class="w-tab-70"&gt;&lt;/div&gt;
&lt;div class="w-tab-80"&gt;&lt;/div&gt;
&lt;div class="w-tab-90"&gt;&lt;/div&gt;
&lt;div class="w-tab-100"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="w-desk-10"&gt;&lt;/div&gt;
&lt;div class="w-desk-20"&gt;&lt;/div&gt;
&lt;div class="w-desk-30"&gt;&lt;/div&gt;
&lt;div class="w-desk-40"&gt;&lt;/div&gt;
&lt;div class="w-desk-50"&gt;&lt;/div&gt;
&lt;div class="w-desk-60"&gt;&lt;/div&gt;
&lt;div class="w-desk-70"&gt;&lt;/div&gt;
&lt;div class="w-desk-80"&gt;&lt;/div&gt;
&lt;div class="w-desk-90"&gt;&lt;/div&gt;
&lt;div class="w-desk-100"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="w-hd-10"&gt;&lt;/div&gt;
&lt;div class="w-hd-20"&gt;&lt;/div&gt;
&lt;div class="w-hd-30"&gt;&lt;/div&gt;
&lt;div class="w-hd-40"&gt;&lt;/div&gt;
&lt;div class="w-hd-50"&gt;&lt;/div&gt;
&lt;div class="w-hd-60"&gt;&lt;/div&gt;
&lt;div class="w-hd-70"&gt;&lt;/div&gt;
&lt;div class="w-hd-80"&gt;&lt;/div&gt;
&lt;div class="w-hd-90"&gt;&lt;/div&gt;
&lt;div class="w-hd-100"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Add or remove width & height responsive classes with the map variable below.
    </p>
    <div class="table-scroll">
        <table class="table">
                <thead>
                    <tr>
                        <th class="w-40">Variable</th>
                        <th class="w-20">Value</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$sizing-properties: (
    10%, 
    20%, 
    30%, 
    40%, 
    50%, 
    60%, 
    70%, 
    80%, 
    90%, 
    100%
);</code></pre></td>
                        <td>Map(percentage)</td>
                        <td>To add or remove width & height responsive classes, simply edit the map above with a percentage.</td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection