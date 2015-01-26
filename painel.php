<?php
require_once 'config/function.php';
//conLogin();

include '/page/header.php';

$module = false;
$screen = false;
//carregando o modulo e tela
if (isset($_GET['module'])) {
    $module = $_GET['module'];
}// verifica modulo
if (isset($_GET['screen'])) {
    $screen = $_GET['screen'];
}//verifica tela
?>
<?php include '/page/sidebar.php'; ?>

<?php
if ($module || $screen) {
    loadMODULE($module, $screen);
} else {
    echo '<p>Bem Vindo!</p>';
}
?>
</div><!-- dashboard -->


<?php
include '/page/footer.php';



