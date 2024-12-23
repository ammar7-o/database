 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="del.php"><span>URLY</span> by : Arc</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
          <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
span{
    color: red;
    font-weight: bolder;
}
        h1 {
            text-align: center;
            color: #333;
        }

        .video-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .video-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .video-form button {
            display: block;
            width: 100%;
            padding: 10px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #videoContainer {
            margin-top: 20px;
            padding-bottom: 200px; /* 16:9 aspect ratio */
            height: 0;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        #videoContainer iframe {
            margin-top: 140px;

            width: 300px;
            height: 150px;
            align-items: center;
        }
    </style>
    <script>
        function addVideo() {
            var videoUrl = document.getElementById("videoUrl").value;
            var videoId = extractVideoId(videoUrl);

            if (videoId) {
                var embedUrl = "https://www.youtube.com/embed/" + videoId;
                var iframe = document.createElement("iframe");
                iframe.setAttribute("src", embedUrl);
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("allowfullscreen", "");

                var videoContainer = document.getElementById("videoContainer");
                videoContainer.innerHTML = "";
                videoContainer.appendChild(iframe);

            } else {
                alert("رابط الفيديو غير صحيح!");
            }
        }

        function extractVideoId(url) {
            var match = url.match(/(?:youtu\.be\/|youtube(?:-nocookie)?\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})(?:[^\s&]+)/);
            return (match && match[1].length === 11) ? match[1] : null;
        }

        // استرجاع الفيديوهات المحفوظة عند تحميل الصفحة
       
    </script>
</head>
<body>
    <h1 dir="ltr">إضافة فيديو من YouTube </h1>
    <div class="video-form">
        <input type="text" id="videoUrl" placeholder="أدخل رابط الفيديو من YouTube">
        <button onclick="addVideo()">إضافة</button>
    </div>
    <div id="videoContainer"></div>
              
          </li>
     
        </ul>
      
      </div>
    </div>
  </nav>
  <script src="js/bootstrap.js"></script>
</body>
</html>