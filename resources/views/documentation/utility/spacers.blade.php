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
        The spacer classes help to separate content vertically and create a 'gap' between elements on the page. You can choose from a wide variety of sizes to suit your needs.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>You can target the spacer classes by using <code class="inline">spacer-{size}</code>. The size being one of the classes below.</li>
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
                    <td>.spacer-1</td>
                    <td>height: 1px;</td>
                </tr>
                <tr>
                    <td>.spacer-2</td>
                    <td>height: 2px;</td>
                </tr>
                <tr>
                    <td>.spacer-3</td>
                    <td>height: 3px;</td>
                </tr>
                <tr>
                    <td>.spacer-4</td>
                    <td>height: 4px;</td>
                </tr>
                <tr>
                    <td>.spacer-5</td>
                    <td>height: 5px;</td>
                </tr>
                <tr>
                    <td>.spacer-10</td>
                    <td>height: 10px;</td>
                </tr>
                <tr>
                    <td>.spacer-15</td>
                    <td>height: 15px;</td>
                </tr>
                <tr>
                    <td>.spacer-20</td>
                    <td>height: 20px;</td>
                </tr>
                <tr>
                    <td>.spacer-30</td>
                    <td>height: 30px;</td>
                </tr>
                <tr>
                    <td>.spacer-35</td>
                    <td>height: 35px;</td>
                </tr>
                <tr>
                    <td>.spacer-40</td>
                    <td>height: 45px;</td>
                </tr>
                <tr>
                    <td>.spacer-50</td>
                    <td>height: 50px;</td>
                </tr>
                <tr>
                    <td>.spacer-75</td>
                    <td>height: 75px;</td>
                </tr>
                <tr>
                    <td>.spacer-100</td>
                    <td>height: 100px;</td>
                </tr>
                <tr>
                    <td>.spacer-150</td>
                    <td>height: 150px;</td>
                </tr>
                <tr>
                    <td>.spacer-200</td>
                    <td>height: 200px;</td>
                </tr>
                <tr>
                    <td>.spacer-300</td>
                    <td>height: 300px;</td>
                </tr>
                <tr>
                    <td>.spacer-400</td>
                    <td>height: 400px;</td>
                </tr>
                <tr>
                    <td>.spacer-500</td>
                    <td>height: 500px;</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>

<!-- Examples -->
<article class="section-scroll" id="examples">
    <h2 class="b-b-light hash">Examples</h2>
    <h3 class="mt-3">Vertical spacing:</h3>
    <p>
        Here, the grey space in the middle is caused by a <code class="inline">spacer-50</code> class which pushes the last element to the bottom of the container.
    </p>
    <div class="column-demo c-white mb-3">
        <div class="br d-flex bg-light justify-content-center flex-wrap t-center">
            <div class="text br w-100"></div>
            <div class="spacer-50"></div>
            <div class="text br w-100"></div>
        </div>
    </div>
    <pre class="highlight"><code class="html">&lt;div class="d-flex justify-content-center flex-wrap"&gt;
    &lt;div class="w-100"&gt;&lt;/div&gt;
    &lt;div class="spacer-50"&gt;&lt;/div&gt;
    &lt;div class="w-100"&gt;&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Add or remove spacer classes with the map variable below.
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
                        <td><pre class="variables highlight"><code class="scss">$spacer-properties: (
    1px, 
    2px, 
    3px, 
    4px, 
    5px, 
    10px, 
    15px, 
    20px, 
    25px, 
    30px, 
    35px, 
    40px, 
    45px, 
    50px, 
    75px, 
    100px, 
    150px, 
    200px, 
    300px, 
    400px, 
    500px
);</code></pre></td>
                        <td>Map(pixel/rem/em)</td>
                        <td>To remove or add spacers, just edit the map above - you can add spacers in pixels, rem's or em's.</td>
                    </tr>
            </table>
        </div>
</article>

@endsection