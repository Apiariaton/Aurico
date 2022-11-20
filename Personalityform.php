<!DOCTYPE html>
<html>

<head>
    

    
    <link rel="stylesheet" href="Personalityform.css">

    <script src="/Personalityform.js"></script>   
   
    <?php $servername="localhost"; $username="root";
    $password=""; $database="personalityq";
    $link = mysqli_connect($servername,$username,$password,$database);
    
    $dothiso = "SELECT * FROM pqs WHERE OCEANA = 'o' ORDER BY ID DESC";
     $resulto = mysqli_query($link,$dothiso);
   $questionso =  mysqli_fetch_all($resulto,MYSQLI_ASSOC);
    
    
    
    $dothisc = "SELECT * FROM pqs WHERE OCEANA = 'c' ORDER BY ID DESC";
    $resultc = mysqli_query($link,$dothisc);
   $questionsc =  mysqli_fetch_all($resultc,MYSQLI_ASSOC);
    foreach ($questionsc as $questionc){print_r($questionc);};
    

    
    $dothise = "SELECT * FROM pqs WHERE OCEANA = 'e' ORDER BY ID DESC";
    $resulte = mysqli_query($link,$dothise);
   $questionse =  mysqli_fetch_all($resulte,MYSQLI_ASSOC);
    foreach ($questionse as $questione){print_r($questione);};
    
    
    $dothisa = "SELECT * FROM pqs WHERE OCEANA = 'a' ORDER BY ID DESC";
    $resulta = mysqli_query($link,$dothisa);
   $questionsa =  mysqli_fetch_all($resulta,MYSQLI_ASSOC);
    foreach ($questionsa as $questiona){print_r($questiona);};
    
    
    
    
    $dothisn= "SELECT * FROM pqs WHERE OCEANA = 'n' ORDER BY ID DESC";
    
    $resultn = mysqli_query($link,$dothisn);
   $questionsn =  mysqli_fetch_all($resultn,MYSQLI_ASSOC);
     $rtc = [")","(","Array","="];
    
    $qn = 1;
    foreach ($questionsn as $questionn){
    echo $questionn["QUESTION"];
    }

    
    $bc = ["(",")","]","=",">","Array"];
   
    $dummy = "H Array = e '(' l l o";
    //$lwa = implode("",$questions); 
    //print_r($lwa);
    $B = "Baatryyt";
    $TBR = ["aa","yy"];
    echo str_replace($TBR,"ee",$B);
    /*/
    
    What I need to do for this personality form have separate question banks - O, C, E, A, N- have dedicated question type holders for these questions
    $oq = array();
    $iq = array();
    $i = 0;
    $removethesechars = array(")","(","Array","=");
    $questions2 = str_replace($removethesechars,"",$questions);
    $result = array();
    while ($i < strlen($questions)){
        if (is_numeric($questions2[$i]){
          array_push($result,$oq) $oq = array();
          $i++; 
            
        }
        array_push($oq,$questions2[$i]);
        //Need to find alternative as strlen returns number of bytes in a string strlen($questions2)){
       
        
    }   
    }
    print_r($questions);
    print_r($questions2);
    print_r($result)/*/ ;?>
    
    
</head>
<body>
<p1 id="Pixelss">Pixels go here</p1>
    
<h1>

    You:
    </h1>
<div id="sideb">
<div id="sideo" class="spec"></div>


    
<form id="myform" action="tester.php" method="post">
<?php $oqs = count($questionso); echo $oqs, "no of questions"; $i = 0; $qis = []; while ($i < $oqs){array_push($qis,$i); $i += 1;}; shuffle($qis);foreach ($qis as $nol){print_r($nol);}?>    
    
    
    <label id="Q1" class="Q" for="q1"><?php
    $rand = rand(0,5); 
    $in = $qis[3];
    print_r($questionso[$in]
    ["QUESTION"]) ;?>
    </label>
    <input class="ro" id="q1" class="q" type="range" name="o1"> 
    
    <label id="Q2" class="Q" for="q2"><?php
    $rand = rand(0,(count($questionsa) - 1));    
    print_r($questionsa[$rand]
    ["QUESTION"]) ;?></label>
    <input onscroll="Howdy()" class="ro" id="q2" type="range" name="a1">  
    
    <label id="Q3" class="Q" for="q3"><?php
    $rand = rand(0,(count($questionsc) - 1));    
    print_r($questionsc[$rand]
    ["QUESTION"]) ;?></label>

    <input class="ro" id="q3" type="range" name="c1"> 
    
    
    <label class="Q" for="q4"><?php
    $rand = rand(0,(count($questionsn) - 1));    
    print_r($questionsn[$rand]
    ["QUESTION"]) ;?> </label>
    <input  class="ro" id="q4" type="range" name = "n1"> 
    
    
    
    <label class="Q" for="q5"><?php
    $rand = rand(0,(count($questionse) - 1));    
    print_r($questionse[$rand]
    ["QUESTION"]) ;?>How likely are you to begin a conversation with a stranger? 0 least likely to 10 most likely </label>
    <input class="ro" id="q5" type="range" name="e1"> 
    
    <label for="q6" class="Q">
        
    </label>
    
    <input class="ro" id="q6"
        type="range" name="o2">
    
    <input class="r" id="sub" type="submit" id = "go">
</form>
</div>    
    


<h1>hey there</h1>   
    <?php 
echo "Hello"; 
echo "I am writing this in php";
?>
    

</body>
</html>
