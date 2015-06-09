function fb_count($url_or_id) {
$url=$url_or_id;
$json = json_decode( file_get_contents($url), false );
if( isset( $json->shares ) ) return (int) $json->shares;
return 0;}
// Endshare facebook
function tw_count($url) {
    $url = 'http://cdn.api.twitter.com/1/urls/count.json?url=' . urlencode( $url );
    $json = json_decode( file_get_contents( $url ), false );
    if( isset( $json->count ) ) return (int) $json->count;
     return 0;
}
// End share twitter
function gg_count( $url ) {
    /* Lấy nội dung page chứa nút +1 */
    $contents = file_get_contents( 'https://plusone.google.com/_/+1/fastbutton?url=' .  $url );
    /* Lấy ra biến đếm sử dụng regex */
    preg_match( '/window\.__SSR = {c: ([\d]+)/', $contents, $matches );
    /* Kiểm tra nếu đúng thì trả về số lượng, nếu không trả về 0 */
    if( isset( $matches[0] ) )
        return (int) str_replace( 'window.__SSR = {c: ', '', $matches[0] );
    return 0;
}