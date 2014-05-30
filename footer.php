			<div class="space-for-menu"></div>
			<footer class="footer ginger-footer" role="contentinfo">
				<?php wp_nav_menu(array(
					'container' => 'div',                              // remove nav container
					'container_class' => 'menu_area',         // class of container (should you choose to use it)
					'theme_location' => 'footer-links',             // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => 'bones_footer_links_fallback',  // fallback function
					'walker' => new Mobile_Menu_Walker()
				)); ?>
				<!--
                                <div class="ihc-menu-area">
                                	<ul>
						<li class="ihc-menu-button">
							<div class="ihc-button-icon active">
								<i class="fa-home"></i>
							</div>
							<span>HOME</span>
						</li>
						<li class="ihc-menu-button">
							<div class="ihc-button-icon">
								<i class="fa-th"></i>
							</div>
							<span>KEYPAD</span>
						</li>
						<li class="ihc-menu-button">
							<div class="ihc-button-icon">
								<i class="fa-map-marker"></i>
							</div>
							<span>MAP</span>
						</li>
						<li class="ihc-menu-button">
							<div class="ihc-button-icon">
								<i class="fa-cogs"></i>
							</div>
							<span>SETTING</span>
						</li>
					</ul>
				</div>
				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php /*wp_nav_menu(array(
    							'container' => '',                              // remove nav container
    							'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						));*/?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>
				-->
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
