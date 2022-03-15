var i=0;
var j=0;
function change(){
    var divtag=document.getElementById('travelheading');
    var bgcolor=["PLANNING TRIP TO ANYWHERE IN WORLD","WE PROVIDE ONLY THE BEST TOURS","ENJOY YOUR DREAM VACATION","YOURPERFECT TOUR IN FRANCE STARTS HERE"];
    var txtcolor=["White"];
    // divtag.style.backgroundColor=bgcolor[i];
    divtag.innerText=bgcolor[i];
  divtag.style.color=txtcolor[j];
  i=(i+1)%bgcolor.length;
  j=(j+1)%txtcolor.length;

  
}
setInterval(change,2000);