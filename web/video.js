const videoData = [
    { src: "kepek/video/FOCI EB ! Pamkutya.mp4", type: "video/mp4" },
    { src: "kepek/video/Top 5. legnagyobb szabadrúgás gól!.mp4", type: "video/mp4" },
    { src: "kepek/video/Legszebb magyar stadionok!🇭🇺🇭🇺.mp4", type: "video/mp4" },
    { src: "kepek/video/5. legnagyobb magyar öngól!🔥.mp4", type: "video/mp4" }
    // További videók hozzáadhatók
];

const videosPerPage = 2;
let currentPage = 1;

function displayVideos(page) {
    const startIdx = (page - 1) * videosPerPage;
    const endIdx = startIdx + videosPerPage;

    const videoGallery = document.getElementById('videoGallery');
    videoGallery.innerHTML = '';

    for (let i = startIdx; i < Math.min(endIdx, videoData.length); i++) {
        const videoContainer = document.createElement('div');
        videoContainer.className = 'video-container';

        const video = document.createElement('video');
        video.width = 300;
        video.height = 200;
        video.controls = true;

        const source = document.createElement('source');
        source.src = videoData[i].src;
        source.type = videoData[i].type;

        video.appendChild(source);
        videoContainer.appendChild(video);
        videoGallery.appendChild(videoContainer);
    }
}

function changePage(page) {
    currentPage = page;
    displayVideos(currentPage);
}

function autoPaginate() {
    currentPage = currentPage % Math.ceil(videoData.length / videosPerPage) + 1;
    displayVideos(currentPage);
}

// Indítsd el az automatikus lapozást minden 4:50 perc múlva vált a következő videókhoz
const autoPaginateInterval = setInterval(autoPaginate, 216000);

// Állítsd le az automatikus lapozást, ha az oldal bezárul vagy más tevékenység történik
window.onbeforeunload = function () {
    clearInterval(autoPaginateInterval);
};

// Kezdeti videók megjelenítése
displayVideos(currentPage);