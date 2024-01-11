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