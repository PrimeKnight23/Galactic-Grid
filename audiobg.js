const audio = new Audio();
audio.src = 'Skies of Deception.mp3';
audio.autoplay = true;
audio.loop = true;
audio.load();


function savePlaybackState() {
  localStorage.setItem('audioPlaybackState', JSON.stringify({
    currentTime: audio.currentTime,
    isPlaying: !audio.paused
  }));
}


function loadPlaybackState() {
  const playbackState = JSON.parse(localStorage.getItem('audioPlaybackState'));
  if (playbackState) {
    audio.currentTime = playbackState.currentTime;
    if (playbackState.isPlaying) {
      audio.play();
    }
  }
}


window.addEventListener('pagehide', () => {
  savePlaybackState();
});


window.addEventListener('pageshow', () => {
  loadPlaybackState();
});


window.addEventListener('beforeunload', () => {
  savePlaybackState();
});