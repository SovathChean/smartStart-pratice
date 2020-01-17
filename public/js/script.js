
var currentSlide = 0;
var rightSlide = document.querySelector('#right');
var leftSlide = document.querySelector('#left');
var header = document.querySelector('.index');
var btns = header.querySelectorAll(".item-ch");
var current = document.getElementsByClassName("active-ch");

//khmer language
var rightSlide_kh = document.querySelector('#right-kh');
var leftSlide_kh = document.querySelector('#left-kh');
var header_kh = document.querySelector('.index-kh');
var btns_kh = header_kh.querySelectorAll('.item-ch-kh');
var current_kh = document.getElementsByClassName("active-ch-kh");

leftSlide.addEventListener('click', left)
rightSlide.addEventListener('click', right);
rightSlide_kh.addEventListener('click', right_kh);
leftSlide_kh.addEventListener('click', left_kh);

document.addEventListener("DOMContentLoaded", ready);


function ready(){
  rightSlide.style.display = 'none';
  rightSlide_kh.style.display = 'none';
}
function left_kh(){
  ++currentSlide;
  if(currentSlide%4 > 0){
  document.querySelector('.slider-kh').style.transform = `translateX(${-currentSlide * 100}vw)`;
  rightSlide_kh.style.display = 'block';
  current_kh[0].className = current_kh[0].className.replace(" active-ch-kh", "");
  btns_kh[currentSlide].className += " active-ch-kh";
  }
  else
     {
       rightSlide_kh.style.display = 'none';
       document.querySelector('.slider-kh').style.transform = `translateX(${0}vw)`;
       current_kh[0].className = current_kh[0].className.replace(" active-ch-kh", "");
       btns_kh[0].className += " active-ch-kh";
       currentSlide = 0;
     }
}
function right_kh(){
  --currentSlide;
  if(currentSlide%4 > 0){
  document.querySelector('.slider-kh').style.transform = `translateX(${-currentSlide * 100}vw)`;
  current_kh[0].className = current_kh[0].className.replace(" active-ch-kh", "");
  btns_kh[currentSlide].className += " active-ch-kh";
   }
   else
   {
    rightSlide.style.display = 'none';
    document.querySelector('.slider-kh').style.transform = `translateX(${-currentSlide * 100}vw)`;
    current_kh[0].className = current_kh[0].className.replace(" active-ch-kh", "");
    btns_kh[0].className += " active-ch-kh";
    currentSlide = 0;
   }
}
function left(){
  ++currentSlide;
  if(currentSlide%4 > 0){
  document.querySelector('.slider').style.transform = `translateX(${-currentSlide * 100}vw)`;
  rightSlide.style.display = 'block';
  current[0].className = current[0].className.replace(" active-ch", "");
  btns[currentSlide].className += " active-ch";
  }
  else
     {
       rightSlide.style.display = 'none';
       document.querySelector('.slider').style.transform = `translateX(${0}vw)`;
       current[0].className = current[0].className.replace(" active-ch", "");
       btns[0].className += " active-ch";
       currentSlide = 0;
     }
};
function right(){
  --currentSlide;
  if(currentSlide%4 > 0){
  document.querySelector('.slider').style.transform = `translateX(${-currentSlide * 100}vw)`;
  var current = document.getElementsByClassName("active-ch");
  current[0].className = current[0].className.replace(" active-ch", "");
  btns[currentSlide].className += " active-ch";
   }
   else
   {
    rightSlide.style.display = 'none';
    document.querySelector('.slider').style.transform = `translateX(${-currentSlide * 100}vw)`;
    var current = document.getElementsByClassName("active-ch");
    current[0].className = current[0].className.replace(" active-ch", "");
    btns[0].className += " active-ch";
    currentSlide = 0;
   }
};

var popup1 = document.querySelector('#card1');
var popup2 = document.querySelector('#card2');
var popup3 = document.querySelector('#card3');

//khmer language

