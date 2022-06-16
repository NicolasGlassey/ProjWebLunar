<?php
/**
 * @file    lost.php
 * @brief   Lost File
 * @author  Create by Nathan.CHAUVEAU
 * @version 02.02.2022
*/
ob_start();
$title = "lost";
?>
<body>
<h1>Vous êtes perdu ...</h1>
</body>
</html>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
