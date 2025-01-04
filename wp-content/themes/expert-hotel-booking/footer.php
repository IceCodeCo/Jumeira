</div>
<footer class="footer-area">  
   <div class="container"> 
		<?php $expert_hotel_booking_footer_widgets_setting = get_theme_mod('expert_hotel_booking_footer_widgets_setting','1');
		do_action('expert_hotel_booking_footer_above'); 
			if ( is_active_sidebar( 'expert-hotel-booking-footer-widget-area' ) ) { 
				if( $expert_hotel_booking_footer_widgets_setting != ''){?> ?>	
				<div class="row footer-row"> 
					<?php dynamic_sidebar( 'expert-hotel-booking-footer-widget-area' ); ?>
				</div>  
			<?php } ?>
		<?php }?>
	</div>
	
	<?php 
		$expert_hotel_booking_footer_copyright = get_theme_mod('expert_hotel_booking_footer_copyright','');
	?>
	<?php $expert_hotel_booking_footer_copyright_setting = get_theme_mod('expert_hotel_booking_footer_copyright_setting','1');
	 if( $expert_hotel_booking_footer_copyright_setting != ''){?> 
		<div class="copy-right"> 
			<div class="container">
				<p class="copyright-text">	
					<?php
						echo esc_html( apply_filters('expert_hotel_booking_footer_copyright',($expert_hotel_booking_footer_copyright)));
				    ?>
					<?php if ( empty($expert_hotel_booking_footer_copyright) ) { ?>
					    <?php
					        echo esc_html__( 'Copyright &copy; 2023,', 'expert-hotel-booking' );
					    ?>
					    <a href="https://www.seothemesexpert.com/products/free-hotel-wordpress-theme" target="_blank">
					        <?php
					            echo esc_html__( 'Hotel Booking', 'expert-hotel-booking' );
					        ?>
					    </a>
					    <span> | </span>
					    <a href="https://wordpress.org/" target="_blank">
					        <?php
					            echo esc_html__( 'WordPress Theme', 'expert-hotel-booking' );
					        ?>
					    </a>
					<?php } ?>
				</p>
			</div>
		</div>
	<?php }?>
	<?php $expert_hotel_booking_scroll_top = get_theme_mod('expert_hotel_booking_scroll_top_setting','1');
      if($expert_hotel_booking_scroll_top == '1') { ?>
		<a id="scrolltop"><span><?php esc_html_e('TOP','expert-hotel-booking');?><span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
