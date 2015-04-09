<?php get_header(); ?>
			
			<div id="featured">
                            <div id="inner-featured" class="wrap clearfix">

                                <div id="ingressa" class="twelvecol gradient slide">
	                                <div id="featured-container">    
					    				<section class="eightcol clearfix">
					    					<h1 id="featured-title">Benvingut a Tarracolab</h1>
					    					<h3 id="featured-subtitle">Ajuntaments, empreses referent i instituts de Formació Professional de la provincia de 
					    					tarragona ja treballen amb nosaltres.</h3>
					    					<p id="featured-text">Els portals d’Innovació Oberta com Tarracolab responen al convenciment que l'actiu més valuós de les organitzacions  és el talent de les persones que hi treballen o hi col•laboren, en particular la seva creativitat.</p>
					    				</section>
					    				<section class="fourcol">
					    					<ul>
					    						<li><img src="<?php echo get_template_directory_uri();?>/library/images/cepta.png"></li>
					    						<li><img src="<?php echo get_template_directory_uri();?>/library/images/soc.png"></li>
					    						<li><img src="<?php echo get_template_directory_uri();?>/library/images/generalitat.jpg"></li>
					    						<li><img src="<?php echo get_template_directory_uri();?>/library/images/ue.png" id="eu-logo"></li>
					    					</ul>
					    				</section>
	                                </div><!-- end #featured-container-->
                                </div><!-- end #ingressa -->
                                <div id="prensa" class="twelvecol gradient slide">
                                	<section class="row clearfix">
                                		<h1>Que diuen de nosaltres</h1>
                                	</section>
                                	<section class="row clearfix">
                                		<section class="threecol logo">
                                			<img src="<?php echo get_template_directory_uri();?>/library/images/xiptv.png" alt="" id="xip">
                                		</section>
                                		<section class="ninecol">
                                			<blockquote id="xip-quote">"La patronal d’empresaris de Tarragona, la CEPTA, tira endavant una nova iniciativa que pretén que els estudiants de cicles formatius elaborin projectes que després les empreses puguin tirar endavant"</blockquote>
                                		</section>
                                	</section>
                                	<section class="row clearfix">
                                		<section class="threecol logo">
                                			<img src="<?php echo get_template_directory_uri();?>/library/images/tarragona-radio.jpg" alt="" id="tarragona-radio">
                                		</section>
                                		<section class="ninecol">
                                			<blockquote>"Tarragona repta joves talents a dissenyar projectes innovadors a través del projecte TarracoLab"</blockquote>
                                		</section>
                                	</section>
                                	<section class="row clearfix">
                                		<section class="threecol logo">
                                			<img src="<?php echo get_template_directory_uri();?>/library/images/diaritarragona.png" alt="" id="diaritarragona">
                                		</section>
                                		<section class="ninecol">
                                			<blockquote id="diaritarragona-quote">"L'objectiu és treure suc del potencial dels estudiants de cicle superior a fi de potenciar projectes innovadors i fomentar l'esperit emprenedor"</blockquote>
                                		</section>
                                	</section>
                                </div>
                 				
                 				<?php 
                                    	$count = 0;
                                    	if (have_posts()) : while (have_posts()) : the_post(); 
                                    	if (has_post_thumbnail()) {
                                    	$count++;
                                    ?>
									<div class="slide">
										<div class="image-container">
											<?php the_post_thumbnail('large');?>
											<div class="slide-caption">
												<h1><a href="<?php echo the_permalink();?>"><?php echo $post->post_title;?></a></h1>											
												<small><?php printf(__('Publicat el <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), 
												get_the_time(get_option('date_format')));?></small>
											</div>
										</div>
									</div>
									<?php } endwhile; endif;?>

                            </div> <!-- end #inner-featured-->
                            <div id="featured-button-container" class="clearfix">
                             	<a class="featured-button-link" href="https://tarracolab.induct.no/maya/login.aspx"><button id="featured-button">Ingressa a la comunitat</button></a>
                                <small id="powered">Powered by <a href="http://induct.no/" class="induct">Induct</a><sup style="font-size: 0.6em"> TM</sup>.</small>
                            </div><!-- end #featured-container-button -->

                        </div><!-- end #featured-->

                        			
			<div id="content">
				
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							    <?php the_tags('<ul class="tags-list"><li>','</li><li>','</li></ul>'); ?>
                                <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                <p class="byline vcard"><?php
                                printf(__('Publicat el <time class="updated" datetime="%1$s" pubdate>%2$s</time> per <span class="author">%3$s</span> <span class="amp">&</span> archivat a  %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
                                ?></p>
                                <section class="social-post">
                                	<div class="fb-like" data-href="<?php echo the_permalink();?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
                                	<div class="twitter-wrapper">
	                                	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo the_permalink();?>">Tweet</a>
		                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	                            	</div>
                        		</section>
                  
						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix">
							    <?php 
                                                            $more_text = 'Llegir més';
                                                            the_content( $more_text ); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">

						    </footer> <!-- end article footer -->
						    
						    <?php // comments_template(); // uncomment if you want to use them ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { ?>
					            <?php bones_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>		
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					        	</header>
					            <section class="entry-content">
					        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					        	</section>
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
