
<?php
    function executeCurl($arrOptions) {

        $mixCH = curl_init();

        foreach ($arrOptions as $strCurlOpt => $mixCurlOptValue) {
            curl_setopt($mixCH, $strCurlOpt, $mixCurlOptValue);
        }

        $mixResponse = curl_exec($mixCH);
        curl_close($mixCH);
        return $mixResponse;
    }


    $requestType = 'POST'; // This can be PUT or POST

    // This is a sample array. You can use $arrPostData = $_POST
    $arrPostData = array(
        'center'  => "$center",
        'admin'  => "$admin",
        'code'  => "$code",
        'pay' => "$pay",
        'member' => "$number");

    // You can set your post data
    $postData = http_build_query($arrPostData); // Raw PHP array

    $postData = json_encode($arrPostData); // Only USE this when request JSON data.

    $mixResponse = executeCurl(array(
        CURLOPT_URL => 'http://api.system32.kr:5001/create-block',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPGET => true,
        CURLOPT_VERBOSE => true,
        CURLOPT_AUTOREFERER => true,
        CURLOPT_CUSTOMREQUEST => $requestType,
        CURLOPT_POSTFIELDS  => $postData,
        CURLOPT_HTTPHEADER  => array(
            "X-HTTP-Method-Override: " . $requestType,
            'Content-Type: application/json', // Only USE this when requesting JSON data
        ),

        // If HTTP authentication is required, use the below lines.
        CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
        CURLOPT_USERPWD  => $username. ':' . $password
    ));

    // $mixResponse contains your server response.