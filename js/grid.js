
window.onload = () => {
	const grid = document.querySelector('.grid');
	const masonry = new Masonry(grid, {
		itemSelector: '.grid-item',
		isFitWidth: true,
		transitionDuration: '0.2s',
		gutter: 15,
		fitWidth: true
	});
};
