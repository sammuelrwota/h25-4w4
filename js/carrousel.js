/**
 * CARROUSEL.JS
 *
 * Gère un carrousel d’images dans la section hero.
 * - Défilement automatique toutes les 5s
 * - Changement manuel via boutons radio
 * - Réinitialise le minuteur après interaction
 *
 * Cibles :
 * - .hero__carrousel : images
 * - .hero__radio__input : boutons radio avec data-id-radio
 */

(function () {
	console.log("carrousel.js");

	let images = document.querySelectorAll(".hero__carrousel");
	let boutonsRadio = document.querySelectorAll(".hero__radio__input");
	let indexActuel = 0;
	let minuterie;

	console.log("hero__radio__input.length", boutonsRadio.length);

	function afficherImage(index) {
		images.forEach((image, i) => image.classList.toggle("active", i === index));
		boutonsRadio.forEach((bouton, i) => (bouton.checked = i === index));
		indexActuel = index;
	}

	function changerImageAuto() {
		indexActuel = (indexActuel + 1) % images.length;
		afficherImage(indexActuel);
	}

	minuterie = setInterval(changerImageAuto, 5000);

	boutonsRadio.forEach((bouton) => {
		bouton.addEventListener("change", () => {
			let index = parseInt(bouton.dataset.idRadio);
			clearInterval(minuterie);
			afficherImage(index);
			minuterie = setInterval(changerImageAuto, 5000);
		});
	});

	afficherImage(indexActuel);
})();
