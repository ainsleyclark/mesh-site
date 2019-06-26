//Get page 
const main = document.querySelector('main').classList;

document.addEventListener('DOMContentLoaded', () => {

    //Alerts
    if(main == 'page-alert') {
        document.querySelectorAll('.js-alert .alert .close').forEach((close) => {
            close.addEventListener('click', () => {
                close.parentNode.remove();
            });
        });
    }

    //Badges
    if(main == 'page-badges') {
        document.querySelectorAll('.badge-close .badge-delete').forEach(close => {
            close.addEventListener('click', () => {
                close.parentNode.remove();
            });
        });
    }

    //Turn clearfix text on & |/off
    if(main == 'page-float') {
        document.querySelector('#clearfixBtn').addEventListener('click', function() {
            this.innerHTML = this.innerHTML.indexOf('off') ? "Turn clearfix on" : "Turn clearfix off";
            document.querySelector('#clearfixDemo').classList.toggle('clearfix');
        });
    }

    //Grid demos
    if(main == 'page-grid') {
        
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
    }

    //Turn responsive text on & off
    if(main == 'page-text') {
        document.querySelector('#responsiveTextBtn').addEventListener('click', function() {
            this.innerHTML = this.innerHTML.indexOf('off') ? "Turn responsive text on" : "Turn responsive text off";
            let responsiveText = document.querySelector('#responsiveText');
            responsiveText.classList.toggle('t-responsive');
            responsiveText.classList.toggle('font-size-2');
        });
    }

    //Invisible - Display none
    if(main == 'page-visibility') {
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
    }

    //Toast
    if(main == 'page-toast') {

        function meshToast(text, opts = {}) {

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
        }

        //Make toast button
        document.querySelector('#makeToast').addEventListener('click', function() {
            meshToast('Mmmmmmmmmmmm Toast', { displayTime: '5s' });
        });
        
        //Demos
        //meshToast('Mmmmmmmmmmmm Toast', { displayTime: '5s' });
        //meshToast('<span>Message sent</span><i class="fab fa-telegram-plane ml-4 fa-lg"></i>', { displayTime: '5s', color: "bg-secondary" });

    }

    //Collapse
    if(main == 'page-collapse') {

        function Collapse(options) {
            let defaultOpt = {
                parent: document.body,
                accordion: false,
                outer: '.collapse-js',
                header: '.collapse-header',
                inner: '.collapse-content'
            };
            this.options = Object.assign(defaultOpt, options);
            this.elements = {};
        
            this.options.parent._collapse = this;
            this.init();
        }
        
        Collapse.prototype.init = function () {
            let opt = this.options,
                ele = this.elements,
                self = this;
        
            let collapses = ele.collapses = opt.parent.querySelectorAll(opt.outer);
            collapses.forEach(function (collapse) {
                let headers = collapse.querySelectorAll(opt.header);
                headers.forEach(function (header) {
                    header.addEventListener('click', function () {
                        if (opt.accordion) {
                            self.accordion(headers, header);
                        } else {
                            self.toggle(header.parentNode, false);
                        }
                    })
                })
            })
        };
        
        Collapse.prototype.accordion = function(header, current) {
            let s = this;
            header.forEach(function (el) {
                s.toggle(el.parentNode, el !== current);
            })
        };
        
        Collapse.prototype.toggle = function(item, closeForce) {
            let height = 0;
            let inner = item.querySelector(this.options.inner);
            if (!item.classList.contains('active') && !closeForce) {
                height = this.calcHeight(inner);
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
            inner.style.maxHeight = height + 'px';
        };
        
        Collapse.prototype.calcHeight = function(inner) {
            let children = inner.children;
            let height = 0;
            for (let i = 0; i < children.length; i++) {
                height += children[i].clientHeight;
            }
            return height;
        };
        
        let collapse = new Collapse({
            parent: document.body.querySelector('.expand')
        });
        let accordion = new Collapse({
            accordion: true,
            parent: document.body.querySelector('.accordion')
        });
    }

});


