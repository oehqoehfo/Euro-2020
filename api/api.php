<?php 
    if(file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
        require_once dirname(__DIR__) . '/vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
    }
    $apiKey=$_ENV['API_KEY'];
    function callAPI($endpointType){
        global $apiKey;
        if($endpointType==='standings')
            $curl = curl_init('https://api.statorium.com/api/v1/'.$endpointType.'/40?apikey='.$apiKey);
        else
            $curl =curl_init('https://api.statorium.com/api/v1/'.$endpointType.'/?season_id=40&apikey='.$apiKey);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 3);
        $output = curl_exec($curl);
        curl_close($curl);
        $outputObject = json_decode($output);
        return $outputObject;
    }
?>