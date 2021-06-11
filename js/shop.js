// GENERATE ELEMENT
const products = document.querySelector("#products");

product.forEach(p => {
  products.innerHTML += `
    <tr>
    <td class="product-img">
      <img src="img/${p["product-img"]}" class="w-100" alt="" />
    </td>
    <td>
      <span class="product-name d-block">${p["product-name"]}</span>
      <span class="product-price">$${p["product-price"]}</span>
    </td>
    <td>
      <div class="quantity">
        <div class="remove-btn btn btn-secondary">
          <span class="material-icons">remove</span>
        </div>

        <input
          type="number"
          class="form-control counter"
          value="0"
          min="0"
          oninput="this.value = 
        !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null"
        />
        <input type="hidden" class="product-price" value="${p["product-price"]}" />

        <input type="hidden" class="product-total-price" value="0" />

        <div class="add-btn btn btn-primary">
          <span class="material-icons">add</span>
        </div>
      </div>
    </td>
    <td>$<span class="product-total-price-show">0</span></td>
  </tr>
  `
});

// PRICE  CALCULATION 
const counterAddBtn = document.querySelectorAll(".add-btn");
const counterRemoveBtn = document.querySelectorAll(".remove-btn");
const productTotalPrices = document.querySelectorAll(".product-total-price");
const count = document.querySelectorAll(".counter");
const grandTotal = document.querySelector("#grandTotal");
const grandTotalShow = document.querySelector("#grandTotalShow");


function calcPrice(e, c){
  const productPrice = e.closest(".quantity").querySelector(".product-price").value;
  const productTotalPrice = e.closest(".quantity").querySelector(".product-total-price");
  const productTotalPriceShow = e.closest("tr").querySelector(".product-total-price-show");

  let tempPtp = productTotalPrice.value;

  productTotalPrice.value = c * productPrice;

  grandTotal.value = parseInt(grandTotal.value) + parseInt(productTotalPrice.value - tempPtp);

  // console.log(grandTotal.value);

  productTotalPriceShow.innerText = productTotalPrice.value;

  grandTotalShow.innerText = grandTotal.value;
}

counterAddBtn.forEach(function(e){
  e.addEventListener('click', function(){
    let count = e.closest(".quantity").querySelector(".counter");
    count.value++;
    calcPrice(e, count.value);
  })
})

counterRemoveBtn.forEach(function(e){
  e.addEventListener('click', function(){
    let count = e.closest(".quantity").querySelector(".counter");
    if(count.value > 0) {
      count.value--; 
      calcPrice(e, count.value);
    }
  })
})

count.forEach(function(e){
  e.addEventListener('change', function(){
    calcPrice(e, e.value);
  })
})

productTotalPrices.forEach(function(e){
  e.addEventListener('change', function(){
    console.log(e);
  })
})

function checkout(){
  if(grandTotal.value == 0)
    alert("Cart masih kosong.");
  else{
    alert("Checkout berhasil!");
    window.location.replace("index.html");
  }
}

