<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta author="Jake Halloran">
    <title>Personal Site: Jake Halloran</title>
    <link rel="stylesheet" href="./css/projectCSS.css">
  </head>

  <body id="contactBody">
    <header id="header">
      <div id="titleNavBox">
        <div id="titleDiv">
          <h1 class="title-text">
            Jake Halloran <br>Programmer and UPITT Student
          </h1>
        </div>

        <div id="navId">
          <nav>
            <ul>
              <li id="navBar">
                <a href="index.php"> Home </a>
                <a href="resume.php"> Resume </a>
                <a href="contact.php"> Contact </a>
                <a href="https://github.com/j-Halloran"> GitHub </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>


    <!--Definitely the sparsest part of the site, sorry-->
    <div id="aboutButtons">
      <button type="button" class="about-button" id="intro" name="intro" >Personal Info</button>
      <button type="button" class="about-button" id="languages" name="languages">Education</button>
      <button type="button" class="about-button" id="interests" name="interests">Interests</button>
    </div>

    <div id="contentHolder">
      <div id="mainContent">
        <div id="introDiv" class="about-container-div">
          <div id="cathyContainer" class="image-container">
            <img src="./images/cathy.jpg" alt="The Cathedral of Learning" id="cathyPic"></img>
          </div>

          <p class="content-para">
            I am Jake Halloran, a computer engineering student at the University of Pittsburgh. I am a
            senior according to credits but only in my third year of school. The buttons at the top
            make new content appear meaning this page has slightly more than the zero content it seems
            to contain.
          </p>
        </div>

        <div id="languagesDiv" class="about-container-div">
          <div id="languagesPicture" class = "image-container">
            <img src="./images/coding.jpg" alt="Coding Brain Picture" id="codingPic"></img>
          </div>

          <p class = "content-para">
            I have experience in C, C++, Python, Java, Matlab, JavaScript, and jQuery.<br>
            Additionally, I am experienced in Linux, Unix, and Windows and many applications for each.
          </p>
        </div>

        <div id="classesDiv" class="about-container-div">
          <div id="languagesPicture" class = "image-container2">
            <img src="./images/algor.jpg" alt="Coding Screenshot" id="designPic"></img>
          </div>

          <p class = "content-para">
            While at Pitt, I have taken classes in Algorithms, Data Structures, Web Design, Computer
            Architecture, Operating Systems, and Electronic Design. Additionally, Through clubs such as
            Design Hub I have been fully exposed to a top to bottom design process and am very experienced
            in end to end product development.
          </p>
        </div>

        <div id="otherInterests" class = "about-container-div1">
          <div id="searchHolder">
            <p id="searchPara">Enter a category to see my favorite things:</p>
            <div id="interestsFormHolder">
              <div id="interestsForm">
                <form name="interest-form" method="get" action="/" id="interestsForm">
                    <input type="text" name="search" id="searchBar" placeholder="Search..">
                </form>
              </div>
            </div>
            <p id="intResponsePara"></p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./js/project2_about.js"></script>
  </body>
</html>
