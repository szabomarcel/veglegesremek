<div class="container div" style="text-align: center;">
    <h1>Focista kártyák tulajdonságaikkal</h1>    
    <div id="card-container" class="card-container">
    </div class="row">
        <div class="cards">
            <div class="content">
                <div class="back">
                    <div class="back-content">
                    <svg stroke="#ffffff" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="50px" width="50px" fill="#ffffff">
                    <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                    <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                    <g>
                        <path d="M20.07,6.11a9.85,9.85,0,0,0-4.3-3.36A10,10,0,0,0,2,12c0,.19,0,.38,0,.56A9.94,9.94,0,0,0,3.33,17a10,10,0,0,0,5.89,4.65h0A10.11,10.11,0,0,0,12,22a9.45,9.45,0,0,0,1.88-.18,10,10,0,0,0,8-8.41A9.46,9.46,0,0,0,22,12,9.83,9.83,0,0,0,20.07,6.11Zm-2,.77L17,9.74l-1.62.44L13,8.49V6.64l2.49-1.81A7.81,7.81,0,0,1,18.11,6.88ZM14,11.67,13.22,14H10.77L10,11.67l2-1.43ZM12,4a8,8,0,0,1,1.11.09L12,4.89l-1.11-.8A8,8,0,0,1,12,4ZM4.88,8.37l.4,1.32-1.13.79A7.88,7.88,0,0,1,4.88,8.37Zm1.37,9.17,1.38.05L8,18.92A8.32,8.32,0,0,1,6.25,17.54ZM8,15.6l-3.15-.11A7.83,7.83,0,0,1,4.07,13l2.49-1.74L8,11.88l.89,2.76Zm.86-5.53-1.56-.7-.91-3A7.93,7.93,0,0,1,8.5,4.83L11,6.64V8.49ZM13,19.93a8.08,8.08,0,0,1-2.63-.12l-.83-2.92.83-.89h3.07l.67,1Zm2.41-.7L15.87,18l1.36.07A7.83,7.83,0,0,1,15.38,19.23Zm3.46-3.12L15.76,16l-.71-1.1.89-2.76,1.51-.41,2.36,2A7.84,7.84,0,0,1,18.84,16.11Zm.05-5.83L19.4,9a7.4,7.4,0,0,1,.53,2.13Z"></path>
                    </g>
                    </svg>
                    <strong>FOOTBALL</strong>
                </div>
            </div>
            <div class="front">
                
                <div class="img">
                <div class="circle">
                </div>
                <div class="circle" id="right">
                </div>
                <div class="circle" id="bottom">
                </div>
                </div>

                <div class="front-content">
                <small class="badge">88</small>
                <small class="badge">LM</small>
                <small class="badge"><img src="kepek/zaszlok/magyar_zaszlo.png" alt="" class="zaszlo" width="25" height="15"></small>
                <small class="badge"><img src="kepek/zaszlok/liverpool.png" alt="" class="zaszlo" width="25" height="25"></small>
                <div class="description">
                    <div class="title">
                    <p class="title">
                        <strong>Szoboszlai</strong>
                    </p>
                    <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>
                    </div>
                    <p class="card-footer">
                    93 PAC &nbsp; | &nbsp; 93 DRI <br>
                    89 SHO &nbsp; | &nbsp; 47 DEF <br>
                    89 PAS &nbsp; | &nbsp; 78 PHY <br>
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h1>Memory Cards</h1>
    <div class="grid-container">
    </div>
    <p>Score: <span class="score"></span></p>
    <div class="actions">
        <button onclick="restart()">Restart</button>
    </div>
    <hr>
    <div class="post-container">
        <h1>Football Mérközés Vélemények</h1>
        <p class="post-content">Értékelje a memory cardot.</p>
        <div>
            <span class="csillag" onclick="ertekeles(1)" id="csillag1">&#9733;</span>
            <span class="csillag" onclick="ertekeles(2)" id="csillag2">&#9733;</span>
            <span class="csillag" onclick="ertekeles(3)" id="csillag3">&#9733;</span>
            <span class="csillag" onclick="ertekeles(4)" id="csillag4">&#9733;</span>
            <span class="csillag" onclick="ertekeles(5)" id="csillag5">&#9733;</span>
        </div>
        <div class="comments-container">
            <h2>Comments</h2>
            <ul id="comment-list"></ul>
            <input type="text" id="comment-input" placeholder="Add a comment...">
            <a href="index.php?menuItem=velemeny&nev_id=<?php echo $adatok['nev_id'];?>" class="btn btn-dark" onclick="addComment()">Add Comment</a>
            <!--<button onclick="addComment()">Add Comment</button>-->
        </div>
    </div>
    <hr>
</div>
</div>
<script src="web/main.js"></script>
<script src="web/foci.js"></script>   