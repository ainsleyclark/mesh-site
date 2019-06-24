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
        We understand collapsible content is somewhat difficult with pure CSS. Animating the max-height property with
        CSS alone doesnt allow for a smooth transition between each accordion, which is why we have included a CSS & JS
        version shown below.
        <br>We have provided the CSS so choose one of the options below or implement your own!
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>The container of the items should be prefixed with <code class="inline">collapse</code> and use the
                <code class="inline">collapse-css</code> for CSS close functionality (show below).</li>
            <li>Items should be tagged with the <code class="inline">collapse-item</code> class.</li>
            <li>The <code class="inline">collapse-header</code> is the wrapper for the visible content (text and icon).
            </li>
            <li>The <code class="inline">collapse-content</code> is the unseen content and will become visible when the
                user clicks the header.</li>
        </ul>
    </div>
    <div class="text-cont">
        <h3>Example:</h3>
        <p>Here we are using the checkbox trick to display the collapsible content.
            <br><strong>Note:</strong> If using this technique ensure the checkbox id matches the label <code
                class="inline">for</code> attribute.
        </p>
    </div>
    <div class="collapse collapse-css my-3">
        <div class="collapse-item">
            <input type="checkbox" class="collapse-toggle" id="collapse1">
            <label class="collapse-header" for="collapse1" tabindex="1">
                <span class="collapse-title">Collapsible item no 1.</span>
                <i class="fas fa-chevron-down"></i>
            </label>
            <div class="collapse-content">
                <p>Fingerstache paleo copper mug 8-bit taiyaki. Semiotics normcore live-edge mumblecore
                    letterpress hammock flexitarian. Hexagon mlkshk tote bag actually. Woke vaporware
                    tumeric iPhone pop-up bushwick, cliche letterpress raw denim affogato. Irony deep v
                    salvia, farm-to-table bitters craft beer chicharrones portland lo-fi kickstarter
                    green juice. Flannel polaroid iPhone fixie, franzen swag meggings hoodie cray master
                    cleanse shabby chic.</p>
            </div>
        </div>
        <div class="collapse-item">
            <input type="checkbox" class="collapse-toggle" id="collapse2">
            <label class="collapse-header" for="collapse2" tabindex="1">
                <span class="collapse-title">Collapsible item no 2.</span>
                <i class="fas fa-chevron-down"></i>
            </label>
            <div class="collapse-content">
                <p>Photo booth bespoke ethical, affogato snackwave plaid typewriter shaman health goth
                    master cleanse intelligentsia humblebrag. Keytar sartorial etsy polaroid knausgaard.
                    Roof party echo park man bun direct trade. Ethical la croix yr, wayfarers beard
                    chillwave man braid DIY austin brunch palo santo cray plaid live-edge yuccie. XOXO
                    thundercats fam keffiyeh bicycle rights sriracha copper mug artisan shoreditch
                    pitchfork gastropub neutra deep v.</p>
            </div>
        </div>
        <div class="collapse-item">
            <input type="checkbox" class="collapse-toggle" id="collapse3">
            <label class="collapse-header" for="collapse3" tabindex="1">
                <span class="collapse-title">Collapsible item no 3.</span>
                <i class="fas fa-chevron-down"></i>
            </label>
            <div class="collapse-content">
                <p>Cornhole organic yr, flannel air plant irony bicycle rights listicle locavore
                    crucifix kinfolk jianbing thundercats plaid. Kogi raw denim selvage, air plant vice
                    fashion axe 3 wolf moon offal schlitz occupy kinfolk distillery yr. Franzen
                    slow-carb DIY coloring book. Pitchfork hell of tacos, semiotics squid shaman ennui
                    mumblecore ugh etsy XOXO freegan umami. You probably haven't heard of them wayfarers
                    tumblr semiotics drinking vinegar iPhone enamel pin fixie.</p>
            </div>
        </div>
    </div>
    <pre
        class="highlight mt-5"><code class="html">&lt;div class=&quot;collapse collapse-css&quot;&gt;
    &lt;div class=&quot;collapse-item&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;collapse-toggle&quot; id=&quot;collapse1&quot;&gt;
        &lt;label class=&quot;collapse-header&quot; for=&quot;collapse1&quot; tabindex=&quot;1&quot;&gt;
            &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 1.&lt;/span&gt;
            &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
        &lt;/label&gt;
        &lt;div class=&quot;collapse-content&quot;&gt;
            &lt;p&gt;Fingerstache paleo copper...&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;collapse-item&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;collapse-toggle&quot; id=&quot;collapse2&quot;&gt;
        &lt;label class=&quot;collapse-header&quot; for=&quot;collapse2&quot; tabindex=&quot;1&quot;&gt;
            &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 2.&lt;/span&gt;
            &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
        &lt;/label&gt;
        &lt;div class=&quot;collapse-content&quot; &gt;
            &lt;p&gt;Photo booth bespoke ethical...&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;collapse-item&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;collapse-toggle&quot; id=&quot;collapse3&quot;&gt;
        &lt;label class=&quot;collapse-header&quot; for=&quot;collapse3&quot; tabindex=&quot;1&quot;&gt;
            &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 3.&lt;/span&gt;
            &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
        &lt;/label&gt;
        &lt;div class=&quot;collapse-content&quot;&gt;
            &lt;p&gt;Cornhole organic yr, flannel air plant...&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Accordion -->
