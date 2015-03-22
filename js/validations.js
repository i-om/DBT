<script type='text/javascript'>
/*! Regular expressions */
var title = /^[a-zA-Z]+[.]?[ ]?[a-zA-Z1-9+]*$/;
var loginId = /^[a-zA-Z1-9]*$/;
var name=/^[a-zA-Z]+[.]?[ ]?[a-zA-Z]*$/;
var city=/^[a-zA-Z]+[.]?[ ]?[a-zA-Z]*$/;

var mobile=/^[8-9]?[0-9]{10,10}$/;

var pin=/^[0-9]*$/;

var email = /^[a-zA-Z1-9]+[.]?[a-zA-Z1-9]+[@]{1,1}[a-zA-Z1-9]+[.]{1,1}[a-zA-Z1-9]/

/*! Validation function for Title */
function valid_title(input_title)
{
    if(title.test(input_title))
    {
        return true;
    }
    else
    {
        alert('Please Enter a Valid Title.');
        return false;
    }

}

/*! Validation function for User ID */
function valid_user_id(input_title)
{
    if(input_title.length<4)
    {
          return true;
    }
    else
    {
        alert('Minimum 4 characters should be there.');
        return false;
    }

}

/*! Validation function for Name */
function valid_name(input_name)
{
    if(name.test(input_name))
    {
        return true;
    }
    else
    {
        alert('Name should not have characters other than alphabates,\'.\' and space');
        return false;
    }

}
function valid_loginId(input_name)
{
    if(loginId.test(input_name))
    {   
        return true;
    }
    else
    {
        alert('only alphanumeric characters are allowed in login id');
        return false;
    }

}
/*! Validation function for City Name */
function valid_city(input_name)
{
    if(city.test(input_name))
    {
          return true;
    }
    else
    {
        alert('City name should not have characters other than alphabates,\'.\' and space');
        return false;
    }

}

/*! Validation function for Mobile Number */
function valid_mobile(input_mobile)
{
    if(mobile.test(input_mobile))
    {
        return true;
    }
    else
    {
        alert('Please Enter a 10 Digit Mobile Number  and only numbers are allowed e.g.9960269988');
        return false;
    }

}

/*! Validation function for Email */
function valid_email(input_email)
{
    if(email.test(input_email))
    {
        return true;
    }
    else
    {
        alert('Please Enter a Valid Email Address.');
        return false;
    }

}

/*! Validation function for Pincode */
function valid_pin(input_pin)
{
    if(pin.test(input_pin))
        {

            return true;
        }
    else
    {
        alert('Pincode should have numeric characters only');
        return false;
    }

}

/*! Validation function for Phone Number */
function valid_phone(input_phone)
{
    if(pin.test(input_phone))
        {

            return true;
        }
    else
    {
        alert('Phone No. should have numeric characters only');
        return false;
    }

}

/*! Validation function for password */
function valid_password(input_pass)
{
   if(input_pass.length<4)
   {
       alert('Password should have minimum 4 characters');
       return false;
   }
   else
   {
     return true;
   }
}
</script>