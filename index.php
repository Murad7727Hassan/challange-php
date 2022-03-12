<?php

define('SITE_NAME','murad hassan');


echo '
<!DOCTYPE html>
<html>
<head>
      <title>'.SITE_NAME.'</title>
</head>
<body>
     
<form action="" method="get">
<select name="cars[]" id="cars" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
<input type="text" name="user_name"><br>
<input type="text" name="user_age"><br>
<input type="submit" value="send"><br>
</form>
</body>
</html>
';
if($_REQUEST)
{
    print_r($_REQUEST); 
    echo  "<br>";
    print_r($_REQUEST["user_name"]); 
    echo  "<br>";

    print_r($_REQUEST["user_age"]); 
    // echo  "<br>".$_REQUEST["cars"][0];
    // echo  "<br>".$_REQUEST["cars"][1];
    // echo  "<br>".$_REQUEST["cars"][2];

    print_r($_REQUEST["cars"][0]); 
    echo  "<br>";
    // echo sizeof($_REQUEST["cars"];
    echo "Normal count: " . sizeof($_REQUEST["cars"])."<br>";
     foreach($_REQUEST["cars"] as $key=> $car)
     {
        echo "-----<br>";
        echo "| {$car} |<br>";
        echo "-----<br>";
     }
        for($index =0;$index>=sizeof($_REQUEST["cars"]);$index){
            echo  "<br>".$_REQUEST["cars"][$index];
            echo "Normal count: " . sizeof($_REQUEST["cars"][$index])."<br>";
            echo "---------<br>------";
        }

    

}
// $_COOKIE[];
// $_GET[];
// $_SERVER[];
// $_SESSION[];
// $_FILES[];





   
    $city='sannn';
    $nmae ='<h1>murad $city welcome in your country</h1>';
    print($nmae);

    $result=showDate($nmae,'hassan');
    echo $result;
    function showDate($n,$data='hassan'):bool{
        $users=array('name'=>'murad','age'=>'25');
         echo $users['name'].'<br>';
        print_r($users);
        return '<h1>jkhjhhjshjdhs<h1/>';
    }
    $users=array('name'=>'murad','age'=>'25');
    foreach($users as $key=> $user)
    {
        echo '$key = <br>'.$user.' ||';
    }
    $stu = array('name'=> 'murad','age'=>25,'country'=>'yemen');
    echo '<br><br><br>'.$stu['name'];
    $stu['city']=' mukalla';
    echo $stu['city'];
    echo $stu['name']='hassan';

    print_r($stu);
    echo'<br><br>';
    $users = array(
        array('name'=> 'murad','age'=>25,'country'=>'yemen'),
        array('name'=> 'hassan','age'=>12,'country'=>'oman'),
        array('name'=> 'ali','age'=>11,'country'=>'ajebt'),
        array('name'=> 'murad','age'=>10,'country'=>'usa'),
        array('name'=> 'murad','age'=>15,'country'=>'b'),
        array('name'=> 'murad','age'=>17,'country'=>'o') ,   
    );
    $users_new = array('name'=> 'hassan','age'=>17,'country'=>'o');
    array_push($users,$users_new);

     echo json_encode($users);
     $isFound =false;
     foreach($users as $user)
     {
     if (in_array('murad',$user))
     {
        $isFound=true;;
         continue;
     }
     }
     if($isFound)
     echo '<br><br>found <br>';
     else
     echo '<br><br>not found <br>';
    foreach($users as $user){

        echo $user['name'].'<br><br>';
    }
    $isFoundflie =false;

    $allowedExit =array('pdf','doc','docx','txt','zip','rar');

    // foreach($allowedExit as $search){
    // if(in_array('pdf',$search))
    // {
    //     $isFoundflie=true;
    //     break;
    // }
    // }
    if($isFoundflie)
    echo '<br><br>found  pdf<br>';
    else
    echo '<br><br>not found pdf<br>';
    
        echo $users[0]['name'].'<br>';
        echo $users[0]['age'].'<br>';
        echo $users[0]['country'].'<br>';
        $info =['name','murad','age','country','o'] ;
        foreach($info as $u){

            echo $u;
        }
//function array_uniqe
$input = array('a' => 'green', 'red', 'b' => 'green', 'blue', 'red');
echo '<br> array : ';
print_r($input);
$result = array_unique($input);
echo '<br> array_unique : ';
print_r($result);



echo $_COOKIE[];
echo $_GET[];
echo $_SERVER[];
echo $_SESSION[];
echo $_FILES[];









 ?>

















