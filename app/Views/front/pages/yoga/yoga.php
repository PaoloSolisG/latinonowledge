<!-- your life yoga -->
<div id="yoga" class="yourlifeyoga">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="yogatitle">
                    <h2>Do yoga everyday for great health</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="yoga_img">
                    <figure><img src="images/yoga.png" alt="#" /></figure>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- yoga online -->
<div id="online" class="yoga">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>The Benefits<strong class="black"> of Yoga Online</strong></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="yoga_box" style="position: relative;">
                    <!-- Display image with play button overlay -->
                    <img src="images/yogoimg.jpg" alt="Yoga Benefits" width="100%" height="500">
                    <div id="playButton"
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                        width: 80px; height: 80px; background: rgba(0, 0, 0, 0.7); border-radius: 50%; display: flex; justify-content: center;
                        align-items: center; cursor: pointer;">
                        <i class="fa fa-play" style="color: white; font-size: 30px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for video -->
<div id="videoModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); 
justify-content: center; align-items: center; z-index: 1000;">
    <iframe width="80%" height="80%" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Yoga Online Benefits" frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <button id="closeModal" style="position: absolute; top: 20px; right: 20px; background: none; border: none; color: white; font-size: 30px; cursor: pointer;">&times;</button>
</div>

<script type="text/javascript">
    document.getElementById('playButton').addEventListener('click', function() {
        document.getElementById('videoModal').style.display = 'flex';
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('videoModal').style.display = 'none';
    });
</script>
<!-- end yoga online -->
