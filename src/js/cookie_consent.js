window.addEventListener("load", () => {
	window.cookieconsent.initialise({
		"palette": {
		"popup": {
			"background": "#eaf7f7",
			"text": "#5c7291"
		},
		"button": {
			"background": "#56cbdb",
			"text": "#ffffff"
		}
		},
		"position": "bottom",
		"content": {
		"message": "Questo sito utilizza cookies. ",
		"dismiss": "Ok, ricevuto",
		"link": "Info.",
		"href": "/cookie-policy/"
		}
    })
});