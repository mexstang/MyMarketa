function sortBy(n)
{
  
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const country = urlParams.get('country');
console.log(country);

const state = urlParams.get('state')
console.log(state);

const county = urlParams.get('county');
console.log(county);

const city = urlParams.get('adCity');
console.log(city);

const searchBox = urlParams.get('searchBox');
console.log(searchBox);

const category = urlParams.get('category');
console.log(category);
  
    switch (n)
    {
        case 'cityAsc':
            if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=10');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=12');
            }
    
        break;
        
        case 'cityDsc':
        if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=11');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=13');
            }
    
        break;
        
         case 'priceAsc':
            if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=14');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=16');
            }
    
        break;
        
        case 'priceDsc':
        if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=15');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=17');
            }
    
        break;
        
         case 'timeAsc':
            if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=18');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=20');
            }
    
        break;
        
        case 'timeDsc':
        if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=19');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=21');
            }
    
        break;
        
         case 'titleAsc':
            if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=22');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=24');
            }
    
        break;
        
        case 'titleDsc':
        if(category =='ALL')
            {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=23');
            }
            else
             {
            window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+city+'&category='+category+'&searchBox=&searchParameter=25');
            }
    
        break;
        
        
        
    }

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

