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