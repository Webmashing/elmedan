<?php
include('resizer.php');
$cat_nationale=985;
$cat_week=984;
$cat_last=983;
$cat_moht=993;
$cat_awal=987;
$cat_photo=991;

function custom_excerpt_length( $length ) {
	return 18;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');

function costum_exceprt_more($more){
    global $post;
    //$lien = "<a href='".get_permalink($post->ID)."'>read more..</a>";
    $lien="<a href=".get_permalink($post->ID)." class='readmore'><i class='arrow'></i>التفاصيل</a>";
    return $lien;
}
add_filter('excerpt_more', 'costum_exceprt_more');

function post_date_diff_seconds($co){
$string= (string)$co;


 $wa9t=  explode(' ',$string);
 $p_date=explode('-',$wa9t[0]);
 $p_time=explode(':',$wa9t[1]);
  
  $date=date("Y-m-d H:i:s");
  $date=(string)$date;
  $today =explode(' ',$date);
  $today_date=explode('-',$today[0]);
  $today_time=explode(':',$today[1]);
  
  
  $y=(int)$today_date[0] - (int)$p_date[0];
  $m=$today_date[1]-$p_date[1];
  
  echo "";
  
  $day=$today_date[2];
  $p_day=$p_date[2];
  $d=$today_date[2]-$p_date[2];
  if($day<$p_day)
  $d=$today_date[2]+30-$p_date[2];
  
  $hours=$today_time[0]-$p_time[0];
  $minutes=$today_time[1]-$p_time[1];
  
  if($minutes<0)
  $minutes=$today_time[1]+60-$p_time[1];
  
  $seconds=$today_time[2]-$p_time[2];
  if($seconds<0)
  $seconds=$today_time[2]+60-$p_time[2];
  

 
 /***********************************/
  if($y>0){
      if($y==1)echo "العام الماضي ";
      else  echo " قبل".$y."سنوات ";
  }
  else{
      if($m>0) {
      if($m ==1 ){//since a month or around
      if ($day>=$p_day)echo "قبل شهر";//
      
      else{//the past month and the current day is in the first days of the month
            if($d==1)echo "البارحة";
	    elseif($d==2)echo"قبل يومين";//in 1st day of month ( february not considerated in this pgm)
            elseif($d<7) echo " قبل".$d."أيام ";//less than a month
                 
                  
                        else { $week=(int)($d/7);
                              if($week==1)echo "قبل أسبوع";
                              else echo " قبل".$week."أسابيع ";      
                              
                        }
                        
                  
            }
           
      }
      elseif($m==2)echo " منذ".$m."شهرين ";
	 else echo " منذ".$m."أشهر ";//different month
      }
      elseif($m==0){//same month and different day
            if($d==0) {// same day
                  
                  if($hours==0){
                        if($minutes==0){
                              if($seconds==1)echo "قبل ثانية";
                              else echo " قبل".$seconds."ثواني ";
                              
                        }
                        elseif($minutes==1){
                              if($today_time[2]>=$p_time[2])
                               echo "قبل دقيقة";
                              elseif($seconds==1)echo "قبل ثانية";
                              else echo " قبل".$seconds."ثواني ";
                        }
                              
                        elseif($minutes==2)echo "قبل دقيقتين";
			else echo " قبل".$minutes."دقائق ";
                        
                  }
                  elseif($hours==1)
                        {     if($today_time[1]>=$p_time[1]){
                              echo "قبل ساعة";
                              }
                              elseif($minutes==1){echo "قبل دقيقة";}
                               elseif($minutes==2)echo "قبل دقيقتين";
				else echo " قبل".$minutes."دقائق ";
                        }
                       elseif($hours==2)echo "قبل ساعتين";
                        else echo  " قبل".$hours."ساعات ";
                        
                  
            }
            elseif($d==1)echo "البارحة";
		elseif($d==2)echo"قبل يومين";//in 1st day of month ( february not considerated in this pgm)
            elseif($d<7) echo " قبل".$d."أيام ";
            
                  
                  
                       else { $week=(int)($d/7);
                              if($week==1)echo "قبل أسبوع";
                              else echo "قبل ".$week." أسابيع";      
                              
                        }
                  
            }
            
            
            
      }
      
            
            
              

}
function time_hour($t){
    $wa9t=  explode(' ',$t);
 $p_time=explode(':',$wa9t[1]);
 $t=$p_time[0].":".$p_time[1];
 return $t;
}
           
           
           
           
           
            ?>