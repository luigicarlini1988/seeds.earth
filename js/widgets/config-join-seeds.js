var form = document.getElementById('join-seeds-form');
var code_input = form.querySelector('textarea[name="code"]');
var widget = null;

function getCode() {
	var code = "<div id=\"join-seeds\"></div>\n";
	code += "<script src=\"https://seeds-cdn.s3.amazonaws.com/js/joinseeds.js\"></script>\n";
	code += "<script>\n\tnew JoinSeeds(\"join-seeds\", " + JSON.stringify(getConfig()) + " );\n</script>\n";

	return code;
}

function getConfig() {
	var org_id = form.querySelector('input[name="org_id"]').value;
	var campaign_name = form.querySelector('input[name="campaign_name"]').value;
	var button_theme = form.querySelector('input[name="button_theme"]:checked').value;
	var multistep_theme = form.querySelector('input[name="multistep_theme"]:checked').value;

	var obj = new Object();
	obj.org_id = org_id;
	obj.campaign_name = campaign_name;
	obj.button_theme = button_theme;
	obj.multistep_theme = multistep_theme;

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
form.querySelector('input[name="org_id"]').addEventListener('input', formHandler);
form.querySelector('input[name="campaign_name"]').addEventListener('input', formHandler);

formHandler();
