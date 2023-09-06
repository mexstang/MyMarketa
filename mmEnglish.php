<!DOCTYPE html>
<html lang='en'>
<head>
<title>MyMARKETA.com HOME</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0' >

<link rel="stylesheet" type="text/css" href="mm1Main.css">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
<script src="mmHeader.js"></script> 
<script>
//$=jQuery
//
//$(document).ready(function()
//{  //jQuery-Set an event listener for type Button and using the Click Function.
 //$(":button").click(function()
 //{ //Grab the button ID.
 //var buttonId = $(this).attr('id');
// });
    
//}); //END THE READY FUNCTION
</script>
</head>

<body onload='loadLocation()'  >
<div id="wrapper" class="wrapper">
<div class="container1">
<header id='header'  class='header' ><?php include 'mmHeader.php'; ?></header>
</div>

 <div class="container2">  
<main>
    
<!- 1 Section.  1 Form of hidden input tags to hold the temporary values: CAT COUNTY STATE -> 
<section class='landingPageCategoryButtons'  >

<input  id='ALL'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='ALL' onclick='categoryRedirect(id)'  value='ALL' 
style='text-shadow: 1px 1px black; color: darkred;'   >
<input  id='ANTIQUES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='ANTIQUES' onclick='categoryRedirect(id)'  
value='ANTIQUES'>
<input  id='APPLIANCES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='APPLIANCES' onclick='categoryRedirect(id)'  
value='APPLIANCES'> 
<input  id='ARTS-CRAFTS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='ARTS-CRAFTS' onclick='categoryRedirect(id)'  
value='ARTS-CRAFTS'>   
<input  id='BABY-STUFF'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='BABY-STUFF' onclick='categoryRedirect(id)'  
value='BABY-STUFF'> 
<input  id='BARTER'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='BARTER' onclick='categoryRedirect(id)'  
value='BARTER'>  
<input  id='BATHROOM'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='BATHROOM' onclick='categoryRedirect(id)'  
value='BATHROOM'>
<input  id='BICYCLES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='BICYCLES' onclick='categoryRedirect(id)'  
value='BICYCLES'>
<input  id='BOOKS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='BOOKS' onclick='categoryRedirect(id)'  value='BOOKS'> 
<input  id='CLOTHES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='CLOTHES' onclick='categoryRedirect(id)'  value='CLOTHES'> 
<input  id='COMPUTERS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='COMPUTERS' onclick='categoryRedirect(id)'  value='COMPUTERS'>
<input  id='ELECTRONICS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='ELECTRONICS' onclick='categoryRedirect(id)'  value='ELECTRONICS'> 
<input  id='EXERCISE'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='EXERCISE' onclick='categoryRedirect(id)'  value='EXERCISE'>   
<input  id='FARM'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='FARM' onclick='categoryRedirect(id)'  value='FARM'> 
<input  id='FOOD'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='FOOD' onclick='categoryRedirect(id)'  value='FOOD'> 
<input  id='FREE'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='FREE' onclick='categoryRedirect(id)'  value='FREE'> 
<input  id='FRUITS-VEGETABLES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='FRUITS AND VEGS' onclick='categoryRedirect(id)'  value='FRUITS-VEGETABLES'> 
<input  id='FURNITURE'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='FURNITURE' onclick='categoryRedirect(id)'  value='FURNITURE'>
<input  id='GARDEN'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='GARDEN' onclick='categoryRedirect(id)'  value='GARDEN'>  
<input  id='GARDEN-420'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='GARDEN-420' onclick='categoryRedirect(id)'  value='GARDEN-420'> 
<input  id='JEWELRY'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='JEWELRY' onclick='categoryRedirect(id)'  value='JEWELRY'> 
<input  id='JEWELRY'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='HEALTH' onclick='categoryRedirect(id)'  value='HEALTH'>
<input  id='HELP'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='HELP' onclick='categoryRedirect(id)'  value='HELP'> 
<input  id='HOME-EXTERIOR'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='HOME-EXTERIOR' onclick='categoryRedirect(id)'  value='HOME-EXTERIOR'>  
<input  id='HOME-INTERIOR'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='HOME-INTERIOR' onclick='categoryRedirect(id)'  value='HOME-INTERIOR'> 
<input  id='KITCHEN'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='KITCHEN' onclick='categoryRedirect(id)'  value='KITCHEN'> 
<input  id='MOTA'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='MOTA' onclick='categoryRedirect(id)'  value='MOTA'> 
<input  id='MUSIC-GENERAL'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='MUSIC-GENERAL' onclick='categoryRedirect(id)'  value='MUSIC-GENERAL'> 
<input  id='MUSIC-INSTRUMENTS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='MUSIC-INSTRUMENTS' onclick='categoryRedirect(id)'  value='MUSIC-INSTRUMENTS'>
<input  id='PET-STUFF'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='PET-STUFF' onclick='categoryRedirect(id)'  value='PET-STUFF'> 
<input  id='PICKER-UPPERS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='PICKER-UPPERS' onclick='categoryRedirect(id)'  value='PICKER-UPPERS'> 
<input  id='SERVICIES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='SERVICES' onclick='categoryRedirect(id)'  value='SERVICES'> 
<input  id='SWAP-MEETS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='SWAP-MEETS' onclick='categoryRedirect(id)'  value='SWAP-MEETS'>  
<input  id='TICKETS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='TICKETS' onclick='categoryRedirect(id)'  value='TICKETS'>  
<input  id='TOOLS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='TOOLS' onclick='categoryRedirect(id)'  value='TOOLS'>  
<input  id='TOYS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='TOYS' onclick='categoryRedirect(id)'  value='TOYS'>
<input  id='THRIFT-STORES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='THRIFT-STORES' onclick='categoryRedirect(id)'  value='THRIFT-STORES'> 
<input  id='VIDEO-GAMES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='VIDEO-GAMES' onclick='categoryRedirect(id)'  value='VIDEO-GAMES'> 
 <input  id='YARD-SALES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='YARD-SALES' onclick='categoryRedirect(id)'  value='YARD-SALES'>  
  <br/ ><br/>
 <b class='categorySections'> ~JOBS~</b><BR/>
 <input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='JOBS-FULL-TIME'  onclick='categoryRedirect(id)'  id='JOBS-FULL-TIME' value='FULL-TIME'>
 <input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='JOBS-PART-TIME'   onclick='categoryRedirect(id)'  id='JOBS-PART-TIME' value='PART-TIME'>
 <br/ ><br/>
  <b class='categorySections'>~VEHICLES~</b><BR/>
