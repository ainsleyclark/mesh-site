@extends('layout.docs')

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->
<style>
.nav-mesh-logo {
    width: 50px;
}

.navbar.bg-dark .nav-item:hover a {
    color: #fff;
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


<article class="section-scroll" id="usage">
    <h2 class="b-b-light hash">Usage</h2>
    <p class="secondary-lead">
        A navbar is a contaienr to wrap branding, a menu and fields into one. The mesh navbar is a simple and lightweight design. We recommend using it to hold the mesh nav. 
        <br>Check out the examples below.
    </p>
    <div class="nav-cont my-4">
        <nav class="navbar my-3" style="background: #f8f8f8;">
            <div class="d-flex align-items-center">
                <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo.svg?sanitize=true">
                <h3 class="mb-0">meshCSS</h3>
            </div>
            <div class="nav-btn">
                <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
            </div>
            <div class="nav-menu">
                <ul>
                    <li class="nav-item">
                        <a class="active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline px-3 py-1 br mb-0 t-initial">Download</button>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar bg-secondary c-white my-3">
            <div class="d-flex align-items-center">
                <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
                <h3 class="mb-0">meshCSS</h3>
            </div>
            <div class="nav-btn">
                <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
            </div>
            <div class="nav-menu">
                <ul>
                    <li class="nav-item mx-1">
                        <i class="fas fa-search fa-lg"></i>
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fas fa-map-marker fa-lg"></i>
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fas fa-heart fa-lg"></i>
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fas fa-ellipsis-v fa-lg"></i>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar bg-dark c-white my-3 justify-content-start">
            <div class="d-flex align-items-center">
                <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
                <h3 class="mb-0">meshCSS</h3>
            </div>
            <div class="nav-btn">
                <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
            </div>
            <div class="nav-menu ml-3">
                <ul>
                    <li class="nav-item">
                        <a class="active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <input class="mr-0 ml-auto" type="text">
        </nav>
    </div>
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