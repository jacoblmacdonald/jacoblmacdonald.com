// REJECTED BROWSERS:
// IE: < 9 (most things)
// FIREFOX: < 19 (viewport units)
// CHROME: < 26 (calc)
// SAFARI: < 6.2 (calc)
// OPERA: < 15 (viewport units and calc)

// HALF SUPPORTED:
// IE: 9 (transitions)
// CHROME: 26 - 33 (viewport units inside functions)
// OPERA: 15 - 20 (viewport units inside functions)

var unsupported = {
	"Firefox" : 18,
	"Chrome" : 25,
	"Safari" : 6,
	"Opera" : 12.15,
	"MSIE" : 8
}, partial_support = {
	"Chrome" : 33,
	"Opera" : 20,
	"MSIE" : 9
}

$(window).load(function() {
	var browser = detectSupport();
	if(typeof browser == "string") {
		browser = browser.split(" ");
	}
	if(unsupported[browser[0]] >= browser[1]) {
		$("html").addClass("unsupported");
	}
	else if(partial_support[browser[0]] >= browser[1]) {
		$("html").addClass("partial-support");
	}
	$(".partial-support #partial-support").css("display", "block");
	$(".unsupported #unsupported").css("display", "block");
	setTimeout(function() {
		$(".partial-support #partial-support").animate({ "opacity" : 0 }, 1000, function() {
			$(this).remove();
		});
	}, 5000);
});

function detectSupport() {
    var ua= navigator.userAgent, tem, 
    M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
    if(/trident/i.test(M[1])){
        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
        return 'IE '+(tem[1] || '');
    }
    if(M[1]=== 'Chrome'){
        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
    }
    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
    return M;
}