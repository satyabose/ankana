<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="validations.js"></script>
<script language="javascript" type="text/javascript">
function valid(contact)
{
	if(document.contact.fname.value=="")
  	{
  	alert("Please Enter Your First Name");
  	document.contact.fname.focus();
  	return false;
  	}
	
	if(GenValidation(document.contact.email,'Email Address','','')==0)
  	return false;
  	if(EmailValidation(document.contact.email)==0)
  	return false;
	
	if(document.contact.phone.value=="")
  	{
  	alert("Please Enter Your Phone number");
  	document.contact.phone.focus();
  	return false;
  	}
	
	//Captcha image generation start
	// var security_code=document.getElementById('security_code').value;
	// if(security_code=="")
	// {
	// alert("Enter the code as shown");
	// document.getElementById('security_code').focus();
	// return false;
	// }
	// //alert(document.frm.actualcode.value);return false;
	// else
	// {
	
	// if(document.contact.pin_value.value!=document.contact.security_code.value)
	// 	{
	// 	alert("Invalid code");
		
	// 		document.getElementById('security_code').focus();
	// 		return false;
	// 	}
 //  }
//	
	
	
}
</script>
</head>

<body>
<div id="container">
  <div id="body-content">
    
    <div class="form-body">
      <form name="contact" action="mail.php" method="post" onsubmit="return valid(this)">
            <table width="388" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="20" align="left" valign="top" class="body_text" >First Name<span class="red-star"> *</span> </td>
                <td width="10" align="center" valign="top">:</td>
                <td align="left" valign="top"><input name="fname" type="text" class="tableform" id="fname" /></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">Last Name</td>
                <td align="center" valign="top">&nbsp;</td>
                <td align="left" valign="top"><input name="lname" type="text" class="tableform" id="lname" /></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">Email <span class="red-star">*</span> </td>
                <td align="center" valign="top">:</td>
                <td align="left" valign="top"><input name="email" type="text" class="tableform" id="email" /></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">Phone <span class="red-star">*</span></td>
                <td align="center" valign="top">&nbsp;</td>
                <td align="left" valign="top"><input name="phone" type="text" class="tableform" id="phone" /></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">Street Address</td>
                <td align="center" valign="top">:</td>
                <td align="left" valign="top"><textarea name="address" rows="3" class="ta" id="address"></textarea></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">City</td>
                <td align="center" valign="top">:</td>
                <td align="left" valign="top"><input name="city" type="text" class="tableform" id="city" /></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">State</td>
                <td align="center" valign="top">:</td>
                <td align="left" valign="top"><input name="state" type="text" class="tableform" id="state" /></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">Zip</td>
                <td align="center" valign="top">:</td>
                <td align="left" valign="top"><input name="zip" type="text" class="tableform" id="zip" /></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" class="body_text">Questions or Comments</td>
                <td align="center" valign="top">:</td>
                <td align="left" valign="top"><textarea name="comments" rows="3" class="ta" id="comments"></textarea></td>
              </tr>
             <!--  <tr>
                <td height="20" align="left" valign="top">Enter the code as shown<span class="red-star">*</span> </td>
                <td align="center" valign="top">:</td>
                <td height="27" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="75" align="left" valign="top"><span >
                        <input id="security_code" name="security_code" type="text" class="text_box" />
                      </span></td>
                      <td align="left"><div class="code">
                          <? 	
							function generatePin($value) 
							{
								return substr($value,4,4);
							}		
							$_SESSION['admin_pin_value']=md5(rand(2,99999999));
							$encodedPin =generatePin($_SESSION['admin_pin_value']);
		  					## create an image not a text for the pin
							$font  = 6;
							$width  = ImageFontWidth($font) * strlen($encodedPin);
							$height = ImageFontHeight($font);

							$im = @imagecreate ($width,$height);
							$background_color = imagecolorallocate ($im, 226, 226, 226); //cell background
							$text_color = imagecolorallocate ($im, 0, 0,0);//text color
							imagestring ($im, $font, 0, 0,  $encodedPin, $text_color);
							imagejpeg($im,"tmp/tmp_pin_".$_SESSION['admin_pin_value'].".jpg");
							echo "<img src=\"tmp/tmp_pin_".$_SESSION['admin_pin_value'].".jpg\" alt=''>";			
							imagedestroy($im);
						?>
                          <input type="hidden" name="pin_value" value="<?=$encodedPin;?>" />
                      </div></td>
                    </tr>
                </table></td>
              </tr> -->
              <tr>
                <td align="left" valign="top"></td>
                <td align="center" valign="top"></td>
                <td align="left" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><input name="Submit" type="submit" class="submit_btn" id="Submit" value="Submit"  title="Submit"/></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </form>
        </div>
    </div>
  </div>

</body>
</html>
