$(document).ready(function() {
    $.ajax({
        url : "get_tweets.php",
        dataType: "json",
        success: function (data) {
            console.log(data);
            $.each(data, function(key, value){
                $('#tweet').append(value.content + value.tweet_date);
            })
           
        }
    })
})