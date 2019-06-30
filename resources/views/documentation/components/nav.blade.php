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






<div class="navbar bg-primary d-desk-none">
	
	<div class="d-flex align-items-center">
        <h3 class="mb-0">meshCSS</h3>
	</div>
	
	<label class="nav-btn">
		<img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu-white.svg?sanitize=true">
    </label>

    <ul class="nav d-none">
        <li class="nav-item active">
            <a  href="#">Home</a>
        </li>
        <li class="nav-item">
            <a href="#">About</a>
        </li>
        <li class="nav-item">
            <a href="#">Contact</a>
        </li>
    </ul>

</div>

{{-- <div class="navbar bg-primary c-white">
	
    <div class="d-flex align-items-center">
        <img class="img-responsive w-20" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
        <h3 class="mb-0">meshCSS</h3>
    </div>
    
    <label class="nav-btn">
        <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu-white.svg?sanitize=true">
    </label>

    <ul class="nav">
        <li class="nav-item active">
            <a class="c-white" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="c-white" href="#">About</a>
        </li>
        <li class="nav-item nav-dropdown-link">
            <a class="nav-arrow c-white" href="#">Dropdown</a>
            <ul class="nav-dropdown bg-white br c-muted">
                <li class="nav-item">
                    <a href="#">Item</a>
                </li>
                <li class="nav-item">
                    <a href="#">Item</a>
                </li>
                <li class="nav-item">
                    <a href="#">Item</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <button class="btn btn-outline btn-white px-3 py-1 br mb-0 t-initial">Download</button>
        </li>
    </ul>

</div> --}}

<div class="navbar" style="background: #f8f8f8;">
	
    <div class="d-flex align-items-center">
        <img class="img-responsive w-20" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo.svg?sanitize=true">
        <h3 class="mb-0">meshCSS</h3>
    </div>
    
    <label class="nav-btn">
        <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
    </label>

    <ul class="nav">
        <li class="nav-item">
            <a class="active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a href="#">Item</a>
        </li>
        <li class="nav-item nav-dropdown-link">
            <a class="nav-arrow" href="#">Dropdown</a>
            <ul class="nav-dropdown br">
                <li class="nav-item">
                    <a class="active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a href="#">Item</a>
                </li>
                <li class="nav-item">
                    <a href="#">Item</a>
                </li>
                <li class="nav-item nav-dropdown-link">
                    <a class="nav-arrow" href="#">Dropdown</a>
                    <ul>
                        <li class="nav-item">
                            <a href="#">Item</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Item</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Item</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <button class="btn btn-outline px-3 py-1 br mb-0 t-initial">Download</button>
        </li>
    </ul>

</div>
















