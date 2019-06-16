//Invisible - Display none
document.querySelector('#visibleBtn').addEventListener('click', function() {
    let invisibleDemo = document.querySelector('#invisibleDemo');
    let invisibleCode = document.querySelector('#invisibleCode');
    invisibleDemo.classList.toggle('invisible');
    invisibleDemo.classList.toggle('d-none');

    if (this.innerHTML.indexOf('none')) {
        invisibleCode.innerHTML = invisibleCode.innerHTML.replace('invisible', 'd-none');
        this.innerHTML = "Switch to invisible";
    } else {
        invisibleCode.innerHTML = invisibleCode.innerHTML.replace('d-none', 'invisible');
        this.innerHTML = "Switch to display none";
    }
});