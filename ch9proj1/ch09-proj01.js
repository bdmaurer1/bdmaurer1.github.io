const symbolPlay = '⯈';
const symbolPause = '❚ ❚';
const files = ['Nature-8399','River-655','Waterfall-941','Wave-2737'];
const aside = document.querySelector("aside");
const video = document.querySelector("video");

files.forEach(file => {
  const img = document.createElement("img");
  img.src = `images/${file}.jpg`;
  img.alt = file;
  
  img.addEventListener("click", () => {
    video.pause();
    video.src = `videos/${file}.mp4`;
    video.load();
    video.play();
    playPauseBtn.textContent = symbolPause;
  });

  aside.appendChild(img);
});
const stopBtn = document.querySelector("#stopBtn");
const playPauseBtn = document.querySelector("#playPauseBtn");

stopBtn.addEventListener("click", () => {
  video.pause();
  video.currentTime = 0;
  playPauseBtn.textContent = symbolPlay;
});
const skipButtons = document.querySelectorAll("[data-skip]");

skipButtons.forEach(button => {
  button.addEventListener("click", () => {
    video.currentTime += parseFloat(button.dataset.skip);
  });
});
playPauseBtn.addEventListener("click", () => {
  if (video.paused) {
    video.play();
    playPauseBtn.textContent = symbolPause;
  } else {
    video.pause();
    playPauseBtn.textContent = symbolPlay;
  }
});

/* Used ChatGPT for help with the JavaScript */