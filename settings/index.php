<?php
$title = "Settings";

include $_SERVER["DOCUMENT_ROOT"]."/framework/template/header.php";

if ($_POST['twilio']) {
    foreach ($_POST['twilio'] as $code => $value) {
        $_SESSION['twilio'][$code] = $value;
    }

    $message = 'All changes have been successfully saved';
}
?>
<form method="post" action="">
    <table class="info-table" id="settings">
        <tr>
            <td>Choose your language please</td>
            <td><select name="language"><option value="en">English</option><option value="ru">Russian</option></select></td>
        </tr>
        <tr class="row row-title">
            <td colspan="10">Twilio Settings</td>
        </tr>
        <tr>
            <td>Account sid</td>
            <td><input name="twilio[account_sid]" value="<?=$_SESSION['twilio']['account_sid']?>"></td>
        </tr>
        <tr>
            <td>Auth token</td>
            <td><input name="twilio[auth_token]" value="<?=$_SESSION['twilio']['auth_token']?>"></td>
        </tr>
        <tr>
            <td>Twilio number</td>
            <td><input name="twilio[twilio_number]" value="<?=$_SESSION['twilio']['twilio_number']?>"></td>
        </tr>
        <tr>
            <td>Admin number</td>
            <td><input name="twilio[admin_number]" value="<?=$_SESSION['twilio']['admin_number']?>"></td>
        </tr>
        <tr>
            <td>User number</td>
            <td><input name="twilio[user_number]" value="<?=$_SESSION['twilio']['user_number']?>"></td>
        </tr>
    </table>
    <button type="submit">Save</button>
    <div class="result-message <?=$message ? '' : 'hidden'?>">
        <?=$message?>
    </div>
</form>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/framework/template/footer.php";
?>