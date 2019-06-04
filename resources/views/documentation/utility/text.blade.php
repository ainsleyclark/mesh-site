@extends('layout.docs')

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->
<style>
.font-size-2 {
    font-size: 28px;
}
</style>
@endpush

@push('scripts')
<!-- =====================
    Page JS (Place in <script></script> tags)
    ===================== -->
<script>
    //Turn responsive text on & off
    document.querySelector('#responsiveTextBtn').addEventListener('click', function() {
        this.innerHTML = this.innerHTML.indexOf('off') ? "Turn responsive text on" : "Turn responsive text off";
        let responsiveText = document.querySelector('#responsiveText');
        responsiveText.classList.toggle('t-responsive');
        responsiveText.classList.toggle('font-size-2');
    });
</script>
@endpush

@section('docscontent')
<!-- =====================
    Docs Section - Main HTML
    ===================== -->

<!-- Font Sizes -->
<article class="section-scroll" id="sizes">
    <h2 class="b-b-light hash">Font sizes</h2>
    <p class="secondary-lead">
        Default font sizes are shown below, margin is calculated automatically based on the size.
    </p>
    <div class="text-cont">
        <h1 class="normal-headings">h1 Heading</h1>
        <h2 class="normal-headings">h2 Heading</h2>
        <h3 class="normal-headings">h3 Heading</h3>
        <h4 class="normal-headings">h4 Heading</h4>
        <h5 class="normal-headings">h5 Heading</h5>
        <h6 class="normal-headings">h6 Heading</h6>
    </div>
</article>

<!-- Font Sizes -->
<article class="section-scroll" id="sub">
    <h2 class="b-b-light hash">Sub headings</h2>
    <p class="secondary-lead">A lead class is available by apply <code class="inline">.lead</code> to your element, this text is perfect for sub headings on pages and large paragraphs.</p>
    <div class="text-cont bg-light br p-3">
        <h1 class="normal-headings">Welcome to mesh</h1>
        <p class="lead">I'm an example sub heading using the lead class.</p>
    </div>

    <pre class="highlight mt-3"><code class="html py-2">&lt;h1&gt;Welcome to mesh&lt;/h1&gt;
&lt;p class="lead"&gtI'm an example sub heading using the lead class.&lt;/p&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Unresponsive -->
<article class="section-scroll" id="utility">
    <h2 class="b-b-light hash">Utility classes</h2>
    <p class="secondary-lead">
        A number of text utility helper classes have been bundled with mesh to help with creating font styles quickly.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>All text classes shown below are prefixed with <code class="inline">t-{helper}</code> for text.</li>
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
                    <td>.t-decoration-none</td>
                    <td>text-decoration: none;</td>
                </tr>
                <tr>
                    <td>.t-normal</td>
                    <td>font-weight: normal;</td>
                </tr>
                <tr>
                    <td>.t-bold</td>
                    <td>font-weight: bold;</td>
                </tr>
                <tr>
                    <td>.t-light</td>
                    <td>font-weight: light;</td>
                </tr>
                <tr>
                    <td>.t-uppercase</td>
                    <td>text-transform: uppercase;</td>
                </tr>
                <tr>
                    <td>.t-lowercase</td>
                    <td>text-transform: lowercase;</td>
                </tr>
                <tr>
                    <td>.t-initial</td>
                    <td>text-transform: initial;</td>
                </tr>
                <tr>
                    <td>.t-nowrap</td>
                    <td>white-space: nowrap;</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>

<!-- Responsive Text -->
<article class="section-scroll" id="responsive">
    <h2 class="b-b-light hash">Responsive text</h2>
    <p class="secondary-lead">Below is a demo of our responsive text class, you can target it by using the <code class="inline">t-responsive</code> class.</p>
    <button class="btn btn-rounded btn-secondary" id="responsiveTextBtn">Turn responsive text off</button>
    <div class="text-cont">
        <p class="t-responsive" id="responsiveText">With responsive text, the font size gradually gets smaller on different viewports. Its totally customizable, you can adjust the base font size and how many points you would like. Go ahead and resize the screen to watch me get smaller!</p>
    </div>
