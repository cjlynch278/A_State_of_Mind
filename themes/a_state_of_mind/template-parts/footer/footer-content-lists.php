<div <?php echo mesmerize_footer_container('footer-content-lists footer-border-accent') ?>>
    <div <?php echo mesmerize_footer_background('footer-content') ?>>
        <div class="gridContainer">
            <div class="row">
                <div class="col-sm-8 flexbox">
                    <div class="row widgets-row">
                        <div class="col-sm-4">
                            <?php
                               mesmerize_print_widget('first_box_widgets');
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <?php
                               mesmerize_print_widget('second_box_widgets');
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <?php
                                mesmerize_print_widget('third_box_widgets');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 flexbox center-xs middle-xs content-section-spacing-medium footer-bg-accent">
                  <div>
                    <div class="footer-logo space-bottom-small">
                        <h2><?php mesmerize_print_logo(true); ?></h2>
                    </div>
					  <div >
					  						<?php
			
			echo ' 
			
			<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
			<html>
			<style>
				img {
					  padding-top: 0;
					  padding-bottom: 10px;
					  padding-right: 20px;
					  padding-left: 20px;
				}
			</style>
			<a href="https://www.psychologytoday.com/us/therapists/a-state-of-mind-counseling-boulder-co/406764">
			<img src="http://astateofmindcounseling.org/wp-content/uploads/2020/12/verified.png" alt="" class="wp-image-101" width="175" height="175" title="Logo of a company" alt="Psychology Today" align="center"/></a>
			<a href="https://thervo.com/co/arvada/m
			arriage-counseling/">
			<img src="http://astateofmindcounseling.org/wp-content/uploads/2020/12/thervo-2020.png" alt="" class="wp-image-101"	width="100" height="100" title="Thervo" alt="Logo of a company" align="center"/></a>
			</html>
			';
					  ?>
					  </div>
                    <?php echo '<div style="font-size:10px;"> ©2020 A State of Mind. Built by Chris Lynch'?>
					  

			

                    <?php mesmerize_print_area_social_icons('footer', 'content', 'footer-social-icons', 5); ?>
					  
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
