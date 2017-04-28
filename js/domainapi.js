/**will require jquery to be enqued */
	var domain 	= "whoapi.com";	// domain name you want to check
	var r 		= "taken";	// check availability
	var apikey 	= "demokey";	// your API key

	// API call
	$.getJSON('http://api.whoapi.com/?domain='+domain+'&r='+r+'&apikey='+apikey,
	function(dataObj){
		if(dataObj.status == 0){
			// show the result
			$('#result').html(dataObj.data);
			}else{
			// show error
			$('#result').html(dataObj.status_desc);
		}
	});

/**
 * To be inserted in the results page
 * <div id="result">[please wait]</div>
 */