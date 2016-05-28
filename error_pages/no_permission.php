<?php
$pageTitle = "No Permission";

include_once("user/UserManager.php");

$loggedIn = UserManager::getInstance()->isUserLoggedIn();

?>
Sorry, you do not have the required permission to perform this operation.
<?php if (! $loggedIn) {?>
You have not logged into the system. If the operation you wanted to perform is meant
for a logged in user, you may wish to login first. <?php echo l("Click here", "?m=user&a=Login")?> to login.
<?php } ?> 