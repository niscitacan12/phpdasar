<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- session -->
    <?php
      session_start();
      $_SESSION['loged_in_user_id'] = '1';
      $_SESSION['loged_in_user_name'] = 'username';
    ?>
    
</body>
</html>