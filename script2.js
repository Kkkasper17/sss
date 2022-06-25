const dropdownBtn = document.querySelector('.dropdown__button');
const dropdownList = document.querySelector('.dropdown__list');
const dropdownListItem = document.querySelectorAll('.dropdown__list-item');
const dvdBtn = document.querySelector('#dvd-btn');
const furnitureBtn = document.querySelector('#furniture-btn');
const bookBtn = document.querySelector('#book-btn');
const dvd =  document.querySelector('.dvd');
const furniture = document.querySelector('.furniture');
const book = document.querySelector('.book');
const button = document.getElementById('cancel');

// dropdown visible
dropdownBtn.addEventListener('click', function (){
    dropdownList.classList.toggle('dropdown__list--visible');
});

// close dropdown
dropdownListItem.forEach(function (listItem){
    listItem.addEventListener('click', function (e){
        e.stopPropagation();
        dropdownBtn.innerText = this.innerText;
        dropdownList.classList.remove('dropdown__list--visible');
    })
})
document.addEventListener('click', function (e){
    if (e.target !== dropdownBtn) {
        dropdownList.classList.remove('dropdown__list--visible')
    }
})

// dropdown switch
dvdBtn.addEventListener('click', function (){
    dvd.classList.toggle('dvd__visible');
    furniture.classList.remove('furniture__visible');
    book.classList.remove('book__visible');
})
bookBtn.addEventListener('click', function (){
    book.classList.toggle('book__visible');
    furniture.classList.remove('furniture__visible');
    dvd.classList.remove('dvd__visible');
})
furnitureBtn.addEventListener('click', function (){
    furniture.classList.toggle('furniture__visible');
    dvd.classList.remove('dvd__visible');
    book.classList.remove('book__visible');
})

// cancel
function cancel() {
    window.history.back();
}
button.addEventListener('click', cancel);