{{-- <!-- =====================
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

<!-- Search Form -->
<article class="section-scroll" id="search-form">
    <div class="text-cont">
        <!-- <div class="alert">
                            Please wrap all your text in a <code class="inline">text-cont</code> class.
                        </div> -->
        <!-- Nav Two -->

        <h2>Using CSS with search form</h2>

    </div>

    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>Adding a form couldn't be easier, simply add in the markup after the <code class="inline">ul</code>. The
                <code class="inline">input</code> and <code class="inline">button</code> have basic assigned styles
                which can be overridden
                easily.</li>
        </ul>
    </div>

    <div class="con-cont">
        <div class="nav-container nav-container-md">

            <label class="navbar-collapse-label" for="nav-toggle-2">
                <img src="http://meshcss.com/assets/svg/meshlogo.svg" alt="Mesh Logo" class="brand-logo" />
            </label>
            <input class="navbar-collapse-box" type="checkbox" name="nav-toggle-2" id="nav-toggle-2" />
            <a class="header-brand " href="#0">meshCSS</a>
            <nav class="nav nav-md nav-doc-position">
                <ul class="nav-list nav-list-md">

                    <li class="nav-item">
                        <a class="nav-link  active-link" href="#0">Active Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0">Link</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" />

                    <button class="form-btn-search  btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </nav>
        </div>
    </div>

    <pre class="highlight">
      <code class="html hljs xml">
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-container nav-container-md"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"navbar-collapse-label"</span>/&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"navbar-collapse-box"</span>/&gt;</span>

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
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-inline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-btn-search  btn btn-outline-success"/</span>&gt;</span>
                Search
            <span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">nav</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
</code>
<img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon">
<img class="copy-tick" src="/assets/icons/checked.svg" alt="Success icon">
  </pre>
</article>
<!-- Dropdown -->

<article class="section-scroll" id="dropdown">
    <div class="text-cont">
        <!-- <div class="alert">
                            Please wrap all your text in a <code class="inline">text-cont</code> class.
                        </div> -->
        <!-- Nav Three -->

        <h2>Adding a dropdown</h2>

    </div>

    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>Adding a dropdown simply requires you to add the markup inside a <code class="inline">nav-item</code>,
                and adding a <code class="inline">dropdown-toggle</code> class to it.
            </li>
            <li>
                You can add the <code class="inline">drop-left</code> or <code class="inline">drop-right</code> to
                specify which side you want to the dropdown to
                appear on.
                <br />
            </li>
            <li>You can have further nested dropdowns if you wish. The same rules apply to nest
                inside
                dropdowns </li>
        </ul>
    </div>

    <div class="con-cont">
        <div class="nav-container nav-container-md">

            <label class="navbar-collapse-label" for="nav-toggle-3">
                <img src="http://meshcss.com/assets/svg/meshlogo.svg" alt="Mesh Logo" class="brand-logo" />
            </label>
            <input class="navbar-collapse-box" type="checkbox" name="nav-toggle-3" id="nav-toggle-3" />
            <a class="header-brand " href="#0">meshCSS</a>
            <nav class="nav nav-md nav-doc-position">
                <ul class="nav-list nav-list-md">

                    <li class="nav-item">
                        <a class="nav-link  active-link" href="#0">Active Link</a>
                    </li>
                    <li class="nav-item dropdown-toggle">
                        <a href="#0" class="nav-link ">Dropdown ▸</a>
                        <!-- check hack for dropdown -->

                        <!-- Dropdown -->
                        <ul class="dropdown-menu drop-right dropdown-1">
                            <li class="dropdown-header">Dropdown Header</li>
                            <li class="dropdown-item">
                                <a href="#0" class="dropdown-link">Action</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="#0" class="dropdown-link">Another Action</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item dropdown-toggle">
                                <a href="#0" class="dropdown-link">Final Dropdown ▸</a>
                                <ul class="dropdown-menu drop-left dropdown-2">
                                    <li class="dropdown-header">Dropdown Header</li>
                                    <li class="dropdown-item">
                                        <a href="#0" class="dropdown-link">Action</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#0" class="dropdown-link">Another Action</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a href="#0" class="dropdown-link">Seperated Action</a>
                                    </li>

                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a href="#0" class="dropdown-link">Final Action</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="#0" class="dropdown-link">Final Action</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled-link" href="#0">Disabled</a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>


    <pre class="highlight">
      <code class="html hljs xml">
<span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-list nav-list-md"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span>&gt;</span>
            Link
        <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span>&gt;</span>
            Dropdown menu
        <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-menu drop-right"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-header"</span>&gt;</span>
        Dropdown Header
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-divider"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-item"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-link"</span>&gt;</span>
                Action
            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-item"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-link"</span>&gt;</span>
                Another Action
            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-divider"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-item"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-link"</span>&gt;</span>
                A seperated Action
            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-divider"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-item"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-link"</span>&gt;</span>
                Final Action
            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
          <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
</code>
<img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon">
<img class="copy-tick" src="/assets/icons/checked.svg" alt="Success icon">
  </pre>

</article>

<!-- Animations -->

<article class="section-scroll" id="animations">

    <div class="text-cont">
        <!-- <div class="alert">
        Please wrap all your text in a <code class="inline">text-cont</code> class.
    </div> -->
        <!-- Nav Four -->
        <h2>Using CSS with animations</h2>

    </div>

    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>Add animations with the <code class="inline">animated-</code> class, and adding an
                origin
                point, <code class="inline">top</code>, <code class="inline">right</code>, <code
                    class="inline">bottom</code> or <code class="inline">left</code> to the class.

            </li>
        </ul>
    </div>

    <div class="con-cont">
        <div class="nav-container nav-container-md">

            <label class="navbar-collapse-label" for="nav-toggle-4">
                <img src="http://meshcss.com/assets/svg/meshlogo.svg" alt="Mesh Logo" class="brand-logo" />
            </label>
            <input class="navbar-collapse-box" type="checkbox" name="nav-toggle-4" id="nav-toggle-4" />
            <a class="header-brand " href="#0">meshCSS</a>
            <nav class="nav nav-md nav-doc-position animated-top">
                <ul class="nav-list nav-list-md">
                    <li class="nav-item">
                        <a class="nav-link  active-link" href="#0">Active Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0">Link</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <pre class="highlight">
<code class="html hljs xml"> 

<span class="hljs-tag">&lt;<span class="hljs-name">nav</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav nav-md animated-top"</span>&gt;</span>
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
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">nav</span>&gt;</span>
</code>
<img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon">
<img class="copy-tick" src="/assets/icons/checked.svg" alt="Success icon">
</pre>
</article>

<!-- Using JS -->

<article class="section-scroll" id="withjs">
    <div class="text-cont">

        <!-- Nav Five -->
        <h2>Using JS</h2>
    </div>

    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>While the mesh nav uses CSS by default to toggle the nav, these media queries and
                checkboxes can be
                overridden and replaced by toggling classes with JavaScript to show, hide and change the
                view of the
                nav.</li>
            <br />
            <li>Simply replace the <code class="inline">checkbox</code> and <code class="inline">label</code> with the
                <code class="inline">button</code> & <code class="inline">span</code>
                <!-- **TODO** -->
            </li>
        </ul>
    </div>
    <div class="con-cont">
        <div class="nav-container nav-container-md">
            <button class="navbar-collapse-btn" type="button" data-toggle="collapse" onclick="handleNav()">
                <span class="navbar-collapse-icon"><img src="http://meshcss.com/assets/svg/meshlogo.svg" alt="Mesh Logo"
                        class="brand-logo" /></span>
            </button>
            <a class="header-brand " href="#0">meshCSS</a>
            <nav class="nav nav-md nav-doc-position" id="nav-5">
                <ul class="nav-list nav-list-md" id="nav-list-5">
                    <li class="nav-item">
                        <a class="nav-link  active-link" href="#0">Active Link</a>
                    </li>
                    <li class="nav-item">
                        <a href="#0" class="nav-link">Another Link</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled-link" href="#0">Disabled Link</a>
                </li>
                </ul>
            </nav>
        </div>
    </div>


    <pre class="highlight">
      <code class="html hljs xml"> 
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-container nav-container-md"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"navbar-collapse-btn"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"navbar-collapse-icon"</span>/&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">image</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"brand-logo"</span>/&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>


    <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"header-brand"</span>&gt;</span>
                    Brand
    <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">nav</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-list nav-list-md"</span>&gt;</span>
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
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-item"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link disabled-link"</span>&gt;</span>
                    Disabled Link
                <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">nav</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon">
<img class="copy-tick" src="/assets/icons/checked.svg" alt="Success icon">
      </code>
  </pre>

    <div class="text-cont">
        <h3>Show/Hide Function:</h3>
        <ul class="list-line">
            <li>The JS is simple and concise, as we want to leave it to you to add any bells and
                whistles. <br /> We have included a helper function that will check if the window is
                above the
                navs minimum breakpoint for a desktop view </li>
            <br />

        </ul>
    </div>

    <pre
        class="highlight"><code class="javascript">const nav = document.querySelector("#nav");
const navList = document.querySelector("#nav-list");

function handleNav() {
    nav.classList.toggle("hide-nav");
};

function toggleDesktop() {

    if (nav.offsetWidth > {Your Nav Breakpoint}) {
        nav.classList.add("desktop-view");
        navList.classList.add("nav-row");


    }
};


document.addEventListener('DOMContentLoaded', toggleDesktop)

</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

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
</article> --}}

@endsection