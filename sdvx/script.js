var name;
	var pic_name;
		function test(name)
		{
		
		
		document.getElementById("mainarea").src=name;
		}
		
		function clear_all()
		{
		document.getElementById("TextBox1").innerText ="";
		
		document.getElementById("TextBox2").innerText="";
		}

function detectBrowser(){
	var sAgent = navigator.userAgent.toLowerCase();
	this.isIE = (sAgent.indexOf("msie")!=-1); //IE6.0-7
	this.isFF = (sAgent.indexOf("firefox")!=-1);//firefox
	this.isSa = (sAgent.indexOf("safari")!=-1);//safari
	this.isOp = (sAgent.indexOf("opera")!=-1);//opera
	this.isNN = (sAgent.indexOf("netscape")!=-1);//netscape
	this.isCh = (sAgent.indexOf("chrome")!=-1);//chrome
	this.isMa = this.isIE;//marthon
	this.isOther = (!this.isIE && !this.isFF && !this.isSa && !this.isOp && !this.isNN && !this.isSa);//unknown Browser
}