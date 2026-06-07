// app.js - Behavioral Layer using jQuery (Updated for Debugging)
$(document).ready(function() {
    $("#regForm").submit(function(event) {
        event.preventDefault(); // HALTS traditional form submission and page reload

        // Client-Side Validation
        let regNo = $("#reg_number").val().trim();
        let name = $("#fullname").val().trim();
        let sClass = $("#school_class").val().trim();
        let gender = $("#gender").val();

        if (regNo === "" || name === "" || sClass === "" || gender === "") {
            $("#status-message").html("<p class='error'>All fields are strictly required!</p>");
            return false;
        }

        // Grabbing all inputs seamlessly using serialize()
        let formData = $(this).serialize();

        // Performing asynchronous AJAX POST request
        $.post("process.php", formData, function(response) {
            if (response.status === "success") {
                $("#status-message").html("<p class='success'>" + response.message + "</p>");
                $("#regForm")[0].reset(); // Clear form fields
            } else {
                $("#status-message").html("<p class='error'>" + response.message + "</p>");
            }
        }, "json").fail(function(xhr, status, error) {
            // UPDATED: This prints the exact raw server error directly onto the screen
            $("#status-message").html("<p class='error'><strong>Server Error:</strong> " + xhr.responseText + "</p>");
            console.log("Raw Response Data:", xhr.responseText);
        });
    });
});