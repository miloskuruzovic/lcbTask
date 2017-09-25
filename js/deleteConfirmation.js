$(document).ready(function () {
	console.log('hi');
    $(".delete-link").click(function (e) {
        var result = window.confirm('Are you sure?');
        if (result == false) {
            e.preventDefault();
        };
    });
});