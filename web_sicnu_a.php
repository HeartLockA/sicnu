  <?php
 @error_reporting(E_ALL^E_NOTICE);
  

  require('config.php');
  

 $user = null;

 
 if(!empty($_GET['data'])) {
     try {
         $data = json_decode($_GET['data'], true);
     } catch (Exception $e) {
         $data = [];
     }
     extract($data);
     if($users[$username] && strcmp($users[$username], $password) == 0) {
         $user = $username;
     }

 }
if ($user==$usname) {
	echo "sicnuctf{************}";
}

?>
