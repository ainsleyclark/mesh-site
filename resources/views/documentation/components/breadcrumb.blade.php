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
        Breadcrumbs are almost a secondary navigation screen which allows users to see clearly where they are in the website heirarchy.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>In order to use breadcrumbs with mesh you need to wrap the parent with a <code class="inline">breadcrumb</code> class, and child (breadcrumb items) to have the <code class="inline">breadcrumbs-item</code> class.</li>
            <li>Be sure to add the <code class="inline">active</code> class to the page where the user currently is. This will give the link a color of <code class="inline">rgba(0, 0, 0, 0.5);</code></li>
            <li><strong>Note:</strong> It is reccomended you use the <code class="inline">&lt;/ul&gt;</code> and <code class="inline">&lt;/li&gt;</code> semantic tags with breadcrumbs.</li>
        </ul>
    </div>
    <div class="text-cont">
        <h3>Example:</h3>
        <p>The default breadcrumb class uses forward slashes as it's seperator. You can attach colors to the breadcrumb container by using our <a href="/documentation/utility/colors.php">color utility classes</a>.</p>
    </div>
    <ul class="breadcrumb bg-light c-primary">
        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
        <li class="breadcrumb-item active"><a href="#">Active nav item</a></li>
    </ul>
    <pre class="highlight"><code class="html">&lt;ul class="breadcrumb bg-light c-primary"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active"&gt;&lt;a href="#"&gt;Active nav item&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Arrows -->
<article class="section-scroll" id="arrows">
    <h2 class="b-b-light hash">Arrows</h2>
    <p class="secondary-lead">
        You can also change the default slashes to arrows by adding the <code class="inline">breadcrumb-arrow</code> class to the parent, in conjunction with <code class="inline">breadcrumb</code>.
    </p>
    <ul class="breadcrumb breadcrumb-arrow bg-secondary c-white mb-3">
        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
        <li class="breadcrumb-item active"><a href="#">Active nav item</a></li>
    </ul>
    <pre class="highlight"><code class="html">&lt;ul class="breadcrumb breadcrumb-arrow bg-primary c-white"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active"&gt;&lt;a href="#"&gt;Active nav item&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <div class="table-scroll">
        <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Variable</th>
                        <th class="w-15">Value</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="vertical-align: middle;"><pre class="variables highlight"><code class="scss">$breadcrumb-active-color: rgba(0, 0, 0, 0.5);</code></pre></td>
                        <td>Color</td>
                        <td>Change the breadcrumb active link color via this variable.</td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection