@extends('layout.docs')

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->
<style>
.nav-mesh-logo {
    width: 50px;
}

.content .text-cont, .content .btn {
    margin-bottom: 0;
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

<!-- Usage -->
<article class="section-scroll" id="usage">
    <h2 class="b-b-light hash">Usage</h2>
    <p class="secondary-lead">
        A navbar is a contaienr to wrap branding, a menu and fields into one. The mesh navbar is a simple and lightweight design. We recommend using it to hold the mesh nav. 
        <br>For more information regarding dropdowns & expanding head over to the <a class="external-link" href="/documentation/components/nav">the nav page.</a>
        <br>Check out the examples below.
    </p>
    <div class="nav-cont my-4">
        <nav class="navbar my-3">
            <div class="navbar-brand d-flex align-items-center">
                <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo.svg?sanitize=true">
                meshCSS
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
            <div class="navbar-brand d-flex align-items-center">
                <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
                meshCSS
            </div>
            <div class="nav-btn">
                <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
            </div>
            <div class="nav-menu">
                <ul>
                    <li class="nav-item mx-1">
                        <i class="fas fa-search"></i>
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fas fa-map-marker"></i>
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fas fa-heart"></i>
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fas fa-ellipsis-v"></i>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-dark bg-dark c-white my-3 justify-content-between justify-content-desk-start">
            <div class="navbar-brand d-flex align-items-center">
                <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
                meshCSS
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
            <input class="mr-0 ml-auto d-none d-desk-block" type="text">
        </nav>
    </div>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>The navbar is prefixed with the <code class="inline">navbar</code> class, its recommended you use the <code class="inline">nav</code> HTML semantic element like so, <code class="inline">&lt;nav class=&quot;navbar&quot;&gt;</code>.
            <li>The navbar usually consists of <span class="t-bold">2 or 3 child elements</span>, depending on what you require; all of which are entierley optional, see below:
                <div class="d-flex flex-column my-2">
                    <div>
                        <span class="t-bold">1) Branding</span> -
                        Branding for your web build, which has no prefixed class, as you can achive it easily with our flex utility classes, see examples for more details.</a>
                    </div>
                    <div>
                        <span class="t-bold">2) Nav</span> -
                        The mesh nav (<code class="inline">&lt;div class=&quot;nav-menu&quot;&gt;</code>), full docs can be found out <a class="external-link" href="/documentation/components/nav">the nav page.</a>
                    </div>
                    <div>
                        <span class="t-bold">3) Input</span> -
                        A form element (usually a search bar like above), full docs can be found out <a class="external-link" href="/documentation/components/form">the form page.</a>
                    </div>
                </div>
            </li>
            <li>To add an active link, append one of the li's within the nav-menu with the <code class="inline">active class</code>.</li>
            <li>The navbar background colour defaults to light grey, along with the text color to whatever default you have specified. To change them please refer to the <a class="external-link" href="/documentation/utility/colors">Colors</a> page</li>
        </ul>
    </div>
</article>

<!-- Position -->
<article class="section-scroll" id="position">
    <h2 class="b-b-light hash">Position</h2>
    <p class="secondary-lead mb-5">
        Aligning content within the navbar is done so with our <code class="inline">navbar-left</code>, <code class="inline">navbar-right</code>, <code class="inline">navbar-center</code> classes.
        <br>These classes take advantage of the flex nature of the container, positioning nav items using the <code class="inline">order</code> property.
    </p>
    <!-- Right aligned links -->
    <h3 class="mb-0">Right aligned links</h3>
    <p>The nav menu will naturally sit on the right hand side of the navbar providing its last in the DOM, if its not, add the <code class="inline">navbar-right</code> class to the menu.</p>
    <nav class="navbar my-3">
        <div class="nav-menu navbar-right">
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
        </div>
        <a class="navbar-brand" href="#!">Logo</a>
        <div class="nav-btn">
            <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
        </div>
    </nav>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar&quot;&gt;
    &lt;div class=&quot;nav-menu navbar-right&quot;&gt;
        &lt;ul&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#!&quot;&gt;Logo&lt;/a&gt;
    &lt;div class=&quot;nav-btn&quot;&gt;
        &lt;img class=&quot;nav-icon&quot; src=&quot;https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true&quot;&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <!-- Left aligned links -->
    <h3 class="mb-0">Left aligned links</h3>
    <p>
        Simply add the <code class="inline">navbar-left</code> property to the nav-menu. This will ensure links are preserved on the right at desktop only.
        <br><span class="t-bold">Note:</span> If you prefer the nav menu (hamburger) to sit on the left at smaller viewports, re-arrange the <code class="inline">nav-btn</code> to sit as the first child of the navbar, see below:
    </p>
    <nav class="navbar my-3">
        <div class="nav-btn">
            <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
        </div>
        <a class="navbar-brand" href="#!">Logo</a>
        <div class="nav-menu navbar-left">
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
        </div>
    </nav>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar&quot;&gt;
    &lt;div class=&quot;nav-btn&quot;&gt;
        &lt;img class=&quot;nav-icon&quot; src=&quot;https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true&quot;&gt;
    &lt;/div&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#!&quot;&gt;Logo&lt;/a&gt;
    &lt;div class=&quot;nav-menu navbar-left&quot;&gt;
        &lt;ul&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <!-- Center brand -->
    <h3 class="mb-0">Centering brand</h3>
    <p>Add the <code class="inline">navbar-center</code> property to <span class="t-bold">any</span> child element within the navbar which will absolutley position the item and center it horizontally.</p>
    <nav class="navbar my-3">
        <a class="navbar-brand" href="#!">Logo</a>
        <div class="nav-btn">
            <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
        </div>
        <div class="nav-menu navbar-left">
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
        </div>
    </nav>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar my-3&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#!&quot;&gt;Logo&lt;/a&gt;
    &lt;div class=&quot;nav-btn&quot;&gt;
        &lt;img class=&quot;nav-icon&quot; src=&quot;https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;nav-menu navbar-left&quot;&gt;
        &lt;ul&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Fixed -->
<article class="section-scroll" id="fixed">
    <h2 class="b-b-light hash">Fixed</h2>
    <p class="secondary-lead">
        It is positioned relative by default, to change this, simply add our fixed utility class <code class="inline">p-fixed</code> and <code class="inline">pin-t</code>, <code class="inline">pin-l</code>, <code class="inline">full-width</code> classes to pin the navbar to the top of the window.
        <br>For more information on the position property, head over to <a class="external-link" href="https://medium.freecodecamp.org/how-to-use-the-position-property-in-css-to-align-elements-d8f49c403a26" rel="noopener nofollow">Free Code Camp</a>.
    </p>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar p-fixed pin-l pin-t full-width&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#!&quot;&gt;Logo&lt;/a&gt;
    &lt;div class=&quot;nav-btn&quot;&gt;
        &lt;img class=&quot;nav-icon&quot; src=&quot;https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;nav-menu navbar-left&quot;&gt;
        &lt;ul&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Buttons -->
<article class="section-scroll" id="button">
    <h2 class="b-b-light hash">Button</h2>
    <p class="secondary-lead">
        Using buttons within your navbar is as easy as inserting the predfined mesh button classes within the container. See the <a class="external-link" href="/documentation/components/nav">button page</a> for more details.
    </p>
    <nav class="navbar my-3">
        <a class="navbar-brand" href="#!">Logo</a>
        <div class="nav-btn">
            <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
        </div>
        <div class="nav-menu">
            <ul>
                <li class="nav-item">
                    <button class="btn btn-primary btn-small">Button</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary">Button</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary btn-large">Button</button>
                </li>
            </ul>
        </div>
    </nav>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#!&quot;&gt;Logo&lt;/a&gt;;
    &lt;div class=&quot;nav-btn&quot;&gt;
        &lt;img class=&quot;nav-icon&quot; src=&quot;https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;nav-menu&quot;&gt;
        &lt;ul&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;button class=&quot;btn btn-primary btn-small&quot;&gt;Button&lt;/button&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;button class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;button class=&quot;btn btn-primary btn-large&quot;&gt;Button&lt;/button&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Icon -->
<article class="section-scroll" id="icon">
    <h2 class="b-b-light hash">Icon</h2>
    <p class="secondary-lead">
        Adding icons just a case of adding the <code class="inline">&lt;i&gt;</code> element inside the <code class="inline">nav-item</code>, see below:
    </p>
    <nav class="navbar">
        <a class="navbar-brand" href="#!">Logo</a>
        <div class="nav-btn">
            <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
        </div>
        <div class="nav-menu">
            <ul>
                <li class="nav-item mx-1">
                    <i class="fas fa-search"></i>
                </li>
                <li class="nav-item mx-1">
                    <i class="fas fa-map-marker"></i>
                </li>
                <li class="nav-item mx-1">
                    <i class="fas fa-heart"></i>
                </li>
                <li class="nav-item mx-1">
                    <i class="fas fa-ellipsis-v"></i>
                </li>
            </ul>
        </div>
    </nav>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar my-3&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#!&quot;&gt;Logo&lt;/a&gt;
    &lt;div class=&quot;nav-btn&quot;&gt;
        &lt;img class=&quot;nav-icon&quot; src=&quot;https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;nav-menu&quot;&gt;
        &lt;ul&gt;
            &lt;li class=&quot;nav-item mx-1&quot;&gt;
                &lt;i class=&quot;fas fa-search&quot;&gt;&lt;/i&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item mx-1&quot;&gt;
                &lt;i class=&quot;fas fa-map-marker&quot;&gt;&lt;/i&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item mx-1&quot;&gt;
                &lt;i class=&quot;fas fa-heart&quot;&gt;&lt;/i&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item mx-1&quot;&gt;
                &lt;i class=&quot;fas fa-ellipsis-v&quot;&gt;&lt;/i&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>


