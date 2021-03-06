<?php
/**
 * Template Name: Explore o Gerês
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();

//Section 1 : Hero 1
$hero_1 = get_field('explore-o-geres-section-1');
if(!empty($hero_1)):
?>
<!-- ******************* The Hero Section ******************* -->
<section class="fastio-hero" style="background-image:url('<?php echo $hero_1['bg-img']; ?>');">
	<?php if(!empty($hero_1['title'])): ?>
	<div class="container-fluid">
		<div class="row">
			<header class="fastio-hero-header col-12">
				<h1 class="text-center"<?php if(!empty($hero_1['title-color'])){ echo ' style="color:'.$hero_1['title-color'].';"';} ?>><?php echo $hero_1['title'];?></h1>
			</header>
		</div>
	</div>
	<?php endif; ?>
	<?php if(!empty($hero_1['arrow'])): ?>
	<button class="btn btn-link btn-block fastio-btn-scroll-down"<?php if(!empty($hero_1['arrow-color'])){ echo ' style="color:'.$hero_1['arrow-color'].';"';} ?>>
		<?php if(!empty($hero_1['arrow-title'])): ?><p><?php echo $hero_1['arrow-title']; ?></p><?php endif; ?>
		<i class="fa fa-angle-down"></i>
	</button>
	<?php endif; ?>
</section><!-- .fastio-hero -->
<?php endif; ?>

<?php 
$args = array(
	child_of => get_the_ID()
);
$subpages = get_pages($args);
if( !empty( $subpages ) ): ?>
<!-- ******************* The Places Display Section ******************* -->
<section class="fastio-places" data-aos="fade">
	<div id="fastio-places-slide" class="carousel slide w-100" data-ride="carousel" data-interval="9000" data-aos="fade-in">
		<div class="carousel-inner w-100" role="listbox">
<?php
	$total = count($subpages);
	$i = 0;
	foreach( $subpages as $page ):
		$local_info = get_field('explore-o-geres-subpage-info', $page->ID);
		if(!empty($local_info)):
			$i++;
?>
			<article class="carousel-item <?php if($i===1){ echo' active'; }?>">
				<div class="col-md-3">
					<a href="<?php echo get_page_link( $page->ID ); ?>">
						<img class="img-fluid mx-auto d-block" src="<?php echo $local_info['ilustracao']; ?>" alt="<?php echo $page->post_title; ?>">
					</a>
					<p class="text-center">
						<a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a>
					</p>
				</div>
			</article>

<?php
		else:
			continue;
		endif;
	endforeach;
?>
		</div>
		<?php if($i >= 4): ?>
		<a class="carousel-control-prev" href="#fastio-places-slide" role="button" data-slide="prev">
			<img src="<?php echo get_template_directory_uri()."/img/seta_azul_1.jpg"; ?>" alt="prev">
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#fastio-places-slide" role="button" data-slide="next">
			<img src="<?php echo get_template_directory_uri()."/img/seta_azul_2.jpg"; ?>" alt="next">
			<span class="sr-only">Próximo</span>
		</a>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>

<?php 
$args = array(
	child_of => get_the_ID()
);
$subpages = get_pages($args);
if( !empty( $subpages ) ): ?>
<!-- ******************* The Map Section ******************* -->
<section class="fastio-map" data-aos="fade">
	<div id="map"></div>
</section>
<script>
	var map, places, lang;
	//Get Url Parameter Function
	function getUrlParameter(name) {
		name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
		var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
		var results = regex.exec(location.search);
		return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
	};
	lang = getUrlParameter('lang');
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: new google.maps.LatLng(41.838648, -8.241580),
			//mapTypeId: 'terrain',
			disableDefaultUI: true,
			styles: 
[
    {
        "featureType": "all",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#008eff"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "0"
            },
            {
                "lightness": "0"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "saturation": "-60"
            },
            {
                "lightness": "-20"
            }
        ]
    }
]
		});
		setMarkers(map);
	}
	//Markers
	places=[
		<?php 
			$i=0; 
			foreach( $subpages as $page ):
				$local_info = get_field('explore-o-geres-subpage-info', $page->ID); 
				$i++;
				echo "['".$page->post_title."', ".$local_info['coordenadas-google'].", ".$i.", '".$page->post_name."'],";
			endforeach;
		?>
	];
	//console.log(places);
	function setMarkers(map) {
		//Define Vars
		var infowindow = new google.maps.InfoWindow(),
			activeMarker,
			i,
			iconDefault = {
				url: '<?php echo get_template_directory_uri()."/img/picker1_select.png"; ?>',
				size: new google.maps.Size(25, 25),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(12.5, 25)
			},
			iconActive = {
				url: '<?php echo get_template_directory_uri()."/img/picker2_selected.png"; ?>',
				size: new google.maps.Size(25, 25),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(12.5, 25)
			};
		//Loop
		for (i = 0; i < places.length; i++) {
			marker = new google.maps.Marker({
				position: {lat: places[i][1], lng: places[i][2]},
				map: map,
				icon: iconDefault,
				title: places[i][0],
				zIndex: places[i][3]
			});
			
			//Add Events
			google.maps.event.addListener(marker,'click', (function(marker, i){ 
				return function() {
					marker.setIcon(iconActive);
					if(lang){
						var placeLink = places[i][4]+'?lang='+lang;
					}else{
						var placeLink = places[i][4];
					}
					infowindow.setContent('<div id="content">'+'<div id="siteNotice">'+'</div>'+'<a href="/'+placeLink+'">'+places[i][0]+'</a>'+'</div>');
					infowindow.open(map, marker);

					activeMarker && activeMarker.setIcon(iconDefault);

					google.maps.event.addListener(map,'click', function(){ 
						marker.setIcon(iconDefault);
						infowindow.close();
					});
					google.maps.event.addListener(infowindow,'closeclick',function(){
						marker.setIcon(iconDefault);
					});
					activeMarker = marker;
				};
			})(marker, i));
		}
	}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg5djlKiQzO9o1bb9fBKT51Crt_LKjPqE&callback=initMap">
    </script>
<?php endif; ?>


<?php get_footer(); ?>