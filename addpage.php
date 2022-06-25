
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Product add</title>
    <link rel="stylesheet" href="../css/2.css">
</head>
<body>
<div class="wrapper">
    <header class="header" id="header__add">
        <div class="container">
            <div class="header__inner">
                <div class="header__title" id="title">Product Add</div>
                <div class="header__button" id="btns_old">
                    <button class="header__button-cancel" id="cancel">Cancel</button>
                </div>
            </div>
            <div class="border-bottom"></div>
        </div>
    </header>
    <div class="main">
        <section class="form" id="#product__form">
            <div class="container">
                <div class="form__inner">
                    <div class="form__products">
                        <form action="../config/addproduct.php" method="POST">
                        <div class="form__product">
                            <div class="form__product-title">SKU</div>
                            <label>
                            <input class="form__product-textarea sku-textarea"  placeholder="#sku" type="text" required
                                    id="#sku" name="sku">
                            </label>
                        </div>
                        <div class="form__product">
                            <div class="form__product-title">Name</div>
                            <label>
                                <input class="form__product-textarea"  placeholder="#name" type="text" required
                                        id="#name" name="name">
                            </label>
                        </div>
                        <div class="form__product">
                            <div class="form__product-title">Price ($)</div>
                            <label>
                                <input class="form__product-textarea"  placeholder="#price" required
                                       type="number" id="#price" name="price">
                            </label>
                        </div>
                    </div>
                    <label>
                <input class="form__btn-save" id="save" name="save" type="submit" value="save">
                </label>
                </div>
            </div>
        </section>
        <section class="dropdown" id="#productType">
            <div class="container">
                <p class="dropdown__title">Type Switcher</p>
                <div class="dropdown__inner">
                    <button class="dropdown__button" id="dropdown__button" onclick="return false">Type Switcher</button>
                    <ul class="dropdown__list">
                        <li class="dropdown__list-item dvd-btn" data-value="dvd" id="dvd-btn">DVD</li>
                        <li class="dropdown__list-item book-btn" data-value="book" id="book-btn">Book</li>
                        <li class="dropdown__list-item furniture-btn" data-value="furniture" id="furniture-btn">
                            Furniture
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="boxes" id="boxes">
                <div class="dvd">
                    <div class="container">
                        <div class="dvd__inner">
                            <div class="dvd__size">
                                <div class="dvd__size-title">Size (MB)</div>
                                <label>
                                    <input id="#size" class="dvd__size-input" type="number" placeholder="#size" name="size">
                                </label>
                            </div>
                            <div class="dvd__description">*Please enter the size in MB*</div>
                        </div>
                    </div>
                </div>
                <div class="book">
                    <div class="container">
                        <div class="book__inner">
                            <div class="book__weight">
                                <div class="book__weight-title">Weight (KG)</div>
                                <label>
                                    <input id="#weight" class="book__weight-input" type="number" placeholder="#weight" name="weight">
                                </label>
                            </div>
                            <div class="book__description">*Please enter the weight in KG*</div>
                        </div>
                    </div>
                </div>
                <div class="furniture">
                    <div class="container">
                        <div class="furniture__inner">
                            <div class="furniture__items">
                                <div class="furniture__height">
                                    <div class="furniture__item">
                                        <div class="furniture__title">Height (CM)</div>
                                        <label>
                                            <input id="#height" class="furniture__input" type="number"
                                                   placeholder="#height" name="height">
                                        </label>
                                    </div>
                                </div>
                                <div class="furniture__width">
                                    <div class="furniture__item">
                                        <div class="furniture__title">Width (CM)</div>
                                        <label>
                                            <input id="#width" class="furniture__input" type="number"
                                                   placeholder="#width" name="width">
                                        </label>
                                    </div>
                                </div>
                                <div class="furniture__length">
                                    <div class="furniture__item">
                                        <div class="furniture__title">Length (CM)</div>
                                        <label>
                                            <input id="#length" class="furniture__input" type="number"
                                                   placeholder="#length" name="length">
                                        </label>
                                    </div>
                                </div>
                                <div class="furniture__description">*Please enter the height, width, length in CM*</div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
        </section>  
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__border"></div>
                <div class="footer__text">Scandiweb Test assignment</div>
            </div>
        </div>
    </footer>
</div>

<script src="../JS/script2.js"></script>
</body> -->