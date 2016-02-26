function check()
{
	var good = true;
	var mess = "";
	var u = document.forms["f"]["uname"].value;
	var gs6 = document.forms["f"]["s6"].value;
	var i6s = document.forms["f"]["6s"].value;
	var mg = document.forms["f"]["g"].value;
	var b = document.forms["f"]["s6"].value;

	if(u.length < 7 || u.search("@")<1 || u.charAt(u.length-5)=="@" || u.substring(u.length-4,u.length)!=".com") //check to see if user submitted an email included "@" after a name, included domain after "@", and included ".com" at end
	{
		mess += "Please enter a email for your username(name@domain.com)\n";
		good = false; //tell function to return false and alert message
	}

	if(document.forms["f"]["pname"].value== "")
	{
		mess += "Please enter a password.\n";
		good = false;
	}

	//Check quantities for whole real numbers
	if(gs6 == "" || gs6<0 || gs6%1!= 0)
	{
		mess += "Please enter a positive whole number quantity for Galaxy s6 (enter 0 if you don't want any).\n";
		good = false;
	}
	if(i6s == "" || i6s<0 || i6s%1!= 0)
	{
		mess += "Please enter a positive whole number quantity for iPhone 6s (enter 0 if you don't want any).\n";
		good = false;
	}
	if(mg == "" || mg<0 || mg%1!= 0)
	{
		mess += "Please enter a positive whole number quantity for Moto G (enter 0 if you don't want any).\n";
		good = false;
	}
	if(b == "" || b<0 || b%1!= 0)
	{
		mess += "Please enter a positive whole number quantity for the Brick (enter 0 if you don't want any).\n";
		good = false;
	}
	if(document.forms["f"]["ship"].value== "")
	{
		mess += "Please select a shipping option.\n";
		good = false;
	}
	if(good==false) //Alert message and return false to cancel submit if something wrong
	{
		alert(mess);
		return false;
	}
}
