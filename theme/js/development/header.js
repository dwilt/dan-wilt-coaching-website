$(function () {

    $('[data-class="header"]').JSD_MobileNav();

});

(function ($, window, document, undefined) {

    var name = 'MobileNav';

    function MobileNav(element, index, options) {
        this.$el = $(element);
        this.options = $.extend({}, $.JSD.fn[name].defaults, options);
        this.init();
    }

    MobileNav.prototype = {

        name: name,

        init: function () {

            var self = this;

            this.$toggle = this.$el.find('[data-class="nav__toggle"]');
            this.navActive = false;

            this.visibleClass = 'nav__visible';
            this.showClass = 'nav__show';

            this.$toggle.on('click', function (e) {
                e.preventDefault();

                if(self.navActive) {
                    self.hideMenu();
                } else {
                    if(!self.navActive) {
                        self.showMenu();
                    }
                }
            });
        },
        showMenu: function () {
            var that = this;

            this.$el.addClass(this.visibleClass);

            setTimeout(function () {
                that.$el.addClass(that.showClass);
                that.navActive = true;
            }, 20);
        },
        hideMenu: function () {
            var that = this;

            this.$el.removeClass(this.showClass);

            setTimeout(function () {
                that.$el.removeClass(that.visibleClass);
                that.navActive = false;
            }, 500);
        }
    };

    $.JSD.fn.pluginGenerator(MobileNav);

})
(jQuery, window, document);