<?php

// echo ;

$logFile = realpath(dirname(__FILE__)) . "/rsvpforms.txt";

$time = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$logTXT = "\n== $time [$ip] ==\n\n";

@$f_name = $_POST['f_name'];
@$phone = $_POST['phone'];
@$email = $_POST['email'];
@$continent = $_POST['continent'];
@$message = $_POST['message'];



$logTXT .= <<<TXTC

姓名：
$f_name

电话：
$phone

邮箱：
$email

能否参加：
$continent

备注：
$message


TXTC;


echo '<p class="entry"><b>信息已经发出，非常感谢！</b></p>';

// echo $logTXT;

// var_dump($_POST);




// @$item = $_POST['item'];
// @$name = $_POST['name'];

// echo $item;
// echo $name;

// $logTXT = "\n$item|$name|$ip|$time\n";

file_put_contents($logFile, $logTXT, FILE_APPEND | LOCK_EX);

// $path = 


/*



$data = Yii::app()->request->getParam('data');
// var_dump($data);
foreach ($data as $row)
{
	$name = isset($row['name']) ? $row['name'] : '';
	$msg = isset($row['msg']) ? $row['msg'] : '';
	$logTXT .= "[$name]\n$msg\n\n";
}

file_put_contents($logFile, $logTXT, FILE_APPEND | LOCK_EX);

$timeFile = Yii::app()->params->uploadPath . "/chat/mailtime";

if (file_exists($timeFile)) {
	$diff = (time() - filemtime($timeFile))/60;
} else {
	$diff = Yii::app()->params->chatEmailInterval+1;
}

if ($diff>Yii::app()->params->chatEmailInterval) {
	file_put_contents($timeFile, $time);



	$name='=?UTF-8?B?921abc?=';
	$subject='=?UTF-8?B?'.base64_encode('921abc 有新的客服聊天').'?=';
	$headers="From: 921abc <{memory360@126.com}>\r\n".
		"Reply-To: {memory360@126.com}\r\n".
		"MIME-Version: 1.0\r\n".
		"Content-type: text/plain; charset=UTF-8";

	$mailContent = "有人在921abc网站上找客服机器人聊天呢，请及时登录管理界面查看。\n\n（本邮件最多 ".Yii::app()->params->chatEmailInterval." 分钟发送一次。）\n\n".$time;


	mail(Yii::app()->params['chatEmail'],$subject,$mailContent,$headers);


	echo "mail!";
}
*/