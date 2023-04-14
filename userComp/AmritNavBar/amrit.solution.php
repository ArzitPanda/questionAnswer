



<head>

<?php 

 echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


';

echo    '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>';


?>

  
   

</head>


<body>

<nav class="navbar navbar-expand-md navbar-light border-bottom p-0 ps-5 color">
      <div class="container">
        <a class="navbar-brand" href="#">
           <span class="text-main-color fw-bold fs-3">solution</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item border-main-color">
                 <a class="nav-link" href="#">
                    <svg class="navbar-nav text-main-color" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M11 39h7.5V26.5h11V39H37V19.5L24 9.75 11 19.5Zm-3 3V18L24 6l16 12v24H26.5V29.5h-5V42Zm16-17.65Z"/></svg>
                 </a>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="position-relative me-auto">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"  fill="currentColor"><path d="M15.45 16.95q.6 0 1.05-.45.45-.45.45-1.05 0-.6-.45-1.05-.45-.45-1.05-.45-.6 0-1.05.45-.45.45-.45 1.05 0 .6.45 1.05.45.45 1.05.45Zm0 8.55q.6 0 1.05-.45.45-.45.45-1.05 0-.6-.45-1.05-.45-.45-1.05-.45-.6 0-1.05.45-.45.45-.45 1.05 0 .6.45 1.05.45.45 1.05.45Zm0 8.55q.6 0 1.05-.45.45-.45.45-1.05 0-.6-.45-1.05-.45-.45-1.05-.45-.6 0-1.05.45-.45.45-.45 1.05 0 .6.45 1.05.45.45 1.05.45ZM9 42q-1.2 0-2.1-.9Q6 40.2 6 39V9q0-1.2.9-2.1Q7.8 6 9 6h23.1l9.9 9.9V39q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h30V17.55h-8.55V9H9v30ZM9 9v8.55V9v30V9Z"/></svg>
             
                <span class="position-absolute top-0 start-50 translate-middle ms-2 p-1 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </span>
              </a>
              
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="position-relative me-auto">
              <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 50 50" fill="currentColor"><path d="M9 42q-1.2 0-2.1-.9Q6 40.2 6 39V9q0-1.2.9-2.1Q7.8 6 9 6h13.95v3H9v30h30V25.05h3V39q0 1.2-.9 2.1-.9.9-2.1.9Zm10.1-10.95L17 28.9 36.9 9H25.95V6H42v16.05h-3v-10.9Z"/></svg>
                <span class="position-absolute top-0 start-50 ms-2 translate-middle badge rounded-pill bg-danger">
                  8
                  <span class="visually-hidden">unread messages</span>
                </span> 
              </span>
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 50 50" fill="currentColor"><path d="M1.9 40v-4.7q0-1.75.9-3.175Q3.7 30.7 5.3 30q3.65-1.6 6.575-2.3Q14.8 27 17.9 27q3.1 0 6 .7t6.55 2.3q1.6.7 2.525 2.125.925 1.425.925 3.175V40Zm35 0v-4.7q0-3.15-1.6-5.175t-4.2-3.275q3.45.4 6.5 1.175t4.95 1.775q1.65.95 2.6 2.35.95 1.4.95 3.15V40Zm-19-16.05q-3.3 0-5.4-2.1-2.1-2.1-2.1-5.4 0-3.3 2.1-5.4 2.1-2.1 5.4-2.1 3.3 0 5.4 2.1 2.1 2.1 2.1 5.4 0 3.3-2.1 5.4-2.1 2.1-5.4 2.1Zm18-7.5q0 3.3-2.1 5.4-2.1 2.1-5.4 2.1-.55 0-1.225-.075T25.95 23.6q1.2-1.25 1.825-3.075.625-1.825.625-4.075t-.625-3.975Q27.15 10.75 25.95 9.3q.55-.15 1.225-.25t1.225-.1q3.3 0 5.4 2.1 2.1 2.1 2.1 5.4ZM4.9 37h26v-1.7q0-.8-.475-1.55T29.25 32.7q-3.6-1.6-6.05-2.15-2.45-.55-5.3-.55-2.85 0-5.325.55T6.5 32.7q-.7.3-1.15 1.05-.45.75-.45 1.55Zm13-16.05q1.95 0 3.225-1.275Q22.4 18.4 22.4 16.45q0-1.95-1.275-3.225Q19.85 11.95 17.9 11.95q-1.95 0-3.225 1.275Q13.4 14.5 13.4 16.45q0 1.95 1.275 3.225Q15.95 20.95 17.9 20.95Zm0 16.05Zm0-20.55Z"/></svg>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="position-relative me-auto">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 50 50" fill="currentColor"><path d="M8 38v-3h4.2V19.7q0-4.2 2.475-7.475Q17.15 8.95 21.2 8.1V6.65q0-1.15.825-1.9T24 4q1.15 0 1.975.75.825.75.825 1.9V8.1q4.05.85 6.55 4.125t2.5 7.475V35H40v3Zm16-14.75ZM24 44q-1.6 0-2.8-1.175Q20 41.65 20 40h8q0 1.65-1.175 2.825Q25.65 44 24 44Zm-8.8-9h17.65V19.7q0-3.7-2.55-6.3-2.55-2.6-6.25-2.6t-6.275 2.6Q15.2 16 15.2 19.7Z"/></svg>
                  <span class="position-absolute top-0 start-50 ms-3 translate-middle badge rounded-pill bg-danger">
                    10
                    <span class="visually-hidden">unread messages</span>
                  </span> 
                </span>
              </a>
            </li>
           </ul>
          <form class="d-flex">
            <input class="form-control me-2 search-icon ms-3" type="search" placeholder="Search solution">
          </form>
            <div class="btn-group">
            <button id="button1" type="button" class="btn btn-sm bg-main-color fw-bold text-ligth">Type class</button>
            <button id="button2" type="button" class="btn btn-sm bg-main-color dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">1</a></li>
              <li><a class="dropdown-item" href="#">2</a></li>
              <li><a class="dropdown-item" href="#">3</a></li>
               <li><a class="dropdown-item" href="#">4</a></li>
               <li><a class="dropdown-item" href="#">5</a></li>
                 <li><a class="dropdown-item" href="#">6</a></li>
                  <li><a class="dropdown-item" href="#">7</a></li>
                   <li><a class="dropdown-item" href="#">8</a></li>
                   <li><a class="dropdown-item" href="#">9</a></li>
                   <li><a class="dropdown-item" href="#">10</a></li>
                  </ul>
                 </div>
             <ul class="navbar-nav px-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img class="profile rounded-circle" src="profile.jpg"> 
              </a>
            </li>
            </ul>
          <div class="btn-group">
            <button id="button1" type="button" class="btn btn-sm bg-main-color fw-bold text-ligth">Add question</button>
            <button id="button2" type="button" class="btn btn-sm bg-main-color dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </div>
        </div>
        </nav>
