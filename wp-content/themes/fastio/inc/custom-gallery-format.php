<?php
/**
 * Custom gallery format (using Bootstrap v.4 grid)
 *
 * Original function by: https://stackoverflow.com/users/1948627/bitworking
 * StackOverflow question URL: https://stackoverflow.com/a/35776752
 * Modified by: https://stackoverflow.com/users/2103923/tmmc
 * Modified by Shansith01
 * More details on StackOverflow: https://stackoverflow.com/a/45057819/2103923
 */

function custom_gallery_grid($output = '', $attrs, $instance) {

  $attrs = array_merge(array('columns' => 3), $attrs);
  // echo '<pre>' . print_r($attrs, true) . '</pre>'; // Check what is inside the array.

  $columns = $attrs['columns'];
  $images = explode(',', $attrs['ids']);

  // Other columns options in WordPress gallery (5,7,8,9)
  // are not suitable for default Bootstrap 12 columns grid
  // so they take the default value `col-sm-4`.
  switch($columns) {
    case 1:
      $col_class = 'col-12';
      break;
    case 2:
      $col_class = 'col-sm-6';
      break;
    // case 3: # Default
    //   $col_class = 'col-sm-4';
    //   break;
    case 4:
      $col_class = 'col-4 col-lg-3';
      break;
    case 6:
      $col_class = 'col-4 col-sm-2';
      break;

    default:
      $col_class = 'col-sm-4';
      break;
  }

  // Gallery thumnbnail size (set via WordPress gallery panel).
  // Defaults to `thumbnail` size.
  $galleryThumbSize = ($attrs['size']) ? $attrs['size'] : 'thumbnail';

  // Starting `gallery` block and first gallery `row`.
  $galleryID = ($instance < 10) ? 'gallery-0' . $instance : 'gallery-' . $instance;
  $gallery = '
  <section class="gallery" id="' . $galleryID . '">
    <div class="row">';
	
	if(wp_is_mobile()){
	  $count_col = 3;
	}else{
	  $count_col = 4;
	}
  $i = 0; // Counter for the loop.
  
  $total_count = count($images);
  $x = 1;
  foreach ($images as $imageID) {
	if ($i > 0 && $i%$count_col === 0) { // Closing previous `row` and startin the next one.
      $gallery .= '</div><div class="row"><div class="col-12 gallery-caption-stage" id="galery-caption-stage-'.ceil($i/$count_col).'" style="display:none;"><section>'.$captions.'</section></div></div><div class="row">';
	  $captions = '';
    }
	$i++;
	$item_id = ($i < 10) ? $galleryID.'-item-0' . $i : $galleryID.'item-' . $i;
	$caption_id = $item_id.'-caption';
	  
    // Thumbnail `src` and `alt` attributes.
    $galleryThumbSrc = wp_get_attachment_image_src($imageID, $galleryThumbSize);
    $galleryThumbAlt = get_post_meta($imageID, '_wp_attachment_image_alt', true);
    $galleryThumbCap = get_post($imageID)->post_excerpt;

    // Determine where to the gallery thumbnail is linking (set via WordPress gallery panel).
    switch($attrs['link']) {
      case 'file':
        $galleryThumbLinkImg   = wp_get_attachment_image_src($imageID, 'large'); // Take the `full` or `large` image url.
        $galleryThumbLinkAttrs = array( // More attributes can be added, only `href` is required.
          'href'         => $galleryThumbLinkImg[0], // Link to original image file.
          'data-gallery' => 'gallery', // Set some data-attribute if it is needed.
          'target'       => '_blank',  // Set target to open in new tab/window.
          // 'title'        => '',
          // 'class'        => '',
          // 'id'           => ''
        );
        break;
      case 'none':
        $galleryThumbLinkAttrs = false;
        break;
      default: // By default there is no `link` and the thumb is linking to attachment page.
        $galleryThumbLinkAttrs = array( // More attributes can be added, only `href` is required.
          'href'  => get_attachment_link($imageID), // Link to image file attachment page.
          // 'title' => '',
          // 'class' => '',
          // 'id'    => ''
        );
        break;
    }

    $gallery .= '
    <figure class="'.$col_class.' gallery-item" id="' . $item_id . '">' .
      custom_gallery_item($galleryThumbSrc[0], $galleryThumbAlt, $galleryThumbLinkAttrs) .
    //'<figcaption style="display: none;" class="wp-caption-text gallery-caption" id="' . $caption_id . '">' . $galleryThumbCap . ' </figcaption>

    '</figure>'
    ;
	
	  //Complex Bootstrap row and col calculations
	  $col = 12/$count_col;
	  $x = ($x > $count_col) ? 1 : $x;
	  //$caption_offset = ($x * $col - $col);
	  //$caption_col = (12 - $caption_offset);
	  $all_align = " text-center";
      $all_align2 = " text-left";
	  //if($caption_offset > 6){ $caption_offset = 0; $all_align = "text-center"; }
	  /*if( ($x * $col - $col) > 5 ){
		  //$caption_col = 12 - $caption_col + $col;
		  $caption_class = "offset-md-6 col-md-" . $caption_col;
	  }*/
	  
	$captions .= '<article style="display: none;" class="wp-caption-text gallery-caption" id="' . $caption_id . '"><div class="row"><div class="col-'.$col.' offset-'. ( $x * $col - $col ) .$all_align.'"><img src="'.get_template_directory_uri().'/img/Linha-gotas-brancas.png" alt="Gotas" ></div></div><div class="row"><div class="col-12'.$all_align2.'"><p>' . $galleryThumbCap . '</p></div></div></article>';
	$x++;
  }

  // Closing last gallery `row` and whole `gallery` block.
  $gallery .= '
    </div>
	<div class="row"><div class="col-12 gallery-caption-stage" id="galery-caption-stage-'.ceil($i/$count_col).'" style="display:none;"><section>'.$captions.'</section></div></div>
  </section>';
  return $gallery;
}

// Helper function: DRY while generating gallery items.
function custom_gallery_item($itemImgSrc, $itemImgAlt = '', $itemLinkAttrs = false) {
  $galleryItem = '<img src="' . $itemImgSrc . '" alt="' . $itemImgAlt . '" class="img-fluid" />';
   

  if ($itemLinkAttrs) {
    $linkAttrs = '';
    foreach ($itemLinkAttrs as $attrName => $attrVal) {
      $linkAttrs .= ' ' . $attrName . '="' . $attrVal . '"';
    }
    $galleryItem = '<a' . $linkAttrs . '>' . $galleryItem . '</a>';
  }

  return $galleryItem;
}