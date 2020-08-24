function Form_AJAX(url, form) {
    $(form).submit(function (event) {
        event.preventDefault();

        $.post(url, $(form).serialize(),
                function (data) {
                    $('body').html(data);
                });
    });
}