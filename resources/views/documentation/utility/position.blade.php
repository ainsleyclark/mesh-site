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
        Things can get complicated when trying to position elements with CSS which is why we have created handy utility classes to help you along your way. For more information on the position property, head over to <a href="https://medium.freecodecamp.org/how-to-use-the-position-property-in-css-to-align-elements-d8f49c403a26" rel="noopener nofollow">Free Code Camp</a>.
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
        <table class="table-code w-100 t-left">
            <col width="100">
            <col width="100">
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Properties</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>.p-relative</td>
                    <td>position: relative;</td>
                </tr>
                <tr>
                    <td>.p-absolute</td>
                    <td>position: absolute;</td>
                </tr>
                <tr>
                    <td>.p-fixed</td>
                    <td>position: fixed;</td>
                </tr>
                <tr>
                    <td>.p-static</td>
                    <td>position: static;</td>
                </tr>
                <tr>
                    <td>.p-sticky</td>
                    <td>position: sticky;</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>

<!-- Pinning -->
<article class="section-scroll" id="pinning">
    <h2 class="b-b-light hash">Pinning</h2>
    <p>You can also use the <code class="inline">pin</code> classes to fix elements to the top, right, bottom & left of the container/parent, see below:</p>
    <table class="table-code w-100 t-left">
        <col width="100">
        <col width="100">
        <thead>
            <tr>
                <th>Class</th>
                <th>Properties</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>.pin-t</td>
                <td>top: 0;</td>
            </tr>
            <tr>
                <td>.pin-r</td>
                <td>right: 0;</td>
            </tr>
            <tr>
                <td>.pin-b</td>
                <td>bottom: 0;</td>
            </tr>
            <tr>
                <td>.pin-l</td>
                <td>left: 0;</td>
            </tr>
            <tr>
                <td>.pin-y</td>
                <td>top: 0;<br>bottom: 0;</td>
            </tr>
            <tr>
                <td>.pin-x</td>
                <td>left: 0;<br>right: 0;</td>
            </tr>
            <tr>
                <td>.pin</td>
                <td>top: 0;<br>right: 0;<br>bottom: 0;<br>left: 0;</td>
            </tr>
            <tr>
                <td>.pin-none</td>
                <td>top: auto;<br>right: auto;<br>bottom: auto;<br>left: auto;</td>
            </tr>
        </tbody>
    </table>
</article>

<!-- Examples -->
<article class="section-scroll" id="examples">
    <h2 class="b-b-light hash">Examples</h2>
    <h3 class="mt-3">Responsive position:</h3>
    <p>
        Here, the purple element, the third that sits in the DOM will be positioned absolutley from desktop widths and above, whilst being static at mobile and tablet.
    </p>
    <div class="column-demo c-white mb-3">
        <div class="br d-flex mb-3 height-100 bg-light justify-content-center align-items-center justify-content-desk-between t-center">
            <div class="text px-3 mx-2 br mx-0 w-30"></div>
            <div class="text px-3 mx-2 br mx-0 w-30"></div>
            <div class="text px-3 mx-2 br mx-0 w-30 p-desk-absolute bg-secondary" style="opacity: 0.6; left: 20%;"></div>
        </div>
    </div>
    <pre class="highlight"><code class="html">&lt;div class="element"&gt;element&lt;/div&gt;
&lt;div class="element"&gt;element&lt;/div&gt;
&lt;div class="p-desk-absolute"&gt;third-child&lt;/div&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variations -->
<article class="section-scroll" id="variations">
    <h2 class="b-b-light hash">Variations</h2>
    <pre class="highlight mt-3"><code class="html">&lt;!-- Default --&gt;
&lt;div class="p-relative"&gt;&lt;/div&gt;
&lt;div class="p-absolute"&gt;&lt;/div&gt;
&lt;div class="p-fixed"&gt;&lt;/div&gt;
&lt;div class="p-static"&gt;&lt;/div&gt;
&lt;div class="p-sticky"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="p-mob-relative"&gt;&lt;/div&gt;
&lt;div class="p-mob-absolute"&gt;&lt;/div&gt;
&lt;div class="p-mob-fixed"&gt;&lt;/div&gt;
&lt;div class="p-mob-static"&gt;&lt;/div&gt;
&lt;div class="p-mob-sticky"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="p-tab-relative"&gt;&lt;/div&gt;
&lt;div class="p-tab-absolute"&gt;&lt;/div&gt;
&lt;div class="p-tab-fixed"&gt;&lt;/div&gt;
&lt;div class="p-tab-static"&gt;&lt;/div&gt;
&lt;div class="p-tab-sticky"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="p-desk-relative"&gt;&lt;/div&gt;
&lt;div class="p-desk-absolute"&gt;&lt;/div&gt;
&lt;div class="p-desk-fixed"&gt;&lt;/div&gt;
&lt;div class="p-desk-static"&gt;&lt;/div&gt;
&lt;div class="p-desk-sticky"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="p-hd-relative"&gt;&lt;/div&gt;
&lt;div class="p-hd-absolute"&gt;&lt;/div&gt;
&lt;div class="p-hd-fixed"&gt;&lt;/div&gt;
&lt;div class="p-hd-static"&gt;&lt;/div&gt;
&lt;div class="p-hd-sticky"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Add or remove position classes from the map variable below.
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
                        <td><pre class="variables highlight"><code class="scss">$position-properties: (
    relative, 
    absolute, 
    fixed, 
    static, 
    sticky
);</code></pre></td>
                        <td>Map(property)</td>
                        <td>To aremove position paramters just delete from the map above, this will in turn delete the class and responsive class associated with the property, e.g. <code class="inline">p-mob-sticky</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection