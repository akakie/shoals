<?php
function showWeather($city,$state)
{
  echo
  '<p class="weather">'
  .'<a href="http://www.wunderground.com/US/'.$state."/".$city.'.html?bannertypeclick=miniWeather2">'
  .'<img src="http://banners.wunderground.com/weathersticker/miniWeather2_both_cond/language/www/US/'.$state.'/'.$city.'.gif"' 
  .'title="Click for '.$city.', '.$state.' Forecast"'
  .'alt="Click for '.$city.', '.$state.' Forecast" /></a>'
  // .'<br/>'.$city.', '.$state
  .'</p>';
}
?>

