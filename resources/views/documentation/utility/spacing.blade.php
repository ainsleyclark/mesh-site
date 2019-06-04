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
        Sometimes it can be a pain writing out padding & margin responsively using CSS, which is why we have included handy utility classes to make things easier.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>You can target the margin util classes by using <code class="inline">m{side}-{breakpoint}-{number}</code>. The side being optional and either t, b, l, r, x or y. The breakpoint being optional and one of our five breakpoints and the amount ranging from 1 to 5.</li>
            <li>You can target the padding util classes by using <code class="inline">p{side}-{breakpoint}-{number}</code>.</li>
        </ul>
    </div>
    <div class="text-cont">
        <h3>Properties:</h3>
        <div class="table-props">
            <div class="header d-flex justify-content-between w-100 mt-3">
                <span>Class</span>
                <span>Side (optional)</span>
                <span>Space</span>
            </div>
            <div class="body d-flex justify-content-around flex-wrap mt-1">
                <div class="column">
                    <div class="item">{p} padding</div>
                    <div class="item">{m} margin</div>
                </div>
                <div class="line"></div>
                <div class="column">
                    <div class="item">{} All sides</div>
                    <div class="item">{t} top</div>
                    <div class="item">{r} right</div>
                    <div class="item">{b} bottom</div>
                    <div class="item">{l} left</div>
                    <div class="item">{x} horizontal</div>
                    <div class="item">{y} vertical</div>
                </div>
                <div class="line"></div>
                <div class="column">
                    <div class="item">{1} 0.5rem</div>
                    <div class="item">{2} 0.75rem</div>
                    <div class="item">{3} 1rem</div>
                    <div class="item">{4} 2rem</div>
                    <div class="item">{5} 3rem</div>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Examples -->
<article class="section-scroll" id="examples">
    <h2 class="b-b-light hash">Examples</h2>
    <h3 class="mt-3">Responsive padding:</h3>
    <p>
        A common usage for these utility classes would be to extend with value of padding when screen size becomes larger. Below is an example of just that:
    </p>
    <div class="column-demo c-white mb-3">
        <div class="br d-flex mb-3 justify-content-center justify-content-desk-between t-center">
            <div class="text br mx-0 w-100 py-3 py-tab-4 py-desk-5">
                py-3 py-tab-4 py-desk-5
            </div>
        </div>
    </div>
    <pre class="highlight"><code class="html py-2">&lt;div class="py-3 py-tab-4 py-desk-5"&gt;py-3 py-tab-4 py-desk-5&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
        <h2 class="b-b-light hash">Variables</h2>
        <p class="secondary-lead">
        With the <code class="inline">spacing-properties</code> map you can add and delete padding & margin classes and define their size.
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
                            <td><pre class="variables highlight"><code class="scss">$spacing-properties: (
    0: 0,
    1: 0.5rem,
    2: 0.75rem,
    3: 1rem,
    4: 2rem,
    5: 3rem
);</code></pre></td>
                            <td>Map(number:pixel/em/rem)</td>
                            <td>The number of the <code class="inline">spacing-properties</code> lap corrospenonds to the class name, the rem's corrosponds to the size of the margin/padding. Add and delete as you please but be aware this map is heavy on kb.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </article>

@endsection