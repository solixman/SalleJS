require('./bootstrap');


// Get the modal
var modal = document.getElementById("dateModal");

// Get the button that opens the modal
var btn = document.getElementById("openModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Handle the submit button click
document.getElementById("submitDates").onclick = function() {
    var startDate = document.getElementById("startDate").value;
    var endDate = document.getElementById("endDate").value;
    alert("Start Date: " + startDate + "\nEnd Date: " + endDate);
    modal.style.display = "none"; // Close the modal after submission
}