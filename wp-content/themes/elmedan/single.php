<?php get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="sidebar"><div class="ads_160">sidebar</div></div>
			<div class="article_container">
				<div class="related_articles">
					<div class="top_bar"><i class="icon-down-circle"></i>إقرأ أيضاً</div>
					<div class="related_articles_items">
						<ul>
							<?php    $k=0;$side_news = new WP_Query(array('showposts'=>13,'cat'=>'-'.$cat_video.',-'.$cat_photo));
                                                                while($side_news->have_posts()):$side_news->the_post(); $without[$k]=$post->ID; $k++;?>
							<a href="<?php $link=get_permalink($post->ID); echo $link;?>">
                                                        <li data-item="<?php echo $post->ID; ?>">
								
                                                                <img src="<?php $img=get_post_meta($post->ID,'image',true);if ($img) echo resize($img,array("w"=>"100","h"=>"70"));?>">
                                                                
								<h4><?php the_title(); ?></h4>
								<span><i class="icon-clock"></i><?php echo post_date_diff_seconds($post->post_date); ?></span>
							</li>
                                                        </a>
							<?php endwhile;
                                                        wp_reset_query();?>
						</ul>
					</div>

					<div class="ads_250"><img src="http://cache.daylife.com/imageserve/0aYa8OZ8Ux8sc/250x250.jpg"></div>
				</div>
				<div class="the_article">
                                            <?php
                                            if(have_posts()):
                                            while (have_posts()):
                                            the_post();
                                            ?>
                                    
                                    
					<div id="article-thumb">
						
                                                <img src="<?php  $img=get_post_meta($post->ID, "image", true);
                                                    if($img) echo resize($img,array("w"=>"510","h"=>"300", "crop"=>false)); ?>"
                                                        alt="<?php  echo the_title(); ?>"/>
						<div id="caption">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
                                        

					<div class="info-share-wrap">
						<div id="info-share">
							<ul>
								<li><i class="icon-user"></i> <?php the_author(); ?></li>
								<li><i class="icon-bookmark"></i><?php  echo  the_category($parent='single'); ?>  </li>
								<li><i class="icon-clock"></i><?php echo the_date();  ?></li>
								<!--<li><i class="icon-comment"></i> تعليقات (3)</li>-->
							</ul>

							<div id="share-bottons">
								<div class="fb-like" data-href="http://localhost/wordpress-ar/67" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true" data-font="tahoma"></div>
							</div>
						</div>
					</div>
					<div id="article-content">
						<?php  the_content();
                                                        $without[$k+1]=$post->ID;
                                                        $cat = get_the_category($post->ID); $cat= $cat[0]->term_id;?>
                                        
					</div>
                                        <?php
                                            endwhile;endif;
                                        ?> 
					<div id="comment-box">
						<div id="read-more">
							<div class="title"><i class="icon-th-list-1"></i> أخبار ذات صلة</div>
							<ul>
								<?php
                                                                    $sugg_query=new WP_Query(array('showposts'=>2 , 'cat'=>$cat, 'post__not_in'=>$without));
                                                                    while($sugg_query->have_posts()):
                                                                    $sugg_query->the_post();
                                                                    ?>
                                                                <li>
								    <a href="#">
										
                                                                                <a href="<?php $link=get_permalink($post->ID); echo $link;?>">
                                                                                    <img src="<?php $img=get_post_meta($post->ID,'image',true);if ($img) echo resize($img,array("w"=>"250","h"=>"150"));?>">
                                                                                </a>
										<div class="caption">
                                                                                    <a href="<?php echo $link; ?>"> 
											<h3><?php the_title(); ?></h3>
                                                                                    </a>
										</div>
								    </a>
								</li>
                                                                <?php endwhile; ?>

                                                                
                                                        </ul>
						</div>
						<div id="fb-comment"></div>
						<div id="next-post"></div>
					</div>
				</div>
			
                        
                        </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>