<?php
	$to = "hktfb20@gmail.com";	//收件者
	$subject = "test";	//寄件標題
	$msg = "smtp發信測試";	//信件內容
	$headers = "From:pinmanhuang@gmail.com";	//寄件者
	mail("$to", "$subject", "$msg", "$headers");
	if(mail("$to", "$subject", "$msg", "$headers")):
		echo "信件已經發送成功";	//寄信成功會顯示提示訊息
	else:
		echo "信件發送失敗"; 	//寄件失敗顯示錯誤訊息
	endif;
?>