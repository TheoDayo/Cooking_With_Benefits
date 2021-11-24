$(document).ready(function(){
    $("#demo").select2({
        placeholder: "select country",
        tags: true,
        tokenSeparators: ['/',',',','," "]
    });
})