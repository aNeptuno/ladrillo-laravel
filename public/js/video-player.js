

var player = videojs('videoPlayer', {
    autoplay: 'muted',
    controls: false,
    poster: '../images/thumbnail01.png',
    loop: true,
    fill: true,
    userActions: {
        hotkeys: true
    }
});
