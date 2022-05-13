<?php
/**
 * @file    lost.php
 * @brief   File description
 * @author  Create by Nathan.CHAUVEAU and Pierrot
 * @version 13.05.2022
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
