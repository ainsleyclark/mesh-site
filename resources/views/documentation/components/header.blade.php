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
        The Mesh header is a simple and lightweight design. We recommend using it to hold the mesh nav.
        <br>

    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>The Header bars compromise of four different sections, all of which are prefixed with
                <code class="inline">msh-header</code>. They are: <code class="inline">msh-header</code>, <code
                    class="inline">msh-header-relative</code>
                <code class="inline">msh-header-brand</code> and the <code class="inline">msh-header-title</code>.</li>
            <li> The header background colour defaults to white, along with the text color to whatever
                default
                you have specified. To change them please refer to the <a
                    href="/documentation/utility/colors">Colors</a> page</li>
            <li>The header is positioned relative by default, to change this, simply add <code
                    class="inline">msh-header-fixed</code> to make it fixed, or <code
                    class="inline">msh-header-static</code> to have a static header.</li>
            <li>For more information
                on the position property, head over to <a
                    href="https://medium.freecodecamp.org/how-to-use-the-position-property-in-css-to-align-elements-d8f49c403a26"
                    rel="noopener nofollow">Free Code Camp</a>.

            </li>

        </ul>
    </div>

    <div class="header-cont">
        <header id="nav1" class="msh-header">

            <span class="navbar-collapse-icon"><img src="http://meshcss.com/assets/svg/meshlogo.svg" alt="Mesh Logo"
                    class="brand-logo" /></span>

            <a class="msh-header-brand " href="#0">
                <h3 class="msh-header-title">
                    meshCSS
                </h3>
            </a>
        </header>
    </div>
    <pre class="highlight">
      <code class="html hljs xml"> 
<span class="hljs-tag">&lt;<span class="hljs-name">header</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mesh-header msh-header-relative"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"navbar-collapse-icon"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"brand-logo"</span>/&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"msh-header-brand"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span><span class="hljs-attr">class</span>=<span class="hljs-string">"mesh-header-title"</span> &gt;</span>
                Brand
            <span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt; </span>
<span class="hljs-tag">&lt;/<span class="hljs-name">header</span>&gt; </span>

    
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