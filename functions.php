<?php
function is_fan()
{
   $is_fan=false;

  if(isset($_REQUEST['signed_request']))
  {
    $signed_request = $_REQUEST["signed_request"];
    list($encoded_sig, $payload) = explode('.', $signed_request, 2); 
    $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

    if(isset($data['page']))
    {
       $is_fan=$data['page']['liked'];
    }
  }

  return $is_fan;
}
