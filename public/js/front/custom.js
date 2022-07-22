
// calendar js

var forEach = function (array, callback, scope) {
	for (var i = 0; i < array.length; i++) {
		callback.call(scope, i, array[i]);
	}
};
window.onload = function(){
	var max = -219.99078369140625;
	forEach(document.querySelectorAll('.progress-event'), function (index, value) {
	percent = value.getAttribute('data-progress');
		value.querySelector('.fill').setAttribute('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
		value.querySelector('.value').innerHTML = percent + '%';
	});
}


   //toggle switch js code start 

   $('.cb-value-main').click(function() {
	var mainParent = $(this).parent('.toggle-btn');
	if($(mainParent).find('input.cb-value-main').is(':checked')) {
	  $(mainParent).addClass('active');
	  $(this).attr("checked", "checked");
	} else {
	  $(mainParent).removeClass('active');
	  $(this).removeAttr('checked');
	}
  
	});


	// Mobile Toggle js

   $(".closebtnmob").on("click",function () {
	$(".sidebar-main").hide();
	 
   });
  
   $("#menu-Toggle").on("click",function () {
	$(".sidebar-main").show();
   });

   //    sidebar menu active
    
//         $('.side-main-list-sec').on('click', 'li', function() {
//     $('.side-main-list-sec li.active').removeClass('active');
//     $(this).addClass('active');
// });


//    