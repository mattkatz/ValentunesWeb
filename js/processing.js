//See http://www.nickriggs.com/posts/simple-ajax-polling-plugin-for-jquery/

$.ajaxPollSettings.pollingType = "timed";
$.ajaxPollSettings.interval = 250;
$.ajaxPollSettings.maxInterval = 5000;
$.ajaxPollSettings.durationUntilMaxInterval = 6000;

$(document).ready(
  function(){
    $.ajaxPoll({
	    url: url,
	    type: "POST",
	    data: {ticket: ticket },
	    dataType: "json",
	    success: function(data) {
	        $('#content').html(data.result);
	    }
	});
);


successCondition: function(result) {
    if (result != null) {
        try {
            return eval(result)["complete"];
        }
        catch (ex) {
            return false;
        }
     }	 
    return false;
}