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
        Tabs organise content across different screens, data sets and other containers. With mesh we provide a pure css approach to implementing tabs by using the radio button method. Choose from different alignments such as bottom or vertical left & right.
        <br>mesh tabs automatically stack when the viewport is smaller than the tab container.
        <br>Checkout the example below.
    </p>
    <div class="tabs tabs-animate my-4">
        <input type="radio" class="tabs-toggle" name="tabs" id="tab-1" checked="checked">
        <label class="tabs-label" for="tab-1">First Tab</label>
        <input type="radio" class="tabs-toggle" name="tabs" id="tab-2" >
        <label class="tabs-label" for="tab-2">Second Tab</label>
        <input type="radio" class="tabs-toggle" name="tabs" id="tab-3">
        <label class="tabs-label" for="tab-3">Third Tab</label>
    </div>
    <div class="text-cont">
        <h3>Notation:</h3>
        <p class="secondary-lead">Please ensure you read these guidelines for tabs carefully before implmenting them in your page.</p>
        <ul class="list-line">
            <li>Everything within the tab component should be wrapped in the <code class="inline">tabs</code> class.</li>
            <li>The <code class="inline">tabs-panel</code> element is where your content lives and the <code class="inline">tabs-label</code> is the header for that panel.</li>
            <li>With the markup outlined below, it is important that the structure is preserved, meaning the <code class="inline">radio</code> input should appear first, followed by the <code class="inline">label</code> and finally the <code class="inline">tabs-panel</code> element.</li>
            <li><strong>Name:</strong> The <code class="inline">name</code> attribute for the radio button should be the same in each tabs component. You may run into some odd behaviour if it is not changed per component if more than one resides on a page.</li>
            <li><strong>ID:</strong> The <code class="inline">id</code> attribute for the radio button should match the <code class="inline">for</code> attribute of the label.</li>
        </ul>
    </div>
</article>

<!-- Plain -->
<article class="section-scroll" id="plain">
    <h2 class="b-b-light hash">Plain</h2>
    <p class="secondary-lead">
        To implmement tabs without any animation please checkout the markup below.
    </p>

    <div class="tabs mt-4 mb-2">
        <input type="radio" class="tabs-toggle" name="tabs-plain" id="tab-plain-1" checked="checked">
        <label class="tabs-label" for="tab-plain-1">First Tab</label>
        <div class="tabs-panel">
            <h3>First Tab Content</h3>
            <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant tumblr fanny pack. Aesthetic chartreuse chambray, locavore tattooed food truck banh mi gastropub air plant organic bitters keffiyeh lo-fi jean shorts glossier. Leggings scenester PBR&B, bitters ramps sustainable lo-fi tofu. Truffaut flannel cray tacos, occupy organic sustainable bicycle rights flexitarian squid woke scenester.</p>
        </div>
        <input type="radio" class="tabs-toggle" name="tabs-plain" id="tab-plain-2" >
        <label class="tabs-label" for="tab-plain-2">Second Tab</label>
        <div class="tabs-panel">
            <h3>Second Tab Content</h3>
            <p>Glossier brooklyn church-key, fingerstache sartorial pickled pork belly keffiyeh before they sold out. Butcher beard hashtag bespoke affogato viral. Wayfarers distillery pok pok chillwave kogi pabst. Tote bag chicharrones stumptown disrupt, truffaut shaman thundercats pok pok PBR&B pitchfork tbh vexillologist man braid. Tbh four dollar toast yr glossier leggings, subway tile kickstarter. Crucifix scenester green juice, normcore distillery locavore tattooed semiotics hashtag tousled venmo. Meditation bespoke sriracha selfies.</p>
        </div>
        <input type="radio" class="tabs-toggle" name="tabs-plain" id="tab-plain-3">
        <label class="tabs-label" for="tab-plain-3">Third Tab</label>
        <div class="tabs-panel">
            <h3>Third Tab Content</h3>
            <p>Vexillologist messenger bag master cleanse lumbersexual williamsburg. Before they sold out direct trade readymade ugh paleo irony street art. Slow-carb lomo kale chips venmo lumbersexual jean shorts. Vexillologist marfa pour-over normcore, kitsch wayfarers squid put a bird on it man bun quinoa pitchfork chartreuse occupy kale chips. Pour-over man braid microdosing ugh kale chips.</p>
        </div>
    </div>

    <pre class="highlight"><code class="html">&lt;div class=&quot;tabs&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-plain&quot; id=&quot;tab-plain-1&quot; checked=&quot;checked&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-plain-1&quot;&gt;First Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-plain&quot; id=&quot;tab-plain-2&quot; &gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-plain-2&quot;&gt;Second Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
        &lt;p&gt;Glossier brooklyn church-key...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-plain&quot; id=&quot;tab-plain-3&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-plain-3&quot;&gt;Third Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
        &lt;p&gt;Vexillologist messenger bag master...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Animate -->
