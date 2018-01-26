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
				<h1 class="text-center"><?php echo $hero_1['title'];?></h1>
			</header>
		</div>
	</div>
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
<section class="fastio-places">
	<div id="fastio-places-slide" class="carousel slide" data-ride="carousel" data-interval="9000">
		<div class="carousel-inner row w-80 mx-auto" role="listbox">
<?php
	$total = count($subpages);
	$i = 0;
	foreach( $subpages as $page ):
		$local_info = get_field('explore-o-geres-subpage-info', $page->ID);
		if(!empty($local_info)):
			$i++;
?>
			<article class="carousel-item col-md-3<?php if($i===1){ echo' active'; }?>">
				<a href="<?php echo get_page_link( $page->ID ); ?>">
					<img class="img-fluid mx-auto d-block" src="<?php echo $local_info['ilustracao']; ?>" alt="<?php echo $page->post_title; ?>">
				</a>
				<p class="text-center">
					<a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a>
				</p>
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
<section class="fastio-map">
	<div id="map"></div>
</section>
<script>
	var map, places;
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
				echo "['".$page->post_title."', ".$local_info['coordenadas-google'].", ".$i."],";
			endforeach;
		?>
	];
	
	function setMarkers(map) {
		// Adds markers to the map.

		// Marker sizes are expressed as a Size of X,Y where the origin of the image
		// (0,0) is located in the top left of the image.

		// Origins, anchor positions and coordinates of the marker increase in the X
		// direction to the right and in the Y direction down.
		var image = {
			url: '<?php echo get_template_directory_uri()."/img/picker1_select.png"; ?>',
			// This marker is 20 pixels wide by 32 pixels high.
			size: new google.maps.Size(50, 50),
			// The origin for this image is (0, 0).
			origin: new google.maps.Point(0, 0),
			// The anchor for this image is the base of the flagpole at (0, 32).
			anchor: new google.maps.Point(25, 50)
		};
		// Shapes define the clickable region of the icon. The type defines an HTML
		// <area> element 'poly' which traces out a polygon as a series of X,Y points.
		// The final coordinate closes the poly by connecting to the first coordinate.
		var shape = {
			coords: [1, 1, 1, 20, 18, 20, 18, 1],
			type: 'poly'
		};
		for (var i = 0; i < places.length; i++) {
			var place = places[i];
			var marker = new google.maps.Marker({
				position: {lat: place[1], lng: place[2]},
				map: map,
				icon: image,
				shape: shape,
				title: place[0],
				zIndex: place[3]
			});
		}
	}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg5djlKiQzO9o1bb9fBKT51Crt_LKjPqE&callback=initMap">
    </script>
<?php endif; ?>


<?php get_footer(); ?>