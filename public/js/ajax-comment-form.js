$(document).ready(function() {
	$('.recipe-article__comments-write-btn').click(function(e) {

		e.preventDefault();
		sendAjaxForm(123, "ajax-comment-form", "../application/functions/addComment.php");

	});
});

function sendAjaxForm(data, ajaxForm, url) {
	$.ajax({
		url: url,
		type: "POST",
		dataType: "html",
		data: $("#" + ajaxForm).serialize(),
		success: function(response) {
			console.log(response);
			// $(".recipe-article__comments-list").html(function() {

			// 	let dt = data;
			// 	let commentList = $(this).html();
			// 	let comment = `
			// 		<div class="comment">
			// 			<div class="comment__img far fa-comment"></div>
			// 			<div class="comment__data">
			// 				<div class="comment__username-date">
			// 					<div class="comment__username">login</div>
			// 					<div class="comment__date">date</div>
			// 				</div>
			// 				<div class="comment__text">comment</div>
			// 			</div>
			// 		</div>
			// 	`;

			// 	return comment + commentList;

			// });
		}
	});
}

function getDateNow() {

	var date = new Date();
	var mon = ('0'+(1+date.getMonth())).replace(/.?(\d{2})/,'$1');
	var dt = date.toString().replace(/^[^\s]+\s([^\s]+)\s([^\s]+)\s([^\s]+)\s([^\s]+)\s.*$/ig,'$3-'+mon+'-$2 $4');

	return dt;

}
