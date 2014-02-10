<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once('service.php');
	
	$obj = new State_data();
	
	$obj->get_data();
	
?>
<aside class="minigreen">
	<h3>Log into Moodle</h3>
	<div class="minigreen_body"><div style="display:block;" class="loginbox" id="div_njit">
    <form name="loginForm" action="https://moodleauth00.njit.edu/cpip_serv/login.aspx?esname=moodle" method="post" id="loginForm">
        <div><input name="__VIEWSTATE" type="hidden" value="/wEPDwUJNDIzOTY1MjU5ZGQdLVY+81xpmN0ATE7y41EHAhVaCA==" id="__VIEWSTATE" /></div>
        <table style="margin-top:5px;margin-bottom:5px;border-spacing:0px;" id="tablenoBorder">
            <tr>
                <td width="100px" style="text-align:left"><strong>UCID:</strong></td>
            </tr>
            <tr>
                <td><input name="txtUCID" type="text" style="width:168px;" id="txtUCID" /></td>
            </tr>
            <tr>
                <td width="100px" style="text-align:left"><strong>Password:</strong></td>
            </tr>
            <tr>
                <td><input name="txtPasswd" type="password" style="width:168px;" id="txtPasswd" /></td>
            </tr>
            <tr>
                <td style="text-align:center"><input name="btnLogin" type="submit" value="Login" id="btnLogin" /></td>
            </tr>
        </table>
    <div><input name="__EVENTVALIDATION" type="hidden" value="/wEWBAK7zbGBDQLr9O+IBwK01ba+BAKC3IeGDOn1GTxupWw9xfJhOXrBSFX6INdC" id="__EVENTVALIDATION" /></div>
    </form>
</div>
<a href="/moodle/non-credit.php" target="_blank">Login without an NJIT UCID</a><br /><br /><a href="http://online.njit.edu/moodle/" target="_blank">Continuing Professional Education</a>
<div><input name="testcookies" type="hidden" value="1" /></div>
</div>
</aside>

	