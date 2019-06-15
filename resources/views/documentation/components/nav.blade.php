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

<article class="section-scroll" id="usage">
    <h2 class="b-b-light hash">Usage</h2>
    <p class="secondary-lead">
        The Nav, can be wrapped in the mesh header or it can be
        used standalone, and must be wrapped in a <code class="inline">nav-container</code>
        class. We recommend using it inside the mesh header.
        <br>
        <br>
        The Nav background color defaults to white, and the text to your default text color, for
        simplicity. To make changes using our styling, use the mesh color styles outlined on the <a
            href="/documentation/utility/colors">Colors</a> page
        <br>Another line of something.
    </p>
    <!-- Nav One -->
    <h2>Basic Nav</h2>

    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>Navigation bars compromise of four different sections, all of which are prefixed with
                <code class="inline">nav</code>. They are: <code class="inline">nav</code>, <code
                    class="inline">nav-list</code> <code class="inline">nav-item</code> and the <code
                    class="inline">nav-link</code>.</li>

            <li>
                The breakpoints are fixed and so will need to be changed via a <code class="inline">nav-sm</code>, <code
                    class="inline">nav-md</code> or <code class="inline">nav-lg</code> class. <br />
            </li>
            <li>
                To keep it simple, we have used CSS to show and hide the nav. Simply use the provided
                markup below.
            </li>
        </ul>
    </div>


    <div class="con-cont">
        <div class="nav-container nav-container-md">

            <label class="navbar-collapse-label" for="nav-toggle">
                <img src="http://meshcss.com/assets/svg/meshlogo.svg" alt="Mesh Logo" class="brand-logo" />
            </label>
            <input class="navbar-collapse-box" type="checkbox" name="nav-toggle" id="nav-toggle" />
            <a class="header-brand " href="#0">meshCSS</a>
            <nav class="nav nav-md nav-md nav-doc-position">
                <ul class="nav-list nav-list-md">

                    <li class="nav-item">
                        <a class="nav-link" href="#0">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active-link" href="#0">Active Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0">Another Link</a>
                    </li>
            </nav>
        </div>
    </div>

    <pre class="highlight">
      <code class="html hljs xml"> 
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-container nav-container-md"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span><span class="hljs-attr">for</span>=<span class="hljs-string">"nav-toggle"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"brand-logo"</span>/&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt; </span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"navbar-collapse-box" </span><span class="hljs-attr">id</span>=<span class="hljs-string">"nav-toggle"</span>/&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"header-brand"</span>&gt;</span>
                    Brand
    <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">nav</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-list nav-list-md"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span>&gt;</span>
                    Link
                <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span>&gt;</span>
                    Active Link
                <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span>&gt;</span>
                    Another Link
                <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">nav</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
</code>
<img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon">
<img class="copy-tick" src="/assets/icons/checked.svg" alt="Success icon">
  </pre>
</article>

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
                    <td style="vertical-align: middle;">
                        <pre class="variables highlight"><code class="scss"></code></pre>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss"></code></pre>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss"></code></pre>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss"></code></pre>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</article>

@endsection