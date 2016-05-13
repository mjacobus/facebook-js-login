<?php require_once "setup.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Facebook Login Example</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script type="text/javascript">
            var App = {
                facebook: {
                    appId: '<?php echo getenv("FACEBOOK_APP_ID"); ?>'
                }
            };
        </script>
        <script type="text/javascript" src="js.js"></script>
    </head>
    <body>

        <?php if ($userLoggedIn()) : ?>
            <?php include '../pages/user-page.php' ?>

        <?php else : ?>
            <a data-facebook-login href="#">Login with Facebook</a>
        <?php endif ?>
    </body>
</html>
