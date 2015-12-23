var switching = false;
var lastScroll = 0;
var scrollCatch = false;

$(window).load(function() {
	//Logo
	$("#header, #bracket").hover(expandLogo, contractLogo);
	setTimeout(expandLogo, 250);
	setTimeout(contractLogo, 2000);

	//Panel system
	$(".arrow").click(function() {
		nextPage();
	});

	$(window).on("wheel", function(event) {
		var scroll = event.originalEvent.deltaY;
		console.log(scroll + "    " + lastScroll);
    	if(scroll > 10 && scroll < 250 && scroll > lastScroll) {
			nextPage();
		}
		else if(scroll < -10 && scroll > -250 && scroll < lastScroll) {
			prevPage();
		}
		else {
			scrollCatch = false;
		}
		lastScroll = scroll;
	});

	$(".header-items .page-select").click(function() {
		switchPage($(this).data("page"));
	});

	//Projects page
	$(".project .images .img-load").each(function() {
		$(this).css("background", "url(" + $(this).data("src") + ") no-repeat -9999px -9999px");
	});

	$(".project-select .logo-wrapper").click(function() {
		$(".project-select").addClass("active");
		$(".project").removeClass("active").filter(".p" + $(this).parent().data("index")).addClass("active");
		$el = $(".project.active .images");
		$el.addClass("active");
		if(!$el.hasClass("loaded")) {
			$el.addClass("loaded");
			$(".img-load", $el).each(function(i) {
				$el.append("<img src='" + $(this).data("src") + "'" + (i == 0 ? " class='active'" : "") + ">");
			});
			$(".img-load", $el).remove();
		}
	});

	$(".project .close").click(function() {
		$(".project-select").removeClass("active");
		$(".project .images").removeClass("active");
	});

	setInterval(function() {
		var $c = $(".project .images.active");
		if($c.size() != 0) {
			var $active = $("img.active", $c);
			var $next = $active.next();
			if($next.size() == 0) {
				$next = $("img", $c).first();
			}
			$("img", $c).removeClass("active");
			$next.addClass("active");
		}
	}, 4000);

	//Contact page
	$(".confirm").click(function() {
		$(".spinner").addClass("active");
		$("#email-form-failure").removeClass("active");
		$.ajax({
			url: "/ajax/form-submit.php",
			data: $("#email-form").serializeArray(),
			method: "POST",
			success: function(data) {
				if(data != "") {
					$(".spinner").removeClass("active");
					$("#email-form-failure").html(data).addClass("active");
				}
				else {
					$("#email-form").animate({ "opacity" : 0 }, 500, function() {
						$("#email-form-success").addClass("active");
					});
				}
			},
			error: function() {
				$(".spinner").removeClass("active");
				$("#email-form-failure").html("Sorry! There was an error processing your email.<br>Please email me directly at <a href='mailto:jacob@jacoblmacdonald.com'>jacob@jacoblmacdonald.com.</a>").addClass("active");
			}
		});
	});
});

function expandLogo() {
	var currentWidth = $(".logo-expand.last").width();
	$(".logo-expand.last").width("auto");
	var expandedWidth = $(".logo-expand.last").width();
	$(".logo-expand.last").width(currentWidth).stop().animate({ "width" : expandedWidth }, 500, function() {
		var currentWidth = $(".logo-expand.first").width();
		$(".logo-expand.first").width("auto");
		var expandedWidth = $(".logo-expand.first").width();
		$(".logo-expand.first").width(currentWidth).stop().animate({ "width" : expandedWidth }, 500);
	});
}

function contractLogo() {
	$(".logo-expand").stop().animate({ "width" : "20px" });
}

function switchPage(page) {
	if(!switching) {
		//Home page specific
		clearTimeout(t);
		if(page == 0) {
			var t = setTimeout(function() {
				$("#bracket").removeClass("top");
				$(".header-items").removeClass("active");
			}, 250);
			$("#header").removeClass("border");
		}
		else if(page > 0) {
			$("#bracket").addClass("top");
			$(".header-items").addClass("active");
			var b = setTimeout(function() {
				$("#header").addClass("border");
			}, 500);
		}

		//Panels
		var panels = $(".panel").size();
		if(page > panels - 1 || page < 0) { return; }
		$(".page-select-border").removeClass("active");
		$(".page-select[data-page='" + page + "']").siblings(".page-select-border").addClass("active");
		$("body").data("page", page);
		$(".panel").each(function() {
			if($(this).data("page") <= page) {
				$(this).addClass("top");
			}
			else {
				$(this).removeClass("top");
			}
		});
		switching = true;
		setTimeout(function() {
			switching = false;
			console.log("IIIIII: " + i++);
		}, 500);
	}
}
var i = 0;

function nextPage() {
	if(scrollCatch) {
		switchPage($("body").data("page") + 1);
	}
	else {
		scrollCatch = true;
	}
}

function prevPage() {
	if(scrollCatch) {
		switchPage($("body").data("page") - 1);
	}
	else {
		scrollCatch = true;
	}
}