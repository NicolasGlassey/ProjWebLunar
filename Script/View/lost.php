<?php
/**
 * @file    lost.php
 * @brief   File description
 * @author  Create by Nathan.CHAUVEAU
 * @version 02.02.2022
*/
ob_start();
$title = "lost";
?>
<body>
<h1>You are lost</h1>
</body>
</html>
<?php
$content = ob_get_clean();
require "View/Gabarit.php";
