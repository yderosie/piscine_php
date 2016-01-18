var t = 0;

if (document.readyState === "complete")
{
	var list_name = null;
	document.cookie="username=toto";
	var x = getCookie("username");


	function delete_func(elem) {
		console.log("enter in delete function");
		var ret = window.confirm("Do you really want to delete this todo ?");
		if (ret == true)
		{

			var list = document.getElementById("ft_list");
			list.removeChild(elem);
			document.cookie = document.getElementById(elem) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT"
		} 

	}
	function my_prompt() {
		console.log("prompt displayed");
		list_name = prompt("Que devez vous faire?", "todo");
		if (list_name != null && list_name != "")
		{
			var list = document.getElementById("ft_list");
			var new_todo = document.createElement('div');
			var text_todo = document.createTextNode(list_name);

			new_todo.setAttribute('onclick', "delete_func(this)");
			//new_todo.setAttribute('id', i);
			new_todo.appendChild(text_todo);
			list.insertBefore(new_todo, ft_list.firstChild);
			document.cookie="todo" + t + "=" + list_name;
			t++;
		}
	} 

	function getCookie(cname) {
    	var name = cname + "=";
    	var ca = document.cookie.split(';');
    	for(var i=0; i<ca.length; i++) {
        	var c = ca[i];
        	while (c.charAt(0)==' ') c = c.substring(1);
        	if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    	}
    	return "";
	}

    function init()
    {
    	var i = 0;
    	var str;
    	while ((str = getCookie("todo" + i)) != "")
    	{
    		//console.log(str);
    		var list = document.getElementById("ft_list");
    		var new_todo = document.createElement('div');
			var text_todo = document.createTextNode(str);

			new_todo.setAttribute('onclick', "delete_func(this)");
			//new_todo.setAttribute('id', i);
			new_todo.appendChild(text_todo);
			list.insertBefore(new_todo, ft_list.firstChild)
    		i++;
    	}
    }
}