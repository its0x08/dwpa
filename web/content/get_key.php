<h1>Get key</h1>
<?
if ($recap_resp->is_valid)
    echo 'Key issued. Make sure you keep it to access the results.';
else {
    require_once('recaptchalib.php');
    echo '
Key is needed to see results for your uploaded captures. You may use one key with multiple uploads.<br/>
If you provide valid e-mail, results will be mailed when avaible (currently disabled). This is not a mandatory field.<br/>
<script type="text/javascript">
    var RecaptchaOptions = {theme: "white"};
</script>
<form class="form" action="" method="post">';
 
    echo recaptcha_get_html($publickey, $recap_resp->error);

    echo'
E-mail: <input class="searchinput" type="text" id="mail" name="mail" value="" />
<br/><br/>
<input class="submitbutton" type="submit" value="Get private key" />
</form>';
}
?>