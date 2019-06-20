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
        Every website's colors are different, there's no doubt in that. Which is why we highly recommend you use the
        mesh builder to change the default colors in order to create a custom css file.
        <br><strong>Color and background color</strong> are able to be manipulated inline with the color utility
        classes.
    </p>
    <div class="text-cont">
        <h3>Notation:</h3>
        <ul class="list-line">
            <li>You can target the color class by using <code class="inline">c-{color}</code>.</li>
            <li>The background class can be targeted by using <code class="inline">bg-{color}</code>.</li>
        </ul>
    </div>
</article>

<!-- Background Colors -->
<article class="section-scroll" id="background">
    <h2 class="b-b-light hash">Background Colors</h2>
    <p class="secondary-lead">Here you can see the default mesh background colors:</p>
    <table class="table-code w-100 t-left mt-3">
        <col width="100">
        <col width="140">
        <col width="80">
        <thead>
            <tr>
                <th>Class</th>
                <th>Background Color</th>
                <th>Hex</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2">.bg-white</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-white  br"></div>
                </td>
                <td>#ffffff</td>
            </tr>
            <tr>
                <td class="py-2">.bg-black</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-black  br"></div>
                </td>
                <td>#000000</td>
            </tr>
            <tr>
                <td class="py-2">.bg-dark</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-dark  br"></div>
                </td>
                <td>#e8e8e8</td>
            </tr>
            <tr>
                <td class="py-2">.bg-muted</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-muted  br"></div>
                </td>
                <td>#999999</td>
            </tr>
            <tr>
                <td class="py-2">.bg-light</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-light  br"></div>
                </td>
                <td>#e8e8e8</td>
            </tr>
            <tr>
                <td class="py-2">.bg-primary</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-primary  br"></div>
                </td>
                <td>#ff2451</td>
            </tr>
            <tr>
                <td class="py-2">.bg-secondary</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-secondary  br"></div>
                </td>
                <td>#8270b8</td>
            </tr>
            <tr>
                <td class="py-2">.bg-success</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-success  br"></div>
                </td>
                <td>#55b559</td>
            </tr>
            <tr>
                <td class="py-2">.bg-info</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-info  br"></div>
                </td>
                <td>#37abd4</td>
            </tr>
            <tr>
                <td class="py-2">.bg-warning</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-warning  br"></div>
                </td>
                <td>#ff9e0f</td>
            </tr>
            <tr>
                <td class="py-2">.bg-danger</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-danger  br"></div>
                </td>
                <td>#f55145</td>
            </tr>
            <tr>
                <td class="py-2">.bg-link</td>
                <td>
                    <div class="w-70 h-100 p-2 bg-link  br"></div>
                </td>
                <td>#3763d4</td>
            </tr>
        </tbody>
    </table>
</article>

<!-- Background Colors -->
<article class="section-scroll" id="colors">
    <h2 class="b-b-light hash">Colors</h2>
    <p class="secondary-lead">Here you can see the default mesh text colors:</p>
    <table class="table-code w-100 t-left mt-3">
        <col width="100">
        <col width="140">
        <col width="80">
        <thead>
            <tr>
                <th>Class</th>
                <th>Color</th>
                <th>Hex</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2">.c-white</td>
                <td>
                    <div class="w-70 h-100 c-white br bg-muted" style="text-shadow: none;">White</div>
                </td>
                <td>#ffffff</td>
            </tr>
            <tr>
                <td class="py-2">.c-black</td>
                <td class="c-black">Black</td>
                <td>#000000</td>
            </tr>
            <tr>
                <td class="py-2">.c-dark</td>
                <td class="c-dark">Dark</td>
                <td>#e8e8e8</td>
            </tr>
            <tr>
                <td class="py-2">.c-muted</td>
                <td class="c-muted">Muted</td>
                <td>#999999</td>
            </tr>
            <tr>
                <td class="py-2">.c-light</td>
                <td class="c-light">Light</td>
                <td>#e8e8e8</td>
            </tr>
            <tr>
                <td class="py-2">.c-primary</td>
                <td class="c-primary">Primary</td>
                <td>#ff2451</td>
            </tr>
            <tr>
                <td class="py-2">.c-secondary</td>
                <td class="c-secondary">Secondary</td>
                <td>#8270b8</td>
            </tr>
            <tr>
                <td class="py-2">.c-success</td>
                <td class="c-success">Success</td>
                <td>#55b559</td>
            </tr>
            <tr>
                <td class="py-2">.c-info</td>
                <td class="c-info">Info</td>
                <td>#37abd4</td>
            </tr>
            <tr>
                <td class="py-2">.c-warning</td>
                <td class="c-warning">Warning</td>
                <td>#ff9e0f</td>
            </tr>
            <tr>
                <td class="py-2">.c-danger</td>
                <td class="c-danger">Danger</td>
                <td>#f55145</td>
            </tr>
            <tr>
                <td class="py-2">.c-link</td>
                <td class="c-link">Link</td>
                <td>#3763d4</td>
            </tr>
        </tbody>
    </table>
</article>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Change the color classes and attributes with the variables below.
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
                        <pre class="variables highlight"><code class="scss">$palette: (
    white: #ffffff,
    black: #000000,
    dark: #363636,
    muted: #999999,
    light: #e8e8e8,
    primary: #ff2451,
    secondary: #8270b8,
    success: #55b559,
    info: #37abd4,
    warning: #ff9e0f,
    danger: #f55145,
    link: #3763d4
);</code></pre>
                    </td>
                    <td>Map(name:color)</td>
                    <td>This map defines the main color pallete used with mesh. Its a great place to define colors for
                        your web build. The name corresponds to the html class name and the color defines the hex or
                        rgba value.
                        <br>Note: Changing/deleting white, black or primary will throw an error, so its best to define
                        them yourself. Please also bear in mind each color can add a fair chunk of kb to mesh.
                    </td>
                </tr>
                <tr>
                    <td>
                        <pre class="variables highlight"><code class="scss">$color-attr: (
    c: 'color',
    bg: 'background-color'
);</code></pre>
                    </td>
                    <td>Map(class:attribute)</td>
                    <td>The class of the <code class="inline">color-attr</code> map corresponds to the css attribute,
                        you can add and delete as you please. Other common properties include <code
                            class="inline">fill</code> and <code class="inline">stroke</code>.</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>

@endsection