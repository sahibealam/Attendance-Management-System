var ptr = 0;
slide();
function slide()
	{
		var i;
		var y = document.getElementsByClassName("a");
		for (i = 0; i < y.length; i++)
		{
			y[i].style.display = "none";  
		}
		ptr++;
		if (ptr > y.length)
		{
			ptr = 1
		}    
		y[ptr-1].style.display = "block";  
		setTimeout(slide, 2000); //Change image every 2 seconds
	}