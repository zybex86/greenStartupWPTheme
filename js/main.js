  var toTopButton = document.getElementById("toTopButton")

  var myAudio = document.getElementById("myAudio");
  myAudio.volume = 0.15;
  var isPlaying = true;
  var icon = document.getElementById("volume");

  function togglePlay() {
    if (isPlaying) {
      myAudio.pause();
      icon.setAttribute("class", "fas fa-volume-down");
    } else {
      myAudio.play();
      icon.setAttribute("class", "fas fa-volume-up");
    }
  };
  myAudio.onplaying = function() {
    isPlaying = true;
  };
  myAudio.onpause = function() {
    isPlaying = false;
  };
  window.onscroll = function()
    {
        var test = document.getElementById("test");
        var toTopButton = document.getElementById("toTopButton")
        
        var yScrollAxis = window.pageYOffset;
        
        if (yScrollAxis > 300)
            toTopButton.style.display = "block";
        else
            toTopButton.style.display = "none";
    };

    toTopButton.onclick = function()
    {
        window.scrollBy(0, -1 * window.pageYOffset);
    };

