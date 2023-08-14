<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location:../');
	exit();
}
$secretKey  = '6LcU76UnAAAAAFdj00pGQqBOe2USeOJShmt41lM8'; 
if(!isset($_POST['g-recaptcha-response'])&&!empty($_POST['g-recaptcha-response'])){	 // Verify the reCAPTCHA API response 
	 $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
		$responseData = json_decode($verifyResponse);
		if(!$responseData->success){ 
	    $data["error"]="CHECK RECAPTCHA";
	    $data["success"]=false;
	    echo json_encode($data);
	    exit();
}
}
if (isset($_POST['sql-query'])) {
    $sql_query=$_POST['sql-query'];
	$sql_query=trim($sql_query);
$OPENAI_API_KEY="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";
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.openai.com/v1/completions",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => '{
        "model": "text-davinci-003",
        "prompt": "'.$sql_query.'",
        "temperature": 0.3,
        "max_tokens": 100,
        "top_p": 1,
        "frequency_penalty": 0,
        "presence_penalty": 0
}',
	CURLOPT_HTTPHEADER => [
		"Authorization: Bearer $OPENAI_API_KEY",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	$data["error"]=$err;
	$data["success"]=false;
	echo json_encode($data);
	exit();  
} else {
   $response=json_decode($response,true);
   $sql=$response['choices'][0]['text'];
   $data["success"]=true;
   $data["sql"]=$sql;
   echo json_encode($data);
   exit();
}
}
else{
    header('Location:../');
}
//ff