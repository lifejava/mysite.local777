<h2>Навигация по сайту</h2>
<!-- Меню -->
<?php
//drawMenu($leftMen);
if (!drawMenu($leftMenu)) {
    trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR);
    //echo ERR_ON_DRAW_MENU;
}
?>