//for scroll button

const btn = document.getElementById("Btn"); 

// show the button When the user scrolls down 20px from the top of the document
window.onscroll = function(){scrollFunction()};
function scrollFunction(){
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
    btn.style.display ="block";}
  else {
    btn.style.display ="none";
  }
}
// When the user clicks on the button, scroll to the top of the document

function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//

