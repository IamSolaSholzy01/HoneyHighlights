<?php
session_start();

require "utilities.php";
$util = new Util();

//Clear Session
$_SESSION["member_id"] = "";
session_unset();
session_destroy();

echo ('<script src="../js/ajax.js">
    setAsLoggedOut();
</script>');
echo('<script>
    sessionStorage.clear();
    //console.log("Cleared");
    </script>');
// clear cookies
$util->clearAuthCookie();
?>

<script type="text/javascript" src="https://apis.google.com/js/platform.js" async defer>
    signOut();
</script>
<script>
     window.location.href = "/";
</script>