<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

const backing = document.createElement('div');
backing.classList.add('backing');
backing.classList.add('none');
const body = document.querySelector('body');
body.append(backing);


console.log('the JS is working');
// const imageElements = document.querySelectorAll('.imageBlock img');
const imageArea = document.querySelectorAll('.imageBlock');
const unclickArea = document.querySelector('.page-content');

// imageElements[0].onclick = function(){
// 	imageElements[0].classList.toggle('clickable')
//   	imageElements[0].classList.toggle('hoverimg')
//   	background.classList.toggle('none')
// };

// background.onclick = function(){
//   imageElements[0].classList.remove('clickable')
//   background.classList.add('none')
// };

// for ( let i=0; i<10; i++){
//   imageElements[i].addEventListener('click', function(){
//     this.classList.toggle('clickable')
// 	this.classList.toggle('hoverimg')
//   	background.classList.toggle('none')
//   })
// };


let imageElements = Array.prototype.slice.call(document.querySelectorAll('.imageBlock img'));
console.log(imageElements);
imageElements.forEach((image, index) => {
  image.addEventListener("click", () => {
    const clonedImage = image.cloneNode();
    backing.append(clonedImage);
//     image.classList.toggle('clickable');
//     image.classList.toggle('hoverimg');
    backing.classList.remove('none');
  });
});

backing.addEventListener("click", () => {
  backing.removeChild(backing.firstChild);
  backing.classList.add('none')
});


</script>
<!-- end Simple Custom CSS and JS -->
