//Switch to fullwidth
document.querySelector('#btnBrowser').addEventListener('click', function() {
    this.innerHTML = this.innerHTML.indexOf('full') ? "Switch to container" : "Switch to container-fullwidth";
    document.querySelector('#fullwidth').classList.toggle('d-none');
    document.querySelector('#container').classList.toggle('d-none');
});
//Turn gaps on & off
document.querySelector('#btnNoGaps').addEventListener('click', function() {
    this.innerHTML = this.innerHTML.indexOf('off') ? "Turn gaps on" : "Turn gaps off";
    document.querySelector('.column-demo .row').classList.toggle('no-gaps');
});