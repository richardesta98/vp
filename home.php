<?php
  $username = "Richard Esta";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date ("H");
  $partofday = "lihtsalt aeg";
  if ($hournow < 7){
        $partofday = "uneaeg";
  }
  if ($hournow >= 8 and $hournow < 18){
        $partofday = "akadeemilise aktiivsuse aeg";
  }

  //vaatame semestri kulgu
  $semesterstart = new DateTime ("20202-8-31");
  $semesterend = new DateTime ("2020-12-13");
  //selgitame v2lja nende vahe ehk erinevuse
  $semesterduration = $semesterstart->diff ($semesterend);
  //leiame selle p2evade arvuna
  $semesterdurationdays = $semesterduration->format("%r%a");

  //t2nane p2ev
  $today = new DateTime ("now");

  //if($fromsemesterstartdays < 0) (semester pole peale hakanud)
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?>Tudeng</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>Postimees is an Estonian daily newspaper established on January 1, 1857, by Johann Voldemar Jannsen. In 1891, it became the first daily newspaper in Estonia. Its current editor-in-chief is Mart Raudsaar. The paper has approximately 250 employees. </p>
  <a href="https://en.wikipedia.org/wiki/Postimees">Postimees</a> 
  <image src="postimees.jpg"
  <p>Lehe avamise hetkel oli: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Parajasti on " .$partofday ."."; ?></p>

</body>
</html>