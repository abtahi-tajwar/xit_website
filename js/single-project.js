let url = "http://localhost/xit_website/";
$(document).ready(function(){
    console.log('owl carousel')
    $('.owl-carousel').owlCarousel({
      loop:false,
      margin:10,
      items: 1,
      nav: true,
      navText: [`<img src='${url}images/ui/right-arrow.svg' height="8" width="8" style="transform: rotate(180deg);">`,`<img src='${url}images/ui/right-arrow.svg' height="8" width="8">`]
  })
});

document.querySelectorAll('.question').forEach(item => {
  console.log('Hello');
  item.addEventListener('click', (e) => {
    let q = document.querySelector('#q'+e.target.id).innerHTML;
    let a = document.querySelector('#at'+e.target.id).innerHTML;
    console.log('#a'+e.target.id+' h3');
    document.querySelector('.question_txt').innerHTML = q;
    document.querySelector('.answer_txt').innerHTML = a;
  })
})