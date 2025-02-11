<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
	
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Content-Security-Policy" content="script-src 'self' https://ptents.azureedge.net https://*.google.com https://*.googletagmanager.com https://*.google-analytics.com https://*.googleadservices.com https://*.prayertents.com https://*.calendly.com https://*.hotjar.com https://*.doubleclick.net https://*.jotform.com https://www.youtube.com 'unsafe-inline' 'unsafe-eval';">


<meta name="description" content="Yuckables is spreading the importance of home-clothing. Learn how to dress for comfort at home while keeping your fancy clothes safe!">
<meta name="keywords" content="yuckables, yuckable, video-player, video, youtube, home-clothes, comfortable clothing, casual wear, loungewear, stay-at-home fashion, comfort fashion, relax at home, casual home outfits, dirty clothes, home fashion, clothing tips, relaxed outfits, comfy wear, casual lifestyle, cozy clothing, indoor fashion, casual dress code, home-friendly fashion, Sur family, yucky clothes">

  
    <meta property="og:title" content="Yuckables | Samuel Sur's Lab" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://yuckables.com" />
    <meta property="og:image" content="https://yuckables.com/images/favicon-16x16.png" />
    <meta property="og:description" content="Check out Yuckables! Samuel's Lab" />
    <meta property="og:site_name" content="Yuckables" />
    <meta property="og:locale" content="en_US" />


    <meta property="og:see_also" content="https://www.instagram.com/samuelsurr/" />


  <link rel="canonical" href="https://yuckables.com/LockIn" />


  <link href="CSS/yuckables.min.css" rel="stylesheet">
    <title>Lock In Lock In Lock In | Youtube Video Player</title>
    <style>
         body {
            background-color: black;
			color: white;
            font-family: 'Oswald-Regular', sans-serif;
            margin: 0;
            padding: 0;
			
            box-sizing: border-box;
        }
		
		#player-container {
		  display: flex;
		  flex-direction: column;
		  align-items: center;
		  margin-top: 20px;
		}
		  #player {
      margin: 20px 0;
      width: 100%;
      max-width: 640px;
      height: 390px;
      background-color: #000;
      border: none;
      border-radius: 8px;
  }
   p {
      font-size: 16px;
      color: black;
      margin: 0 0 20px;
  }
		input {
		  padding: 10px;
		  width: 300px;
		  margin-right: 10px;
		}
		 #youtube-link,
  button {
      width: 100%;
      max-width: 400px;
      margin: 10px auto;
      display: block;
  }
		#youtube-link {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
  }
		  button {
			  padding: 10px 20px;
			  background-color: rgba(0, 255, 102, 0.6);
			  color: white;
			  border: none;
			  border-radius: 5px;
			  font-size: 16px;
			  cursor: pointer;
		  }

		  button:hover {
			  background-color: white;
		  }
		
        h1 {
            font-size: 24px;
			margin-bottom: 10px;
			text-align: center;
        }
		
		@media (max-width: 768px) {
      #player {
          height: 270px; 
      }

      #youtube-link, button {
          font-size: 14px;
      }

      h1 {
          font-size: 20px;
      }

      p {
          font-size: 14px;
      }
  }

		h2 {
			     font-size: 5em;
            letter-spacing: 5px;
			text-align: center;
		}
 
 		body, html {
    margin: 0;
    padding: 0;
    width: 100vw;
    overflow-x: hidden; 
    box-sizing: border-box; 
}
 
 			
		

		
		   .icon-x1 {
        display: block; 
		  display: none;
    }
		
		@media (max-width: 768px) {
    .icon-x1 {
        display: block; 
    }
	.icon-x
	{
		   display: none; 
	}
        }

			@font-face {
    font-family: 'Oswald-Regular';
    font-style: normal;
    font-weight: normal;
    src: local('Oswald-Regular'), url('fonts/oswald-regular.woff') format('woff');
			}
		
#saved-urls button {
      display: block;
      margin: 10px auto;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
    }


#saved-urls {
  margin: 20px 0;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  max-width: 600px;
  background-color: #f9f9f9;
}

.history-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
  padding: 8px;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 5px;
  transition: box-shadow 0.2s ease;
}

