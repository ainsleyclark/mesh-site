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
    <p class="mt-2">
        Pagination is an ordinal numbering of pages, which is usually located at the top or bottom of the site pages. It
        makes it easier for the user to navigate through your website. mesh's pagination comes with prev/next buttons or
        arrows.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>In order to use pagination with mesh you need to wrap the parent with a <code
                    class="inline">pagination</code> class, and the children (pagination items) with a <code
                    class="inline">page-item</code> class.</li>
            <li>Be sure to add the <code class="inline">active</code> class to the page where the user currently is.
                This will give the current active page item a background color and box shadow.</li>
            <li><strong>Note:</strong> It is reccomended you use the <code class="inline">&lt;/ul&gt;</code> and <code
                    class="inline">&lt;/li&gt;</code> semantic tags with pagination.</li>
        </ul>
    </div>
    <div class="text-cont">
        <h3>Example:</h3>
        <ul class="pagination my-3">
            <li class="page-item active"><a href="#!">1</a></li>
            <li class="page-item"><a href="#!">2</a></li>
            <li class="page-item"><a href="#!">3</a></li>
            <li class="page-item"><a href="#!">4</a></li>
            <li class="page-item"><a href="#!">5</a></li>
        </ul>
    </div>
    <pre
        class="highlight"><code class="html">&lt;ul class="pagination"&gt;
    &lt;li class="page-item active"&gt;&lt;a href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

    <!-- Prev Next -->
    <article class="section-scroll" id="prevnext">
        <h2 class="b-b-light hash">Prev/Next</h2>
        <p class="secondary-lead">
            To add previous and next buttons to the pagination, add the <code class="inline">prev-btn</code> class on
            the first <code class="inline">page-item</code> and the <code class="inline">next-btn</code> class on the
            last <code class="inline">page-item.</code>
        </p>
        <ul class="pagination my-3">
            <li class="page-item prev-btn">Prev</li>
            <li class="page-item active"><a href="#!">1</a></li>
            <li class="page-item"><a href="#!">2</a></li>
            <li class="page-item"><a href="#!">3</a></li>
            <li class="page-item"><a href="#!">4</a></li>
            <li class="page-item"><a href="#!">5</a></li>
            <li class="page-item next-btn">Next</li>
        </ul>
        <pre
            class="highlight"><code class="html">&lt;ul class="pagination"&gt;
    &lt;li class="page-item prev-btn"&gt;&lt;a href="#!"&gt;Prev&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item active"&gt;&lt;a href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item next-btn"&gt;&lt;a href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    </article>

    <!-- Arrow -->
    <article class="section-scroll" id="arrow">
        <h2 class="b-b-light hash">Arrow</h2>
        <p class="secondary-lead">
            If you don't like the prev/next buttons and prefer to use arrows instead, use the <code
                class="inline">prev-arrow</code> class on the first <code class="inline">page-item</code> and the <code
                class="inline">next-arrow</code> class on the last <code class="inline">page-item</code>.
            <br>Ensure to add the HTML code <code class="inline">&amp;#8249;</code> for the left arrow and <code
                class="inline">&amp;#8250;</code> for the right arrow, in the <code class="inline">&lt;a&gt; tag</code>.
        </p>
        <ul class="pagination my-3">
            <li class="page-item prev-arrow">&#8249;</li>
            <li class="page-item active"><a href="#!">1</a></li>
            <li class="page-item"><a href="#!">2</a></li>
            <li class="page-item"><a href="#!">3</a></li>
            <li class="page-item"><a href="#!">4</a></li>
            <li class="page-item"><a href="#!">5</a></li>
            <li class="page-item next-arrow">&#8250; </li>
        </ul>
        <pre
            class="highlight"><code class="html">&lt;ul class="pagination"&gt;
    &lt;li class="page-item prev-arrow"&gt;&lt;a href="#!"&gt;&amp;#8249;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item active"&gt;&lt;a href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item next-arrow"&gt;&lt;a href="#!"&gt;&amp;#8250;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    </article>

    <!-- Variables -->
    <article class="section-scroll" id="variables">
        <h2 class="b-b-light hash">Variables</h2>
        <p class="secondary-lead">
            Enable rectangular active classes and choose to customise the colors and font sizes of the pagination
            component.
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
                        <td>
                            <pre
                                class="variables highlight"><code class="scss">$pagination-enable-shadow: true;</code></pre>
                        </td>
                        <td>Boolean</td>
                        <td>Enables/disables pagination shadow of the active element.</td>
                    </tr>
                    <tr>
                        <td>
                            <pre class="variables highlight"><code class="scss">$pagination-rounded: true;</code></pre>
                        </td>
                        <td>Boolean</td>
                        <td>Enables/disables rounded pagination, use false for square.</td>
                    </tr>
                    <tr>
                        <td>
                            <pre class="variables highlight"><code class="scss">$pagination-height: 30px;</code></pre>
                        </td>
                        <td>Pixel/em/rem</td>
                        <td>Pagination container height in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td>
                            <pre
                                class="variables highlight"><code class="scss">$pagination-text-color: #999;</code></pre>
                        </td>
                        <td>Color</td>
                        <td>Pagination text color.</td>
                    </tr>
                    <tr>
                        <td>
                            <pre
                                class="variables highlight"><code class="scss">$pagination-active-color: color('primary');</code></pre>
                        </td>
                        <td>Color</td>
                        <td>Pagination active class color, by default it uses primary from the color palette.</td>
                    </tr>
                    <tr>
                        <td>
                            <pre
                                class="variables highlight"><code class="scss">$pagination-font-size: 12px;</code></pre>
                        </td>
                        <td>Pixel/em/rem</td>
                        <td>Pagination font size.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>

    @endsection