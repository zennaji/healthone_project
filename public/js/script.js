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
const editBtn = document.querySelectorAll(".editpro_btn");
const deleteBtn = document.querySelectorAll(".delete_btn");
const editForm = document.querySelectorAll(".edit_form");



if (editBtn) {
   
  for(let i = 0; i< editBtn.length; i++){
    editBtn[i].addEventListener("click", function () {

      for(let j = 0; j<editForm.length; j++){

        editForm[i].classList.toggle("invisible");
        editForm[i].classList.toggle("visible");
      }
    });
  }


  
}
// Delete button 
if (deleteBtn) {
    for(let i = 0; i< editBtn.length; i++){
      deleteBtn[i].addEventListener("click", function () {
  
        alert("Deze product word verwijderd !")

      });
    }
}
//



// add product
const addProd = document.querySelector(".add_product_btn");
const addProdSec = document.querySelector(".add_pro_section");

if(addProd){
  addProd.addEventListener("click", function () {
    addProdSec.classList.toggle("invisible");
    addProdSec.classList.toggle("visible");
  
  });
}

// stereen 
const stars = document.querySelectorAll('.stars');

if(stars){
  for(let i = 0; i < stars.length; i++){
    if(stars[i].textContent === " 1 "){
      stars[i].textContent += "⭐";
    }
    if(stars[i].textContent === " 2 "){
      stars[i].textContent += "⭐⭐";
    }
    
    if(stars[i].textContent === " 3 "){
      stars[i].textContent += "⭐⭐⭐";
    }
    
    if(stars[i].textContent === " 4 "){
      stars[i].textContent += "⭐⭐⭐⭐";
    }
    if(stars[i].textContent === " 5 "){
      stars[i].textContent += "⭐⭐⭐⭐⭐";
    }
  }
}

// 

const pict = document.querySelector(".pict");
const all_dd = document.querySelector(".all_dd");

pict.addEventListener("click", function(){
  all_dd.classList.toggle("active");
	})


 



