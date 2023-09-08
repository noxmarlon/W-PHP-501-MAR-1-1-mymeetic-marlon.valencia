jQuery(document).ready(function ($) {

$('#checkbox').change(function(){
  setInterval(function () {
      moveRight();
  }, 3000);
});

  var slideCount = $('#slider div div').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('#slider').css({ width: slideWidth, height: slideHeight });
  
  $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
  $('#slider ul li:last-child').prependTo('#slider ul');

  function moveLeft() {
      $('#slider ul').animate({
          left: + slideWidth
      }, 200, function () {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  function moveRight() {
      $('#slider ul').animate({
          left: - slideWidth
      }, 200, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  $('a.control_prev').click(function () {
      moveLeft();
  });

  $('a.control_next').click(function () {
      moveRight();
  });

}); 




<div  id="BG_color_mid">
<div  class="container">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\6.jpg" class="d-block w-100" alt="...">
      <span>pruebaaaaaaa</span>
    </div>
    <?php While($rowSql = $sqli->fetch_assoc()) {   ?>
    <div class="carousel-item">
      <img src="img\7.jpg" class="d-block w-100" alt="...">
      <h1><?php echo $rowSql["name"]; ?></h1>
      <h1><?php echo $rowSql["lastname"]; ?></h1>
      <h1><?php echo $rowSql["city"]; ?></h1>
    </div>
    <?php } ?>
    
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <div class="left-slide"><</div>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="right-slide" aria-hidden="true">></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
