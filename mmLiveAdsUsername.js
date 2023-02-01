

function sortBy(n)
{
county=document.getElementById('passCounty').innerHTML ; 
state =document.getElementById('passState').innerHTML; 
order=document.getElementById('sortByBox').value; 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?county='+county+'&state='+state+'&sortBy='+ order +   '&category='+ n);

}

function goToVideo(n)
{
    if (n !="")
    {
    window.open( n );
    
        
    }


}


//END  HEADER FOR ALL PAGES	


function onWindowResizeFun() {

  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo").innerHTML = txt;
}

	
function resize() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo").innerHTML = txt;
}







function liveAdsBgColorOn(x) {
  x.style.borderWidth = "3";
  x.style.borderColor = "darkred";
  x.style.background = "#ccffff";
}

function liveAdsBgColorOff(x) 
{
 x.style.background = "transparent";
  x.style.borderWidth = "2";
 x.style.borderColor = "black";
}

