(function () {
	console.log("destination.js loaded");

	const domaine = window.location.origin + "/";
	const destinationsList = document.querySelector(".destination__list");

	mon_fetch({ method: "search", value: "France" });

	parcourir_bouton();

	function parcourir_bouton() {
		const boutons = document.querySelectorAll(".categorie__ul__li");

		boutons.forEach((elm) => {
			elm.addEventListener("mousedown", function () {
				const method = elm.dataset.method;
				const value =
					method === "category" ? elm.dataset.category_id : elm.dataset.search;
				mon_fetch({ method, value });
			});
		});
	}

	function mon_fetch({ method, value }) {
		let apiUrl = domaine + "wp-json/wp/v2/posts?";
		apiUrl +=
			method === "category"
				? `categories=${value}`
				: `search=${encodeURIComponent(value)}`;

		fetch(apiUrl)
			.then((response) => response.json())
			.then((data) => {
				destinationsList.innerHTML = "";

				if (!data.length) {
					destinationsList.innerHTML = "<p>Aucune destination trouvée.</p>";
					return;
				}

				data.forEach((article) => {
					const articleElement = document.createElement("div");
					articleElement.classList.add("fondu", "element-article");
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
			.catch((error) => {
				console.error("Erreur de récupération:", error);
			});
	}

	function gererAccordeon() {
		document.querySelectorAll(".accordeon-entete").forEach((header) => {
			header.addEventListener("click", () => {
				const content = header.nextElementSibling;
				const icon = header.querySelector(".accordeon-icone");

				const isOpen = content.classList.contains("ouvert");

				document.querySelectorAll(".accordeon-contenu.ouvert").forEach((c) => {
					c.classList.remove("ouvert", "ouverture");
					c.previousElementSibling.querySelector(
						".accordeon-icone"
					).style.transform = "rotate(90deg)";
				});

				if (!isOpen) {
					content.classList.add("ouvert", "ouverture");
					icon.style.transform = "rotate(270deg)";
				}
			});
		});
	}
})();