<input  id='AUTOS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='AUTOS'   onclick='categoryRedirect(id)' value='AUTOS'> 
<input  id='BOATS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='BOATS'   onclick='categoryRedirect(id)' value='BOATS'>  
<input  id='MOTORCYCLES'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='MOTORCYCLES'   onclick='categoryRedirect(id)' value='MOTORCYCLES'>
<input  id='OFF-ROAD'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='OFF-ROAD'  onclick='categoryRedirect(id)' value='OFF-ROAD'>
<input  id='RVs'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='RVs'  onclick='categoryRedirect(id)' value='RVs'>
 <input  id='TRUCKS'  type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='TRUCKS'  onclick='categoryRedirect(id)' value='TRUCKS'>
 <br/><br/>
 <b class='categorySections'>~FOR RENT~</b><BR/>
<input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='APARTMENTS-FOR-RENT'  onclick='categoryRedirect(id)'  id='APARTMENTS-RENT' value='APARTMENTS'>
<input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='HOMES-FOR-RENT'  onclick='categoryRedirect(id)'  id='HOUSES-RENT' value='HOUSES'>
<input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='CONDOS-FOR-RENT'  onclick='categoryRedirect(id)'  id='CONDOS-RENT' value='CONDOS'>  
<input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='ROOMS-FOR-RENT'  onclick='categoryRedirect(id)'  id='ROOMS-RENT' value='ROOMS'>
<input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='RENTAL-WANTED'  onclick='categoryRedirect(id)'  id='RENTAL-WANTED' value='RENTAL-WANTED'>
<input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'   onclick='categoryRedirect(id)'  id='ROOM-WANTED' value='ROOM-WANTED'>
<input   type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='ROOMMATE-WANTED'  onclick='categoryRedirect(id)'  id='ROOMMATE-WANTED' value='ROOMMATE-WANTED'>   
<br/><br/>
 <b class='categorySections'>~FOR SALE~</b><BR/>
<input   type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='HOMES-FOR-SALE'  onclick='categoryRedirect(id)'  id='HOUSES-SALE' value='HOUSES'> 
<input    type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='CONDOS-FOR-SALE'  onclick='categoryRedirect(id)'  id='CONDOS-SALE' value='CONDOS'>  
<input   type='button'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  title='LAND-FOR-SALE'  onclick='categoryRedirect(id)'  id='LAND-SALE' value='LAND'>

</section>
</main>
  

</div>
<div class='container3' >
  <footer><?php include 'mmFooter.php'; ?></footer>
</div>

</div>

<script>checkViewportWidth();</script>
</body>
</html>


