M.mod_labelcollapsed = {
    init: function (Y, cmid) {
        new this.label(Y.one('#module-' + cmid));
    }
};

M.mod_labelcollapsed.label = function (node) {
    this.labelnode = node;

    node.one('.lc_header').on('click', this.toggle, this);
};
M.mod_labelcollapsed.label.prototype = {
    labelnode: null,
    
    toggle: function () {
        if (this.labelnode.hasClass('expanded')) {
            this.labelnode.removeClass('expanded');
        } else {
            this.labelnode.addClass('expanded');
        }
    }
};
