const save = document.getElementById('save');
const form = document.getElementById('#product__form');
const product = document.getElementById('product');
const dropdown = document.getElementById('#productType');
const boxes = document.getElementById('boxes');
const new_box = document.getElementById('new_box');
const headerAdd = document.getElementById('header__add');
const headerList = document.getElementById('header__list');
let sku_new = document.getElementById('sku_new');
let name_new = document.getElementById('name_new');
let price_new = document.getElementById('price_new');
let atribute_new = document.getElementById('atribute_new');
let sku = document.getElementById('#sku');
let name = document.getElementById('#name');
let price = document.getElementById('#price');
let dvd_value = document.getElementById('#size');
let book_value = document.getElementById('#weight');
let height_value = document.getElementById('#height');
let width_value = document.getElementById('#width');
let length_value = document.getElementById('#length');
let dropdownButton = document.getElementById('dropdown__button');

save.addEventListener('click', function (){
    (!name.value || !sku.value || !price.value) ?
        alert('Please, submit required data') :
    // remove form
    form.remove();
    boxes.remove();
    dropdown.remove();
    headerAdd.remove();
    // product list visible
    product.classList.add('product__visible');
    new_box.classList.add('new_box__visible');
    headerList.classList.add('header-list__visible');
    // values
    name_new.value = name.value;
    sku_new.value = sku.value.toUpperCase();
    price_new.value = price.value + '.00 $';

    // dropdown
    dropdownButton.innerHTML === 'DVD' ? atribute_new.value = 'Size: ' + dvd_value.value + ' MB'
        : dropdownButton.innerHTML === 'Book' ? atribute_new.value = 'Weight: ' + book_value.value + 'KG'
            : atribute_new.value = 'Dimension: ' + height_value.value + 'x' + width_value.value + 'x' + length_value.value;
})


