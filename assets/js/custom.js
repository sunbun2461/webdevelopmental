
//clicking the bars
function navOn(){
     let nav = document.getElementById('mobile-nav');
     let bars = document.getElementById('bars');
    nav.classList.remove("mobile-nav-off");
    bars.classList.add('off');
}

//clicking the times
function navOff(){
    let nav = document.getElementById('mobile-nav');
    nav.classList.add('mobile-nav-off');
    bars.classList.remove('off');
}

function parallax() {
	var s = document.getElementById("floater");
  var yPos = 0 - window.pageYOffset/20;
  s.style.top = 0 + yPos + "%";

  //alert(yPos);
}

window.addEventListener("scroll", function(){
	parallax();
});



window.onload = function() {	var down =	document.getElementById('downBounce');
	down.onmouseover = function(){
		  down.classList.add('bounce-down');
		  setTimeout( () => {
		    down.classList.remove('bounce-down');
		  } , 1000);
		}
	};
 




// function scrollRight(){
//     var main = document.getElementById('main');
//     var pos = 100;
//     var id = setInterval(frame,2);
//     function frame(){
//         if(pos == 0){
//             clearInterval(id);
//         }else{
//         pos--;
//         main.style.left = pos + "vw";
//         }
//     }
//     var arrowLeft = document.getElementById('arrows-left');
//     arrowLeft.style.display = "block";
// }
//
// function left(){
//     var main = document.getElementById('main');
//     var pos = 0;
//     var id = setInterval(frame,2);
//     function frame(){
//         if(pos == 100){
//             clearInterval(id);
//         }else{
//         pos++;
//         main.style.left = pos + "vw";
//         }
//     }
//     var arrowLeft = document.getElementById('arrows-left');
//     arrowLeft.style.display = "none";
// }
//
//
//     document.onkeydown = function keyDown(){
//         switch(event.keyCode){
//             case 39:
//             var main = document.getElementById('main');
//             if(main.style.left !== 0 + 'vw'){
//             scrollRight();
//             }
//             break;
//             case 37:
//             var main = document.getElementById('main');
//             if(main.style.left === 0 + 'vw'){
//              left();
//             }
//             break;
//         }
//     }
// document.onkeydown = function rightKey(event){
//     if(event.keyCode = 39){
//     let main = document.getElementById('main');
//     if(main.style.left !== 0 + 'vw'){
//     scrollRight();
//     }
//   }
// }

// document.onkeydown = function leftKey(event){
//     if(event.keyCode = 39){
//     let main = document.getElementById('main');
//     if(main.style.left === 0 + 'vw'){
//     left();
//     }
//   }
// }

// function scrollRightNav(){
// return navOff() + scrollRight();
// }
