$urls = array(
    'http://zrdsj.cc/2016/08/19/003/',
    'http://zrdsj.cc/about/',
    'http://zrdsj.cc/categories/',
);
$api = 'http://data.zz.baidu.com/urls?site=zrdsj.cc&token=wllaL5drz4dAnhc5';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;