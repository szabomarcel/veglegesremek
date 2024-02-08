/*function addComment() {
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
}*/

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

function addComment() {
    var commentInput = document.getElementById("comment-input").value;
    // Ellenőrizze, hogy a commentInput nem üres
    if (commentInput.trim() !== "") {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "velemeny.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Sikeres válasz esetén továbblendítheti a felhasználót egy másik oldalra vagy kezelheti a választ
                // pl.: window.location.href = "uj_oldal.php";
            }
        };
        xhr.send("velemeny=" + encodeURIComponent(commentInput));
    } else {
        alert("A comment cannot be empty.");
    }
}