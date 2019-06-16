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