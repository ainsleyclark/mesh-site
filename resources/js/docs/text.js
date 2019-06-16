//Turn responsive text on & off
document.querySelector('#responsiveTextBtn').addEventListener('click', function() {
    this.innerHTML = this.innerHTML.indexOf('off') ? "Turn responsive text on" : "Turn responsive text off";
    let responsiveText = document.querySelector('#responsiveText');
    responsiveText.classList.toggle('t-responsive');
    responsiveText.classList.toggle('font-size-2');
});