<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="https://media.hasaki.vn/wysiwyg/nhphuong/PhuongSmall/son-kem-li-3ce-4g-1.jpg" style="width:100%; height: 500px;">
  <img class="mySlides" src="https://www.ipu132vietnam.vn/wp-content/uploads/2017/11/5.png" style="width:100%; height: 500px;" alt="hello">
  <img class="mySlides" src="https://phunutoiyeu.com/wp-content/uploads/2019/08/son-coirngco-chinh-hang-4.jpg" style="width:100%; height: 500px;">
  <img class="mySlides" src="https://golmart.com.vn/wp-content/uploads/2019/12/son-mac.jpg" style="width:100%; height: 500px;">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>

