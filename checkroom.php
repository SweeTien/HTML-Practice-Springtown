<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>湯城_訂房確認單_B0221149</title>
		<style type="text/css">
			body 			{ background-size: cover; 
								font-family: DFKai-sb;}
			.box 			{ padding-left: 20px; 
								padding-right: 20px; 
								padding-bottom: 10px; 
								background-color: rgba(44,44,44,0.7);}
			nav             { font-weight: bold;
								color: white;
								text-align: center;
								width: 10em; }
			nav ul          { display: none;
								list-style: none;
								margin: 0;
								padding: 0; }		
			nav:hover ul    { display: block; }
			nav ul a li       { border-top: 2px solid maroon;
								background-color: white;
								width: 10em;
								color: block; }
			nav ul li:hover { background-color: navajowhite; }
			a               { text-decoration: none; }
			p				{ color:white;
								font-size:16pt}
			th				{ color:white;
								font-size:20pt; }
		</style>      
	</head>
	<body background="BG1.jpg">
		<h3><table border="0">
			<td><img src="logo.png"></td>
			<td width="500" align="right"><nav class="box">Menu
					<ul>
						<a href="springtown.html"><li>首頁</li></a>
						<a href="room.html"><li>線上訂房</li></a>
						<a href="message.html"><li>客服留言</li></a>
					</ul>
				</nav>
			</td>
		</table></h3>
		 
		<table boder="0">
			<tr>
				<td width="400" align="center" rowspan="2"></td>
				<th style="background-color: rgba(200,30,20,0.7); padding-left:20px; padding-right:20px;" height="60">訂房確認單</th>
			</tr>
			<tr>
				<td style="background-color: rgba(200,30,20,0.7); padding-left:20px; padding-right:20px;"  width="400">
					<?php
						$r=$_GET["roomnum"];
						$p=$_GET["peonum"];
						if($r==101||$r==102||$r==103||$r==201)
						{
						 if($p<2)
							$result=2080;
						 else
							$result=2080+($p-2)*600;
						}else if($r==202)
								{
								 if($p<4)
									$result=4180;
								 else
								    $result=4180+($p-4)*600;
								}
						$a=floor($_GET["phonenum"]/1000000);
						$b=floor($_GET["phonenum"]/1000)-$a*1000;
						$c=$_GET["phonenum"]-$a*1000000-$b*1000;				
					?>
					<p><?php echo $_GET["name"]; ?>，謝謝您的訂購</p>
					<p>系統將為您保留<?php echo $_GET["roomnum"]; ?>號房5日<br>
					   請於保留期間內匯款至1234564642<br>
					   匯款成功會以簡訊通知<?php echo '0'.$a.'-'.$b.'-'.$c; ?></p>
					<p>總金額為NT$<?php echo $result; ?>，訂房日為<?php echo $_GET["date"]; ?></P>
					<p align="right">如有任何疑問請洽(03)987-3885</p>
				</td>
			</tr>
		</table>
	</body>
</html>