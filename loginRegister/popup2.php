<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background: url('images/baner.jpg')no-repeat;
            background-size: cover;
            background-attachment:fixed;
        }
        #popup{
    display: none;
}
.popup-container{
    height: 100vh;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color: rgb(0 0 0 / 70%);
    position: absolute;
    top: 0;
    left: 0;
}
.popup{
    color: black;
    background-color: rgb(167, 241, 167);
    border: 2px solid green;
    padding: 20px 30px;
    width: 50%;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
.popup-btn{
    display: inline-block;
    text-decoration: none;
    border: 2px solid green;
    padding: 5px 15px;
    border-radius: 20px;
    margin: 10px 0px;
    transition: .2s all ease-in;
}
.popup-btn:hover{
    background-color: green;
    color: white;
    color: #fff;
}
</style>
</head>


<body>
    <!-- pop-up container html -->
<div id="popup" class="text-light">
  <div class="popup-container">
    <div class="popup text-center">
      <h2 class=" text-center"><i class="fas fa-exclamation-triangle fa-2x"></i></h2>
      <p>
      Wrong username or password!
      </p>
      <a href="register.php" class="popup-btn fs-bold">Try again</a>
    </div>
  </div>
</div>
</body>


<script>
    // script for popup container
        const popup = document.getElementById("popup");
        const closeBtn = document.getElementById("closeBtn");

        window.onload = function exampleFunction() {
            popup.style.display = 'block';
        }
        closeBtn.addEventListener('click', ()=>{
        popup.style.display = 'none';
        });
        popup.addEventListener('click', ()=>{
        popup.style.display = 'none';
        });
    </script>
</html>