</body>



<style>
  :root{
    --main-color:#221a94d8;
    --main-color:#221a94d8;
    --white:#ffffff;
    --dropdown-radius: 50px;
    --dropdown-radius:50px;

    

}
.text-main-color{
    color:var(--main-color)
}

.bg-main-color{
    background-color: var(--main-color);
}
.border-main-color{
    border-bottom-style:solid;
    border-width: 4px;
    border-color: var(--main-color);

}
.nav-item svg {
    width: 45px;
    height: 45px;
    padding:5px;
    color: blue;

}
.search-icon{
    padding-left: 25px;
    background: url("search_FILL0_wght400_GRAD0_opsz48.png") no-repeat left;
    background-size: 20px;
}
.profile{
    width: 45px;
    height: 45px;
    padding:7px;
}
#button1{
    border-bottom-left-radius: var(--dropdown-radius);
    border-top-left-radius: var(--dropdown-radius);
    color: white;
}
#button2{
    border-bottom-right-radius: var(--dropdown-radius);
    border-top-right-radius: var(--dropdown-radius);
    border-left-style: solid;
    border-left-color: rgb(83, 83, 83);
    border-width: 1px;
    color: white;
}
#button3{
    border-bottom-left-radius: var(--dropdown-radius);
    border-top-left-radius: var(--dropdown-radius);
    color: white;
}
#button4{
    border-bottom-right-radius: var(--dropdown-radius);
    border-top-right-radius: var(--dropdown-radius);
    border-left-style: solid;
    border-left-color: rgb(83, 83, 83);
    border-width: 1px;
    color: white;
}

</style>