<!-- Tabs -->
<article class="section-scroll" id="tabs">
    <h2 class="b-b-light hash">Tabs</h2>
    <p class="secondary-lead">
        To add materialistic tabs to to the navbar, append the navbar container with the <a class="external-link" href="/documentation/components/tabs" rel="noopener nofollow">tabs component</a>.
        <br>Then apply the <code class="inline">navbar-tabs</code> to the navbar element.
        <br>This will 0 out padding on the navbar and apply slight padding to the <code class="inline">nav-menu</code> and <code class="inline">nav-brand</code> elements.
        <br><span class="t-bold">Note:</span> Be sure to add the <code class="inline">navbar-dark</code> and <code class="inline">tabs-dark</code> if you have a dark background selected like below.</span>
    </p>       
    <nav class="navbar navbar-tabs navbar-dark bg-secondary my-3">
        <a class="navbar-brand" href="#!">Logo</a>
        <div class="nav-btn">
            <img class="nav-icon" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true">
        </div>
        <div class="nav-menu">
            <ul>
                <li class="nav-item">
                    <a class="active" href="#">Item</a>
                </li>
                <li class="nav-item">
                    <a href="#">Item</a>
                </li>
                <li class="nav-item">
                    <a href="#">Item</a>
                </li>
            </ul>
        </div>
        <div class="tabs tabs-animate tabs-dark">
            <input type="radio" class="tabs-toggle" name="tabs-animate" id="tab-animate-1" checked="checked">
            <label class="tabs-label" for="tab-animate-1">First Tab</label>
            <div class="tabs-panel">
                <h3>First Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant tumblr fanny pack. Aesthetic chartreuse chambray, locavore tattooed food truck banh mi gastropub air plant organic bitters keffiyeh lo-fi jean shorts glossier. Leggings scenester PBR&amp;B, bitters ramps sustainable lo-fi tofu. Truffaut flannel cray tacos, occupy organic sustainable bicycle rights flexitarian squid woke scenester.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-animate" id="tab-animate-2">
            <label class="tabs-label" for="tab-animate-2">Second Tab</label>
            <div class="tabs-panel">
                <h3>Second Tab Content</h3>
                <p>Glossier brooklyn church-key, fingerstache sartorial pickled pork belly keffiyeh before they sold out. Butcher beard hashtag bespoke affogato viral. Wayfarers distillery pok pok chillwave kogi pabst. Tote bag chicharrones stumptown disrupt, truffaut shaman thundercats pok pok PBR&amp;B pitchfork tbh vexillologist man braid. Tbh four dollar toast yr glossier leggings, subway tile kickstarter. Crucifix scenester green juice, normcore distillery locavore tattooed semiotics hashtag tousled venmo. Meditation bespoke sriracha selfies.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-animate" id="tab-animate-3">
            <label class="tabs-label" for="tab-animate-3">Third Tab</label>
            <div class="tabs-panel">
                <h3>Third Tab Content</h3>
                <p>Vexillologist messenger bag master cleanse lumbersexual williamsburg. Before they sold out direct trade readymade ugh paleo irony street art. Slow-carb lomo kale chips venmo lumbersexual jean shorts. Vexillologist marfa pour-over normcore, kitsch wayfarers squid put a bird on it man bun quinoa pitchfork chartreuse occupy kale chips. Pour-over man braid microdosing ugh kale chips.</p>
            </div>
        </div>
    </nav>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar navbar-tabs navbar-dark bg-secondary&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#!&quot;&gt;Logo&lt;/a&gt;
    &lt;div class=&quot;nav-btn&quot;&gt;
        &lt;img class=&quot;nav-icon&quot; src=&quot;https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/nav-menu.svg?sanitize=true&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;nav-menu&quot;&gt;
        &lt;ul&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;Item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tabs tabs-animate tabs-dark&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-animate&quot; id=&quot;tab-animate-1&quot; checked=&quot;checked&quot;&gt;
        &lt;label class=&quot;tabs-label&quot; for=&quot;tab-animate-1&quot;&gt;First Tab&lt;/label&gt;
        &lt;div class=&quot;tabs-panel&quot;&gt;
            &lt;h3&gt;First Tab Content&lt;/h3&gt;
            &lt;p&gt;+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant tumblr fanny pack. Aesthetic chartreuse chambray, locavore tattooed food truck banh mi gastropub air plant organic bitters keffiyeh lo-fi jean shorts glossier. Leggings scenester PBR&amp;amp;B, bitters ramps sustainable lo-fi tofu. Truffaut flannel cray tacos, occupy organic sustainable bicycle rights flexitarian squid woke scenester.&lt;/p&gt;
        &lt;/div&gt;
        &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-animate&quot; id=&quot;tab-animate-2&quot;&gt;
        &lt;label class=&quot;tabs-label&quot; for=&quot;tab-animate-2&quot;&gt;Second Tab&lt;/label&gt;
        &lt;div class=&quot;tabs-panel&quot;&gt;
            &lt;h3&gt;Second Tab Content&lt;/h3&gt;
            &lt;p&gt;Glossier brooklyn church-key, fingerstache sartorial pickled pork belly keffiyeh before they sold out. Butcher beard hashtag bespoke affogato viral. Wayfarers distillery pok pok chillwave kogi pabst. Tote bag chicharrones stumptown disrupt, truffaut shaman thundercats pok pok PBR&amp;amp;B pitchfork tbh vexillologist man braid. Tbh four dollar toast yr glossier leggings, subway tile kickstarter. Crucifix scenester green juice, normcore distillery locavore tattooed semiotics hashtag tousled venmo. Meditation bespoke sriracha selfies.&lt;/p&gt;
        &lt;/div&gt;
        &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-animate&quot; id=&quot;tab-animate-3&quot;&gt;
        &lt;label class=&quot;tabs-label&quot; for=&quot;tab-animate-3&quot;&gt;Third Tab&lt;/label&gt;
        &lt;div class=&quot;tabs-panel&quot;&gt;
            &lt;h3&gt;Third Tab Content&lt;/h3&gt;
            &lt;p&gt;Vexillologist messenger bag master cleanse lumbersexual williamsburg. Before they sold out direct trade readymade ugh paleo irony street art. Slow-carb lomo kale chips venmo lumbersexual jean shorts. Vexillologist marfa pour-over normcore, kitsch wayfarers squid put a bird on it man bun quinoa pitchfork chartreuse occupy kale chips. Pour-over man braid microdosing ugh kale chips.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Search -->
