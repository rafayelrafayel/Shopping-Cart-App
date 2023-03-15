
$(function () {
    qtyOperations();
});

function qtyOperations() {
    let qty = parseInt($('.qty-span').text());
    $(document).on('click', '.decrease-count', function () {
        if (qty && qty > 1) {
            qty = qty - 1;
            $('.qty-span').text(qty);
            $('.quantity-form').val(qty);
        }
    });
    $(document).on('click', '.increase-count', function () {
        qty = qty + 1;
        $('.qty-span').text(qty);
        $('.quantity-form').val(qty);
    });

    $(document).on('click', '.settings-open', function () {
        $('.settings-options').toggle();
    });
}