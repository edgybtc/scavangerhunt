
<?php
$medal_1=json_decode('"\ud83e\udd47"');
$medal_2=json_decode('"\ud83e\udd48"');
$medal_3=json_decode('"\ud83e\udd49"');
$medal_4=json_decode('"\ud83c\udff5"');
$number_1=json_decode('"\u2780"');
$number_2=json_decode('"\u2781"');
$number_3=json_decode('"\u2782"');
$number_4=json_decode('"\u2783"');
$inviter_icon=json_decode('"\ud83c\udfa9"');
$aff_icon=json_decode('"\ud83d\udd17"');



$sql="SELECT * FROM referral WHERE chat_id=$chat_id";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
//$result2=$conn->query("SELECT * FROM balance WHERE chat_id=$chat_id");
//$row2 = $result2->fetch_assoc();


$t1=intval($row['ref_1_t']);
$t2=intval($row['ref_2_t']);
$t3=intval($row['ref_3_t']);
$t4=intval($row['ref_4_t']);
$a1=intval($row['ref_1_a']);
$a2=intval($row['ref_2_a']);
$a3=intval($row['ref_3_a']);
$a4=intval($row['ref_4_a']);
$btc_1=$row['bal_1_btc']/100000000;
$ltc_1=$row['bal_1_ltc']/100000000;
$eth_1=$row['bal_1_eth']/100000000;
$bcash_1=$row['bal_1_bcash']/100000000;
$btc_2=$row['bal_2_btc']/100000000;
$ltc_2=$row['bal_2_ltc']/100000000;
$eth_2=$row['bal_2_eth']/100000000;
$bcash_2=$row['bal_2_bcash']/100000000;
$btc_3=$row['bal_3_btc']/100000000;
$ltc_3=$row['bal_3_ltc']/100000000;
$eth_3=$row['bal_3_eth']/100000000;
$bcash_3=$row['bal_3_bcash']/100000000;
$btc_4=$row['bal_4_btc']/100000000;
$ltc_4=$row['bal_4_ltc']/100000000;
$eth_4=$row['bal_4_eth']/100000000;
$bcash_4=$row['bal_4_bcash']/100000000;

if($btc_1=='0') $btc_1=""; 
else {$btc_1=number_format($btc_1,8);
      $btc_1=$btc_1." BTC "
	  }
if($btc_2=='0') $btc_2=""; 
else {$btc_2=number_format($btc_2,8);
      $btc_2=$btc_2." BTC "
	  }
if($btc_3=='0') $btc_3=""; 
else {$btc_3=number_format($btc_3,8);
      $btc_3=$btc_3." BTC "
	  }
if($btc_4=='0') $btc_4=""; 
else {$btc_4=number_format($btc_4,8);
      $btc_4=$btc_4." BTC "
	  }
	  

if($ltc_1=='0') $ltc_1=""; 
else {$ltc_1=number_format($ltc_1,8);
      $ltc_1=$ltc_1." LTC "
	  }
if($ltc_2=='0') $ltc_2=""; 
else {$ltc_2=number_format($ltc_2,8);
      $ltc_2=$ltc_2." LTC "
	  }
if($ltc_3=='0') $ltc_3=""; 
else {$ltc_3=number_format($ltc_3,8);
      $ltc_3=$ltc_3." LTC "
	  }
if($ltc_4=='0') $ltc_4=""; 
else {$ltc_4=number_format($ltc_4,8);
      $ltc_4=$ltc_4." LTC "
	  }
	  
	  

if($eth_1=='0') $eth_1=""; 
else {$eth_1=number_format($eth_1,8);
      $eth_1=$eth_1." ETH "
	  }
if($eth_2=='0') $eth_2=""; 
else {$eth_2=number_format($eth_2,8);
      $eth_2=$eth_2." ETH "
	  }
if($eth_3=='0') $eth_3=""; 
else {$eth_3=number_format($eth_3,8);
      $eth_3=$eth_3." ETH "
	  }
if($eth_4=='0') $eth_4=""; 
else {$eth_4=number_format($eth_4,8);
      $eth_4=$eth_4." ETH "
	  }
	  
	  

if($bcash_1=='0') $bcash_1=""; 
else {$bcash_1=number_format($bcash_1,8);
      $bcash_1=$bcash_1." BCH "
	  }
if($bcash_2=='0') $bcash_2=""; 
else {$bcash_2=number_format($bcash_2,8);
      $bcash_2=$bcash_2." BCH "
	  }
if($bcash_3=='0') $bcash_3=""; 
else {$bcash_3=number_format($bcash_3,8);
      $bcash_3=$bcash_3." BCH "
	  }
if($bcash_4=='0') $bcash_4=""; 
else {$bcash_4=number_format($bcash_4,8);
      $bcash_4=$bcash_4." BCH "
	  }


$iid=$conn->query('SELECT id FROM udetails WHERE chat_id=$chat_id');	  
	  $kk = $iid->fetch_assoc();
	  
	  $id=$kk['id'];

$reply_text="Here you can find all the relevant information about your affiliate statistics\n
Level | Members | Active | Amount 
--------------------------------------------------
$number_1 $medal_1 | $t1  | $a1  | $btc_1$eth_1$ltc_1$bcash_1
$number_2 $medal_2 | $t2  | $a2  | $btc_2$eth_2$ltc_2$bcash_2
$number_3 $medal_3 | $t3  | $a3  | $btc_3$eth_3$ltc_3$bcash_3
$number_4 $medal_4   | $t4  | $a4  | $btc_4$eth_4 $ltc_4$bcash_4

You have referred a total of: *$t1+$t2+$t3+$t4 users* and *$a1+$a2+$a3+$a4 active* users.

*Total Earned Commissions: *

You will receive the following commissions from us every time a your affiliate deposit or reinvest🔥
Level 1 🥇 : 10% 
Level 2 🥈 : 5% 
Level 3 🥉 : 2% 
Level 4 🏵 : 1%

*Your affiliate link is :* https://t.me/BitLendoBot?start=$id 

";
$reply_text=urlencode($reply_text);

$depositkeyboard ="{\"keyboard\":[[\"Inviter$inviter_icon\",\"Aff. Link$aff_icon\"],[\"Main Menu$back_icon\"]],\"resize_keyboard\": true}";
$sendto = $url."sendmessage?chat_id=".$chat_id."&text=$reply_text&parse_mode=markdown&reply_markup=$depositkeyboard";
$update=file_get_contents($sendto);
?>
