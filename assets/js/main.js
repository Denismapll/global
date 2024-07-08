jQuery(document).ready(function($) {
	// fitVids.
	$( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	$( '.odin-tooltip' ).tooltip();

});

var y = document.querySelectorAll('.dropdown-item.text-white.bg-transparent')
y.forEach((x)=>{
    if (x.href == window.location.href) {
        x.classList.add('text-secondary');
        x.classList.remove('text-white');
        x.href = '#';
    }
})