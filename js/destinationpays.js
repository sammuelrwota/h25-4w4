/**
 * DESTINATIONPAYS.JS
 *
 * ${methode}
 */

(function () {
	console.log("destination.js");
	let categoryId = 3;
	parcourir_bouton();
	const domaine = document.querySelector("base").href;

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
				data.forEach((article, index) => {
					const articleElement = document.createElement("div");
					articleElement.classList.add("fondu", "element-article");
					const randomDelay = Math.floor(Math.random() * 300);
					articleElement.style.animationDelay = `${randomDelay}ms`;

					articleElement.innerHTML = `
				<div class="accordeon-entete">
				  <h3>${article.title.rendered}</h3>
				  <span class="accordeon-icone">&#11208;</span>
				</div>
				<div class="accordeon-contenu">
				  <p>${article.excerpt.rendered}</p>
				  <a href="${article.link}">Lire plus</a>
				</div>
			  `;

					destinationsList.appendChild(articleElement);
				});

				gererAccordeon();
			})
			.catch((error) =>
				console.error("Erreur lors de la récupération des articles:", error)
			);
	}

	function gererAccordeon() {
		const headers = document.querySelectorAll(".accordeon-entete");

		headers.forEach((header) => {
			header.addEventListener("click", () => {
				const content = header.nextElementSibling;
				const icon = header.querySelector(".accordeon-icone");

				const accordeonOuvert = content.classList.contains("ouvert");

				if (accordeonOuvert) {
					content.classList.remove("ouvert");
					icon.style.transform = "rotate(90deg)";
				} else {
					document
						.querySelectorAll(".accordeon-contenu.ouvert")
						.forEach((ouvertContent) => {
							ouvertContent.classList.remove("ouvert");
							ouvertContent.classList.remove("ouverture");
							ouvertContent.previousElementSibling.querySelector(
								".accordeon-icone"
							).style.transform = "rotate(90deg)";
						});
					content.classList.add("ouvert");
					content.classList.add("ouverture");
					icon.style.transform = "rotate(270deg)";
				}
			});
		});
	}
})();
