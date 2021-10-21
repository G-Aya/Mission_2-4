<html>
    <head>
    <meta charset = "UTF-8">
    <title>Mission_2-4</title>
    </head>
    <body>
        <form action = "" method = "post">
        <input type = "text" required name = "str" value = "コメント">
        <input type = "submit" name = "submit" value = "送信">
        </form>
        <?php
       
        
      if(!empty($_POST["str"])){
        $str = $_POST["str"];
        
        echo $str."を受け付けました<br>";
        
        $filename = "Mission2-4.txt";
        $fp = fopen($filename,"a");
        fwrite($fp,$str.PHP_EOL);
        fclose($fp);
        
        
        $array = file($filename);
        
            foreach($array as $value){
             echo $value."<br>";
             }
    
      }
    ?>
    </body>
</html>