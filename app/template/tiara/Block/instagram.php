<?php
					
    //JSONデータを取得して出力
    $target_url = "https://graph.facebook.com/v7.0/17841404058306038?fields=name,media{caption,like_count,media_url,permalink,timestamp,username,comments_count}&access_token=EAAsq55b3NGUBAE7siUp2hJxzLLIKWz7BZBKMgD6cHILMXDZCttFZBPFGGx08ychuFkg9veRuulNFXmn1hHP1Qw40rXfSBX4NfZBZBbEhGWpO9R9Io59rbS2N4hueeaBHe4hneUYBE17OvkdnvCsUbwRC2zHhezjK4TPatIFYsMx62pDAGXKrlmmfAhvg2b78ZD";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $target_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $instagram_data = curl_exec($ch);
    curl_close($ch);
    
    echo $instagram_data;
    exit;
?>