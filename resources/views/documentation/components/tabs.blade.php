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
<article class="section-scroll" id="Usage">
    <h2 class="b-b-light hash">Usage</h2>
    <p class="secondary-lead">
        There are two different tabs options, Horizontal tabs and vertical tabs. 
        Both of the tabs colors can be changed to your needs. To get started use the examples below to help create beautiful tabs. 
        <br />The tabs must be inside of either <code class="inline">h-tabs</code> or <code class="inline">v-tabs</code> classes.
        <br /><strong>Note:</strong> Each additional class inside of the container must start with either <code class="inline">h-tabs-{class}</code> or <code class="inline">v-tabs-{class}</code>.
    </p>
    
</article>

<!-- Horizontal -->
<article class="section-scroll" id="Horizontal">
    <h2 class="b-b-light hash">Horizontal</h2>
    <p class="secondary-lead">
        To get started with horizontal tabs first create a container using <code class="inline">.h-tabs</code>. One tab consists of three tags, 
        <code class="inline">&lt;input /&gt;, &lt;label&gt;</code>, and <code class="inline">&lt;div&gt;</code>.
    </p>
    <!-- example -->
    <pre class="highlight"><code class="html">&lt;div class="h-tabs"&gt;
    &lt;input type="radio" class="h-tabs-toggle" name="tabs" id="tab-1" checked&gt;
    &lt;label class="h-tabs-label" for="tab-1"&gt;First Tab&lt;/label&gt;
    &lt;div class="h-tabs-panel"&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="h-tabs-toggle" name="tabs" id="tab-2"&gt;
    &lt;label class="h-tabs-label" for="tab-2"&gt;Second Tab&lt;/label&gt;
    &lt;div class="h-tabs-panel"&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="h-tabs-toggle" name="tabs" id="tab-3"&gt;
    &lt;label class="h-tabs-label" for="tab-3"&gt;Third Tab&lt;/label&gt;
    &lt;div class="h-tabs-panel"&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <p class="secondary-lead">
        The result will be simular to the one below.
    </p>

    <div class="h-tabs">
        <input type="radio" class="h-tabs-toggle" name="tabs" id="tab-1" checked="checked">
        <label class="h-tabs-label" for="tab-1">First Tab</label>
        <div class="h-tabs-panel">
            <h3>First Tab Content</h3>
        </div>
        
        <input type="radio" class="h-tabs-toggle" name="tabs" id="tab-2">
        <label class="h-tabs-label" for="tab-2">Second Tab</label>
        <div class="h-tabs-panel">
            <h3>Second Tab Content</h3>
        </div>
        
        <input type="radio" class="h-tabs-toggle" name="tabs" id="tab-3">
        <label class="h-tabs-label" for="tab-3">Third Tab</label>
        <div class="h-tabs-panel">
            <h3>Third Tab Content</h3>
        </div>
    </div>
</article>

<!-- Vertical -->
<article class="section-scroll" id="vertical">
    <h2 class="b-b-light hash">Vertical</h2>
    <p class="secondary-lead">
        To get started with vertical tabs first create a container using <code class="inline">.v-tabs</code>. Same three tags create vertical tabs. 
        <code class="inline">&lt;input /&gt;, &lt;label&gt;</code>, and <code class="inline">&lt;div&gt;</code>.
    </p>
<!-- example -->
    <pre class="highlight"><code class="html">&lt;div class="v-tabs"&gt;
    &lt;input type="radio" class="v-tabs-toggle" name="tabs" id="tab-1" checked&gt;
    &lt;label class="v-tabs-label" for="tab-1"&gt;First Tab&lt;/label&gt;
    &lt;div class="v-tabs-panel"&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="v-tabs-toggle" name="tabs" id="tab-2"&gt;
    &lt;label class="v-tabs-label" for="tab-2"&gt;Second Tab&lt;/label&gt;
    &lt;div class="v-tabs-panel"&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="v-tabs-toggle" name="tabs" id="tab-3"&gt;
    &lt;label class="v-tabs-label" for="tab-3"&gt;Third Tab&lt;/label&gt;
    &lt;div class="v-tabs-panel"&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <p class="secondary-lead">
        The result will be simular to the one below.
    </p>

    <div class="v-tabs">
        <input type="radio" class="v-tabs-toggle" name="v-tabs" id="tab1" checked="checked">
        <label class="v-tabs-label" for="tab1">First Tab</label>
        <div class="v-tabs-panel">
            <h3>First Tab Content</h3>
        </div>
        
        <input type="radio" class="v-tabs-toggle" name="v-tabs" id="tab2">
        <label class="v-tabs-label" for="tab2">Second Tab</label>
        <div class="v-tabs-panel">
            <h3>Second Tab Content</h3>
        </div>
        
        <input type="radio" class="v-tabs-toggle" name="v-tabs" id="tab3">
        <label class="v-tabs-label" for="tab3">Third Tab</label>
        <div class="v-tabs-panel">
            <h3>Third Tab Content</h3>
        </div>
    </div>
</article>

