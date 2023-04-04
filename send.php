<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="send">
        <?php
        if (isset($_POST['submit'])) {
            echo "Hello <span>{$_POST['name']},</span> your message has been sent successfully<a href=\"index.html\">  Go to home ></a>";
        }
        ?>
    </div>
</body>

</html>