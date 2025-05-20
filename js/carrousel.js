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

	const heroContainer = document.querySelector(".hero");

	function appliquerTheme(index) {
		heroContainer.classList.remove(
			"hero--theme-default",
			"hero--theme-violet",
			"hero--theme-marine"
		);
		if (index === 0) {
			heroContainer.classList.add("hero--theme-default");
		} else if (index === 1) {
			heroContainer.classList.add("hero--theme-violet");
		} else if (index === 2) {
			heroContainer.classList.add("hero--theme-marine");
		}
	}

	const conteneur = document.querySelector(".conteneur");

	function appliquerTheme(index) {
		heroContainer.classList.remove(
			"hero--theme-default",
			"hero--theme-violet",
			"hero--theme-marine"
		);
		conteneur.classList.remove(
			"conteneur--theme-default",
			"conteneur--theme-violet",
			"conteneur--theme-marine"
		);

		if (index === 0) {
			heroContainer.classList.add("hero--theme-default");
			conteneur.classList.add("conteneur--theme-default");
		} else if (index === 1) {
			heroContainer.classList.add("hero--theme-violet");
			conteneur.classList.add("conteneur--theme-violet");
		} else if (index === 2) {
			heroContainer.classList.add("hero--theme-marine");
			conteneur.classList.add("conteneur--theme-marine");
		}
	}

	function afficherImage(index) {
		images.forEach((image, i) => image.classList.toggle("active", i === index));
		boutonsRadio.forEach((bouton, i) => (bouton.checked = i === index));
		indexActuel = index;
		appliquerTheme(index);
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
