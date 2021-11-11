const addBtn = document.querySelector(".add_rev_btn");
const revSection = document.querySelector(".reviews_form");

if (addBtn) {
  addBtn.addEventListener("click", function () {
    revSection.classList.toggle("invisible");
    revSection.classList.toggle("visible");

   });
}
//dashboard page script         
// Producten tonen als je op product clickt
const editBtn = document.querySelector(".editpro_btn");
const deleteBtn = document.querySelector(".delete_btn");
const editForm = document.querySelector(".edit_form");

editBtn.addEventListener("click", function () {
  editForm.classList.toggle("invisible");
  editForm.classList.toggle("visible");

});
//
deleteBtn.addEventListener("click", function () {
alert("Deze product word verwijderd !")
  
  });


  // add product
  const addProd = document.querySelector(".add_product_btn");
  const addProdSec = document.querySelector(".add_pro_section");

  addProd.addEventListener("click", function () {
    addProdSec.classList.toggle("invisible");
    addProdSec.classList.toggle("visible");

});

  
  