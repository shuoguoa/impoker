<script src="<?php echo e(url (mix('/js/app.js'))); ?>" type="text/javascript"></script>
<script src="<?php echo e(url ('/js/js.cookie.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/bower_components/AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/jquery.fancybox.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/ZeroClipboard.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/select2.full.min.js')); ?>" type="text/javascript"></script>

<script>
    $(function() {
        var _menu = Cookies.get('_menu');
        var animationSpeed = 500;

        var menu_item = $(".m_" + _menu);
        var checkElement = menu_item.parent();

        if (checkElement.hasClass("sidebar-menu")) {
            menu_item.addClass("active");
        } else if (checkElement.hasClass("treeview-menu")) {
            menu_item.addClass("active");
            checkElement.addClass("menu-open");
            checkElement.parent().addClass("active");
        }
    });
</script>