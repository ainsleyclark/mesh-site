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
    <script>
        function meshToast(text, opts = {}) {

            const defaults = {
                classes: "bg-primary"
            };

            const options = Object.assign(defaults, opts);
            const toastContainer = document.getElementsByClassName("toast")[0];
            const toastBody = document.createElement("div");
            const toastText = document.createElement("span");

            toastBody.setAttribute('class', "toast-body " + options.classes);
            toastText.innerText = text;
            toastBody.appendChild(toastText);
            toastContainer.appendChild(toastBody);

            toastBody.addEventListener("animationend", e => {
                toastBody.remove(1);
            });
        
            toastBody.classList.add("toast-show");
            if (options.displayTime) {
                toastBody.style.animationDuration = options.displayTime;
            }
        }
        
        //Demos
        meshToast('Mmmmmmmmmmmm Toast', { displayTime: '5s' });
        meshToast('<span>Test</span>', { displayTime: '5s', color: "bg-secondary" });
        meshToast('Mmmmmmmmmmmm Toast', { displayTime: '5s', classes: "rounded" });


        meshToast('Mmmmmmmmmmmm Toast', { 
            displayTime: '5s', 
            classes: "rounded", 
            customHTML: '<span>Test</span><i class="fal etc">'
        });

        
    </script>
@endpush

@section('docscontent')
<!-- =====================
    Docs Section - Main HTML
    ===================== -->

Im inside the docs content

<!-- Variables -->
<article class="section-scroll" id="variables">

    <div class="toast pin-b w-100">


    </div>

    
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Create 
    </p>

    <div class="toast p-relative">
        <div class="toast-body bg-primary">
            <span>Mmmmmmm Toast</span>
        </div>
    </div>
    <div class="toast toast-rounded p-relative">
        <div class="toast-body bg-primary">
            <span>Rounded slice</span>
        </div>
    </div>
    <div class="toast toast-block p-relative">
        <div class="toast-body bg-primary">
            <span>Big slice</span>
        </div>
    </div>
    <div class="toast p-relative">
        <div class="toast-body bg-primary">
            <span>Action slice</span>
            <span class="t-uppercase t-bold toast-action">Undo</span>
        </div>
    </div>





    {{-- <div class="table-scroll">
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
    </div> --}}
</article>

@endsection