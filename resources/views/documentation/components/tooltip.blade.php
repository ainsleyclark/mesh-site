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
        Using a tooltip with mesh is a piece of cake, you can have the tooltips come in from different directions, as well as a dark mode. See the notation below to get started.
        <br>The <code class="inline">tooltip</code> attribute should be added which contains the text of the tooltip.
        <br><strong>Note:</strong> The tooltip can be applied to any semantic element.
    </p>
    <button class="btn btn-secondary mb-3" tooltip="I am a tooltip">Default</button>
    <pre class="highlight"><code class="html py-tab-4">&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot;&gt;Default&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Position -->
<article class="section-scroll" id="position">
    <h2 class="b-b-light hash">Position</h2>
    <p class="secondary-lead mb-1">
        The default position of the tooltip as at the top, but if you wish to change this, add the <code class="inline">tooltip-position</code> attribute equal to one of four properties:  
    </p>
    <ul class="list-line mt-1 mb-3">
        <li><code class="inline">top</code></li>
        <li><code class="inline">right</code></li>
        <li><code class="inline">bottom</code></li>
        <li><code class="inline">left</code></li>
    </ul>
    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="top">Top</button>
    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="right">Right</button>
    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="bottom">Bottom</button>
    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="left">Left</button>
    <pre class="highlight"><code class="html py-tab-4">&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;top&quot;&gt;Top&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;right&quot;&gt;Right&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;bottom&quot;&gt;Bottom&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;left&quot;&gt;Left&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Dark -->
<article class="section-scroll" id="dark">
    <h2 class="b-b-light hash">Dark mode</h2>
    <p class="secondary-lead">
        To inverse the colors of the tooltip to create a dark effect, add the <code class="inline">tooltip-color</code> attribute set equal to <code class="inline">dark</code>, see below.
    </p>
    <button class="btn btn-dark" tooltip="I am a dark tooltip" tooltip-color="dark">Dark</button>
    <pre class="highlight"><code class="html py-tab-4">&lt;button class=&quot;btn btn-dark&quot; tooltip=&quot;I am a dark tooltip&quot; tooltip-color=&quot;dark&quot;&gt;Default&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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
                        <td><pre class="variables highlight"><code class="scss">$tooltip-enable-dark: true !default;</code></pre></td>
                        <td>Boolean</td>
                        <td>Enables/disables the dark mode of the tooltip component.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tooltip-font-color: #666 !default;</code></pre></td>
                        <td>Color</td>
                        <td>Font color of the default tooltip.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tooltip-dark-color: #323232 !default;</code></pre></td>
                        <td>Color</td>
                        <td>Background color of the dark tooltip, the font color will autotmatically be black/white dependant on input.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tooltip-box-shadow: 
0 8px 10px 1px rgba(0, 0, 0, 0.14), 
0 3px 14px 2px rgba(0, 0, 0, 0.12), 
0 5px 5px -3px rgba(0, 0, 0, 0.2) !default;</code></pre></td>
                        <td>Color</td>
                        <td>The box shadow of the tooltip component.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tooltip-padding: 12px 22px !default;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Padding amount for tooltip in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tooltip-border-radius: 4px !default;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Borer radius of the tooltip component.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tooltip-font-size: 0.875rem !default;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>The default font size of the tooltip component.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$tooltip-transition-time: 0.15s !default;</code></pre></td>
                        <td>Seconds | milliseconds</td>
                        <td>The amount in seconds/milliseconds it takes for the tooltip to appear.</td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection