
<?php get_header();?>

<!--START CONTENT-->

<div id="content">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div id="last-news">
		           <ul> 
                        <?php
                            /**
                             * Display 5 latest post
                             */
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
				                    <img src="<?php  $img=get_post_meta($post->ID, "image", true); if($img)echo resize($img,array("w"=>"75","h"=>"45")); ?>" alt="<?php  echo get_the_title($post->ID); ?>" title="<?php  echo get_the_title($post->ID); ?>" />
                                </a>
				                <span><?php echo time_hour($post->post_date); ?></span>
                            </div>
                            <a href="<?php echo $link; ?>"><?php  echo get_the_title($post->ID); ?></a>
                        </li>
			            <?php endwhile; // end last posts ?>
                    </ul>
                </div>
            </div>

            <div class="span8">
                <div id="last-news-thumbs">
					     <?php
                            /**
                             * Display 3 featured posts
                             */
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
    						endwhile; // end 
					    ?>
                    <div class="row">
                        <div id="small-thumb">
                            <div id="thumb">
                                <a href="<?php $link=get_permalink($tab_week[1]);echo $link; ?>"> 
				                    <img src="<?php  $img=get_post_meta($tab_week[1], "image", true); if($img) echo resize($img,array("w"=>"220","h"=>"120")); ?>" alt="<?php  echo get_the_title($tab_week[1]); ?>" title="<?php  echo get_the_title($tab_week[1]); ?>"/>
                                </a>
				                <div class="caption">
                                    <span><i class="time"></i><?php post_date_diff_seconds(get_post($tab_week[1])->post_date_gmt); ?></span>
                                    <h4><a href="<?php echo $link;  ?>"><?php  echo get_the_title($tab_week[1]); ?></a></h4>
                                </div>
                            </div>
                            <div id="thumb">
				                <a href="<?php $link=get_permalink($tab_week[2]);echo $link; ?>">
                                    <img src="<?php $img=get_post_meta($tab_week[2], "image", true); if($img) echo resize($img,array("w"=>"220","h"=>"120")); ?>" alt="<?php  echo get_the_title($tab_week[2]); ?>" title="<?php  echo get_the_title($tab_week[2]); ?>" />
                                </a>
				                <div class="caption">
                                    <span><i class="time"></i><?php post_date_diff_seconds(get_post($tab_week[2])->post_date); ?> </span>
                                    <h4><a href="<?php echo $link;  ?>"><?php  echo get_the_title($tab_week[2]); ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <div id="big-thumb">
                            <a href="<?php $link=get_permalink($tab_week[0]);echo $link; ?>">
			                     <img src="<?php $img=get_post_meta($tab_week[0], "image", true); if($img)echo resize($img,array("w"=>"420","h"=>"270")); ?>" alt="<?php  echo get_the_title($tab_week[0]); ?>" title="<?php  echo get_the_title($tab_week[0]); ?>" />
                            </a>
			                 <div class="caption">
                                <span><i class="time"></i> <?php post_date_diff_seconds(get_post($tab_week[0])->post_date); ?></span>
                                <h2> <a href="<?php echo $link;  ?>"><?php  echo get_the_title($tab_week[0]); ?></a></h2>
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
                            /**
                             * Display 3 Equipe national posts
                             */
    						$nationale = new WP_Query(array('showposts'=>3,'cat'=>$cat_nationale,'post__not_in'=>$without));
    						$i=0;
    				        while($nationale->have_posts()):
    						$nationale->the_post();
    					?>
						
					    <div id="item">
    						<div id="thumb">
    						    <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
                                    <img src="<?php  $img=get_post_meta($post->ID, "image", true); if($img) echo resize($img,array("w"=>"205","h"=>"140", "crop"=>true )); ?>" title="<?php  echo get_the_title($post->ID); ?>" alt="<?php  echo get_the_title($post->ID); ?>" />
    						     </a>
    						     <div class="caption"><h3><a href="<?php echo $link; ?>"><?php  echo get_the_title($post->ID); ?></a></h3></div>
    						</div>
						    <?php the_excerpt(); costum_exceprt_more($more);?>
                            <div id="time"><span><i class="time"></i>  قبل 2 أسابيع</span></div>
					    </div>
						
			            <?php 
                            $tab_nat[$i]=$post->ID;
                            $i++; 
                            endwhile; 
                            wp_reset_query();
			                for($i=0;$i<count($tab_nat);$i++):
                                $without[$j]=$tab_nat[$i];
                            $j++;
                            endfor;
                            $j++;
                        ?>
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
                            <div id="big-news">
                				<?php 
                                    /**
                                     * Display big mohtarifin post
                                     */
                    				$moht=new WP_Query(array('showposts'=>1,'cat'=>$cat_moht,'post__not_in'=>$without ));
                    				if($moht->have_posts()):
                    				$moht->the_post();
                    				$tab_moht[0]=$post->ID;
                				?>
                                <div id="big-thumb">
                                   <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
				                     <img src="<?php $img=get_post_meta($post->ID,"image",true);if($img)echo resize($img,array("w"=>"340","h"=>"250", "crop"=>false ));?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"/>
                                   </a>
                                    <div class="caption">
                                        <h2><a href="<?php echo $link;  ?>"> <?php the_title(); ?> </a></h2>
                                    </div>
                                </div>
				                <?php endif;?>
                            </div>

                            <div id="news-list">
                                <?php
                                    $i=1;
                                    $moht=new WP_Query(array('showposts'=>4,'cat'=>$cat_moht,'post__not_in'=>$without , 'offset'=>1 ));
                                    while($moht->have_posts()):
                                        $moht->the_post();
                                    $tab_moht[$i]=$post->ID;
                                    $i++;
                                ?>
                                <div class="new-list-item">
                                    <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
                                        <img src="<?php $img=get_post_meta($post->ID,'image',true);if($img)echo resize($img, array("w"=>"182","h"=>"120", "crop"=>true)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                    </a>
                                    <div class="caption">
                                        <h3><a href="<?php $link=get_permalink($post->ID); echo $link; ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                                <?php endwhile;for($i=0;$i<count($tab_moht);$i++):$without[$j]=$tab_moht[$i];$j++;endfor;$j++;wp_reset_query();?>
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
                                /**
                                 * Display 6 galleries
                                 */
                			    $gallery_query=new WP_query(array("showposts"=>6,"cat"=>$cat_photo));
                			    $i=1;
                			    while ($gallery_query->have_posts()):
                			    $gallery_query->the_post();
            			    ?>
                            <li>
                                <?php if($i>1 && $i <6):?>
				                    <a href="<?php $link=get_permalink($post->ID);echo $link; ?>">
				                        <img src="<?php $img=get_post_meta($post->ID,'image',true);if($img)echo resize($img, array("w"=>"157","h"=>"125", "crop"=>true)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
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
                            /**
                             * Display 3 posts of LEAGUE 1
                             */
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
				                    <img src="<?php $img=get_post_meta($post->ID,'image',true);if($img)echo resize($img,array("w"=>"205","h"=>"145")) ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
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
                        <div class="big-thumb">
                            <img src="http://placehold.it/300x160"/>
                        </div>
                        
                        <a href="#next"></a>
                        <ul>
                            <li><img src="http://placehold.it/90x90"/></li>
                            <li><img src="http://placehold.it/90x90"/></li>
                            <li><img src="http://placehold.it/90x90"/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!--END CONTENT-->