.history-item:hover {
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.video-btn {
  background-color: #0073e6;
  flex: 9;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 8px 12px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.video-btn:hover {
  background-color: #005bb5;
}

.delete-btn {
  flex: 1;
  background: none;
  color: red;
  border: none;
  font-size: 18px;
  cursor: pointer;
  transition: transform 0.2s ease;
}

.delete-btn:hover {
  background: red;
  transform: scale(1.05);
}

.clearfix::after {
  content: "";
  display: table;
  clear: both;
}






		
		
    </style>
</head>
<body>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-WEQF8NB9YG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WEQF8NB9YG');
</script>

<div id="particles-js"></div>


<div class="nav-bar">
    <a href="/" class="logo-container">
        <img src="images/logohigh1_1.png" class="navlogo" alt="Yuckables Logo">
    </a>

    <div class="nav-links">
        <a href="/">HOME</a>
        <a href="Gallery">GALLERY</a>
        <a href="LockIn">LOCK IN</a>
    </div>

    <a href="https://www.instagram.com/samuelsurr/" target="_blank" class="instagram-icon">
        <img src="images/insta.webp" alt="Instagram">
    </a>

    <img src="images/Menu.png" class="hamburger-menu" id="menuToggle" alt="Menu">

    <div class="mobile-menu" id="mobileMenu">
        <span class="close-menu" id="closeMenu">&times;</span>
        <a href="/">HOME</a>
        <a href="Gallery">GALLERY</a>
        <a href="LockIn">LOCK IN</a>
    </div>
</div>

<script>
    document.getElementById("menuToggle").onclick = function() {
        document.getElementById("mobileMenu").style.width = "250px"; 
    }

    document.getElementById("closeMenu").onclick = function() {
        document.getElementById("mobileMenu").style.width = "0";
    }

 
    window.onclick = function(event) {
        if (event.target == document.getElementById("mobileMenu")) {
            document.getElementById("mobileMenu").style.width = "0";
        }
    }
</script>

<p> <h1>Can't use youtube?</h1>
   <center>Look no further as you can link youtube playlists and videos url here and are able to watch! Your video will be stored personally so that you can go back and watch later. Enjoy!
   </p>

    <div id="loading-container">
        <div id="loading-bar"></div>
    </div>
    <div id="player"></div>
    <input type="text" id="youtube-link" placeholder="Enter YouTube URL">
    <button onclick="loadVideo()">Load Video</button>
	
	<h3>Saved for Later</h3>
  <div id="saved-urls"></div>

	
	
  <script async src="https://www.youtube.com/iframe_api"></script>
<script>
    let playlists = JSON.parse(localStorage.getItem('playlists')) || [];
    let savedUrls = JSON.parse(localStorage.getItem('videoHistory')) || [];
    let player;
    let currentVideoId = null;
    let saveInterval;


    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '390',
            width: '640',
            playerVars: { rel: 0, showinfo: 0 },
            events: {
                onStateChange: onPlayerStateChange,
            },
        });

        const lastVideoId = localStorage.getItem('lastVideoId');
        const videoTimestamps = JSON.parse(localStorage.getItem('videoTimestamps')) || {};

        if (lastVideoId) {
            const savedTimestamp = videoTimestamps[lastVideoId] || 0;
            player.loadVideoById(lastVideoId, Math.floor(savedTimestamp));
            currentVideoId = lastVideoId;
        }

        displayUnifiedList();

        saveInterval = setInterval(saveCurrentTime, 1000);
    }

    // Handle player states
    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.PAUSED || event.data === YT.PlayerState.ENDED) {
            saveCurrentTime();
        }
    }

    // Save time for later
    function saveCurrentTime() {
        if (currentVideoId && player && typeof player.getCurrentTime === 'function') {
            const currentTime = Math.floor(player.getCurrentTime());
            const videoTimestamps = JSON.parse(localStorage.getItem('videoTimestamps')) || {};
            videoTimestamps[currentVideoId] = currentTime;
            localStorage.setItem('videoTimestamps', JSON.stringify(videoTimestamps));
        }
    }

    // Load video
    async function loadVideo() {
        const url = document.getElementById('youtube-link').value;
        const videoId = getVideoId(url);
        const playlistId = getPlaylistId(url);

        if (playlistId) {
            await addPlaylistToHistory(playlistId, url);
            loadPlaylist(playlistId);
        } else if (videoId) {
            await addUrlToHistory(url, videoId);
            switchVideo(videoId);
        } else {
            alert('Invalid YouTube link! Please enter a valid link.');
        }
    }

    // Switch to another video
    async function switchVideo(videoId) {
        saveCurrentTime(); 
        currentVideoId = videoId;
        localStorage.setItem('lastVideoId', videoId);

        const videoTimestamps = JSON.parse(localStorage.getItem('videoTimestamps')) || {};
        const savedTimestamp = videoTimestamps[videoId] || 0;
        player.loadVideoById(videoId, Math.floor(savedTimestamp));
    }

    // Add video to history
    async function addUrlToHistory(url, videoId) {
        const videoTitle = await fetchVideoTitle(videoId);

        const existingIndex = savedUrls.findIndex(entry => entry.id === videoId);
        if (existingIndex === -1 && videoTitle) {
            savedUrls.push({ id: videoId, url, title: videoTitle });
            localStorage.setItem('videoHistory', JSON.stringify(savedUrls));
        }

        displayUnifiedList();
    }

    // Playlist feature
    async function addPlaylistToHistory(playlistId, url) {
        const existingIndex = playlists.findIndex(entry => entry.id === playlistId);
        if (existingIndex === -1) {
            const playlistName = `Playlist ${playlists.length + 1}`;
            playlists.push({ id: playlistId, url, name: playlistName });
            localStorage.setItem('playlists', JSON.stringify(playlists));
        }
        displayUnifiedList();
    }

    // Load playlist
    function loadPlaylist(playlistId) {
        player.loadPlaylist({ listType: 'playlist', list: playlistId });
    }

    // Display playlist and video
    function displayUnifiedList() {
        const savedUrlsDiv = document.getElementById('saved-urls');
        savedUrlsDiv.innerHTML = '';

        const combinedList = [
            ...savedUrls.map(entry => ({ ...entry, type: 'video' })),
            ...playlists.map(entry => ({ ...entry, type: 'playlist' })),
        ];

        combinedList.forEach(entry => {
            const listItem = document.createElement('div');
            listItem.classList.add('history-item');

            const button = document.createElement('button');
            button.innerText = entry.type === 'video' ? entry.title : entry.name;
            button.classList.add('video-btn'); 
            button.onclick = entry.type === 'video' 
                ? () => switchVideo(entry.id) 
                : () => loadPlaylist(entry.id);

            const deleteButton = document.createElement('button');
            deleteButton.innerText = '🗑️';
            deleteButton.classList.add('delete-btn');
            deleteButton.onclick = entry.type === 'video' 
                ? () => deleteHistoryItem(entry.id) 
                : () => deletePlaylistItem(entry.id);

            listItem.appendChild(button);
            listItem.appendChild(deleteButton);
            savedUrlsDiv.appendChild(listItem);
        });
    }

    //delete
    function deleteHistoryItem(videoId) {
        saveCurrentTime();

        savedUrls = savedUrls.filter(entry => entry.id !== videoId);
        localStorage.setItem('videoHistory', JSON.stringify(savedUrls));

        displayUnifiedList();
    }

    // Delete playlist
    function deletePlaylistItem(playlistId) {
        playlists = playlists.filter(entry => entry.id !== playlistId);
        localStorage.setItem('playlists', JSON.stringify(playlists));

        displayUnifiedList();
    }

    // video URL
    function getVideoId(url) {
        const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/.*[?&]v=|youtu\.be\/|embed\/)([a-zA-Z0-9_-]+)/;
        const match = url.match(regex);
        return match ? match[1] : null;
    }

    // playlist URL
    function getPlaylistId(url) {
        const regex = /[?&]list=([a-zA-Z0-9_-]+)/;
        const match = url.match(regex);
        return match ? match[1] : null;
    }

    // Get title
    async function fetchVideoTitle(videoId) {
        try {
            const response = await fetch(`https://noembed.com/embed?url=https://www.youtube.com/watch?v=${videoId}`);
            const data = await response.json();
            return data.title || 'Unknown Video';
        } catch {
            return 'Unknown Video';
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        displayUnifiedList();
    });
</script>




   
   
  
	
<script> let lastScrollTop = 0;
const navBar = document.querySelector('.nav-bar');

window.addEventListener('scroll', () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        navBar.classList.add('hidden');
    } else if (scrollTop < lastScrollTop) {
        navBar.classList.remove('hidden');
    }
    lastScrollTop = Math.max(scrollTop, 0); 
});

</script>
<script type="text/javascript">
  if (window.location.pathname.endsWith('/') && window.location.pathname !== '/') {
        if (!window.location.search.includes('redirected=true')) {
            window.location.href = window.location.pathname.slice(0, -1) + '?redirected=true';
        }
    }
</script>
</body>
</html>
