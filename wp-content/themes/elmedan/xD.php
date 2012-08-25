
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
						$last_news = new WP_Query('showposts=5 & cat='.$cat_last);
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
                                <img src="<?php  $img=get_post_meta($post->ID, "image", true); if($img)echo resize($img,array("w"=>"75","h"=>"40")); ?>" />
                                <span><?php echo time_hour($post->post_date); ?></span>
                            </div>
                            <a href="<?php echo get_permalink($post->ID); ?>"> <?php  echo get_the_title($post->ID);   ?></a>
                        </li>
			<?php endwhile; ?>
                    
                    </ul>
                </div>
            </div>
            <div class="span8">
                <div id="last-news-thumbs">
					     <?php
					     
						$last_news = new WP_Query('showposts=3 & cat='.$cat_week);
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
                                 <img src="<?php  $img=get_post_meta($tab_week[1], "image", true); if($img) echo resize($img,array("w"=>"220","h"=>"120")); ?>" />
                                <div class="caption">
                                    <span><i class="time"></i><?php post_date_diff_seconds(get_post($tab_week[1])->post_date_gmt); ?></span>
                                    <h4><a href="<?php get_permalink($tab_week[1]); ?>"><?php  echo get_the_title($tab_week[1]); ?></a> </h4>
                                </div>
                            </div>
                            <div id="thumb">
                                <img src="<?php $img=get_post_meta($tab_week[2], "image", true); if($img) echo resize($img,array("w"=>"220","h"=>"120")); ?>" />
                                <div class="caption">
                                    <span><i class="time"></i><?php post_date_diff_seconds(get_post($tab_week[2])->post_date); ?> </span>
                                    <h4><a href="<?php get_permalink($tab_week[2]); ?>"><?php  echo get_the_title($tab_week[2]); ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <div id="big-thumb">
                            <img src="<?php $img=get_post_meta($tab[0], "image", true); if($img)echo resize($img,array("w"=>"420","h"=>"270")); ?>" />
                            <div class="caption">
                                <span><i class="time"></i> <?php post_date_diff_seconds(get_post($tab_week[0])->post_date); ?></span>
                            
			        <h2> <a href="<?php echo get_permalink($tab_week[0]); ?>"><?php  echo get_the_title($tab_week[0]);   ?></a></h2>
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
					     
						$nationale = new WP_Query('showposts=3 & cat='.$cat_nationale);
						$i=0;
				while($nationale->have_posts()):
						$nationale->the_post();
						//$id[$i]=the_post()->ID;
						$exist=false;$k=0;
						while($k<=$j&& $exist==false):
						if($without[$k]==$post->ID)$exist=true;
						$k++;
						endwhile;
						if(!$exist):
						$tab_nat[$i]= $post->ID;
						?>
						
						
					    <div id="item">
						<div id="thumb">
						     <img src="<?php  $img=get_post_meta($tab_nat[$i], "image", true); if($img) echo resize($img,array("w"=>"205","h"=>"150")); ?>" />
						     <div class="caption"> <h3><a href="<?php get_permalink($tab_nat[$i]); ?>"><?php  echo get_the_title($tab_nat[$i]); ?></a></h4></div>
						</div>
						    <p>نجاح لم يمضي بعد في الترجي و لفسكي صوفيا قد يخطفه ونجاح لم يمضي بعد في الترجي و لفسك لفسكي  لفسكيي <a href="#" class="readmore"><i class="arrow"></i>التفاصيل</a></p>
					    </div>
						
			<?php $i++;endif; endwhile; wp_reset_query();?>
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
                                <div id="big-thumb">
                                    <img src="http://cache.daylife.com/imageserve/016W7Fn1nS3mR/395x250.jpg?center=0.5,0"/>
                                    <div class="caption">
                                    <h2>نجاح لم يمضي بعد في الترجي و لفسكي صوفيا قد يخطفه ونجاح لم يمضي</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div id="news-list">
                                    <ul>
                                        <li>
                                            <img src="http://placehold.it/100x75"/>
                                            <h3>نجاح لم يمضي بعد في الترجي و لفسكي صوفيا قد يخطفه ونجاح لم يمضي</h3>
                                        </li>
                                        
                                        <li>
                                            <img src="http://placehold.it/100x75"/>
                                            <a href="#">نجاح لم يمضي بعد في الترجي و لفسكي صوفيا قد يخطفه ونجاح لم يمضي</a>
                                        </li>
                                        
                                        <li>
                                            <img src="http://placehold.it/100x75"/>
                                            <a href="#">نجاح لم يمضي بعد في الترجي و لفسكي صوفيا قد يخطفه ونجاح لم يمضي</a>
                                        </li>
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
                            <li><img src="http://placehold.it/156x125"/></li>
                            <li><img src="http://placehold.it/157x125"/></li>
                            <li><img src="http://placehold.it/157x125"/></li>
                            <li><img src="http://placehold.it/157x125"/></li>
                            <li><img src="http://placehold.it/157x125"/></li>
                            <li><img src="http://placehold.it/156x125"/></li>
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
                        <div id="item">
                            <div id="thumb">
                                <img src="http://cache.daylife.com/imageserve/016W7Fn1nS3mR/205x145.jpg?center=0.5,0"/>
                                <div class="caption"><h3>ونجاح لم يمضي بعد في الترجي و لفسكي صوفيا قد يخطفه</h3></div>
                            </div>
                            <p>نجاح لم يمضي بعد في الترجي و لفسكي صوفيا قد يخطفه ونجاح لم يمضي بعد في الترجي و لفسك لفسكي  لفسكيي <a hre="#" class="readmore"><i class="arrow"></i>التفاصيل</a></p>
                        </div>
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

