function create()
{
	//var requestBody = "{\"short_description\":\"Tetser igen\",\"assignment_group\":\"Network\"}"; 
	var incgroup = document.getElementById ("group").value;
	var inctitle = document.getElementById ("title").value;
	
	var requestBody = "{\"short_description\":\"" + inctitle + "\",\"assignment_group\":\"" + incgroup + "\"}"
	var client=new XMLHttpRequest();
	client.open("post","https://dev62205.service-now.com/api/now/table/incident");
	
	client.setRequestHeader('Accept','application/json');
	client.setRequestHeader('Content-Type','application/json');
	
	//Eg. UserName="admin", Password="admin" for this code sample.
	client.setRequestHeader('Authorization', 'Basic '+btoa('admin_afla'+':'+'TanDan00'));
	//client.setRequestHeader('Authorization', Basic {base64_encode(admin_afla:TanDan00)});	
	client.onreadystatechange = function() { 
		if(this.readyState == this.DONE) {
//document.getElementById("response").innerHTML=this.status + this.response;
			var res = this.response;
			parseData = JSON.parse(res);
			alert("Du har oprettet en incident med nummer: " + parseData.result.number);
		}
	}; 
	client.send(requestBody);
}