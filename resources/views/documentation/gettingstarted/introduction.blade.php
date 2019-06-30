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

<!-- What is mesh? -->
<article class="section-scroll" id="whatIs">
    <h2 class="pb-1 b-b-light mt-5 mb-1 hash">What is mesh?</h2>
    <p>mesh (pronounced /meʃ/) is an open source pure CSS framework for building and wireframing websites efficiently.
        Unlike other frameworks, you can use mesh without detracting from the unique visual signature of a website,
        whilst still being able to add components to accelerate your workflow.</p>
    <p>It has a modular approach to a responsive layout system. You can define containers, rows and columns and set
        their size
        independent of the screen width. Five breakpoints let you sculpt your site to different screen sizes and an easy
        naming system makes it ideal for beginners or patrons of the web.</p>
    <p>mesh has huge amounts of utility classes to help you along the way. Responsive text, responsive width & height
        classes, border spacers and helper classes and a lot more.</p>
</article>

<!-- Download -->
<article class="section-scroll" id="download">
    <h2 class="pb-1 b-b-light mt-5 mb-1 hash">Download</h2>
    <p>mesh comes in three different flavours. You can select which version you want depending on your expertise and
        preference. To get going, click on one of the options below.</p>
    <div class="row my-3">
        <div class="col-12">
            <h3 class="c-primary">meshBuilder:</h3>
            <p>meshBuilder is an extremely powerful tool allowing you to set variables before downloading the compiled
                CSS. You can adjust a vast amount of different variables to suit your needs, including but not limited
                to:
                <br>Layout breakpoints, colors (and attributes), spacing sizes (padding & margin), position properties,
                font sizes and more.</p>
            <p>Not only that, but you can choose to eliminate any utilities or components you may not use in your
                project. This ultimately makes things faster and your css becomes even smaller without the
                need to download our scss files.</p>
            <button class="btn btn-secondary btn-rounded mt-1">Go to meshBuilder</button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-tab-6">
            <h3 class="c-primary">meshCSS:</h3>
            <p>This is the standard version that comes with minified and unminified versions of mesh, including mesh
                layout, which is a barebones css file with flex, order & display. Choose this option if you have no
                familairty with Sass.</p>
            <button class="btn btn-primary btn-rounded mt-1">Download meshCSS</button>
        </div>
        <div class="col-12 col-tab-6">
            <h3 class="c-primary">meshSaas:</h3>
            <p>This is the uncompiled scss version of mesh, you need a way to compile Sass files if you choose this
                option, however, you will be able to modify the contents of mesh by changing variables and various other
                components.</p>
            <button class="btn btn-primary btn-rounded mt-1">Download meshSaas</button>
        </div>
    </div>
</article>

<!-- JS -->
<article class="section-scroll" id="js">
    <h2 class="b-b-light hash">A note about JS</h2>
    <p>We realise everything can't be done in CSS & somethings are best done with JavaScript. Which is why we have
        included example usage with our specific JS components. This makes things easier if you are using a front-end
        framework or want to write your own code, but if you dont fancy that, just use ours!</p>
    <p>Of course, where there is a CSS alternative we have also provided that too, mainly through the use of checkboxes
        to show & hide components.</p>
</article>



@endsection