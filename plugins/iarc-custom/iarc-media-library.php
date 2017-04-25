<?php

// IARC L.Alteyrac 20150831: Make "Upload" tab selected by default in Media Library + remove Video and Gallery tabs
function media_manager_default() {
    ?>
    <script type="text/javascript">
        jQuery(".media-router a:first-child").addClass("active"); jQuery(".media-router a:last-child").removeClass("active");
		jQuery(document).ready( function($) {
        $(document.body).one( 'click', '.insert-media', function( event ) {
            $(".media-menu").find("a:contains('Video')").remove();
			$(".media-menu").find("a:contains('Gallery')").remove();
        });
    });
    </script>
    <?php
}
add_action( 'admin_footer-post-new.php', 'media_manager_default' );
add_action( 'admin_footer-post.php', 'media_manager_default' );

?>