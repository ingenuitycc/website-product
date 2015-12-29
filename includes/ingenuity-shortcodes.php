<?php

/* Call to action shortcode */
if( ! function_exists('inortho_cto')) {	
	
  function inortho_cto($atts) {
		$attributes = shortcode_atts(array(
						'bgcolor' => '#903250',
      					'imgsrc' => '',
                        'btncolor' => '#468DB9',
                        'btntxt' => 'Get your Free Smile Analysis Today!',
                        'btnlink' => '#',
      					'ctotitle' => 'Get your Free Smile Analysis Today!',
                        'ctocontent' => 'We do not want anything to get in the way of a perfect smile. We offer each and every patient we see a free smile assessment.',
                        'txtcolor' =>'#fff'
					), $atts, 'ctotitle','bgcolor','imgsrc','btncolor','btntxt','btnlink','ctocontent','txtcolor'
                 	);
    
    $cto_data = '<div style="background-color:'.$attributes["bgcolor"].'" class="inortho-cto">
					<div class="cto-container">
						<div class="inortho-cto-img">
							<img src="'.$attributes["imgsrc"].'">																					
						</div>
						<div class="inortho-cto-body">																															
							<div class="cto-content">
								<h5 style="color:'.$attributes["txtcolor"].'">'.$attributes["ctotitle"].'</h5>
								<p style="color:'.$attributes["txtcolor"].'" class="cto-title">'.$attributes["ctocontent"].'</p>
								<p><a class="cto-btn" style="color:'.$attributes["txtcolor"].';background-color:'.$attributes["btncolor"].'" href="'.$attributes["btnlink"].'">'.$attributes["btntxt"].'</a></p></div>
							</div>
						</div>
				</div>';

    return $cto_data;
}
add_shortcode('inorthocto','inortho_cto');
}

?>