prices = {
	"5" : {
		"basic":{
			"month":229,
			"year":2290/12
		},
		"professional":{
			"month":349,
			"year":3490/12
		},
		"enterprise":{
			"month":979,
			"year":9790/12
		},
	},
	"10" : {
		"basic":{
			"month":275,
			"year":2750/12
		},
		"professional":{
			"month":389,
			"year":3890/12
		},
		"enterprise":{
			"month":1159,
			"year":11590/12
		},
	},
	"25" : {
		"basic":{
			"month":349,
			"year":3490/12
		},
		"professional":{
			"month":518,
			"year":5180/12
		},
		"enterprise":{
			"month":1239,
			"year":12390/12
		},
	},
	"50" : {
		"basic":{
			"month":525,
			"year":5250/12
		},
		"professional":{
			"month":660,
			"year":6600/12
		},
		"enterprise":{
			"month":1509,
			"year":15090/12
		},
	},
	"75" : {
		"basic":{
			"month":755,
			"year":7550/12
		},
		"professional":{
			"month":970,
			"year":9700/12
		},
		"enterprise":{
			"month":1769,
			"year":17690/12
		},
	},
	"100" : {
		"basic":{
			"month":950,
			"year":9500/12
		},
		"professional":{
			"month":1199,
			"year":11990/12
		},
		"enterprise":{
			"month":1969,
			"year":19690/12
		},
	},
	"125" : {
		"basic":{
			"month":1120,
			"year":11200/12
		},
		"professional":{
			"month":1319,
			"year":13190/12
		},
		"enterprise":{
			"month":2149,
			"year":21490/12
		},
	},
	"150" : {
		"basic":{
			"month":1350,
			"year":13500/12
		},
		"professional":{
			"month":1519,
			"year":15190/12
		},
		"enterprise":{
			"month":2549,
			"year":25490/12
		},

	},
	"200" : {
		"basic":{
			"month":1729,
			"year":17290/12
		},
		"professional":{
			"month":1929,
			"year":19290/12
		},
		"enterprise":{
			"month":2999,
			"year":29990/12
		},
	}
}


numberOfContacts = "5";
paymentPeriod = "month"
plans = [
	"basic",
	"professional",
	"enterprise"
];

function changeNumberOfContacts(e) {
	for (key in prices) {
		document.getElementById("contact"+key+"button").classList.remove("active");
	}
	e.target.classList.add("active");
	numberOfContacts = e.target.getAttribute("data-value");
	changePrice();
}

function changePaymentPeriod(e) {
	if (e.target.getAttribute("data-value")) {
		document.getElementById("paymentPeriodmonthButton").classList.remove("active");
		document.getElementById("paymentPeriodyearButton").classList.remove("active");
		e.target.parentNode.classList.add("active");

		paymentPeriod = e.target.getAttribute("data-value");

		for(j of document.querySelectorAll(".monthEquivalent")){
			j.style.display = paymentPeriod == "month" ? "none" : "block";
		}

		changePrice();
	}
}

function changePrice() {
	for (plan of plans) {
		document.getElementById("planPrice-"+plan).innerHTML = Math.ceil(prices[numberOfContacts][plan][paymentPeriod]);
		document.getElementById('equivalentPrice-month-'+plan).innerHTML = prices[numberOfContacts][plan][paymentPeriod] * 12
	}

}

function arrowFoward() {
	if(document.querySelector('.w-tab-link.w--current').nextElementSibling.classList && document.querySelector('.w-tab-link.w--current').nextElementSibling.classList.contains('tab-link')) {
		document.querySelector('.w-tab-link.w--current').nextElementSibling.click()
	}
}

function arrowBackwards() {
	if(document.querySelector('.w-tab-link.w--current').previousElementSibling.classList && document.querySelector('.w-tab-link.w--current').previousElementSibling.classList.contains('tab-link')) {
		document.querySelector('.w-tab-link.w--current').previousElementSibling.click()
	}
}

function changeLanguage(lng) {
	var url =  window.location.toString().replace(/\/en\/|\/es\//, '/');
	window.location = url.replace(/(\/[\w.-]+?)$/, (lng ? "/"+lng : '')+"$1");
}