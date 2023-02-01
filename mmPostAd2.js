
function timedHomeRedirect(cat,county,state) {

alert('SUCCESS! \nYOUR AD IS READY BUT IT IS NOT ACTIVE. \nPLEASE CHECK YOUR EMAIL FOR AN ACTIVATION LINK. \nTHANK YOU.');

window.location.replace("https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?county="+county+"&state="+state+"&category="+cat);
  
}

function goHome2(cat)
{
cat1=cat;
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const state = urlParams.get('state')
console.log(state);
const county = urlParams.get('county');
console.log(county);
const city = urlParams.get('city');
console.log(city);


window.location.replace("https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?county="+county+"&state="+state+"&category="+cat1);
}


function uploadEx() 
{
				var canvas = document.getElementById("canvas");
				var dataURL = canvas.toDataURL("image/PNG");
				
				document.getElementById('hidden_data').value = dataURL;
				var fd = new FormData(document.forms["form1"]);

				var xhr = new XMLHttpRequest();
				xhr.open('POST', 'uploads.php', true);

				xhr.upload.onprogress = function(e) {
					if (e.lengthComputable) {
						var percentComplete = (e.loaded / e.total) * 100;
						console.log(percentComplete + '% uploaded');
						alert('SUCCESS! PLEASE CHECK YOUR EMAIL FOR AN ACTIVATION LINK.');
					}
				};

				xhr.onload = function() {

				};
				xhr.send(fd);
				
				

}



