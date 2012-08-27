
<?php get_header();?>

<!--START CONTENT-->

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span4">
		
                <div id="last-news">
                    
		    <ul>
                        
                        
                        <?php
						$j=0;
						$last_news = new WP_Query(array('showposts'=>5,'cat'=>$cat_last));
						$i=0;
						while($last_news->have_posts()):
						$last_news->the_post();
						//$id[$i]=the_post()->ID;
						$tab_last[$i]= $post->ID;
						$without[$j]=$post->ID;
						$j++;
						$i++;
						
					    ?>
                        <li>
                            <div class="thumb">
                                <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
				<img src="<?php  $img=get_post_meta($post->ID, "image", true); if($img)echo resize($img,array("w"=>"75","h"=>"40")); ?>" />
                                </a>
				<span><?php echo time_hour($post->post_date); ?></span>
                            </div>
                            <a href="<?php echo $link; ?>"> <?php  echo get_the_title($post->ID);   ?></a>
                        </li>
			<?php endwhile; ?>
                    
                    </ul>
                </div>
            </div>
            <div class="span8">
                <div id="last-news-thumbs">
					     <?php
						
						//$last_news = new WP_Query('showposts=3 & cat='.$cat_week);
						$last_news = new WP_Query(array('showposts'=>3 , 'cat'=>$cat_week, 'post__not_in'=>$without));
						$i=0;
						while($last_news->have_posts()):
						$last_news->the_post();
						//$id[$i]=the_post()->ID;
						$tab_week[$i]= $post->ID;
						$without[$j]=$post->ID;
						$j++;
						$i++;
						endwhile;
					    ?>
                    <div class="row">
                        <div id="small-thumb">
                            <div id="thumb">
                                <a href="<?php $link=get_permalink($tab_week[1]);echo $link; ?>"> 
				 <img src="<?php  $img=get_post_meta($tab_week[1], "image", true); if($img) echo resize($img,array("w"=>"220","h"=>"120")); ?>" />
                                </a>
				<div class="caption">
                                    <span><i class="time"></i><?php post_date_diff_seconds(get_post($tab_week[1])->post_date_gmt); ?></span>
                                    <h4><a href="<?php echo $link;  ?>"><?php  echo get_the_title($tab_week[1]); ?></a> </h4>
                                </div>
                            </div>
                            <div id="thumb">
				<a href="<?php $link=get_permalink($tab_week[2]);echo $link; ?>">
                                <img src="<?php $img=get_post_meta($tab_week[2], "image", true); if($img) echo resize($img,array("w"=>"220","h"=>"120")); ?>" />
                                </a>
				<div class="caption">
                                    <span><i class="time"></i><?php post_date_diff_seconds(get_post($tab_week[2])->post_date); ?> </span>
                                    <h4><a href="<?php echo $link;  ?>"><?php  echo get_the_title($tab_week[2]); ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <div id="big-thumb">
                            <a href="<?php $link=get_permalink($tab_week[0]);echo $link; ?>">
			    <img src="<?php $img=get_post_meta($tab_week[0], "image", true); if($img)echo resize($img,array("w"=>"420","h"=>"270")); ?>" />
                            </a>
			    <div class="caption">
                                <span><i class="time"></i> <?php post_date_diff_seconds(get_post($tab_week[0])->post_date); ?></span>
                            
			        <h2> <a href="<?php echo $link;  ?>"><?php  echo get_the_title($tab_week[0]);   ?></a></h2>
                            <?php wp_reset_query();?>
			    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <!--END FEATURED POSTS-->
        
        <div class="box">
            <div class="row">
                <div class="span8">
                    <div id="split-3">
			 <?php
					     
						$nationale = new WP_Query(array('showposts'=>3,'cat'=>$cat_nationale,'post__not_in'=>$without));
						$i=0;
				while($nationale->have_posts()):
						$nationale->the_post();
						?>
						
						
					    <div id="item">
						<div id="thumb">
						    <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
						     <img src="<?php  $img=get_post_meta($post->ID, "image", true); if($img) echo resize($img,array("w"=>"205","h"=>"150", "crop"=>true )); ?>" />
						     </a>
						     <div class="caption"> <h3><a href="<?php echo $link; ?>"><?php  echo get_the_title($post->ID); ?></a></h4></div>
						</div>
						    <p><?php the_excerpt(); costum_exceprt_more($more);?></p>
					    </div>
						
			<?php $tab_nat[$i]=$post->ID;$i++; endwhile; wp_reset_query();
			for($i=0;$i<count($tab_nat);$i++):$without[$j]=$tab_nat[$i];$j++;endfor;$j++;?>
                    </div>
                </div>
	    
	    
                <div class="span4">
                    <div id="ads-300">
                        <object width="300" height="250" id="adbn_swf_LREC" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param value="http://ads.yimg.com/ev/eu/any/mruk.swf" name="movie"><param value="opaque" name="wmode"><param value="true" name="loop"><param value="high" name="quality"><param value="never" name="allowScriptAccess"><param value="clickTAG=http%3A%2F%2Fuk.ard.yahoo.com%2FSIG%3D161c3do0f%2FM%3D200122706.202040086.203308055.200569498%2FD%3Duksports%2FS%3D96506200%3ALREC%2FY%3DUKIE%2FEXP%3D1292876285%2FL%3DmnMyWE3uv1E_ryIpTOU7lAFFKWdGvU0Pnd0ACxiU%2FB%3DhwTKM03uvJU-%2FJ%3D1292869085745659%2FK%3DFyvxSflg2UeovsFjUofU0g%2FA%3D201118613%2FR%3D0%2Fid%3Dflash%2FSIG%3D13d6h06cf%2F*http%3A%2F%2Fwww.panasonic.co.uk%2Fhtml%2Fen_GB%2FProducts%2FViera%2BFlat%2BScreen%2BTV%2FOverview%2FViera%2BOffer%2F4862865%2Findex.html%23anker_4862867&amp;targetTAG=_blank" name="flashvars"><embed width="300" height="250" allowscriptaccess="never" type="application/x-shockwave-flash" flashvars="clickTAG=http%3A%2F%2Fuk.ard.yahoo.com%2FSIG%3D161c3do0f%2FM%3D200122706.202040086.203308055.200569498%2FD%3Duksports%2FS%3D96506200%3ALREC%2FY%3DUKIE%2FEXP%3D1292876285%2FL%3DmnMyWE3uv1E_ryIpTOU7lAFFKWdGvU0Pnd0ACxiU%2FB%3DhwTKM03uvJU-%2FJ%3D1292869085745659%2FK%3DFyvxSflg2UeovsFjUofU0g%2FA%3D201118613%2FR%3D0%2Fid%3Dflash%2FSIG%3D13d6h06cf%2F*http%3A%2F%2Fwww.panasonic.co.uk%2Fhtml%2Fen_GB%2FProducts%2FViera%2BFlat%2BScreen%2BTV%2FOverview%2FViera%2BOffer%2F4862865%2Findex.html%23anker_4862867&amp;targetTAG=_blank" name="adbn_swf_LREC" quality="high" wmode="opaque" loop="true" src="http://ads.yimg.com/ev/eu/any/mruk.swf"></object>
                    </div>
                </div>
            </div>
        </div>
        
        <!--END EAQUIPE NATIONAL-->
        
        <!--MOHTARIFIN-->
        
        <div class="box">
            <div class="row">
                <div class="span3">
                    <div id="vote">
                        VOTE
                    </div>
                </div>
                
                <div class="span9">
                    <div id="les-vert">
                        <div class="row">
                            <div class="span5">
				<?php 
				$moht=new WP_Query(array('showposts'=>1,'cat'=>$cat_moht,'post__not_in'=>$without ));
				if($moht->have_posts()):
				
				$moht->the_post();
				$tab_moht[0]=$post->ID;
				 ?>
                                <div id="big-thumb">
                                   <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
				   <img src="<?php $img=get_post_meta($post->ID,"image",true);if($img)echo resize($img,array("w"=>"395","h"=>"250", "crop"=>false ));?>"/>
                                   </a>
				    <div class="caption">
                                    <h2><a href="<?php echo $link;  ?>"> <?php the_title(); ?> </a></h2>
                                    </div>
                                </div>
				<?php endif;?>
                            </div>
                            <div class="span4">
                                <div id="news-list">
                                    <ul>
					<?php
					$i=1;
					$moht=new WP_Query(array('showposts'=>3,'cat'=>$cat_moht,'post__not_in'=>$without , 'offset'=>1 ));
					while($moht->have_posts()):
					$moht->the_post();
					$tab_moht[$i]=$post->ID;
					$i++;
					?>
					
                                        <li>
                                            <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
					    <img src="<?php $img=get_post_meta($post->ID,'image',true);if($img)echo resize($img, array("w"=>"100","h"=>"75", "crop"=>true)); ?>"/>
					    </a>
					    <a href="<?php echo $link; ?>">
                                            <h3><?php the_title();  ?></h3>
					    </a>
                                        </li>
                                        <?php endwhile;for($i=0;$i<count($tab_moht);$i++):$without[$j]=$tab_moht[$i];$j++;endfor;$j++;wp_reset_query();?>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--PHOTO-->
        
        <div class="box">
            <div class="row">
                <div class="span6">
                    <div id="photo">
                        <ul>
			    <?php
			    $gallery_query=new WP_query(array("showposts"=>6,"cat"=>$cat_photo));
			    $i=1;
			    while ($gallery_query->have_posts()):
			    $gallery_query->the_post();
			    
			   
			    ?>
                            <li><?php if($i>1 && $i <6):?>
				
				   <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
				    <img src="<?php $img=get_post_meta($post->ID,'image',true);if($img)echo resize($img, array("w"=>"157","h"=>"125", "crop"=>true)); ?>"/>
				    </a>
				    
				    
				   
				   <?php else: ?>
				    <a href="<?php  $link=get_permalink($post->ID);echo $link; ?>">
				    <img src="<?php $img=get_post_meta($post->ID,'image',true);if($img)echo resize($img, array("w"=>"156","h"=>"125", "crop"=>true)); ?>"/>
				    </a>
				    <?php endif;?>
				    
				    
				</li>
				    <?php  $i++;
					    endwhile;
					    wp_reset_query();
				    ?>
                           
                            
			    
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div id="ads-300">
                        <object width="300" height="250" id="adbn_swf_LREC" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param value="http://ads.yimg.com/ev/eu/any/mruk.swf" name="movie"><param value="opaque" name="wmode"><param value="true" name="loop"><param value="high" name="quality"><param value="never" name="allowScriptAccess"><param value="clickTAG=http%3A%2F%2Fuk.ard.yahoo.com%2FSIG%3D161c3do0f%2FM%3D200122706.202040086.203308055.200569498%2FD%3Duksports%2FS%3D96506200%3ALREC%2FY%3DUKIE%2FEXP%3D1292876285%2FL%3DmnMyWE3uv1E_ryIpTOU7lAFFKWdGvU0Pnd0ACxiU%2FB%3DhwTKM03uvJU-%2FJ%3D1292869085745659%2FK%3DFyvxSflg2UeovsFjUofU0g%2FA%3D201118613%2FR%3D0%2Fid%3Dflash%2FSIG%3D13d6h06cf%2F*http%3A%2F%2Fwww.panasonic.co.uk%2Fhtml%2Fen_GB%2FProducts%2FViera%2BFlat%2BScreen%2BTV%2FOverview%2FViera%2BOffer%2F4862865%2Findex.html%23anker_4862867&amp;targetTAG=_blank" name="flashvars"><embed width="300" height="250" allowscriptaccess="never" type="application/x-shockwave-flash" flashvars="clickTAG=http%3A%2F%2Fuk.ard.yahoo.com%2FSIG%3D161c3do0f%2FM%3D200122706.202040086.203308055.200569498%2FD%3Duksports%2FS%3D96506200%3ALREC%2FY%3DUKIE%2FEXP%3D1292876285%2FL%3DmnMyWE3uv1E_ryIpTOU7lAFFKWdGvU0Pnd0ACxiU%2FB%3DhwTKM03uvJU-%2FJ%3D1292869085745659%2FK%3DFyvxSflg2UeovsFjUofU0g%2FA%3D201118613%2FR%3D0%2Fid%3Dflash%2FSIG%3D13d6h06cf%2F*http%3A%2F%2Fwww.panasonic.co.uk%2Fhtml%2Fen_GB%2FProducts%2FViera%2BFlat%2BScreen%2BTV%2FOverview%2FViera%2BOffer%2F4862865%2Findex.html%23anker_4862867&amp;targetTAG=_blank" name="adbn_swf_LREC" quality="high" wmode="opaque" loop="true" src="http://ads.yimg.com/ev/eu/any/mruk.swf"></object>
                    </div>
                </div>
                <div class="span2">
                    ADS
                </div>
            </div>
        </div>
        
        <!--LEAGUE 1-->
        
        <div class="box">
            <div class="row">
                <div class="span8">
                    <div id="split-3">
			
			<?php
					$i=1;
					$awal=new WP_Query(array('showposts'=>3,'cat'=>$cat_awal,'post__not_in'=>$without  ));
					while($awal->have_posts()):
					$awal->the_post();
					$tab_awal[$i]=$post->ID;
					$i++;
			            ?>
                        <div id="item">
			    <div id="thumb">
                                <a href="<?php $link=get_permalink($post->ID);echo $link;?>">
				<img src="<?php $img=get_post_meta($post->ID,'image',true);if($img)echo resize($img,array("w"=>"205","h"=>"145")) ?>"/>
				</a>
                                <div class="caption"><h3><a href="<?php echo $link; ?>"><?php the_title(); ?> </a></h3></div>
                            </div>
			    
                            <p><?php the_excerpt(); costum_exceprt_more($more);?></p>
                        </div>
			<?php endwhile;?>
                    </div>
                </div>
                
                <div class="span4">
                    <div id="videos">
                        
                            
                       
                        
                    
                        
			    
			    
			    <?php $i=1;
			    $video_query=new WP_query(array("showposts"=>4,"cat"=>$cat_video));
			    
			    while ($video_query->have_posts()):
			    $video_query->the_post();
			    
			   
			    ?>
                            <li><?php if($i==1):?>
				    <div class="big-thumb">
				   <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
				    <img src="<?php $video=get_post_meta($post->ID,'video',true);
				    $img=get_video_image($video);if($img)echo $img; ?>" width=300 height=160/>
				    
				    </a>
				     </div>
				    </a>
				    	    			   
				<ul>   
				 <?php else:?>	
				     <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
				    <img src="<?php $video=get_post_meta($post->ID,'video',true);
				    $img=get_video_image($video);if($img)echo $img  ?>" width=100 height=90/>
				    
				    
				    <?php endif;?>	
				    	   
				</li>
				    <?php  $i++;
					    endwhile;
					    wp_reset_query();
				    ?>
			    
                          
				</ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!--END CONTENT-->

