<?php
   $pathway = getAll();
   /**
    * 
    * Create a function to grab the specific pathway from the img/campaign folder
    * 
    */
   function getAll(){
        $allFiles = array_diff(scandir("views/inlined"), array('..', '.', '.DS_Store'));
        return $allFiles;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pigeon Post</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Send To:</h1>
        <form action="/mail.php" method="post">
            <a href="/views/inlined">View Inlined Email Templates</a>
            <a href="/views/samples">View Sample Emails</a>
            <h3>Select a Template: </h3>
            <select name="template" id="template">
                <?php foreach($pathway as $template){ ?>
                    <option value="<?=$template?>"><?=$template?></option>
                <?php } ?>
            </select>
            
            <h3>Send To:</h3>
            <input type="text" name="firstName" placeholder="First Name">
            <input type="text" name="lastName" placeholder="Last Name">
            <input type="email" name="sendEmailTo" placeholder="Send Email To" required>
            <input type="text" name="subjectLine" placeholder="Subject Line">

            <h3>Send As:</h3>
            <input type="text" name="senderFirstName" placeholder="Sender First Name">
            <input type="text" name="senderLastName" placeholder="Sender Last Name">
            <input type="email" name="senderEmail" placeholder="Sent Email As" required>
            <input type="submit" name="emailSubmission" value="Draft Email">
        </form>
        <a href="content.html">HTML Email</a>
        <a href="mail.php">Send Mail</a>
        <a href="userList.php">See All Users</a>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>