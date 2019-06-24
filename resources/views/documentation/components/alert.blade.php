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
    <p class="mt-2">
        All alerts are prefixed with the <code class="inline">alert</code> class. This gives the element some common
        properties for the alert, such as margin and padding. There are three different types of alerts to choose from, take a look at below.
    </p>
    <div class="alert alert-secondary">
        This is a plain alert
    </div>
    <div class="alert alert-secondary alert-close alert-background">
        <i class="fas fa-info-circle mr-2"></i>
        <strong>This is full background alert:</strong>
        I like alerts, they display some decent content.
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-white alert-close alert-background py-0 pl-0 d-flex align-items-center">
        <div class="bg-secondary p-4 mr-3">
            <i class="fas fa-paper-plane c-white"></i>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <strong>Matereialstic</strong>
            <span>This is a matereialstic alert</span>
        </div>
        <button type="button" class="close mx-4 p-0" aria-label="Close">
            <span class="c-secondary" aria-hidden="true">&times;</span>
        </button> 
    </div>
</article>

<!-- Plain -->
<article class="section-scroll" id="plain">
    <h2 class="b-b-light hash">Plain</h2>
    <p class="mt-2">
        Plain alerts feature a border on the left & content. The text color is dynamically made and slightly darker than the alert itself.
        <br> You just need to label your container with the <code class="inline">alert</code> class and add your color by specifiying <code class="inline">alert-{color}</code>.
    </p>
    <div class="text-cont">
        <div class="alert">
            This is a default alert
        </div>
        <div class="alert alert-primary">
            This is a primary alert
        </div>
        <div class="alert alert-success">
            This is a success alert
        </div>
        <div class="alert alert-info">
            This is an info alert
        </div>
        <div class="alert alert-warning">
            This is a warning alert
        </div>
        <div class="alert alert-danger">
            This is a danger alert
        </div>
        <div class="alert alert-link">
            This is a link alert
        </div>
    </div>
    <pre
        class="highlight"><code class="html">&lt;div class="alert"&gt;
This is a default alert
&lt;/div&gt;
&lt;div class="alert alert-primary"&gt;
This is a primary alert
&lt;/div&gt;
&lt;div class="alert alert-success"&gt;
This is a success alert
&lt;/div&gt;
&lt;div class="alert alert-info"&gt;
This is an info alert
&lt;/div&gt;
&lt;div class="alert alert-warning"&gt;
This is a warning alert
&lt;/div&gt;
&lt;div class="alert alert-danger"&gt;
This is a danger alert
&lt;/div&gt;
&lt;div class="alert alert-link"&gt;
This is a link alert
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Background Alerts -->
<article class="section-scroll" id="background">
    <h2 class="b-b-light hash">Full background</h2>
    <p class="secondary-lead">
        To acheive a colored background, attach the <code class="inline">alert-background</code> class alongside <code
            class="inline">alert-{color}</code> to select the color.
        <br>
    </p>
    <div class="text-cont">
        <div class="alert alert-primary alert-background">
            This is a primary alert
        </div>
        <div class="alert alert-success alert-background">
            This is a success alert
        </div>
        <div class="alert alert-info alert-background">
            This is an info alert
        </div>
        <div class="alert alert-warning alert-background">
            This is a warning alert
        </div>
        <div class="alert alert-danger alert-background">
            This is a danger alert
        </div>
    </div>
    <pre
        class="highlight"><code class="html">&lt;div class="alert alert-primary alert-background"&gt;
This is a primary alert
&lt;/div&gt;
&lt;div class="alert alert-success alert-background"&gt;
This is a success alert
&lt;/div&gt;
&lt;div class="alert alert-info alert-background"&gt;
This is an info alert
&lt;/div&gt;
&lt;div class="alert alert-warning alert-background"&gt;
This is a warning alert
&lt;/div&gt;
&lt;div class="alert alert-danger alert-background"&gt;
This is a danger alert
&lt;/div&gt;
&lt;div class="alert alert-link alert-background"&gt;
This is a link alert
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Closeable Alerts -->
<article class="section-scroll" id="close">
    <h2 class="b-b-light hash">Close</h2>
    <p class="secondary-lead">
        Alerts can have a close button placed on the right of the <code class="inline">alert</code>. The close element
        should be a <code class="inline">button</code> and be prefixed with <code class="inline">close</code>.
        <br>The <code class="inline">alert-close</code> class must be placed on the alert you intend to have the close
        button in. This will give padding to the right of the content.
        <br><strong>Note:</strong> To make an alert dismissable, please see the bottom of this page.
    </p>
    <div class="text-cont">
        <div class="alert alert-success alert-close">
            This is a success alert with close button
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-info alert-close">
            This is an info alert with close button
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-warning alert-close">
            This is a warning alert with close button
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-danger alert-close">
            This is a danger alert with close button
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <pre
        class="highlight"><code class="html">&lt;div class="alert alert-success alert-close"&gt;