<article class="section-scroll" id="accordion">
    <h2 class="b-b-light hash">Accordion</h2>
    <p class="secondary-lead">
        Accordions provide a way of expanding only one section of content at a time, great for large sections of
        content. Click the header item to watch it expand.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>If you wish to use our JS code at the bottom of the page, make sure you wrap your content with a <code
                    class="inline">collapse-inner</code> class inside the <code class="inline">collapse-content</code>
                div.</li>
            <li>Add the <code class="inline">collapse-js</code> class alongside the <code class="inline">collapse</code>
                element, to enable transition & styling.</li>
            <li>Wrap the whole collapse inside a div, you can use whatever class name you want.</li>
        </ul>
    </div>
    <div class="accordion">
        <div class="collapse collapse-js">
            <div class="collapse-item">
                <label class="collapse-header">
                    <span class="collapse-title">Collapsible item no 1.</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="collapse-content">
                    <div class="collapse-inner">
                        <p>Fingerstache paleo copper mug 8-bit taiyaki. Semiotics normcore live-edge
                            mumblecore letterpress hammock flexitarian. Hexagon mlkshk tote bag
                            actually. Woke vaporware tumeric iPhone pop-up bushwick, cliche letterpress
                            raw denim affogato. Irony deep v salvia, farm-to-table bitters craft beer
                            chicharrones portland lo-fi kickstarter green juice. Flannel polaroid iPhone
                            fixie, franzen swag meggings hoodie cray master cleanse shabby chic.</p>
                    </div>
                </div>
            </div>
            <div class="collapse-item">
                <label class="collapse-header" for="collapsej2">
                    <span class="collapse-title">Collapsible item no 2.</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="collapse-content">
                    <div class="collapse-inner">
                        <p>Photo booth bespoke ethical, affogato snackwave plaid typewriter shaman
                            health goth master cleanse intelligentsia humblebrag. Keytar sartorial etsy
                            polaroid knausgaard. Roof party echo park man bun direct trade. Ethical la
                            croix yr, wayfarers beard chillwave man braid DIY austin brunch palo santo
                            cray plaid live-edge yuccie. XOXO thundercats fam keffiyeh bicycle rights
                            sriracha copper mug artisan shoreditch pitchfork gastropub neutra deep
                            v.</p>
                    </div>
                </div>
            </div>
            <div class="collapse-item">
                <label class="collapse-header">
                    <span class="collapse-title">Collapsible item no 3.</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="collapse-content">
                    <div class="collapse-inner">
                        <p>Cornhole organic yr, flannel air plant irony bicycle rights listicle locavore
                            crucifix kinfolk jianbing thundercats plaid. Kogi raw denim selvage, air
                            plant vice fashion axe 3 wolf moon offal schlitz occupy kinfolk distillery
                            yr. Franzen slow-carb DIY coloring book. Pitchfork hell of tacos, semiotics
                            squid shaman ennui mumblecore ugh etsy XOXO freegan umami. You probably
                            haven't heard of them wayfarers tumblr semiotics drinking vinegar iPhone
                            enamel pin fixie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-cont mt-5">
        <h3>JS:</h3>
        <p>If using our JS code mentioned below, you can create a new accordion by creating a new Collapse object,
            setting the parent (in our case <code class="inline">accordion</code>) and then addding an accordion
            property set to true.</p>
    </div>
    <pre
        class="highlight"><code class="js">let accordion = new Collapse({
    accordion: true,
    parent: document.body.querySelector('.accordion')
});</code><img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <div class="text-cont">
        <h3>Markup:</h3>
    </div>
    <pre
        class="highlight"><code class="js">&lt;div class=&quot;accordion&quot;&gt;
    &lt;div class=&quot;collapse collapse-js&quot;&gt;
        &lt;div class=&quot;collapse-item&quot;&gt;
            &lt;label class=&quot;collapse-header&quot;&gt;
                &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 1.&lt;/span&gt;
                &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
            &lt;div class=&quot;collapse-content&quot;&gt;
                &lt;div class=&quot;collapse-inner&quot;&gt;
                    &lt;p&gt;Fingerstache paleo copper...&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;collapse-item&quot;&gt;
            &lt;label class=&quot;collapse-header&quot; for=&quot;collapsej2&quot;&gt;
                &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 2.&lt;/span&gt;
                &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
            &lt;div class=&quot;collapse-content&quot;&gt;
                &lt;div class=&quot;collapse-inner&quot;&gt;
                    &lt;p&gt;Photo booth bespoke ethical, affogato...&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;collapse-item&quot;&gt;
            &lt;label class=&quot;collapse-header&quot;&gt;
                &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 3.&lt;/span&gt;
                &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
            &lt;div class=&quot;collapse-content&quot;&gt;
                &lt;div class=&quot;collapse-inner&quot;&gt;
                    &lt;p&gt;Cornhole organic yr, flannel air plant...&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Expand -->
<article class="section-scroll" id="expand">
    <h2 class="b-b-light hash">Expand</h2>
    <p class="secondary-lead">
        In order for the content to stay expanded when you click a collapsible item, just rid of the accordion property
        in the JS. Go ahead a click the collapse items to see the effect.
    </p>
    <div class="expand my-3">
        <div class="collapse collapse-js">
            <div class="collapse-item">
                <label class="collapse-header">
                    <span class="collapse-title">Collapsible item no 1.</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="collapse-content">
                    <div class="collapse-inner">
                        <p>Fingerstache paleo copper mug 8-bit taiyaki. Semiotics normcore live-edge
                            mumblecore letterpress hammock flexitarian. Hexagon mlkshk tote bag
                            actually. Woke vaporware tumeric iPhone pop-up bushwick, cliche letterpress
                            raw denim affogato. Irony deep v salvia, farm-to-table bitters craft beer
                            chicharrones portland lo-fi kickstarter green juice. Flannel polaroid iPhone
                            fixie, franzen swag meggings hoodie cray master cleanse shabby chic.</p>
                    </div>
                </div>
            </div>
            <div class="collapse-item">
                <label class="collapse-header" for="collapsej2">
                    <span class="collapse-title">Collapsible item no 2.</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="collapse-content">
                    <div class="collapse-inner">
                        <p>Photo booth bespoke ethical, affogato snackwave plaid typewriter shaman
                            health goth master cleanse intelligentsia humblebrag. Keytar sartorial etsy
                            polaroid knausgaard. Roof party echo park man bun direct trade. Ethical la
                            croix yr, wayfarers beard chillwave man braid DIY austin brunch palo santo
                            cray plaid live-edge yuccie. XOXO thundercats fam keffiyeh bicycle rights
                            sriracha copper mug artisan shoreditch pitchfork gastropub neutra deep
                            v.</p>
                    </div>
                </div>
            </div>
            <div class="collapse-item">
                <label class="collapse-header">
                    <span class="collapse-title">Collapsible item no 3.</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="collapse-content">
                    <div class="collapse-inner">
                        <p>Cornhole organic yr, flannel air plant irony bicycle rights listicle locavore
                            crucifix kinfolk jianbing thundercats plaid. Kogi raw denim selvage, air
                            plant vice fashion axe 3 wolf moon offal schlitz occupy kinfolk distillery
                            yr. Franzen slow-carb DIY coloring book. Pitchfork hell of tacos, semiotics
                            squid shaman ennui mumblecore ugh etsy XOXO freegan umami. You probably
                            haven't heard of them wayfarers tumblr semiotics drinking vinegar iPhone
                            enamel pin fixie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-cont mt-5">
        <h3>JS:</h3>
        <p>If using our JS code mentioned below, you can create a new accordion by creating a new Collapse object and
            setting the parent (in our case <code class="inline">expand</code>) like below.</p>
    </div>

    <pre
        class="highlight"><code class="js">let collapse = new Collapse({
    parent: document.body.querySelector('.expand')
});</code><img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <div class="text-cont">
        <h3>Markup:</h3>
    </div>
    <pre
        class="highlight"><code class="js">&lt;div class=&quot;expand&quot;&gt;
    &lt;div class=&quot;collapse collapse-js&quot;&gt;
        &lt;div class=&quot;collapse-item&quot;&gt;
            &lt;label class=&quot;collapse-header&quot;&gt;
                &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 1.&lt;/span&gt;
                &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
            &lt;div class=&quot;collapse-content&quot;&gt;
                &lt;div class=&quot;collapse-inner&quot;&gt;
                    &lt;p&gt;Fingerstache paleo copper mug 8-bit taiyaki...&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;collapse-item&quot;&gt;
            &lt;label class=&quot;collapse-header&quot; for=&quot;collapsej2&quot;&gt;
                &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 2.&lt;/span&gt;
                &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
            &lt;div class=&quot;collapse-content&quot;&gt;
                &lt;div class=&quot;collapse-inner&quot;&gt;
                    &lt;p&gt;Photo booth bespoke ethical, affogato...&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;collapse-item&quot;&gt;
            &lt;label class=&quot;collapse-header&quot;&gt;
                &lt;span class=&quot;collapse-title&quot;&gt;Collapsible item no 3.&lt;/span&gt;
                &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;
            &lt;/label&gt;
            &lt;div class=&quot;collapse-content&quot;&gt;
                &lt;div class=&quot;collapse-inner&quot;&gt;
                    &lt;p&gt;Cornhole organic yr, flannel air...&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- JS -->
