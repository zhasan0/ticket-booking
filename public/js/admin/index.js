$(document).ready(function () {
    $('#user_list').DataTable();

    // menu activate
    $(function () {
        var current = location.pathname;
        $('.nav li a').each(function () {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(current) !== -1) {
                $this.addClass('active');
            }
        });
    });
});