</article>

<!-- Alignment -->
<article class="section-scroll" id="align">
    <h2 class="b-b-light hash">Alignment</h2>
    <p class="secondary-lead">
        Text alignment is simple with mesh, you can adjust it responsively by using <code class="inline">t-{breakpoint}-{property}</code> The breakpoint being optional and one of our five breakpoints, the properties being outlined below.
    </p>
    <div class="text-cont">
        <table class="table-code w-100 t-left mt-3">
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
                    <td>.t-center</td>
                    <td>text-align: center;</td>
                </tr>
                <tr>
                    <td>.t-left</td>
                    <td>text-align: left;</td>
                </tr>
                <tr>
                    <td>.t-right</td>
                    <td>text-align: right;</td>
                </tr>
                <tr>
                    <td>.t-justify</td>
                    <td>text-align: center;</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h3 class="mt-3">Responsive variations:</h3>
    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="t-center"&gt;&lt;/div&gt;
&lt;div class="t-left"&gt;&lt;/div&gt;
&lt;div class="t-right"&gt;&lt;/div&gt;
&lt;div class="t-justify"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="t-mob-center"&gt;&lt;/div&gt;
&lt;div class="t-mob-left"&gt;&lt;/div&gt;
&lt;div class="t-mob-right"&gt;&lt;/div&gt;
&lt;div class="t-mob-justify"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="t-tab-center"&gt;&lt;/div&gt;
&lt;div class="t-tab-left"&gt;&lt;/div&gt;
&lt;div class="t-tab-right"&gt;&lt;/div&gt;
&lt;div class="t-tab-justify"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="t-desk-center"&gt;&lt;/div&gt;
&lt;div class="t-desk-left"&gt;&lt;/div&gt;
&lt;div class="t-desk-right"&gt;&lt;/div&gt;
&lt;div class="t-desk-justify"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="t-hd-center"&gt;&lt;/div&gt;
&lt;div class="t-hd-left"&gt;&lt;/div&gt;
&lt;div class="t-hd-right"&gt;&lt;/div&gt;
&lt;div class="t-hd-justify"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Define text sizes, colors, different fonts and responsive text options with the variables below.
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
                        <td><pre class="variables highlight"><code class="scss">$type-enable-responsive-text: true;</code></pre></td>
                        <td>Boolean</td>
                        <td>Enables/disables the responsive text class.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$font-stack: Roboto, -apple-system, 
BlinkMacSystemFont, 'Segoe UI', 
Oxygen-Sans, Ubuntu, Cantarell, 
'Helvetica Neue', sans-serif;</code></pre></td>
                        <td>CSS font family</td>
                        <td>Add your chosen font stack here, to use "Roboto" (default for mesh) make sure you use a google import.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$h1-font-size: 3.31rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>H1 font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$h2-font-size: 2.25rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>H2 font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$h3-font-size: 1.56rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>H3 font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$h4-font-size: 1.12rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>H4 font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$h5-font-size: 1.06rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>H5 font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$h6-font-size: 0.75rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>H6 font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$lead-font-size: 1.25rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Lead font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$paragraph-font-size: 1rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Paragraph font size in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$small-font-size: 75%;</code></pre></td>
                        <td>Percentage/pixel/em/rem</td>
                        <td>Small tag font size in percentage, pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$black-text-color: #3c4858;</code></pre></td>
                        <td>Color</td>
                        <td><strong>Important:</strong>defines the color of all text, the mesh default uses an off black.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$white-text-color: #ffffff;</code></pre></td>
                        <td>Color</td>
                        <td>Defines the white shade of text.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$responsive-text-points: 30;</code></pre></td>
                        <td>Number</td>
                        <td>How many breakpoints the <code class="inline">t-responsive</code> (responsive text) class uses, bare in mind the more you use will, the smoother it will become but at a cost to kb.</td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection