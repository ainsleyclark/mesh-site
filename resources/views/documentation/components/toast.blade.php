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
{{-- 
<!-- Usage -->
<article class="section-scroll" id="usage">
    <h2 class="b-b-light hash">Usage</h2>
    <p class="secondary-lead">
        Toasts are great for showing meaningful content easily and provide breif messages about proccesses of the app the user is working with.
        <br>As they only appear temporarily, <strong>they can't be done with CSS alone</strong>. Which is why we have provided a stupidly simple script to help you at the bottom of the page.
        <br>Checkout the demo below.
    </p>
    <button class="btn btn-primary" id="makeToast">Make me some toast</button>
    <div class="toast-cont">
        <div class="toast toast-bottom-right"></div>
    </div>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>It's recommended you use our script below but it's entirely up to you, you can create your own!</li>
            <li>The toast container is prefixed with the class <code class="inline">toast</code> it is positioned absolutley by default, but you can position toasts using our position classes below or using our pin classes, see our <a href="/documentation/utilities/position">position page</a> for more details.</li>
            <li>The tost content is wrapped with the class <code class="inline">toast-body</code>. This is the class to set colors on.</li>
        </ul>
    </div>
    <pre class="highlight mb-5"><code class="html">&lt;!-- Without toast body (using our JS) --&gt;
&lt;div class=&quot;toast toast-bottom-right&quot;&gt;&lt;/div&gt;
&lt;!-- With toast body (using your JS) --&gt;
&lt;div class=&quot;toast toast-bottom-right&quot;&gt;
    &lt;div class=&quot;toast-body bg-primary&quot;&gt;Mmmmmmmmm toast&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Position -->
<article class="section-scroll" id="position">
    <h2 class="b-b-light hash">Position</h2>
    <p class="secondary-lead">
        You can use the toast position classes to make them fixed, and align them to the viewport, see the buttons below & classes below.
        <strong>Alternatively</strong> you can use the pin classes, which will pin the toast to the parent of the <code class="inline">toast</code> container.
    </p>
    <div class="button-cont d-flex justify-content-center flex-wrap">
            <button class="btn btn-primary mx-1 toast-btn" id="toastTopRight">Top right</button>
            <button class="btn btn-primary mx-1 toast-btn" id="toastTopLeft">Top left</button>
            <button class="btn btn-primary mx-1 toast-btn" id="toastTopCenter">Top center</button>
            <div class="w-100"></div>
            <button class="btn btn-primary mx-1 toast-btn" id="toastBottomRight">Bottom right</button>
            <button class="btn btn-primary mx-1 toast-btn" id="toastBottomLeft">Bottom left</button>
            <button class="btn btn-primary mx-1 toast-btn" id="toastBottomCenter">Bottom center</button>
    </div>
    <div class="toast-cont">
        <div class="toast toast-top-right" data-toast="toastTopRight"></div>
        <div class="toast toast-top-left" data-toast="toastTopLeft"></div>
        <div class="toast toast-top-center" data-toast="toastTopCenter"></div>
        <div class="toast toast-bottom-right" data-toast="toastBottomRight"></div>
        <div class="toast toast-bottom-left" data-toast="toastBottomRight"></div>
        <div class="toast toast-bottom-center" data-toast="toastBottomLeft"></div>
        <div class="toast toast-bottom-right" data-toast="toastBottomCenter"></div>
    </div>
    <pre class="highlight mb-5"><code class="html">&lt;div class=&quot;toast toast-top-right&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;toast toast-top-left&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;toast toast-top-center&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;toast toast-bottom-right&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;toast toast-bottom-left&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;toast toast-bottom-center&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;toast toast-bottom-right&quot;&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Icon -->
<article class="section-scroll" id="icon">
    <h2 class="b-b-light hash">Icon</h2>
    <p class="secondary-lead">
        You can use the toast position classes to make them fixed, and align them to the viewport, see the buttons below & classes below.
        <strong>Alternatively</strong> you can use the pin classes, which will pin the toast to the parent of the <code class="inline">toast</code> container.
    </p>
    <div class="button-cont d-flex justify-content-center flex-wrap">
        <button class="btn btn-primary mx-1 toast-btn" id="toastTopRight">With icon</button>
    </div>
    <div class="toast-cont">
        <div class="toast toast-bottom-right" data-toast="toastBottomRight"></div>
    </div>
    <pre class="highlight mb-5"><code class="html">
        
    </code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Javascript -->
<article class="section-scroll" id="javascript">
    <h2 class="b-b-light hash">Javascript</h2>
    <p class="secondary-lead">
        Copy & paste our toast script below to achieve the toast effect. The toast object accepts two objects:  
    </p>
    <div class="text-cont my-3">
        <ul class="list-line">
            <li>The first being any HTML markup you want to display within the toast. Handy for icons & </li>
            <li>The second being an object which has a display time property (passed in with seconds) and a classes property, allowing you to pass in any classes you want to append to to the <code class="inline">toast-body</code> element.</li>
        </ul>
    </div>
    <pre class="highlight mb-3"><code class="javascript">meshToast('mesh toast', { displayTime: '5s' });
meshToast('mesh toast', { displayTime: '5s', classes: 'bg-secondary' });</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <div class="text-cont mb-3">
        <h3>Script</h3>
    </div>
    <pre class="highlight mb-3"><code class="javascript">function meshToast(text, opts = {}) {

        const defaults = {
            classes: "bg-primary"
        };
    
        const options = Object.assign(defaults, opts);
        const toastContainer = document.getElementsByClassName("toast")[0];
        const toastBody = document.createElement("div");
        const toastText = document.createElement("span");
    
        toastBody.setAttribute('class', "toast-body " + options.classes);
        toastText.innerHTML = text;
        toastBody.appendChild(toastText);
        toastContainer.appendChild(toastBody);
    
        toastBody.addEventListener("animationend", e => {
            toastBody.remove(1);
        });
    
        toastBody.classList.add("toast-show");
        if (options.displayTime) {
            toastBody.style.animationDuration = options.displayTime;
        }
    }</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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
                        <td style="vertical-align: middle;"><pre class="variables highlight"><code class="scss"></code></pre></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss"></code></pre></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss"></code></pre></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss"></code></pre></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
</article> --}}

@endsection