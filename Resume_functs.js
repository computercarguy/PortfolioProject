window.onload = Init;

function Init() {
	if (document.getElementById("SaU")) {
		document.getElementById("SaU").className = "menu3";
		document.getElementById("SaU").onclick = function(){GoToPage('SaU',0);};
	}

	if (document.getElementById("Web")) {
		document.getElementById("Web").className = "menu3";
		document.getElementById("Web").onclick = function(){GoToPage('Web',0);};
	}

	if (typeof(version) == "undefined") {
		var Page = document.getElementById("Page").value;

		if (document.getElementById("Online")) {
			document.getElementById("Online").onclick = function(){GoToPage(Page,0);};
		}

		if (document.getElementById("Standalone")) {
			document.getElementById("Standalone").onclick = function(){GoToPage(Page,1);};
		}

		if (document.getElementById("Business")) {
			document.getElementById("Business").onclick = function(){GoToPage(Page,0);};
		}

		if (document.getElementById("Personal")) {
			document.getElementById("Personal").onclick = function(){GoToPage(Page,1);};
		}

		var anchors = document.getElementsByTagName("a");
		
		for (var i = 0; i < anchors.length; i++) {
			if (anchors[i].getAttribute("href") && anchors[i].getAttribute("rel") == "external") {
				anchors[i].target = "_blank";
			}
		}
	}
	else if (version == "javascript") {
		GoToPage("IndexContent", 0);
	}
}

function GoToPage(Page,Num) {
	if (typeof(version) == "undefined") {
		window.location = "index.php?Page=" + Page + "&amp;Num=" + Num;
	}
	else if (version == "javascript") {
		document.getElementById("standAloneOptions").style.display = Num == 1 ? "block" : "none";
		document.getElementById("webOptions").style.display = Num == 2 ? "block" : "none";
		
		var xhr= new XMLHttpRequest();
		xhr.open('GET', Page + '.html', true);
		xhr.onreadystatechange = function() {
			if (this.readyState !== 4) return;
			if (this.status !== 200) return;
			document.getElementById("content").innerHTML = this.responseText;
		};
		xhr.send();
	}
}