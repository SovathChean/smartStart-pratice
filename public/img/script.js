// jQuery(document).ready(function ($) {
 

  
// 	var slideCount = $('#slider ul li').length;
// 	var slideWidth = $('#slider ul li').width();
//   var slideHeight = $('#slider ul li').height();
//   var sliderUlWidth = slideCount * slideWidth;
//   var cnt = 0;
  
// 	function ControlRight(){
//     if(cnt > 0)
//      {
//        $(".control_prev").css("display", "block");
//      }
//      else
//      {
//       $(".control_prev").css("display", "none");
//      }
     
//   };

// 	$('#slider').css({ width: slideWidth, height: slideHeight});
// 	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
//     $('#slider ul li:last-child').prependTo('#slider ul');

//     function moveLeft() {
//         $('#slider ul').animate({
//             left: + (slideWidth+50)
//         }, 600, function () {
//             $('#slider ul li:last-child').prependTo('#slider ul');
//             $('#slider ul').css('left', '');
//         });
//         cnt--;
//     };

//     function moveRight() {
//       if(cnt == 3){
//         $('#slider ul').animate({
//           left: + (slideWidth*1.6)
//       }, 700, function () {
//           $('#slider ul li:first-child').appendTo('#slider ul');
//           $('#slider ul').css('left', '');
//       });
//       cnt = 0;
//       ControlRight();
      
//       }
//       else{
//         $('#slider ul').animate({
//           left: - (slideWidth+50)
//         }, 600, function () {
//             $('#slider ul li:first-child').appendTo('#slider ul');
//             $('#slider ul').css('left', '');
//         });
//         cnt++;
//       }
        
//     };

//     $('a.control_prev').click(function () {
//         moveLeft();
//         ControlRight();
//     });

//     $('a.control_next').click(function () {
//         moveRight();
//         ControlRight();
//     });

// }); 



var maxSlide = 4;
var currentSlide = 0;
var rightSlide = document.querySelector('#right');
var leftSlide = document.querySelector('#left');
var header = document.querySelector('.index');
var btns = header.querySelectorAll(".item");
var current = document.getElementsByClassName("active");

leftSlide.addEventListener('click', left)
rightSlide.addEventListener('click', right)
document.addEventListener("DOMContentLoaded", ready);


function ready(){
  rightSlide.style.display = 'none';
}
function left(){
  ++currentSlide;
  if(currentSlide%4 > 0){
  document.querySelector('.slider').style.transform = `translateX(${-currentSlide * 100}vw)`;
  rightSlide.style.display = 'block';
  current[0].className = current[0].className.replace(" active", "");
  console.log(currentSlide);
  btns[currentSlide].className += " active";
  }
  else
     {
       rightSlide.style.display = 'none';
       document.querySelector('.slider').style.transform = `translateX(${0}vw)`;
       current[0].className = current[0].className.replace(" active", "");
       btns[0].className += " active";
       currentSlide = 0;
     }
};
function right(){
  --currentSlide;
  if(currentSlide%4 > 0){
  document.querySelector('.slider').style.transform = `translateX(${-currentSlide * 100}vw)`;
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  btns[currentSlide].className += " active";
   }
   else
   {
    rightSlide.style.display = 'none';
    document.querySelector('.slider').style.transform = `translateX(${-currentSlide * 100}vw)`;
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    btns[0].className += " active";
    currentSlide = 0;
   }
};

