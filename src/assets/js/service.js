window.onload = function() {
    get_comments();


    var form_comment = document.getElementById('form_comment');
    var text_comment = document.getElementById('text_comment');

    console.log(text_comment.value);
    console.log(id);
    form_comment.onclick = function() {
        get_comments();

        axios({
            method: 'post',
            url: './assets/includes/_add_comment.php',
            data: {
                author: 'Fred',
                text: text_comment.value,
                articlesid: id
            }
        });






        
    }
    function get_comments() {
            axios.get('./assets/includes/_get_comments.php')
                .then(function(response) {
                    // handle success
                    console.log(response.data);




                    $(document).ready(function() {

                        var a = Object.keys(response.data);
                     for (let i = 1; i-1 < a.length; i++) {
                            console.log(response.data[i]);


                            $('.comments_content_main').append(' <ul class="comments">' +
                                ' <li class="comments_item">' +
                                ' <div class="comments_header">' +
                                '   <img class="comments_avatar" src="https://placehold.it/30" alt="">' +
                                ' <div class="comments_author">' +
                                 `<div class="comments_name">${response.data[i].author}</div>` +
                                `<time datetime="2020-12-21 19:21" class="comments_pubdate">${response.data[i].pubdate}</time>` +

                                '</div>' +
                                '</div>' +
                                `<div class="comments_text">${response.data[i].text}</div>` +
                                '<button class="comments_reply" type="button">ответить</button>' +


                                '</li>' +

                                '</ul>'





                            );
                        };
                    })
                });

        }

}