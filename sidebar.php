				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

					<?php get_search_form(); ?>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>

					<div class="partners-list">
						<h4>Col·laboradors</h4>
						<ul>
                            <li><a href="http://insandreunin.cat/"><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/andreu.png" /></a></li>
							<li><a href="http://agora.xtec.cat/ies-cal-lipolis/intranet/index.php"><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/callipolis.png" /></a></li>
							<li><a href="http://inshotturcambrils.es/"><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/cambrils.png" /></a></li>
							<li><a href="http://www.comtederius.cat/"><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/compterius.png" /></a></li>
							<li><a href="http://www.institutjaumehuguet.cat/web/"><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/huguet.png" /></a></li>
							<li><a href="http://www.institutperemartell.cat/"><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/martell.png" /></a></li>
							<li><a href="http://www.vidalibarraquer.net/"><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/vidal.png"></a></li>
                            <li><a href="www.salou.org/"><img src="<?php echo get_template_directory_uri();?>/library/images/ajuntaments/salou.gif" /></a></li>
	                        <li><a href="http://www.elvendrell.net/"><img src="<?php echo get_template_directory_uri();?>/library/images/ajuntaments/vendrell.png" /></a></li>
							<li><a href="http://www.tarragona.cat/"><img src="<?php echo get_template_directory_uri();?>/library/images/ajuntaments/tarragona.png" /></a></li>		
                            <li><img src="<?php echo get_template_directory_uri();?>/library/images/instituts/valls.png" /></li>
						</ul>
					</div>

				</div>