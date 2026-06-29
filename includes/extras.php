<?php
/**
 * Format French Phone Number
 * 
 * This function cleans and formats French phone numbers into a readable international format.
 * It removes all non-digit characters except the leading plus sign for country codes.
 * The function specifically handles numbers starting with +33 (France) and formats them as +33 X XX XXX XXX.
 * If the number doesn't match the French format, it returns the original phone number unchanged.
 *
 * @param string $phone the raw phone number string to be formatted
 * @return string the formatted phone number in international format
*/
if(!function_exists('formatPhoneNumber')) 
{
    function formatPhoneNumber($phone) 
    {
        $phone = preg_replace('/[^0-9+]/', '', $phone);
        if(strpos($phone, '+33') === 0 && strlen($phone) === 12) 
        {
            $number = substr($phone, 3);
            return '+33 '.substr($number, 0, 1).' '.substr($number, 1, 2).' '.substr($number, 3, 3).' '.substr($number, 6, 3);
        }

        return $phone;
    }
}


/**
 * Verify reCAPTCHA v3 token
 * 
 * Verifies Google reCAPTCHA v3 tokens by sending a POST request to Google's API.
 * Checks if the token is valid and has a sufficient score (>= 0.5).
 * Logs low score attempts for monitoring suspicious activity.
 * Returns true for valid tokens with adequate score, false otherwise.
 *
 * @param string $token The reCAPTCHA token received from the client-side
 * @return bool Returns true if the token is valid and has a score >= 0.5
*/
if(!function_exists('verifyRecaptcha')) 
{
    function verifyRecaptcha($token) 
    {
        global $recaptcha;
        
        $data = array
        (
            'secret' => $recaptcha['private'],
            'response' => $token,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );
        
        $options = array
        (
            'http' => array
            (
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        
        $context = stream_context_create($options);
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        
        if($response === false) 
        {
            return false;
        }
        
        $result = json_decode($response, true);
        if($result['success'] && isset($result['score']) && $result['score'] >= 0.5) 
        {
            return true;
        }
        
        if($result['success'] && isset($result['score']) && $result['score'] < 0.5) 
        {
            error_log("reCAPTCHA low score: " . $result['score'] . " from IP: " . $_SERVER['REMOTE_ADDR']);
        }
        
        return false;
    }
}

?>