$(document).ready(function(){
    $("#submitcar").click(function(){
    	var searchURL = "search.php?brandname="+$("#carBrandIP").val();
		$.ajax
		({
		    url : searchURL,
		    type: "GET",
		    success: function(data, textStatus, jqXHR)
		    {
		       console.log(data);
		    }
    	});
    });
});