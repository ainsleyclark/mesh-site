//Turn clearfix text on & |/off
document.querySelector('#clearfixBtn').addEventListener('click', function() {
    this.innerHTML = this.innerHTML.indexOf('off') ? "Turn clearfix on" : "Turn clearfix off";
    document.querySelector('#clearfixDemo').classList.toggle('clearfix');
});