<article class="section-scroll" id="js">
    <h2 class="b-b-light hash">JS</h2>
    <p class="secondary-lead">
        Use our vanilla ES6 collapse code for your project, see below.
    </p>
    <pre
        class="highlight mt-4"><code class="js">function Collapse(options) {
    let defaultOpt = {
        parent: document.body,
        accordion: false,
        outer: '.collapse-js',
        header: '.collapse-header',
        inner: '.collapse-content'
    };
    this.options = Object.assign(defaultOpt, options);
    this.elements = {};

    this.options.parent._collapse = this;
    this.init();
}

Collapse.prototype.init = function () {
    let opt = this.options,
        ele = this.elements,
        self = this;

    let collapses = ele.collapses = opt.parent.querySelectorAll(opt.outer);
    collapses.forEach(function (collapse) {
        let headers = collapse.querySelectorAll(opt.header);
        headers.forEach(function (header) {
            header.addEventListener('click', function () {
                if (opt.accordion) {
                    self.accordion(headers, header);
                } else {
                    self.toggle(header.parentNode, false);
                }
            })
        })
    })
};

Collapse.prototype.accordion = function(header, current) {
    let s = this;
    header.forEach(function (el) {
        s.toggle(el.parentNode, el !== current);
    })
};

Collapse.prototype.toggle = function(item, closeForce) {
    let height = 0;
    let inner = item.querySelector(this.options.inner);
    if (!item.classList.contains('active') && !closeForce) {
        height = this.calcHeight(inner);
        item.classList.add('active');
    } else {
        item.classList.remove('active');
    }
    inner.style.maxHeight = height + 'px';
};

Collapse.prototype.calcHeight = function(inner) {
    let children = inner.children;
    let height = 0;
    for (let i = 0; i < children.length; i++) {
        height += children[i].clientHeight;
    }
    return height;
};</code><img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <div class="text-cont mt-5">
        <h3>Example usage:</h3>
    </div>
    <pre
        class="highlight"><code class="js">let collapse = new Collapse({
        parent: document.body.querySelector('.expand')
    });
    let accordion = new Collapse({
        accordion: true,
        parent: document.body.querySelector('.accordion')
});</code><img class="copy-to-clipboard" src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$collapse-enable-css-close: true;</code></pre>
                    </td>
                    <td>Boolean</td>
                    <td>Enables/disables the css close functionality of the collapsible content.</td>
                </tr>
                <tr>
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$collapse-enable-js-close: true;</code></pre>
                    </td>
                    <td>Boolean</td>
                    <td>Enables/disables the JS close functionality of the collapsible content.</td>
                </tr>
                <tr>
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$collapse-header-padding: 25px 10px 5px 0;</code></pre>
                    </td>
                    <td>Pixel/em/rem</td>
                    <td>Header collapse padding (visible) in pixels, em's or rem's.</td>
                </tr>
                <tr>
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$collapse-content-padding: 15px 15px 20px; </code></pre>
                    </td>
                    <td>Pixel/em/rem</td>
                    <td>Content collapse padding (invisible) in pixels, em's or rem's.</td>
                </tr>
                <tr>
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$collapse-title-margin-top: 10px;</code></pre>
                    </td>
                    <td>Pixel/em/rem</td>
                    <td>The margin top of the title in pixels, em's or rem's.</td>
                </tr>
                <tr>
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$collapse-active-color: color('secondary');</code></pre>
                    </td>
                    <td>Color</td>
                    <td>This is the default color of the active collapsiable content, here we are using the secondary
                        color from the mesh color palette.</td>
                </tr>
                <tr>
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$collapse-border: 1px solid #ddd;</code></pre>
                    </td>
                    <td>CSS border</td>
                    <td>Border top of the collapsible title.</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>

@endsection