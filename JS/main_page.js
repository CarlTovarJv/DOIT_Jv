const video = document.getElementById('video_rain');

    video.addEventListener('timeupdate', function() {
        if (video.currentTime > (video.duration - 0.1)) {
            video.currentTime = 0;
            video.play();
        }});