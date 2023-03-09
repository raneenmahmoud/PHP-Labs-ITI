<html>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
<?php
$users = convert_file_to_array();
        echo '<body style="display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;padding:2%"> <div
        style="             
        width:45%;
        background-color: white;
        border-radius: 10px;" 
        class="row border border-1 shadow-lg text-center p-2" >';
foreach($users as $user){
    $user_details = explode(",",$user);
      echo "<h1 style='text-align:center'> New User </h1> <br/>";
    //   echo str_repeat("*", 20);
       
    foreach($user_details as $value ){
      echo "<h5> $value </h5>";
    }
    echo '<hr>';
     
}
echo "</div> </body>";
?>
</html>
