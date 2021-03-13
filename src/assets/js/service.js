window.onload= function(){



	var form_comment = document.getElementById('form_comment');
	var text_comment = document.getElementById('text_comment');

	console.log(text_comment.value);
	form_comment.onclick = function(){
		axios({
  method: 'post',
  url: './assets/includes/_add_comment.php',
  data: {
    author: 'Fred',
    text: text_comment.value
  }
});
	}
}