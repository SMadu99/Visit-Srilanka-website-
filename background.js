
function isConfirmed() {
    var checkbox = document.getElementById("confirmationCheckbox");
    return checkbox.checked;
}
function isConfirmed1() {
    var checkbox = document.getElementById("confirmationCheckbox1");
    return checkbox.checked;
}


// Function to handle form submission
function submitForm1() {
    if (isConfirmed1()) {
        // If the checkbox is checked, allow form submission
        document.getElementById("contactForm").submit();
    } else {
        // If the checkbox is not checked, show an error message
        alert("Please confirm that you agree to our terms before submitting the form.");
    }
}

function submitForm() {
    if (isConfirmed()) {
        // If the checkbox is checked, allow form submission
        document.getElementById("bookingForm").submit();
    } else {
        // If the checkbox is not checked, show an error message
        alert("Please confirm that you agree to our terms before submitting the form.");
    }
}

var backgroundImages = [
    "images/image1.jpg",
    "images/image4.jpg",
    "images/image3.jpg",
    "images/image5.jpg",
    "images/image6.jpg"

];


var currentIndex = 0; 

function changeBackgroundImage() {
    var header = document.getElementById("header");
    header.style.backgroundImage = "url(" + backgroundImages[currentIndex] + ")";
    currentIndex = (currentIndex + 1) % backgroundImages.length;
}


var interval = setInterval(changeBackgroundImage, 5000);