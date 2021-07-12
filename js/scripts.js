$(document).ready(function () {
  $("#heart").click(function () {
    if ($("#heart").hasClass("liked")) {
      $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
      $("#heart").removeClass("liked");
    } else {
      $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
      $("#heart").addClass("liked");
    }
  });
});


function myFunction() {
  if (x.src == "images/heart1.png") {
    x.src == "images/heart.png"
  } else {
    x.src == "images/heart1.png"
  }
}

/* -----------   list page --------------*/
var img1 = this.document.getElementById("ratingicon1");
var img2 = this.document.getElementById("ratingicon1");
var cat1 = this.document.getElementById("ratingicon1");
var cat2 = this.document.getElementById("ratingicon2");
var cat3 = this.document.getElementById("ratingicon3");
var cat4 = this.document.getElementById("ratingicon4");
var cat5 = this.document.getElementById("ratingicon5");
window.onload = function () {
  cat3.onclick = function () {

    cat1.style.backgroundImage = "url(../images/rating1.png)";
    cat2.style.backgroundImage = "url(../images/rating1.png)";
    cat3.style.backgroundImage = "url(../images/rating1.png)";
    cat4.style.backgroundImage = "url(../images/rating.png)";
    cat5.style.backgroundImage = "url(../images/rating.png)";
  }
  cat2.onclick = function () {
    cat1.style.backgroundImage = "url(../images/rating1.png)";
    cat2.style.backgroundImage = "url(../images/rating1.png)";
    cat3.style.backgroundImage = "url(../images/rating.png)";
    cat4.style.backgroundImage = "url(../images/rating.png)";
    cat5.style.backgroundImage = "url(../images/rating.png)";
  }
  cat4.onclick = function () {
    cat1.style.backgroundImage = "url(../images/rating1.png)";
    cat2.style.backgroundImage = "url(../images/rating1.png)";
    cat3.style.backgroundImage = "url(../images/rating1.png)";
    cat4.style.backgroundImage = "url(../images/rating1.png)";
    cat5.style.backgroundImage = "url(../images/rating.png)";
  }
  cat5.onclick = function () {
    cat1.style.backgroundImage = "url(../images/rating1.png)";
    cat2.style.backgroundImage = "url(../images/rating1.png)";
    cat3.style.backgroundImage = "url(../images/rating1.png)";
    cat4.style.backgroundImage = "url(../images/rating1.png)";
    cat5.style.backgroundImage = "url(../images/rating1.png)";
  }
  cat1.onclick = function () {
    cat1.style.backgroundImage = "url(../images/rating1.png)";
    cat2.style.backgroundImage = "url(../images/rating.png)";
    cat3.style.backgroundImage = "url(../images/rating.png)";
    cat4.style.backgroundImage = "url(../images/rating.png)";
    cat5.style.backgroundImage = "url(../images/rating.png)";
  }

  x.onclick = myFunction();
}


function makeSelected() {
  const selectObj = document.getElementById('#cat');
  ind = selectObj.dataset.measureSelect;
  console.log(ind);
  selectObj.options[ind - 1].measureSelect = true;
}
window.onload = function init() {
  this.makeSelected();
}


function addIng() {
  var newIng = document.getElementById("ingToCopy");
  var toAddBef = document.getElementById("addIng");
  main.insertBefore(newIng, toAddBef);
}
document.getElementById("addIng").onclick = addIng();

function addInst() {
  var newInst = document.getElementById("ingToCopy");
  var toAddBef = document.getElementById("addInst");
  main.insertBefore(newIng, toAddBef);
}
document.getElementById("addInst").onclick = addInst();