<!-- Colors -->
<article class="section-scroll" id="colors">
    <h2 class="b-b-light hash">Colors</h2>
    <p class="secondary-lead">
        Adding colors to horizontal and vertical tabs is very simple. For horizontal tabs just add <code class="inline">.tabs-{color}</code>, chosing one of the colors from the colors tab.
        <br> With mesh you can also create custom panels using either <code class="inline">.tabs-{color}</code>, or any options of <code class="inline">.c-{color}</code>
        or <code class="inline">.br-{color}</code> by placing the corresponding class next to <code class="inline">.h-tabs-panel</code>.
    </p>

    <!-- example -->
    <pre class="highlight"><code class="html">&lt;div class="h-tabs tabs-primary"&gt;
    &lt;input type="radio" class="h-tabs-toggle" name="tabs" id="tab-1" checked&gt;
    &lt;label class="h-tabs-label" for="tab-1"&gt;First Tab&lt;/label&gt;
    &lt;div class="h-tabs-panel"&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="h-tabs-toggle" name="tabs" id="tab-2"&gt;
    &lt;label class="h-tabs-label" for="tab-2"&gt;Second Tab&lt;/label&gt;
    &lt;div class="h-tabs-panel"&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="h-tabs-toggle" name="tabs" id="tab-3"&gt;
    &lt;label class="h-tabs-label" for="tab-3"&gt;Third Tab&lt;/label&gt;
    &lt;div class="h-tabs-panel"&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

    <!-- horizontal -->
    <p class="secondary-lead">
        The result will be simular to the one below. Click on different tabs to see different options.
        <br><strong>Note:</strong>Each panel must contain the color desired.
    </p>

    <div class="h-tabs tabs-dark">
        <input type="radio" class="h-tabs-toggle" name="h-tabs" id="tabone" checked="checked">
        <label class="h-tabs-label" for="tabone">First Tab</label>
        <div class="h-tabs-panel bg-muted c-white">
            <h3>First Tab Content</h3>
        </div>
        
        <input type="radio" class="h-tabs-toggle" name="h-tabs" id="tabtwo">
        <label class="h-tabs-label" for="tabtwo">Second Tab</label>
        <div class="h-tabs-panel bg-danger c-white">
            <h3>Second Tab Content</h3>
        </div>
        
        <input type="radio" class="h-tabs-toggle" name="h-tabs" id="tabthree">
        <label class="h-tabs-label" for="tabthree">Third Tab</label>
        <div class="h-tabs-panel bg-link c-white">
            <h3>Third Tab Content</h3>
        </div>
    </div>

    <!-- vertical -->
    <p class="secondary-lead">
        For vertical tabs, place the color options inside of each label to change the color of labes. The panel background and color will be same as horizontal.
        <br><strong>Note:</strong> Adding color option to <code class="inline">.v-tabs</code> class will change the color for the hole container. 
    </p>
    <!-- example -->
    <pre class="highlight"><code class="html">&lt;div class="v-tabs"&gt;
    &lt;input type="radio" class="v-tabs-toggle" name="tabs" id="tab-1" checked&gt;
    &lt;label class="v-tabs-label tabs-secondary" for="tab-1"&gt;First Tab&lt;/label&gt;
    &lt;div class="v-tabs-panel"&gt;
        &lt;h3&gt;First Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="v-tabs-toggle" name="tabs" id="tab-2"&gt;
    &lt;label class="v-tabs-label tabs-secondary" for="tab-2"&gt;Second Tab&lt;/label&gt;
    &lt;div class="v-tabs-panel"&gt;
        &lt;h3&gt;Second Tab Content&lt;/h3&gt;
    &lt;/div&gt;
    &lt;input type="radio" class="v-tabs-toggle" name="tabs" id="tab-3"&gt;
    &lt;label class="v-tabs-label tabs-secondary" for="tab-3"&gt;Third Tab&lt;/label&gt;
    &lt;div class="v-tabs-panel"&gt;
        &lt;h3&gt;Third Tab Content&lt;/h3&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <p class="secondary-lead">
        The result will be simular to the one below.
    </p>

    <div class="v-tabs">
        <input type="radio" class="v-tabs-toggle" name="tab" id="1" checked="checked">
        <label class="v-tabs-label tabs-secondary" for="1">First Tab</label>
        <div class="v-tabs-panel">
            <h3>First Tab Content</h3>
        </div>
        
        <input type="radio" class="v-tabs-toggle" name="tab" id="2">
        <label class="v-tabs-label tabs-secondary" for="2">Second Tab</label>
        <div class="v-tabs-panel">
            <h3>Second Tab Content</h3>
        </div>
        
        <input type="radio" class="v-tabs-toggle" name="tab" id="3">
        <label class="v-tabs-label tabs-secondary" for="3">Third Tab</label>
        <div class="v-tabs-panel">
            <h3>Third Tab Content</h3>
        </div>
    </div>

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
                        <td><pre class="variables highlight"><code class="scss">$tabs-enable-colored: true !default;</code></pre></td>
                        <td>boolean</td>
                        <td>Enables/disables colored tabs.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-font-size: 14px !default;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Font size for badges in pixels, ems or rems.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tabs-font-weight: 500 !default;</code></pre></td>
                        <td>CSS font weight</td>
                        <td>Font weight of tabs with properties above.</td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection