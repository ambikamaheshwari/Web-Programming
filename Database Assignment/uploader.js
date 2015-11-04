(function() { 
	var uploader_title = document.getElementById("uploader_title");
	var uploader_description = document.getElementById("uploader_description");
	var error_section = document.getElementById("uploader_error");

	validated_search_form.onsubmit = function() {
		// by default, remove the error
		error_section.innerHTML = null;

		// check if we dont have a value
		if (!(uploader_title.value && uploader_title.value !== "") ){

			error_section.innerHTML = "You need to provide a title!";
			return false;
		}

		if (!(uploader_description.value && uploader_description.value !== ""))
		{
			error_section.innerHTML = "You need to provide a description!";
			return false;
		}
	    
		

		// this will submit form from submitting
		return truel
	};

}());