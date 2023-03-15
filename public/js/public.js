
$(function () {
    operations();
});

function operations() {

    $(document).on('click', '.showpass', function () {
        let _type = $('#password').attr('type');
        if (_type === 'text') {
            $('#password').attr('type', 'password');
        } else {
            $('#password').attr('type', 'text');
        }

    });

}