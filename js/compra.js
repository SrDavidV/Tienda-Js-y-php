const addToCart = document.querySelectorAll('#agregar');


addToCart.forEach(addToCartButton => {
  addToCartButton.addEventListener('click', addToCartClicked);
});
const shoppingContainer = document.querySelector('#comida');

function addToCartClicked(event) {
  const button = event.target;
  const item = button.closest('.container__card');


  const itemTitle = item.querySelector('.nombre').textContent;
  const itemPrice = item.querySelector('.precio').textContent;

  addItemToShoppingCart(itemTitle, itemPrice);
}


function addItemToShoppingCart(itemTitle, itemPrice) {

  const shoppingContainer = document.querySelector('#comida');

  const shoppingCartRow = document.createElement('tr');
  const shoppingCartContent = `

      <tr class="carritos">
          <td class="titulo">${itemTitle}</td>
          <td><input class="cantidad" type="number" min="1" value="1"/></td>
          <td class="product_price" id="precio">${itemPrice}</td>
          <td class="btnClose"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="black" class="bi bi-x" viewBox="0 0 16 16">
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg></td>
      </tr>
    
  `;

  shoppingCartRow.innerHTML = shoppingCartContent;
  shoppingContainer.append(shoppingCartRow);
  shoppingCartRow.querySelector('.btnClose').addEventListener('click', removeShoppingCartItem);

  shoppingCartRow.querySelector('.cantidad').addEventListener('change', quantityChaged);
  updateShoppingCartTotal();
}

function updateShoppingCartTotal() {
  let total = 0;

  //seleccionamos el total del carrito
  const shoppingCartTotal = document.querySelector('.total');

  const shoppingCartItems = document.querySelectorAll('#comida');

  console.log(shoppingCartItems)


  shoppingCartItems.forEach(shoppingCartItem => {

    const shoppingCartItemPriceElement = shoppingCartItem.querySelector(".product_price");
    console.log(shoppingCartItemPriceElement)

    const shoppingCartItemPrice = Number(shoppingCartItemPriceElement.textContent.replace('$', ''));
    console.log(shoppingCartItemPrice);

    const shoppingCartItemQuantityElement = shoppingCartItem.querySelector('.cantidad');


    const shoppingCartItemQuanitity = Number(shoppingCartItemQuantityElement.value);



    total = total + shoppingCartItemPrice * shoppingCartItemQuanitity;

  });

  shoppingCartTotal.innerHTML = `${total}`;
}

function removeShoppingCartItem(event) {
  const buttonClicked = event.target;
  console.log(buttonClicked);
  buttonClicked.closest('tr').remove();
  updateShoppingCartTotal();
}

function quantityChaged(event) {
  const input = event.target;
  updateShoppingCartTotal();
}