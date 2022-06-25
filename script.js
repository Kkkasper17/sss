function remove(appendBox) {
    let items = document.getElementById(appendBox).querySelectorAll(".product__box input[type='checkbox']:checked");
    items.forEach(item => item.closest('.product__box').remove());
}
