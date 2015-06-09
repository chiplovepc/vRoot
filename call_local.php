<?php 		
	function fbcount($url_or_id){
		if( is_int( $url_or_id ) ) $url = 'http://graph.facebook.com/' . $url_or_id;
		else $url = 'http://graph.facebook.com/' .  $url_or_id;
		$json = json_decode( file_get_contents( $url ), false );
		if( isset( $json->likes ) ) return (int) $json->likes;
		elseif( isset( $json->shares ) ) {
			$fc=$json->shares;
			echo "document.write(".$fc.")";
		}else{
			$rs="0";
	    	echo "document.write(".$rs.")";
		}		
	}
	function ggcount($url){
        $contents = file_get_contents( 'https://plusone.google.com/_/+1/fastbutton?url=' .  $url );       
        preg_match( '/window\.__SSR = {c: ([\d]+)/', $contents, $matches );        
        if( isset( $matches[0] ) ){
            echo "document.write(".str_replace( 'window.__SSR = {c: ', '', $matches[0] ).")";            
        }           
       else{
            $rs="0";
            echo "document.write(".$rs.")";
       }
	}
	function twcount($url){
		$url = 'http://cdn.api.twitter.com/1/urls/count.json?url=' . urlencode( $url);
	    $json = json_decode( file_get_contents( $url ), false );
	    if( isset( $json->count ) ){
	    	$twc=$json->count;
	    	echo "document.write(".$twc.")";
	    }else{
	    	$rs="0";
	    	echo "document.write(".$rs.")";
	    }
	}
	// function printtest($url){
	// 	echo "document.write(".$url.")";
	// }
 ?>
 <?php  	

 		if(isset($_GET['fb'])) :
 			$rslink=fbcount($_GET['fb']);
 			echo($rslink);
 		endif;
  ?>