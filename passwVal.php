<script>

function pwVal()
{
	var retVar=true;
	var pass = document.forms["test"]["bob"].value;
	var len = pass.length;

	//these variables are used to check to make sure that the correct number of each password component has been used
	var nums = 0;
	var uppers = 0;
	var lowers = 0;

	//this loops through all of the characters and adds one to nums, uppers and lowers if the current character
	//falls into that category
	for(i=0 ;i<len ;i++)
	{
		var temp = pass.charCodeAt(i);
		
		if(temp>96&temp<123)		//finds lower case characters
		{
			lowers ++;
		}
		else if(temp>47&temp<58)	//finds numbers
		{
			nums++;
		}
		else if(temp>64&temp<91)	//finds upper case characters
		{
			uppers++;
		}	
	}
	
	if(len<8)	//checks to make sure that the password is long enough
	{
		alert("Your password must be 8 or more characters");
		retVar = false;
	}
	else if(nums<2|uppers<2|lowers<2) //checks to make sure that there is at least 2 of each
	{
		alert("Your password must include at least 2 numbers, at least 2 Upper Case chars and at least 2 lower case chars");
		retVar = false;
	}
	else if((uppers+lowers+nums)!=len) //checks to make sure that there are only nums, uppers and lowers
	{
		alert("You can only use Upper case characters, Lower case characters and Numbers in your password");
		retVar = false;
	}
	return retVar;
}



</script>

<form name=test action=passwVal.html  onsubmit="return pwVal()"  method=POST>
Passord:<input type=text name=bob id=bob>
<input type=submit>
</form>