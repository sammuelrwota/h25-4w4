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

	const images = document.querySelectorAll(".hero__carrousel");
	const boutonsRadio = document.querySelectorAll(".hero__radio__input");
	const heroContainer = document.querySelector(".hero");
	const conteneur = document.querySelector(".conteneur");
	const animations = document.querySelectorAll(".hero__animation");

	const themesHero = [
		"hero--theme-default",
		"hero--theme-violet",
		"hero--theme-marine",
	];

	const themesConteneur = [
		"conteneur--theme-default",
		"conteneur--theme-violet",
		"conteneur--theme-marine",
	];

	let indexActuel = 0;
	let minuterie;
	let themeHeroActuel = themesHero[0];
	let themeConteneurActuel = themesConteneur[0];

	function appliquerTheme(index) {
		heroContainer.classList.replace(themeHeroActuel, themesHero[index]);
		conteneur.classList.replace(themeConteneurActuel, themesConteneur[index]);
		themeHeroActuel = themesHero[index];
		themeConteneurActuel = themesConteneur[index];
	}

	function afficherImage(index) {
		images.forEach((image, i) => image.classList.toggle("active", i === index));
		boutonsRadio.forEach((bouton, i) => (bouton.checked = i === index));
		indexActuel = index;

		appliquerTheme(index);

		animations.forEach((anim, i) => {
			anim.classList.remove("hero__animation--active");
			if (i === index) {
				void anim.offsetWidth;
				anim.classList.add("hero__animation--active");
			}
		});
	}

	function changerImageAuto() {
		indexActuel = (indexActuel + 1) % images.length;
		afficherImage(indexActuel);
	}

	minuterie = setInterval(changerImageAuto, 5000);

	boutonsRadio.forEach((bouton) => {
		bouton.addEventListener("change", () => {
			const index = parseInt(bouton.dataset.idRadio);
			clearInterval(minuterie);
			afficherImage(index);
			minuterie = setInterval(changerImageAuto, 5000);
		});
	});

	afficherImage(indexActuel);
})();
