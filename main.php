<?php

$folk = array(
   array("name" => "Anders Andersson", "image" => "a.jpg", "last" => ""),
   array("name" => "Anna Svensson", "image" => "b.jpg", "last" => ""),
   array("name" => "Ida Gunnarsson", "image" => "c.jpg", "last" => ""),
   array("name" => "Lisa Nilsson", "image" => "d.jpg", "last" => ""),
   array("name" => "Ove Bull", "image" => "e.jpg", "last" => ""),
   array("name" => "Kjell Sörenssen", "image" => "f.jpg", "last" => ""),
   array("name" => "Pekka Heino", "image" => "g.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "h.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "i.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "j.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "k.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "l.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "m.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "n.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "o.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "p.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "q.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "r.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "s.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "t.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "u.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "v.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "w.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "x.jpg", "last" => ""),
   array("name" => "Ralph Lauren", "image" => "y.jpg", "last" => ""),
   array("name" => "Bret Hart", "image" => "z.jpg", "last" => "")
);
end($folk);
$k = key($folk);
$folk[$k]['last'] = "end";


$maxPerRow = 4;
$currentRow = 0;
$personList = Array();

foreach($folk as $c => $person) {
   $personList[$currentRow][] = $person;
   if ($c % $maxPerRow == ($maxPerRow -1)) {
      $currentRow++;   
   }

}


// $output[row][cel] = person



?><!doctype html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Attendence</title>
  <link rel="stylesheet" href="css/foundation.css" type="text/css" />
  <link rel="stylesheet" href="css/custom.css" type="text/css" />
  <link rel="stylesheet" href="css/bgbox.css" type="text/css" />
  <script src="js/vendor/modernizr.js"></script>
 </head>
 <body>
  
  <ul class="row panel" id="departments">
   <li class="small-1 column"><a href="#login-box" class="login-open">A</li>
   <li class="small-1 column"><a href="#" data-reveal-id="myModal">B</a></li>
   <li class="small-1 column">C</li>
   <li class="small-1 column">D</li>
   <li class="small-1 column">E</li>
   <li class="small-1 column end">...</li>
  </ul>   

  <div class="row panel">
   <? foreach($personList as $personRow): ?>
    <div class="row">
     <? foreach($personRow as $person): ?>
      <div class="small-3 column <?= $person['last'] ?>">
       <p>
        <a href="#" data-reveal-id="userDetails"><img src="pictures/<?= $person['image'] ?>" alt="<?= $person['name'] ?>" class="avatar" /></a>
        <br />
        <a href="#" data-reveal-id="userDetails"><?= $person['name'] ?></a>
       </p>
      </div>
     <? endforeach; ?>
    </div>
   <? endforeach; ?>
  </div>

<a href="#" >Click Me For A Modal</a>

  <div id="userDetails" class="reveal-modal small" data-reveal>
   <div class="row"></div> 
    <h2>Information</h2>
   <p style="vertical-align: top;">
    <img src="pictures/y.jpg" alt="Gubben Grön" />
    Gubben Grön
   </p>
   <p>
    nils.andersson@thermofisher.com<br />
    031-352 32 00
   </p>
   <a class="close-reveal-modal">&#215;</a>
  </div>

  <div id="login-box" class="login-popup">
   <a href="#" class="close">X</a>
   <fieldset>
    <legend>Lorem Ipsum...</legend>
    <p>
      1is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever since the
      1500s, when an unknown printer took a galley of type and scrambled it to
      make a type specimen book. It has survived not only five centuries, but
      also the leap into electronic typesetting, remaining essentially unchanged.
      It was popularised in the 1960s with the release of Letraset sheets containing
      Lorem Ipsum passages, and more recently with desktop publishing software like
      Aldus PageMaker including versions of Lorem Ipsum.
    </p>
   </fieldset>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
<!--
  <script src="js/vendor/jquery.insetBorderEffect.js"></script>
  <script src="js/vendor/jquery.corner.js"></script>
-->
  <script>
   $(document).foundation();
  </script>
  <script src="js/custom.js"></script>

 </body>
</html>