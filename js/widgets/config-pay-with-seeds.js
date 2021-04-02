var form = document.getElementById('pay-with-seeds-form');
var code_input = form.querySelector('textarea[name="code"]');
var widget = null;

function getCode() {

	var id = "pay-with-seeds-" + form.querySelector('input[name="product_name"]').value.replace(/\W/ig, "");

	var code = "<div id=\"" + id + "\"></div>\n";
	code += "<script src=\"https://seeds-cdn.s3.amazonaws.com/js/paywithseeds.js\"></script>\n";
	code += "<script>\n\tnew PayWithSeeds(\"" + id + "\", " + JSON.stringify(getConfig()) + " );\n</script>\n";

	return code;
}

function getConfig() {

	var account_name = form.querySelector('input[name="org_name"]').value;
	var amount = form.querySelector('input[name="amount"]').value;
	var email = form.querySelector('input[name="email"]').value;
	var product_image = form.querySelector('input[name="product_image"]').value;
	var product_name = form.querySelector('input[name="product_name"]').value;
	var product_description = form.querySelector('input[name="product_description"]').value;
	//var callback = form.querySelector('input[name="callback"]').value;
	var button_theme = form.querySelector('input[name="button_theme"]:checked').value;
	var multistep_theme = form.querySelector('input[name="multistep_theme"]:checked').value;

	var obj = new Object();
	obj.account_name = account_name;
	obj.button_theme = button_theme;
	obj.multistep_theme = multistep_theme;
	obj.amount = amount;
	obj.email = email;
	obj.product_image = product_image;
	obj.product_name = product_name;
	obj.product_description = product_description;
	//obj.callback = callback;

	return obj
}

function formHandler() {
	code_input.value = "";

	//Populate config html
	code_input.value = getCode();

	//Destroy the widget if any
	// if (widget != null)
	// 	widget.destroy();

	//Rebuild it
	//widget = new JoinSeeds("join-seeds", getConfig());
}

//Ad events
form.addEventListener('change', formHandler);
form.querySelector('input[name="org_name"]').addEventListener('input', formHandler);
form.querySelector('input[name="amount"]').addEventListener('input', formHandler);

formHandler();
