//strike todolist

$("ul").on("click", "li", function () {
    $(this).toggleClass("strike");
});

// delete

$("ul").on("click", "span", function (event) {
    $(this).parent().fadeOut(500, function () {
        $(this).remove();
    });
    event.stopPropagation();
});

// Add new ToDoList
$("input[type='text']").keypress(function (event) {
    if (event.which === 13) {
        var todonew = $(this).val();
        $(this).val("");
        $("ul").append("<li><span><i class='fa fa-trash-o' aria-hidden='true'></i> </span>" + todonew + "</li>");
    }
});

//Toggle button

$(".icon").click(function () {
    $("input[type='text']").slideToggle()
});