<!-- //!COME BACK TO WHEN FORMS ARE DONE-->
<article class="section-scroll" id="search">
    <h2 class="b-b-light hash">Search</h2>
    <p class="secondary-lead">
    </p>
    <nav class="navbar bg-primary my-3">
        <div class="navbar-search">
            <i class="fas fa-search c-white"></i>
        </div>
        <div class="navbar-close">
            <i class="fas fa-times c-white"></i>
        </div>
        <form>
            <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </nav>
    <pre class="highlight mb-5"><code class="html">
        
    
    </code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Colors -->
<article class="section-scroll" id="colors">
    <h2 class="b-b-light hash">Colors</h2>
    <p class="secondary-lead">
    </p>
    <nav class="navbar navbar-dark bg-dark my-3">
        <div class="navbar-brand d-flex align-items-center">
            <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo.svg?sanitize=true">
            meshCSS
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
                    <button class="btn btn-white btn-outline px-3 py-1 br mb-0 t-initial">Download</button>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-dark bg-primary my-3">
        <div class="navbar-brand d-flex align-items-center">
            <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
            meshCSS
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
                    <button class="btn btn-white btn-outline px-3 py-1 br mb-0 t-initial">Download</button>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-dark bg-secondary my-3">
        <div class="navbar-brand d-flex align-items-center">
            <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
            meshCSS
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
                    <button class="btn btn-white btn-outline px-3 py-1 br mb-0 t-initial">Download</button>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-dark bg-info my-3">
        <div class="navbar-brand d-flex align-items-center">
            <img class="img-responsive nav-mesh-logo" src="https://raw.githubusercontent.com/ainsleyclark/mesh/master/res/meshlogo-white.svg?sanitize=true">
            meshCSS
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
                    <button class="btn btn-white btn-outline px-3 py-1 br mb-0 t-initial">Download</button>
                </li>
            </ul>
        </div>
    </nav>
    <pre class="highlight mb-5"><code class="html">&lt;nav class=&quot;navbar navbar-dark bg-dark&quot;&gt;
    &lt;!-- navbar content --&gt;
&lt;/nav&gt;
&lt;nav class=&quot;navbar navbar-dark bg-primary&quot;&gt;
    &lt;!-- navbar content --&gt;
&lt;/nav&gt;
&lt;nav class=&quot;navbar navbar-dark bg-secondary&quot;&gt;
    &lt;!-- navbar content --&gt;
&lt;/nav&gt;
&lt;nav class=&quot;navbar navbar-dark bg-info&quot;&gt;
    &lt;!-- navbar content --&gt;
&lt;/nav&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Chnage padding amounts & default background color the navbar with the scss variables below.
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
                        <pre class="variables highlight"><code class="scss">$navbar-mobile-padding: 1.2em;</code></pre>
                    </td>
                    <td>Pixel/em/rem</td>
                    <td>Mobile & tablet padding amount in pixels, em's or rem's.</td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss">$navbar-padding: 1.2em 1.5em;</code></pre>
                    </td>
                    <td>Pixel/em/rem</td>
                    <td>Padding amount for default navbar in pixels, em's or rem's.</td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss">$navbar-margin-bottom: 20px;</code></pre>
                    </td>
                    <td>Pixel/em/rem</td>
                    <td>Margin bottom amount in pixels, em's or rem's.</td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss">$navbar-background-color: #ebeaea;</code></pre>
                    </td>
                    <td>	Color</td>
                    <td>The default background color of the card.</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>


@endsection