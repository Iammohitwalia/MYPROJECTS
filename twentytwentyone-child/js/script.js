
$(document).ready(function(){
  $(".post_filter li a").click(function(){
  var elmId = $(this).attr("id");
  $(".post-area").hide();
        $("."+elmId).show();
  });
  $(".show_btn").click(function(){
  $(".music_section").hide(); 
    $(this).parent().find(".music_section").show();
  });
  
  $(".show_btn").on("click", function() {
		var audio = $(".song")[0];
		audio.play();
	});
});

        




