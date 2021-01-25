// Клик по кнопке оценки
const likeBlock = document.querySelector(".recipe-article__feedback-element");
likeBlock.addEventListener("click", () => {

	likeBlock.classList.toggle("recipe-article__feedback-element_active");

	classListStr = likeBlock.classList.value;

	if (classListStr.indexOf("recipe-article__feedback-element_active") != -1)
		likeBlock.childNodes[3].innerText++;
	else
		likeBlock.childNodes[3].innerText--;
	
});
