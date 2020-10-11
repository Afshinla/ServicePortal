var requestBody = ""; 

var client=new XMLHttpRequest();
client.open("get","https://aarhuskommunesandbox.service-now.com/api/now/table/incident?sysparm_limit=1");

client.setRequestHeader('Accept','application/json');
client.setRequestHeader('Content-Type','application/json');

//Eg. UserName="admin", Password="admin" for this code sample.
client.setRequestHeader('Authorization', 'Basic '+btoa('afshinla'+':'+'AflaSnow!'));

client.onreadystatechange = function() { 
	if(this.readyState == this.DONE) {
		document.getElementById("response").innerHTML=this.status + this.response; 
	}
}; 
client.send(requestBody);