This is a success alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt;
        &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-info alert-close"&gt;
This is an info alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt;
        &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-warning alert-close"&gt;
This is a warning alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt;
        &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-danger alert-close"&gt;
This is a danger alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt;
        &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Icon Alerts -->
<article class="section-scroll" id="icons">
    <h2 class="b-b-light hash">Icon:</h2>
    <p class="secondary-lead">
        Adding any icons to alerts is easy, you can do it natively with slight margin added to separate the content.
        See below for an example"
    </p>
    <div class="text-cont">
        <div class="alert alert-success alert-close alert-background">
            <i class="fas fa-check mr-2"></i>
            <strong>Success alert:</strong>
            Wow, you've just won a free holiday, congratulations.
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-info alert-close alert-background">
            <i class="fas fa-info-circle mr-2"></i>
            <strong>Info alert:</strong>
            There are some peanuts in the cabinet.
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-warning alert-close alert-background">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Warning alert:</strong>
            Please update your preferences on your account.
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-danger alert-close alert-background">
            <i class="far fa-angry mr-2"></i>
            <strong>Danger alert:</strong>
            We're sorry, but all the cake has gone.
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <pre
        class="highlight"><code class="html">&lt;div class="alert alert-danger alert-close alert-background"&gt;
    &lt;i class="far fa-angry mr-2"&gt;&lt;/i&gt;
    &lt;strong&gt;Danger alert:&lt;/strong&gt;
    We're sorry, but all the cake has gone.
    &lt;button type="button" class="close" aria-label="Close"&gt;
        &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Material Alerts -->
<article class="section-scroll" id="material">
    <h2 class="b-b-light hash">Materialistic:</h2>
    <p class="secondary-lead">
        You can design matereialstic looking cards without any need of <strong>any additional classes</strong> easy as that, take a look at the notation below and copy if you like the look of it!
        <br>Note: You are not limited to the primary color, you can use any in your palette.
    </p>
    <div class="text-cont">
        <div class="alert alert-white alert-close alert-background py-0 pl-0 d-flex align-items-center">
            <div class="bg-primary p-4 mr-3">
                <i class="fas fa-shopping-cart c-white"></i>
            </div>
            <div class="d-flex flex-column justify-content-center">
                <strong>Added to cart</strong>
                <span>The item was added to the shopping cart.</span>
            </div>
            <button type="button" class="close mx-4 p-0" aria-label="Close">
                <span class="c-primary" aria-hidden="true">&times;</span>
            </button> 
        </div>
        <div class="alert alert-white alert-close alert-background py-0 pl-0 d-flex align-items-center">
            <div class="bg-secondary p-4 mr-3">
                <i class="fas fa-paper-plane c-white"></i>
            </div>
            <div class="d-flex flex-column justify-content-center">
                <strong>Message sent</strong>
                <span>Your message has been sent, thanks for reaching out!</span>
            </div>
            <button type="button" class="close mx-4 p-0" aria-label="Close">
                <span class="c-secondary" aria-hidden="true">&times;</span>
            </button> 
        </div>
    </div>
    <pre class="highlight"><code class="html">&lt;div class=&quot;alert alert-white alert-close alert-background py-0 pl-0 d-flex align-items-center&quot;&gt;
    &lt;div class=&quot;bg-primary p-4 mr-3&quot;&gt;
        &lt;i class=&quot;fas fa-shopping-cart c-white&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex flex-column justify-content-center&quot;&gt;
        &lt;strong&gt;Added to cart&lt;/strong&gt;
        &lt;span&gt;The item was added to the shopping cart.&lt;/span&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;close mx-4 p-0&quot; aria-label=&quot;Close&quot;&gt;
        &lt;span class=&quot;c-primary&quot; aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
    &lt;/button&gt; 
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- CSS Alert -->
<article class="section-scroll" id="css">
    <h2 class="b-b-light hash">CSS alert dismiss</h2>
    <p class="secondary-lead">
        You can use pure CSS to dismiss an alert, the markup is slightly different but it's easy to
        implement and your build becomes lighter.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>The <code class="inline">alert-container</code> element must be the parent for both the alert and the
                checkbox.</li>
            <li>The <code class="inline">checkbox</code> should be placed before the alert in the DOM</li>
            <li>The id for the <code class="inline">checkbox</code> and the name of the label must match.</li>
        </ul>
    </div>
    <div class="text-cont js-alert">
        <h3>Example:</h3>
        <p>Go ahead and click the close button to dismiss the alerts.</p>
    </div>
    <div class="text-cont">
        <div class="alert-container">
            <input type="checkbox" class="alert-toggle" id="alertdismiss1">
            <div class="alert alert-success alert-background alert-close">
                This is a success alert with close button functionality
                <label for="alertdismiss1" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </label>
            </div>
        </div>
        <div class="alert-container">
            <input type="checkbox" class="alert-toggle" id="alertdismiss2">
            <div class="alert alert-info alert-background alert-close">
                This is an info alert with close button functionality
                <label for="alertdismiss2" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </label>
            </div>
        </div>
        <div class="alert-container">
            <input type="checkbox" class="alert-toggle" id="alertdismiss3">
            <div class="alert alert-warning alert-background alert-close">
                This is a warning alert with close button functionality
                <label for="alertdismiss3" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </label>
            </div>
        </div>
        <div class="alert-container">
            <input type="checkbox" class="alert-toggle" id="alertdismiss4">
            <div class="alert alert-danger alert-background alert-close">
                This is a danger alert with close button functionality
                <label for="alertdismiss4" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </label>
            </div>
        </div>
    </div>
    <pre
        class="highlight"><code class="html">&lt;div class="alert-container"&gt;
    &lt;input type="checkbox" class="alert-toggle" id="alertdismiss1"&gt;
    &lt;div class="alert alert-success alert-background alert-close"&gt;
        This is a success alert with close button functionality
        &lt;label for="alertdismiss1" class="close" aria-label="Close"&gt;
        &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
    &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- JS Alert -->
