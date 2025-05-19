document.addEventListener("DOMContentLoaded", () => {
	console.log("JS chargé 🎉");
	const container = document.querySelector(".global__singlepost");

	if (container) {
		container.classList.add("fade-in");
		setTimeout(() => {
			container.classList.add("visible");
		}, 100);
	}
});
