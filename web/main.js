function addComment() {
    var commentInput = document.getElementById("comment-input");
    var commentText = commentInput.value.trim();

    if (commentText !== "") {
        var commentList = document.getElementById("comment-list");
        var newComment = document.createElement("li");
        newComment.className = "comment";

        // Create a span for the comment text
        var commentTextSpan = document.createElement("span");
        commentTextSpan.textContent = commentText;
        newComment.appendChild(commentTextSpan);

        // Create a span for the timestamp
        var timestampSpan = document.createElement("span");
        timestampSpan.className = "timestamp";
        timestampSpan.textContent = getFormattedTimestamp();
        newComment.appendChild(timestampSpan);

        // Create a delete button
        var deleteButton = document.createElement("button");
        deleteButton.textContent = "Delete";
        deleteButton.onclick = function() {
            commentList.removeChild(newComment);
        };
        newComment.appendChild(deleteButton);

        commentList.appendChild(newComment);

        // Clear the input field after adding the comment
        commentInput.value = "";
    }
}

function getFormattedTimestamp() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    return hours + ":" + minutes + ":" + seconds;
}

// Generate QR code
$('#qrcode').qrcode({
    text: 'https://www.youtube.com/watch?v=HQh_4_z-1Eg', // Replace with your URL or text
    width: 128,
    height: 128
});

let aktivaltCsillag = 0;

    function ertekeles(csillagSzam) {
        aktivaltCsillag = csillagSzam;

        for (let i = 1; i <= 5; i++) {
            let csillagId = "csillag" + i;
            let csillagElem = document.getElementById(csillagId);

            if (i <= csillagSzam) {
                csillagElem.classList.add("checked");
            } else {
                csillagElem.classList.remove("checked");
            }
        }
    }
    
let lapozoIndex = 0;

function lapozas(elore) {
    const lapozoWrapper = document.querySelector('.lapozo-wrapper');
    const lapozoSlides = document.querySelectorAll('.lapozo-slide');
    const slideWidth = lapozoSlides[0].clientWidth;

    lapozoIndex = elore ? lapozoIndex + 1 : lapozoIndex - 1;

    if (lapozoIndex < 0) {
        lapozoIndex = lapozoSlides.length - 1;
    } else if (lapozoIndex >= lapozoSlides.length) {
        lapozoIndex = 0;
    }

    lapozoWrapper.style.transform = `translateX(-${lapozoIndex * slideWidth}px)`;
}

/*#####*/
/*CARD*/ 
/*#####*/

// payment.js
/*var stripe = Stripe('YOUR_PUBLIC_KEY');
var elements = stripe.elements();

var card = elements.create('card');
card.mount('#card-element');

card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

var form = document.getElementById('payment-form');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Token successfully created, send it to your server to process the payment.
            stripeTokenHandler(result.token);
        }
    });
});*/