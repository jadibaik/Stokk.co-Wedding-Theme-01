
<!-- section map -->
<section class="air-block gallery-carousel pt-0" id="map" style="position:relative;z-index:1;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="gmap"></div>
            </div>
        </div>
    </div>
</section>

<!-- section map-footer -->
<section class="air-block jarallax imagebg map-footer pb-5" data-jarallax data-speed="0.2" data-overlay="3">

    <?php 
    	if($footer['logo'][0]){
    	echo '<img class="jarallax-img" src="'.$footer['logo'][0].'" height="400px" alt="countdown-background">';
    	}
    ?>

    <div class="container text-center map-footer_content">

    <?php 
    	if($footer['background'][0]){
    	echo '<img src="'.$footer['background'][0].'" width="100">';
    	}
    ?>
	
    </div>
</section>