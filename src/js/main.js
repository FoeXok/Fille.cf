$(document).ready(function() {
var url_string = document.location.href
var url = new URL(url_string);
var forw = url.searchParams.get("forwarders");
if(typeof(forw) == "string"){
	$('#text').remove()

}
console.log($('#fileToUpload').style = "background-color: red")
})