<article class="section-scroll" id="js">
    <h2 class="b-b-light hash">JS alert dismiss</h2>
    <p class="secondary-lead">
        mesh doesnt ship with any JS, but you can use the following function to dismiss the alerts. This script adds an
        event listener to all the <code class="inline">close</code> buttons.
    </p>
    <pre
        class="highlight"><code class="javascript">document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.alert .close') || []).forEach((close) => {
        close.addEventListener('click', () => {
            close.parentNode.remove();
        });
    });
});</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <div class="text-cont">
        <h3>Example:</h3>
        <p>Go ahead and click the close button to dismiss the alerts.</p>
    </div>
    <div class="text-cont js-alert">
        <div class="alert alert-success alert-background alert-close">
            This is a success alert with close button functionality
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-info alert-background alert-close">
            This is an info alert with close button functionality
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-warning alert-background alert-close">
            This is a warning alert with close button functionality
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-danger alert-background alert-close">
            This is a danger alert with close button functionality
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Customise the alert style via border-radius and choose what close method you prefer.
    </p>
    <div class="table-scroll">
        <table class="table">
            <thead>
                <tr>
                    <th>Variable</th>
                    <th class="w-15">Value</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="vertical-align: middle;">
                        <pre class="variables highlight"><code class="scss">$alert-enable-background: true;</code></pre>
                    </td>
                    <td>Boolean</td>
                    <td>Enables/disables the full coloured background styled alert.</td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss">$alert-enable-background-shadows: true;</code></pre>
                    </td>
                    <td>Boolean</td>
                    <td>Enables/disables the shadow effect for full coloured background styled alert.</td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss">$alert-enable-css-close: true;</code></pre>
                    </td>
                    <td>Boolean</td>
                    <td>Enables/disables the pure CSS close functionality.</td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss">$alert-enable-js-close: true;</code></pre>
                    </td>
                    <td>Boolean</td>
                    <td>Enables/disables the JS close functionality.</td>
                </tr>
                <tr>
                    <td>
                        <pre
                            class="variables highlight"><code class="scss">$alert-default-background-color: rgba(0, 0, 0, 0.5);</code></pre>
                    </td>
                    <td>Color</td>
                    <td>Box shadow color for alerts.</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>


@endsection