<article class="section-scroll" id="animate">
        <h2 class="b-b-light hash">Animate</h2>
        <p class="secondary-lead">
            To add the border animation to tab labels, simply add <code class="inline">tabs-animate</code> to the <code class="inline">tabs</code> class.
        </p>
        <div class="tabs tabs-animate mt-4 mb-2">
            <input type="radio" class="tabs-toggle" name="tabs-animate" id="tab-animate-1" checked="checked">
            <label class="tabs-label" for="tab-animate-1">First Tab</label>
            <div class="tabs-panel">
                <h3>First Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant tumblr fanny pack. Aesthetic chartreuse chambray, locavore tattooed food truck banh mi gastropub air plant organic bitters keffiyeh lo-fi jean shorts glossier. Leggings scenester PBR&B, bitters ramps sustainable lo-fi tofu. Truffaut flannel cray tacos, occupy organic sustainable bicycle rights flexitarian squid woke scenester.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-animate" id="tab-animate-2" >
            <label class="tabs-label" for="tab-animate-2">Second Tab</label>
            <div class="tabs-panel">
                <h3>Second Tab Content</h3>
                <p>Glossier brooklyn church-key, fingerstache sartorial pickled pork belly keffiyeh before they sold out. Butcher beard hashtag bespoke affogato viral. Wayfarers distillery pok pok chillwave kogi pabst. Tote bag chicharrones stumptown disrupt, truffaut shaman thundercats pok pok PBR&B pitchfork tbh vexillologist man braid. Tbh four dollar toast yr glossier leggings, subway tile kickstarter. Crucifix scenester green juice, normcore distillery locavore tattooed semiotics hashtag tousled venmo. Meditation bespoke sriracha selfies.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-animate" id="tab-animate-3">
            <label class="tabs-label" for="tab-animate-3">Third Tab</label>
            <div class="tabs-panel">
                <h3>Third Tab Content</h3>
                <p>Vexillologist messenger bag master cleanse lumbersexual williamsburg. Before they sold out direct trade readymade ugh paleo irony street art. Slow-carb lomo kale chips venmo lumbersexual jean shorts. Vexillologist marfa pour-over normcore, kitsch wayfarers squid put a bird on it man bun quinoa pitchfork chartreuse occupy kale chips. Pour-over man braid microdosing ugh kale chips.</p>
            </div>
        </div>
        <pre class="highlight"><code class="html">&lt;div class=&quot;tabs tabs-animate&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-animate&quot; id=&quot;tab-animate-1&quot; checked=&quot;checked&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-animate-1&quot;&gt;First Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-animate&quot; id=&quot;tab-animate-2&quot; &gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-animate-2&quot;&gt;Second Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
        &lt;p&gt;Glossier brooklyn church-key...&lt;/p&gt;       
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-animate&quot; id=&quot;tab-animate-3&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-animate-3&quot;&gt;Third Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
        &lt;p&gt;Vexillologist messenger bag master...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Bottom -->
<article class="section-scroll" id="bottom">
        <h2 class="b-b-light hash">Bottom</h2>
        <p class="secondary-lead">
            To make the tab labels align to the bottom, simply add <code class="inline">tabs-bottom</code> to the <code class="inline">tabs</code> class.
        </p>
        <div class="tabs tabs-bottom tabs-animate mb-4 mt-2">
            <input type="radio" class="tabs-toggle" name="tabs-bottom" id="tab-bottom-1" checked="checked">
            <label class="tabs-label" for="tab-bottom-1">First Tab</label>
            <div class="tabs-panel">
                <h3>First Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant tumblr fanny pack. Aesthetic chartreuse chambray, locavore tattooed food truck banh mi gastropub air plant organic bitters keffiyeh lo-fi jean shorts glossier. Leggings scenester PBR&B, bitters ramps sustainable lo-fi tofu. Truffaut flannel cray tacos, occupy organic sustainable bicycle rights flexitarian squid woke scenester.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-bottom" id="tab-bottom-2" >
            <label class="tabs-label" for="tab-bottom-2">Second Tab</label>
            <div class="tabs-panel">
                <h3>Second Tab Content</h3>
                <p>Glossier brooklyn church-key, fingerstache sartorial pickled pork belly keffiyeh before they sold out. Butcher beard hashtag bespoke affogato viral. Wayfarers distillery pok pok chillwave kogi pabst. Tote bag chicharrones stumptown disrupt, truffaut shaman thundercats pok pok PBR&B pitchfork tbh vexillologist man braid. Tbh four dollar toast yr glossier leggings, subway tile kickstarter. Crucifix scenester green juice, normcore distillery locavore tattooed semiotics hashtag tousled venmo. Meditation bespoke sriracha selfies.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-bottom" id="tab-bottom-3">
            <label class="tabs-label" for="tab-bottom-3">Third Tab</label>
            <div class="tabs-panel">
                <h3>Third Tab Content</h3>
                <p>Vexillologist messenger bag master cleanse lumbersexual williamsburg. Before they sold out direct trade readymade ugh paleo irony street art. Slow-carb lomo kale chips venmo lumbersexual jean shorts. Vexillologist marfa pour-over normcore, kitsch wayfarers squid put a bird on it man bun quinoa pitchfork chartreuse occupy kale chips. Pour-over man braid microdosing ugh kale chips.</p>
            </div>
        </div>
        <pre class="highlight"><code class="html">&lt;div class=&quot;tabs tabs-bottom tabs-animate&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-bottom&quot; id=&quot;tab-bottom-1&quot; checked=&quot;checked&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-bottom-1&quot;&gt;First Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-bottom&quot; id=&quot;tab-bottom-2&quot; &gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-bottom-2&quot;&gt;Second Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
        &lt;p&gt;Glossier brooklyn church-key...&lt;/p&gt;     
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-bottom&quot; id=&quot;tab-bottom-3&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-bottom-3&quot;&gt;Third Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
        &lt;p&gt;Vexillologist messenger bag master...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Left -->
<article class="section-scroll" id="left">
        <h2 class="b-b-light hash">Left</h2>
        <p class="secondary-lead">
            To vertically aligb the tab labels align to the left, just add <code class="inline">tabs-left</code> to the <code class="inline">tabs</code> class.
            <br><strong>Note:</strong> The tab labels will fall into a row at small viewports.
        </p>
        <div class="tabs tabs-left tabs-animate my-4">
            <input type="radio" class="tabs-toggle" name="tabs-left" id="tab-left-1" checked="checked">
            <label class="tabs-label" for="tab-left-1">First Tab</label>
            <div class="tabs-panel">
                <h3>First Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-left" id="tab-left-2" >
            <label class="tabs-label" for="tab-left-2">Second Tab</label>
            <div class="tabs-panel">
                <h3>Second Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-left" id="tab-left-3">
            <label class="tabs-label" for="tab-left-3">Third Tab</label>
            <div class="tabs-panel">
                <h3>Third Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant.</p>
            </div>
        </div>
        <pre class="highlight"><code class="html">&lt;div class=&quot;tabs tabs-left tabs-animate&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-left&quot; id=&quot;tab-left-1&quot; checked=&quot;checked&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-left-1&quot;&gt;First Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-left&quot; id=&quot;tab-left-2&quot; &gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-left-2&quot;&gt;Second Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-left&quot; id=&quot;tab-left-3&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-left-3&quot;&gt;Third Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Right -->
