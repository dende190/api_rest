const fetch = require('node-fetch');

async function callApi(endpoint, options = {}) {
	options.headers = {
		'Content-Type': 'application/json',
		Accept: 'application/json',
	};

	const url = "localhost:8000" + endpoint;
	const response = await fetch(url, options);
	const data = await response.json();

	return data;
}

module.exports = {
	homePage: async (req, res) => {
		// let result = await callApi("/categories")
		fetch('http://192.168.1.8:3333/categories')
		    .then(res => res.json()) // expecting a json response
		    .then(json => console.log(json));

		res.render("home")
	}
}