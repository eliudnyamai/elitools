<?php
if(isset($_POST["email"])) {
    $email=$_POST["email"];
  }
  else{
    header('Location:../contact.php');
    exit();
  }
  if(isset($_POST["subject"])) {
    $subject=$_POST["subject"];
  }
  else{
    header('Location:../contact.php');
    exit();
  }
  if(isset($_POST["name"])) {
    $name=$_POST["name"];
  }
  else{
    header('Location:../contact.php');
    exit();
  }
  if(isset($_POST["message"])) {
    $message=$_POST["message"];
  }
  else{
    header('Location:../contact.php');
    exit();
  }
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://rapidprod-sendgrid-v1.p.rapidapi.com/mail/send",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => '{
  "personalizations": [
    {
      "to": [
        {
          "email": "eliudmitau@gmail.com"
        }
      ],
      "subject": "'.$subject.'"
    }
  ],
  "from": {
    "email": "beneli774@gmail.com"
  },
  "content": [
    {
      "type": "text/html",
      "value": "'.$message.'<br>'.$email.'"
    }
  ]
}',
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: rapidprod-sendgrid-v1.p.rapidapi.com",
		"X-RapidAPI-Key: 0d1fb443d1msh096efa07e2cb1dcp1a79ecjsn358f347b3073",
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
    $data["success"]=true;
    echo json_encode($data);
    exit();
}