<article class="section-scroll" id="right">
        <h2 class="b-b-light hash">Right</h2>
        <p class="secondary-lead">
            To vertically aligb the tab labels align to the left, just add <code class="inline">tabs-left</code> to the <code class="inline">tabs</code> class.
            <br><strong>Note:</strong> The tab labels will fall into a row at small viewports.
        </p>
        <div class="tabs tabs-right tabs-animate my-4">
            <input type="radio" class="tabs-toggle" name="tabs-right" id="tab-right-1" checked="checked">
            <label class="tabs-label" for="tab-right-1">First Tab</label>
            <div class="tabs-panel">
                <h3>First Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-right" id="tab-right-2" >
            <label class="tabs-label" for="tab-right-2">Second Tab</label>
            <div class="tabs-panel">
                <h3>Second Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant.</p>
            </div>
            <input type="radio" class="tabs-toggle" name="tabs-right" id="tab-right-3">
            <label class="tabs-label" for="tab-right-3">Third Tab</label>
            <div class="tabs-panel">
                <h3>Third Tab Content</h3>
                <p>+1 gluten-free fingerstache banh mi normcore beard marfa coloring book four dollar toast chartreuse. Tbh la croix lo-fi squid poke before they sold out air plant.</p>
            </div>
        </div>
        <pre class="highlight"><code class="html">&lt;div class=&quot;tabs tabs-right tabs-animate&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-right&quot; id=&quot;tab-right-1&quot; checked=&quot;checked&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-right-1&quot;&gt;First Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-right&quot; id=&quot;tab-right-2&quot; &gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-right-2&quot;&gt;Second Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
    &lt;input type=&quot;radio&quot; class=&quot;tabs-toggle&quot; name=&quot;tabs-right&quot; id=&quot;tab-right-3&quot;&gt;
    &lt;label class=&quot;tabs-label&quot; for=&quot;tab-right-3&quot;&gt;Third Tab&lt;/label&gt;
    &lt;div class=&quot;tabs-panel&quot;&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
        &lt;p&gt;+1 gluten-free fingerstache...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>
    
<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Manipulate the tables padding, colors and font sizes with the variables below.
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
                        <td><pre class="variables highlight"><code class="scss">$tabs-active-color: color('primary');</code></pre></td>
                        <td>Color</td>
                        <td>The color of the text when tab is selected.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-active-bar-color: color('primary');</code></pre></td>
                        <td>Color</td>
                        <td>The color of the bar when the tab is selected.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-border-color: 1px solid rgba(0, 0, 0, 0.12);</code></pre></td>
                        <td>Color</td>
                        <td>The color of the border above the panel items.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-label-opacity: 0.7;</code></pre></td>
                        <td>Number (0 - 1)</td>
                        <td>Opacity of label text.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-font-size: 14px;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Font size of label items.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-font-weight: 500;</code></pre></td>
                        <td>CSS font weight</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-label-mobile-padding: 0 16px;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Padding amount for the tab labels at mobile screen width in pixels, em's or rem's</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-label-padding: 0 24px;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Padding amount for the tab labels in pixels, em's or rem's</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-panel-padding: 1rem;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Padding amount for the tab panels in pixels, em's or rem's</td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection