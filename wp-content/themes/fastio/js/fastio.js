//ADD-IN PLUGINS

/*!
* jQuery ChainFade; version: 1.0
* 2014 - Gonzalo Castillo
*/
(function($){

    $.fn.chainFade = function(options, callback){

        // Default options
        var defaults = {
            // Time in miliseconds before the animation starts
            startAt: 0,

            // Time in miliseconds between each animation
            interval: 300,

            // Speed of the animation in miliseconds
            speed: 700,

            // The type of animation. For the moment is just 'fade' :3
            fx: 'fade',

            // Initial distance of each elements
            distance: 50,

            // Direction of the animation: 'forward' or 'backward'
            direction: 'forward',

            // Where the element should go: toThe 'left', 'right', 'bottom' or 'top'
            toThe: 'top',

            // To apply the same height based on the taller element
            fixedHeight: false,

            // If you want to see the selected options in the console
            messages: false,

            // Change to false if you want to animate all the elements at once if you don't have a container for those elements
            queue: true,

            // Easing, MUST INCLUDE JQUERY UI FOR ANOTHER!!!
            ease: 'swing',

            // Callback function
            after: function(){}
        },

        // Pass the defaults
        settings = $.extend( defaults , options);
        
        // Console Messages
        if( settings.messages === true){
            console.log('--- Chain fade start ---');
            console.log('Selected options:');
            for(var opt in settings){
                console.log('>'+opt+': '+settings[opt]);
            }
        }

        //Fix Height
        if( settings.fixedHeight === true ){
            var max_h = 0;
            this.each(function(){
                if( $(this).height() > max_h){
                    max_h = $(this).height();
                }
            });

            // Applies max height (max_h) to every element
            $(this).height(max_h);
        }

        var getCss = function($elem, prop) {
            var wasVisible = $elem.css('display') !== 'none';
            try {
                return $elem.hide().css(prop);
            } finally {
                if (wasVisible) $elem.show();
            }
        };
        var arr_pos = ['top', 'bottom', 'left', 'right'],
            pos = {
                toThe: null,
                value: 0
            };

        // Different animations effects (there's only one at the moment)
        switch(settings.fx){

            // Regular
            case 'fade':
                // Count the elements to trigger the callback after all elements were animated
                var items = this.length,
                    count = 0;

                return this.each(function(i, el){

                    // Get the actual value and starting position
                    for (var i = 0; i < arr_pos.length; i++) {
                        var v = getCss( $(this), arr_pos[i] );
                        if( v !== 'auto' ){
                            pos['toThe'] = arr_pos[i];
                            pos['value'] = v.slice(0,-2);
                            break;
                        }
                    };

                    // Check if the element goes somewhere especific
                    if( pos['toThe'] == null ){
                        pos['toThe'] = settings.toThe;
                    }

                    // Get the 'position' property from the element
                    // Don't know why but elements that doesn't have 'position' sepecified
                    // return 'static' as 'position'
                    var p = getCss( $(this), 'position' );
                    if( p === 'static'){
                        p = 'relative';
                    }

                    // Build an object with the options for the css() method
                    var css_options = {};
                        css_options['position'] = p;
                        css_options['opacity'] = 0;
                        css_options['display'] = 'block';
                        if( settings.direction === 'forward' ){
                            css_options[pos.toThe] = ( parseInt(pos['value'])+parseInt(settings.distance) ) + 'px';
                        } else {
                            css_options[pos.toThe] = ( parseInt(pos['value'])-parseInt(settings.distance) ) + 'px';
                        }

                    // Pass the css options
                    $(this).css(css_options);
                    
                    // Build an object with the options for the animate() method
                    var anim_options = {};
                        anim_options['opacity'] = 1;
                        anim_options[pos.toThe] = pos['value']+'px';

                    // The animation
                    $(this).stop(true, false).delay(settings.startAt).animate(
                        anim_options, 
                        {
                            duration: settings.speed, 
                            easing: settings.ease,
                            queue: settings.queue, 
                            complete: function(){
                                count+=1;
                                if(count === items){
                                    settings.after();
                                }
                            }
                        });

                    // Increase the delay for the next element based 
                    // on the startAt option and the interval set in the options
                    settings.startAt += settings.interval;
                });
                break;
        }

    };
}(jQuery));

/**
 * *******************************************************
 * AOS (Animate on scroll) - wowjs alternative
 * made to animate elements on scroll in both directions
 * *******************************************************
 */

import styles from './../sass/aos.scss';

// Modules & helpers
import throttle from 'lodash.throttle';
import debounce from 'lodash.debounce';

import observe from './libs/observer';

import detect from './helpers/detector';
import handleScroll from './helpers/handleScroll';
import prepare from './helpers/prepare';
import elements from './helpers/elements';

/**
 * Private variables
 */
let $aosElements = [];
let initialized = false;

// Detect not supported browsers (<=IE9)
// http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
const browserNotSupported = document.all && !window.atob;

/**
 * Default options
 */
let options = {
  offset: 120,
  delay: 0,
  easing: 'ease',
  duration: 400,
  disable: false,
  once: false,
  startEvent: 'DOMContentLoaded'
};

/**
 * Refresh AOS
 */
const refresh = function refresh(initialize = false) {
  // Allow refresh only when it was first initialized on startEvent
  if (initialize) initialized = true;

  if (initialized) {
    // Extend elements objects in $aosElements with their positions
    $aosElements = prepare($aosElements, options);
    // Perform scroll event, to refresh view and show/hide elements
    handleScroll($aosElements, options.once);

    return $aosElements;
  }
};

/**
 * Hard refresh
 * create array with new elements and trigger refresh
 */
const refreshHard = function refreshHard() {
  $aosElements = elements();
  refresh();
};

/**
 * Disable AOS
 * Remove all attributes to reset applied styles
 */
const disable = function() {
  $aosElements.forEach(function(el, i) {
    el.node.removeAttribute('data-aos');
    el.node.removeAttribute('data-aos-easing');
    el.node.removeAttribute('data-aos-duration');
    el.node.removeAttribute('data-aos-delay');
  });
};


/**
 * Check if AOS should be disabled based on provided setting
 */
const isDisabled = function(optionDisable) {
  return optionDisable === true ||
  (optionDisable === 'mobile' && detect.mobile()) ||
  (optionDisable === 'phone' && detect.phone()) ||
  (optionDisable === 'tablet' && detect.tablet()) ||
  (typeof optionDisable === 'function' && optionDisable() === true);
};

/**
 * Initializing AOS
 * - Create options merging defaults with user defined options
 * - Set attributes on <body> as global setting - css relies on it
 * - Attach preparing elements to options.startEvent,
 *   window resize and orientation change
 * - Attach function that handle scroll and everything connected to it
 *   to window scroll event and fire once document is ready to set initial state
 */
const init = function init(settings) {
  options = Object.assign(options, settings);

  // Create initial array with elements -> to be fullfilled later with prepare()
  $aosElements = elements();

  /**
   * Don't init plugin if option `disable` is set
   * or when browser is not supported
   */
  if (isDisabled(options.disable) || browserNotSupported) {
    return disable();
  }

  /**
   * Set global settings on body, based on options
   * so CSS can use it
   */
  document.querySelector('body').setAttribute('data-aos-easing', options.easing);
  document.querySelector('body').setAttribute('data-aos-duration', options.duration);
  document.querySelector('body').setAttribute('data-aos-delay', options.delay);

  /**
   * Handle initializing
   */
  if (options.startEvent === 'DOMContentLoaded' &&
    ['complete', 'interactive'].indexOf(document.readyState) > -1) {
    // Initialize AOS if default startEvent was already fired
    refresh(true);
  } else if (options.startEvent === 'load') {
    // If start event is 'Load' - attach listener to window
    window.addEventListener(options.startEvent, function() {
      refresh(true);
    });
  } else {
    // Listen to options.startEvent and initialize AOS
    document.addEventListener(options.startEvent, function() {
      refresh(true);
    });
  }

  /**
   * Refresh plugin on window resize or orientation change
   */
  window.addEventListener('resize', debounce(refresh, 50, true));
  window.addEventListener('orientationchange', debounce(refresh, 50, true));

  /**
   * Handle scroll event to animate elements on scroll
   */
  window.addEventListener('scroll', throttle(() => {
    handleScroll($aosElements, options.once);
  }, 99));

  /**
   * Observe [aos] elements
   * If something is loaded by AJAX
   * it'll refresh plugin automatically
   */
  observe('[data-aos]', refreshHard);

  return $aosElements;
};

/**
 * Export Public API
 */

module.exports = {
  init,
  refresh,
  refreshHard
};

/**
 * --------------------------------------------------------------------------
 * Fastio: fastio.js
 * Ficheiro onde o Javascript é adicionado para posteriormente ser comprimido
 * --------------------------------------------------------------------------
 */
jQuery( function($) {
	var debug = true; //Turn this of when in production.
	//On Dropdown
	$('.fastio-nav').on('show.bs.dropdown', function () {
		if(debug){console.log('DROP!');}
		var items = $(this).find('a.dropdown-item');
		items.chainFade({
			startAt: 100,
			distance: 15,
			direction: 'forward', //'forward' or 'backward'
			interval: 100,
			speed: 150,
			toThe: 'bottom', //toThe 'left', 'right', 'bottom' or 'top'
			fixedHeight: false,
			//after: callback()
		});
	}).on('hide.bs.dropdown', function () {
		if(debug){console.log('UP!');}
		/*var items = $(this).find('a.dropdown-item');
		items.chainFade({
			startAt: 100,
			distance: 15,
			direction: 'backward', //'forward' or 'backward'
			interval: 100,
			speed: 150,
			toThe: 'top', //toThe 'left', 'right', 'bottom' or 'top'
			fixedHeight: false,
			//after: callback()
		});*/
	});
	
	//Log Copy Check
	console.log('%c©2018 SAVAGE Agency | DavidRSLopes & Hugo Carvalho', 'background: #39ee7c; background: -moz-linear-gradient(left, #39ee7c 0%, #252525 100%); background: -webkit-linear-gradient(left, #39ee7c 0%,#252525 100%); background: linear-gradient(to right, #39ee7c 0%,#252525 100%); color: #241f20; line-height:60px; font-family: Allerta,sans-serif; font-size:12px; padding: 10px 25px 10px 10px; height:107px; letter-spacing:2px;' );
});