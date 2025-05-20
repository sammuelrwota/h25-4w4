/**
 * DESTINATION.JS
 *
 * Récupère et affiche les articles d'une catégorie (ex: voyages) via l'API WP.
 * Gère aussi les clics sur les boutons de catégories.
 */

(function () {
	console.log("destination.js");
	let categoryId = 3;
	const domaine = window.location.href;
	parcourir_bouton();

	function parcourir_bouton() {
		const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
		console.log("categorie__ul__li.length = ", categorie__ul__li.length);
		categorie__ul__li.forEach((elm) => {
			elm.addEventListener("mousedown", function () {
				console.log(elm.tagName);
				console.log("elm.dataset.category_id = ", elm.dataset.category_id);
				categoryId = elm.dataset.category_id;
				mon_fetch(categoryId);
			});
		});
	}

	function mon_fetch(categoryId) {
		let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
		fetch(apiUrl)
			.then((response) => response.json())
			.then((data) => {
				const destinationsList = document.querySelector(".destination__list");
				destinationsList.innerHTML = "";
				data.forEach((article) => {
					const articleElement = document.createElement("div");
					articleElement.classList.add("fondu");
					const randomDelay = Math.floor(Math.random() * 300);
					articleElement.style.animationDelay = `${randomDelay}ms`;
					console.log(article.title.rendered);
					articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <label for="rad_${categoryId}">...</label>
                    <p>${article.excerpt.rendered}</p>
                    <a href="${article.link}">Lire plus</a>
                `;
					destinationsList.appendChild(articleElement);
				});
			})
			.catch((error) =>
				console.error("Erreur lors de la récupération des articles:", error)
			);
	}
})();
