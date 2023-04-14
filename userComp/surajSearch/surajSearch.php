
























<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  background-color: transparent;
}



::selection{
  color: #fff;
 
}

.wrapper{
  max-width: 450px;
  background-color: transparent;

}

.wrapper .search-input{
  /* background: #fff; */
  width: 100%;
  border-radius: 5px;
  position: relative;
  
  box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.12);
}

.search-input input{
  height: 55px;
  width: 400px;
  outline: none;
  border: none;
  border-radius: 5px;
  /* padding: 0 60px 0 20px; */
  font-size: 18px;
  box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
}

.search-input.active input{
  border-radius: 5px 5px 0 0;
}

.search-input .autocom-box{
  padding: 0;
  opacity: 0;
  pointer-events: none;
  max-height: 280px;
  overflow-y: auto;
}

.search-input.active .autocom-box{
  padding: 10px 8px;
  opacity: 1;
  pointer-events: auto;
}

.autocom-box li{
  list-style: none;
  padding: 8px 12px;
  display: none;
  width: 100%;
  cursor: default;
  border-radius: 3px;
}

.search-input.active .autocom-box li{
  display: block;
}
.autocom-box li:hover{
  background: #efefef;
}

.search-input .icon{
  position: absolute;
  right: 0px;
  top: 0px;
  height: 55px;
  width: 55px;
  text-align: center;
  line-height: 55px;
  font-size: 20px;
  color: #644bff;
  cursor: pointer;
}
</style>


<div class="wrapper">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <input type="text" placeholder="Type to search..">
      
        <div class="icon"><i class="fas fa-search"></i></div>
        <div class="autocom-box">
          <!-- here list are inserted from javascript -->
        </div>
      </div>
      
    </div>














<script>
const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = `https://www.google.com/search?q=${userData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}
function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = `https://www.google.com/search?q=${selectData}`;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = `<li>${userValue}</li>`;
    }else{
      listData = list.join('');
    }
    suggBox.innerHTML = listData;
}


let suggestions = [
    "What is polymorphism?",
    "What is an interface?",
    "What is a constructor?",
    "What are the commonly used computer processors?",
    "What is primary and secondary memory?",
    "What is Computer Science?",
    "What is an operating system?",
    "What are the popular operating systems used today?",
    "What are the primary components of a computer system?",
    "What is inheritance?",
    "What is a class?",
    " What is a superclass?",
    "What is a file?",
    "What is a character stream?",
    "What is the difference between overriding and overloading?",
    "Is string class final?",
    "What is an object?",
    "What is a view?",
    "What is a stream?",
    "What is a singleton class?",
    "What are the advantages and disadvantages of multiple inheritance?",
    "What is a default and conversion constructor?",
    "What is the computer system?",
    " List out components of a computer system",
    "What is a microprocessor?",
    " List out some popular operating system",
    "What Is A Super-class?",
    " Explain class variable",
    " What is a programming language?",
    "What is an Interface?",
    " What is an abstract class?",
    " What is an array?",
    " What is a constructor?",
    "What is the difference between C and C++?",
    " List the types of constructors",
    "What is artificial intelligence?",
    "What is machine learning?",
    " What is deep learning?",
    " List out different OOPS principles?",
    "What is the difference between compiler and interpreter?",
    "List out Layers of OSI Model?",
    "What is s the primary difference between process and thread?",
    "What is Process?",
    "What is thread?",
    "Explain primary memory",
    " What is the internet?",
    " What is the World Wide Web (WWW)?",
    " What is an Algorithm?",
    "What is the operating system?",
    "What is cryptography?",
    "What do you understand by a computer system?",
    " What are the main components of a computer system?",
    "What are some most popular computer processors used in computer systems?",
    "What is the full form of SDLC? Why is it used?",
    "What are the most commonly used programming languages nowadays?",
    " What is a constructor in an object-oriented programming language?",
];

    </script>