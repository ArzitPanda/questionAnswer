<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/herosection.css">
    <link rel="stylesheet" href="css/searchsection.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

<form id="demo-modal" class="modal">
    <div class="modal__content">
        <h1>write your questions</h1>
        <div class="box">
        <select >
            <option default>select </option>
            <option value="java">java</option>
            <option value="c++">c++</option>
            <option value="python">python</option>
            <option value="js">javascript</option>
        </select>
        </div>
       <input type="text" placeholder="write in 250  words" class="input_text">


        <div class="modal__footer">
            <label for="input_photo">upload</label>
           <input type="file" placeholder="Name" class="input_file" id="input_photo" >
            <button type="sumbit" class="small_text_box" >post your question</button>

        </div>
        <h3 id="img_name"></h3>
        <a href="#" class="modal__close">&times;</a>
    </div>
</form>
<a id="universal" href="#demo-modal" class="button_sticky ">
                  ASK QUESTION
</a>
  <div class="hero">
  <div class="navbar">
  
   </div>
   <div class="first_hero_layer">
   <div class="strip">
             <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="content">
            <div>
                  
                        <div class="small_box_content">java is a programming language</div>
                        <div class="small_box_title">java</div>
                </div>
              
                <div>
                  
                        <div class="small_box_content">java is a programming language</div>
                        <div class="small_box_title">java</div>
                </div>
              
            </div>
           
 
   </div>
   <div class="second_hero_layer">
    
     
   <div class="left_comp">
    <a href="https://twitter.com/twcloudchen" class="circle">
	<img height="100" width="100" src="assets/java.png" alt="Cloud Chen">
</a>
<!-- <img src="assets/arrow.png" alt="arrow" class="arrow"> -->
<a href="https://twitter.com/twcloudchen" class="circle_small">
	<img height="80" width="80" src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="Cloud Chen" class="avatar_small">
</a>


    </div>
   <img src="assets/path255.svg" alt="Thought Process" class="hero_image">    
   <div class="left_comp">
    <a href="https://twitter.com/twcloudchen" class="circle">
	<img height="100" width="100" src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="Cloud Chen">
</a>
<!-- <img src="assets/arrow.png" alt="arrow" class="arrow"> -->
<a  class="circle_small">
	<img height="80" width="80" src="assets/java.png" alt="Cloud Chen" class="avatar_small">
</a>


    </div>

   </div>
   <div class="third_hero_layer">
  
    <div class="small_text_box">
        digital platform
    </div>
    <img src="assets/hero.svg" alt="hero" class="hero_image_banner">

    <!-- <?php include './userComp/surajSearch/surajSearch.php';?> -->
    
<div class="right_comp"></div>
   </div>
  </div>

  <!-- categories -->
  <div class="container">
      
        <div class="box">
            <div class="icon">
                <i class="fa fa-search"></i>
                <h2>Java</h2>
            </div>
            <div class="content">
                <h3>Question</h3>
                <p><span>What is Java?</span><br> Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.</p>
            </div>
            <div class="answer">

            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa fa-search"></i>
                <h3>Python</h3>
            </div>
            <div class="content">
                <h3>Question</h3>
                <p><span>What is Python?</span><br>Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa fa-search"></i>
                <h4>C language</h4>
            </div>
            <div class="content">
                <h3>Question</h3>
                <p><span>What is C?</span><br>C is a procedural programming language. It was initially developed by Dennis Ritchie in the year 1972. It was mainly developed as a system programming language to write an operating system.</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa fa-search"></i>
                <h2>C++</h2>
            </div>
            <div class="content">
                <h3>Question</h3>
                <p><span>What is C++?</span><br>C++ is a cross-platform language that can be used to create high-performance applications.It was developed by Bjarne Stroustrup, as an extension to the C language.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa fa-search"></i>
                <h2>HTML</h2>
            </div>
            <div class="content">
                <h3>Question</h3>
                <p><span>What is HTML?</span><br>The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa fa-search"></i>
                <h2>CSS</h2>
            </div>
            <div class="content">
                <h3>Question</h3>
                <p><span>What is CSS?</span><br>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.</p>
            </div>
        </div>
    </div>
</body>
<script>
        const img_name=document.getElementById("img_name");
        const file =document.getElementById("input_photo");
        file.addEventListener("change",(e)=>{
            img_name.append(e.target.value);
        })


</script>
</html>