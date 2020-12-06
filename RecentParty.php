<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>最近のマッチング</title>
    <body>
     <h1>対戦ログ</h1>
     <!--get pokemons name & the images-->
     <?php	       
     $trainerName=htmlspecialchars($_REQUEST['TN'], ENT_QUOTES);

     $pokemon1=htmlspecialchars($_REQUEST['party1'], ENT_QUOTES);
     $img1="icon/".$pokemon1.".gif";

     $pokemon2=htmlspecialchars($_REQUEST['party2'], ENT_QUOTES);
     $img2="icon/".$pokemon2.".gif";

     $pokemon3=htmlspecialchars($_REQUEST['party3'], ENT_QUOTES);
     $img3="icon/".$pokemon3.".gif";

     $pokemon4=htmlspecialchars($_REQUEST['party4'], ENT_QUOTES);
     $img4="icon/".$pokemon4.".gif";

     $pokemon5=htmlspecialchars($_REQUEST['party5'], ENT_QUOTES);
     $img5="icon/".$pokemon5.".gif";

     $pokemon6=htmlspecialchars($_REQUEST['party6'], ENT_QUOTES);
     $img6="icon/".$pokemon6.".gif";

     $memo=htmlspecialchars($_REQUEST['memo'], ENT_QUOTES);

     $fp = fopen('record.csv', 'a+');
     $data = [$trainerName,$pokemon1,$pokemon2,$pokemon3,$pokemon4,$pokemon5,$pokemon6,$memo];
     fputcsv($fp, $data);
     fclose($fp);
    ?>
     
    <table border="1">
    <tr>
	<td> <?php printf("%s",$trainerName);?></td>
	<td width="40"><img src="<?php echo $img1;?>"></td>
	<td width="40"><img src="<?php echo $img2;?>"></td>
 	<td width="40"><img src="<?php echo $img3;?>"></td>
 	<td width="40"><img src="<?php echo $img4;?>"></td>
	<td width="40"><img src="<?php echo $img5;?>"></td>
	<td width="40"><img src="<?php echo $img6;?>"></td>
    <td> <?php printf("%s",$memo);?></td>
    <br>
    </tr>
    <a href="SubmitParty.html">登録フォームに戻る<a>
    <br><br>
    <?php $file = fopen("record.csv", "r") ?>
    <?php if($file){?>

         <?php while ($line = fgets($file)) { ?>
             <?php $img1="icon/".explode(',',$line)[1].".gif";?>
             <?php $img2="icon/".explode(',',$line)[2].".gif";?>
             <?php $img3="icon/".explode(',',$line)[3].".gif";?>
             <?php $img4="icon/".explode(',',$line)[4].".gif";?>
             <?php $img5="icon/".explode(',',$line)[5].".gif";?>
             <?php $img6="icon/".explode(',',$line)[6].".gif";?>
             <table border="0">
             <td> <?php printf("%s",explode(',',$line)[0]);?> </td>
             <td width="40"><img src="<?php echo $img1;?>"></td>
             <td width="40"><img src="<?php echo $img2;?>"></td>
             <td width="40"><img src="<?php echo $img3;?>"></td>
             <td width="40"><img src="<?php echo $img4;?>"></td>
             <td width="40"><img src="<?php echo $img5;?>"></td>
             <td width="40"><img src="<?php echo $img6;?>"></td>
             <td> <?php printf("%s",explode(",",$line)[7]);?> </td>
             </tr>        
         <?php }?>
        <?php fclose($file)?>
     <?php }?>
    </body>
  </head>
</html>
