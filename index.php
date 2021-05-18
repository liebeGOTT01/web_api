<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>WebApi</title>
</head>
<body>
<img src="https://img.freepik.com/free-vector/graphic-designers-computer-screen-creating-uploading-video-motion-graphic-design-video-production-service-motion-designer-work-concept-bright-vibrant-violet-vector-isolated-illustration_126608-438.jpg?size=626&ext=jpg" alt="">
<img id="img" src="https://cdn.pixabay.com/photo/2016/11/01/18/38/background-1789175_960_720.png" alt="abstract background">
    <div class="circle"></div>
        <div class="container" id="glass">

            <div class="card w-50">
       
                <form action="http://192.168.0.1:8081/web-api/database.php" method="post">
                    <input type="hidden" name="query" value="http://localhost:8081/client/retrieve.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="text" name="contact" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jobTitle">Job Title</label>
                        <input type="text" name="jobTitle" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning float-right">Submit</button>
                </form>
            </div>
          
        </div>
</body>
<style>
img {
  /* set the duration time of the animation */
  animation-duration: 2s;
  
  /* after the animation stops, the box stays in place on the new position */
  animation-fill-mode: forwards;
  
  /* link to the animation */
  animation-name: img;

  height: 100vh;
  /* width:100%; */
  right: -50px;
  opacity: 0;
  position: absolute;
  top: 0;
  z-index: -2;
}

.card {
  /* delay of the animation after loading the page */
  margin-top:10%;
  animation-delay: 2s;
  animation-duration: 2s;
  animation-fill-mode: forwards;
  animation-name: glassContainer;
 float:right;
  backdrop-filter: blur(20px);
  background: rgba(255, 255, 255, 0.3);
  border-radius: 1.5em;
  border: solid 1px #999;
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3), -3px -3px 5px rgba(255, 255, 255, 0.3);
  display: inline-block;
  padding: 3em;
  position: relative;

  z-index: 1;
}

label {
  display: block;
  margin: 5px 0px;
  color:yellow;
}

div.container div.card {
  animation-delay: 2s;
  animation-duration: 2s;
  animation-fill-mode: forwards;
  animation-name: form;
  opacity: 0;
}

input {
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 5px;
  border: transparent;
  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7) inset;
  padding: 0.7em;
  /* width: 100%; */
}


@keyframes img {
  /* which css property should chagne until the 100% of the time is reached */
  
  100% {
    right: -300px;
    top: 0px;
    opacity: 1;
  }
}

@keyframes glassContainer {
  100% {
    right: 100px;
    top: 0px;
    opacity: 1;
  }
}

@keyframes containerContent {
  100% {
    top: 0;
    opacity: 1;
  }
}

@keyframes form {
  100% {
    opacity: 1;
  }
}

@keyframes glassContainer {
  0% {
    right: 0px;
    top: 0px;
  }

  100% {
    right: 100px;
    top: 0px;
    opacity: 1;
  }
}
</style>
</html>