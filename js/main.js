function update() {
    var idoc = document.getElementById("iframe").contentWindow.document;

    idoc.open();
    idoc.write(document.getElementById("codeText").value);
    idoc.close();
}

function ready() {
    update();
}

function setupCode(param){
    document.getElementById("codeText").value = param;
}

document.getElementById("codeText").addEventListener('change', function(){
    update();
});

function insertTab(o, e)
{		
	var kC = e.keyCode ? e.keyCode : e.charCode ? e.charCode : e.which;
	if (kC == 9 && !e.shiftKey && !e.ctrlKey && !e.altKey)
	{
		var oS = o.scrollTop;
		if (o.setSelectionRange)
		{
			var sS = o.selectionStart;	
			var sE = o.selectionEnd;
			o.value = o.value.substring(0, sS) + "\t" + o.value.substr(sE);
			o.setSelectionRange(sS + 1, sS + 1);
			o.focus();
		}
		else if (o.createTextRange)
		{
			document.selection.createRange().text = "\t";
			e.returnValue = false;
		}
		o.scrollTop = oS;
		if (e.preventDefault)
		{
			e.preventDefault();
		}
		return false;
	}
	return true;
}