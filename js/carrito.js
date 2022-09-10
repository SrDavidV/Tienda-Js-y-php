productos = [
  {
    "nombre": "Hamburguesa",
    "precio": 10500,
    "imagen": "hamburguesa.jpg"
  },
  {
    "nombre": "Hot Dog",
    "precio": 8500,
    "imagen": "hotdog.jpg"
  },
  {
    "nombre": "Arepa",
    "precio": 6700,
    "imagen": "arepa.jpg"
  },
  {
    "nombre": "Chorizo",
    "precio": 3800,
    "imagen": "chorizo.jpg"
  },
  {
    "nombre": "Empanada",
    "precio": 2500,
    "imagen": "empanadas.jpg"
  },
  {
    "nombre": "Helado",
    "precio": 5000,
    "imagen": "helado.jpg"
  },
  {
    "nombre": "Pan De Trigo",
    "precio": 2000,
    "imagen": "pan.jpg"
  },
  {
    "nombre": "Pizza",
    "precio": 6000,
    "imagen": "pizza.jpg"
  },
  {
    "nombre": "Salchipapa",
    "precio": 15500,
    "imagen": "salchipapa.jpg"
  }
]

let products = '';

productos.forEach(producto => {
  products += `
 
  <div class="container__card card">
      <img class="image" src="https://localhost/store/assets/img/${producto.imagen}" alt="">
      <div class="card__info">
        <label class="nombre">${producto.nombre}</label>
        <label >Precio :<label class="precio">$${producto.precio}</label> </label>
      </div>
      <input id="agregar" type="submit" value="Agregar al carrito" />
  </div>

  `;

  document.getElementById('grilla').innerHTML = products;
});