var popup1_kh = document.querySelector('#card1-kh');
var popup2_kh = document.querySelector('#card2-kh');
var popup3_kh = document.querySelector('#card3-kh');

//khmer language
popup1_kh.addEventListener('click', function()
{
  document.querySelector('.card1-kh').style.display = 'flex';
  document.querySelector('#opacity').style.backgroundColor = '#bab9b6';
  document.querySelector('#opacity').style.opacity = '10';
});
popup2_kh.addEventListener('click', function()
{
  document.querySelector('.card2-kh').style.display = 'flex';
  document.querySelector('#opacity').style.backgroundColor = '#bab9b6';
  document.querySelector('#opacity').style.opacity = '10';
});

popup3_kh.addEventListener('click', function()
{
  document.querySelector('.card3-kh').style.display = 'flex';
  document.querySelector('#opacity').style.backgroundColor = '#bab9b6';
  document.querySelector('#opacity').style.opacity = '10';
});

//english language
popup1.addEventListener('click', function()
{
  document.querySelector('.card1').style.display = 'flex';
  document.querySelector('#opacity').style.backgroundColor = '#bab9b6';
  document.querySelector('#opacity').style.opacity = '10';
});
popup2.addEventListener('click', function()
{
  document.querySelector('.card2').style.display = 'flex';
  document.querySelector('#opacity').style.backgroundColor = '#bab9b6';
  document.querySelector('#opacity').style.opacity = '10';
});

popup3.addEventListener('click', function()
{
  document.querySelector('.card3').style.display = 'flex';
  document.querySelector('#opacity').style.backgroundColor = '#bab9b6';
  document.querySelector('#opacity').style.opacity = '10';
});

var green = document.querySelector('.Green')
var red = document.querySelector('.red');
var card3 = document.querySelector('#thrid');
var card2 = document.querySelector('#second');
var card1 = document.querySelector('#first');

function Green(el) {
    el.classList.add('Green');
    el.classList.remove('red');
}
  
  function Red(el) {
    el.classList.add('red');
    el.classList.remove('Green');
}


card3.addEventListener('click', function(){
  document.querySelector('.card3').style.display = 'none';
  document.querySelector('#opacity').style.backgroundColor = '#fff';
  document.querySelector('#opacity').style.opacity = '1';
});
card2.addEventListener('click', function(){
  document.querySelector('.card2').style.display = 'none';
  document.querySelector('#opacity').style.backgroundColor = '#fff';
  document.querySelector('#opacity').style.opacity = '1';
});
card1.addEventListener('click', function(){
  document.querySelector('.card1').style.display = 'none';
  document.querySelector('#opacity').style.backgroundColor = '#fff';
  document.querySelector('#opacity').style.opacity = '1';
});

//khmer language
var green_kh = document.querySelector('.Green-kh')
var red_kh = document.querySelector('.red-kh');
var card3_kh = document.querySelector('#thrid-kh');
var card2_kh = document.querySelector('#second-kh');
var card1_kh = document.querySelector('#first-kh');

function Green_kh(el) {
    el.classList.add('Green-kh');
    el.classList.remove('red-kh');
}
  
  function Red_kh(el) {
    el.classList.add('red-kh');
    el.classList.remove('Green-kh');
}


card3_kh.addEventListener('click', function(){
  document.querySelector('.card3-kh').style.display = 'none';
  document.querySelector('#opacity').style.backgroundColor = '#fff';
  document.querySelector('#opacity').style.opacity = '1';
});
card2_kh.addEventListener('click', function(){
  document.querySelector('.card2-kh').style.display = 'none';
  document.querySelector('#opacity').style.backgroundColor = '#fff';
  document.querySelector('#opacity').style.opacity = '1';
});
card1_kh.addEventListener('click', function(){
  document.querySelector('.card1-kh').style.display = 'none';
  document.querySelector('#opacity').style.backgroundColor = '#fff';
  document.querySelector('#opacity').style.opacity = '1';
});
