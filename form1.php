<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST['input1'])) or(!isset($_POST['input2']))
        {
        // redirect
        header('Location:form.php?fail=true');
        
        }
        else {
          $input1 = $_POST['input1'];
          $input2 = $_POST['input2']
        }
        echo($input1)
        echo($input2)
    ?>
    

</body>
</html>