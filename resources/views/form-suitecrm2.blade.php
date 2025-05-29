<html lang='en_us'><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body><style type="text/css"><!--
form#WebToLeadForm, form#WebToLeadForm * {margin: 0; padding: 0; border: none; color: #333; font-size: 12px; line-height: 1.6em; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
form#WebToLeadForm {float: left; border: 1px solid #ccc; margin: 10px;}
form#WebToLeadForm h1 {font-size: 32px; font-weight: bold; background-color: rgb(60, 141, 188); color: rgb(247, 247, 247); padding: 10px 20px;}
form#WebToLeadForm h2 {font-size: 24px; font-weight: bold; background-color: rgb(60, 141, 188); color: rgb(247, 247, 247); padding: 10px 20px;}
form#WebToLeadForm h3 {font-size: 12px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm h4 {font-size: 10px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm h5 {font-size: 8px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm h6 {font-size: 6px; font-weight: bold; padding: 10px 20px;}
form#WebToLeadForm p {padding: 10px 20px;}
form#WebToLeadForm input,
form#WebToLeadForm select,
form#WebToLeadForm textarea {border: 1px solid #ccc; display: block; float: left; min-width: 170px; padding: 5px;}
form#WebToLeadForm select {background-color: white;}
form#WebToLeadForm input[type="button"],
form#WebToLeadForm input[type="submit"] {display: inline; float: none; padding: 5px 10px; width: auto; min-width: auto;}
form#WebToLeadForm input[type="checkbox"],
form#WebToLeadForm input[type="radio"] {width: 18px; min-width: auto;}
form#WebToLeadForm div.col {display: block; float: left; width: 330px; padding: 10px 20px;}
form#WebToLeadForm div.clear {display: block; float: none; clear: both; height: 0px; overflow: hidden;}
form#WebToLeadForm div.center {text-align: center;}
form#WebToLeadForm div.buttons {padding: 10px 0; border-top: 1px solid #ccc; background-color: #f7f7f7}
form#WebToLeadForm label {display: block; float: left; width: 160px; font-weight: bold;}
form#WebToLeadForm span.required {color: #FF0000;}
--></style>
<!-- TODO ???

--><form id="WebToLeadForm" action="http://localhost/SuiteCRM/index.php?entryPoint=WebToPersonCapture" method="POST" name="WebToLeadForm">
<h2>Web form to create Leads</h2>
<p>Submitting this form will create Leads</p>
<input type="hidden" name="last_name" id="last_name" value="Provincia#" />
<div class="row">
<div class="col">
<label>Código Provincia: <span class="required">*</span></label>
<input name="codigo_provincia_c" id="codigo_provincia_c" type="text" required />
</div>
<div class="col"></div>
<div class="clear"></div>
</div>

<div class="row">
<div class="col">
<label>Nombre Provincia: <span class="required">*</span></label>
<input name="nombre_provi_c" id="nombre_provi_c" type="text" required />
</div>
<div class="col"></div>
<div class="clear"></div>
</div>
<div class="row center buttons"><input class="button" name="Submit" type="submit" value="Submit"  />
<div class="clear"> </div>
</div>
<input name="campaign_id" id="campaign_id" type="hidden" value="b1aba901-b77a-847e-ff23-6837c00cb4c1" /> <input name="assigned_user_id" id="assigned_user_id" type="hidden" value="1" /> <input name="moduleDir" id="moduleDir" type="hidden" value="Leads" /></form>
<p>
// <![CDATA[
    function submit_form() {
        if (typeof(validateCaptchaAndSubmit) != 'undefined') {
            validateCaptchaAndSubmit();
        } else {
            check_webtolead_fields();
            //document.WebToLeadForm.submit();
        }
    }

    function check_webtolead_fields() {
        if (document.getElementById('bool_id') != null) {
            var reqs = document.getElementById('bool_id').value;
            bools = reqs.substring(0, reqs.lastIndexOf(';'));
            var bool_fields = new Array();
            var bool_fields = bools.split(';');
            nbr_fields = bool_fields.length;
            for (var i = 0; i < nbr_fields; i++) {
                if (document.getElementById(bool_fields[i]).value == 'on') {
                    document.getElementById(bool_fields[i]).value = 1;
                } else {
                    document.getElementById(bool_fields[i]).value = 0;
                }
            }
        }
    }
// ]]>
</p></body></html>