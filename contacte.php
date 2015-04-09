<?php

/*
Template Name: Contacte
*/
?>                                    
    
<?php get_header(); ?>
			
	<div id="content" class="page">
		
		<div id="contacte-inner-content" class="wrap clearfix">
			<div id="aside-form" class="sixcol first clearfix">
				<h1>Vols saber més sobre el Projecte Tarracolab?</h1>
				<h3>Inserta el teu correu electrònic aquí, i podràs acudir a les presentacions i tallers oberts de Tarracolab, així com rebre la newsletter bisetmanal! Gràcies per l’interès!</h3>
			</div><!-- end #aside-form-->
               
			<div id="main-contacte" class="sixcol last clearfix form-container" role="main">
				<form id="formulari" method="POST" action="<?php echo get_template_directory_uri(); ?>/library/php/mail.php">
					<input type="text" id="name" name="name" placeholder="Nom" required="" autofocus=""/>
					<input type="emailº" id="email" name="email" placeholder="@" required=""/>
					<input type="text" id="subject" name="subject" placeholder="Assumpte" required=""/>
					<textarea id="message" name="message" placeholder="Missagte" required=""></textarea>
					<input type="submit" name="submit" id="input-submit" value="Enviar" />
				</form>
			</div> <!-- end #main -->
                             
		</div> <!-- end #content -->
	</div>
			
<?php get_footer(); ?>

