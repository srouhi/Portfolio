<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shaghayegh Rouhi (Shay) | Portfolio</title>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/scripts.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
    <script>
        if (window.location.hash) {
            history.replaceState(null, null, window.location.pathname);
        }
    </script>

        <!--top bar-->
        <header class="topBar">
        <div class="socialLinks">
            <a href="https://github.com/srouhi" target="_blank">
                <i style="font-size:24px" class="fa fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/Shay-shaghayegh-rouhi-aba3892a1" target="_blank">
                <i style="font-size:24px" class="fa">&#xf08c;</i>
            </a>
            <a href="mailto:srouhi2@huskers.unl.edu">
                <i style="font-size:24px" class="fa fa-envelope"></i>
            </a>
        </div>

            <!--menu icon-->
        <div class="menu-icon container" onclick="toggleMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
            
        </header>
        <!--Central time -->
        <div class="time-display">
            <p id="time"></p>
            <?php
                date_default_timezone_set('America/Chicago'); 
                echo "<p></p>"; 
                echo "<br>" ;                          
                echo "<h4>&nbsp;&nbsp;&nbsp;" . date("l, F jS") . "<br>\r\n";
                echo "&nbsp;&nbsp;&nbsp;" . date("g:ia") . "</h4>\r\n";
            ?>
        </div>
        <!-- light/dark mode -->
        <div class="theme-toggle" id="theme-toggle" title="Toggle theme">
            <button onclick="toggleLightMode()" id="lightModeButton">
                <i class="fa fa-moon-o"></i>
            </button>
        </div>

        <!--menu-->
        <div id="menu" class="menu">
            <ul>
                <li><a href="#home" onclick="closeMenuAndScroll('#home')">Home</a></li>
                <li><a href="#about" onclick="closeMenuAndScroll('#about')">About Me</a></li>
                <li><a href="#projects" onclick="closeMenuAndScroll('#projects')">Projects</a></li>
                <li><a href="#experience" onclick="closeMenuAndScroll('#experience')">Experience</a></li>
                <li><a href="#research" onclick="closeMenuAndScroll('#research')">Research</a></li>
                <li><a href="#resume" onclick="closeMenuAndScroll('#Resume')"> Resume</a></li>
                <li><a href="#skills" onclick="closeMenuAndScroll('#skills')">Skills</a></li>
                <li><a href="#contact" onclick="closeMenuAndScroll('#contact')">Contact Me</a></li>
                
            </ul>    
        </div>

        <!--content-->
        <main>
        <section id="home" class="home-section">
            <div class="text-container">
                <h1>Shaghayegh Rouhi</h1>
                <p id="typewriter-text"></p>
                <a href="#about" class="see-more-link">See more about me →</a>
            </div>
            <div class="profile-image">
                <div class="circle">
                    <img src="img/image.webp" alt="Shay Rouhi" class="profile-pic">
                </div>
            </div>
        </section>
        </main>

        <!--sections-->
        <section id="about">
            <h2>About Me</h2>
            <p> I’m Shaghayegh Rouhi, but I usually go by Shay. I’m currently pursuing a Bachelor's degree in Data Science at the University of Nebraska-Lincoln, with minors in Statistics, Mathematics, Computer Science, and Economics. I’m passionate about applying machine learning techniques to solve complex problems, particularly in areas like data modeling and predictive analytics. <br>
                In addition to my academic work, I enjoy exploring web development as a way to bring my data science projects to life and create user-friendly solutions. I’m always excited to learn new technologies and enhance my skills to tackle real-world challenges.<br>
                As I work toward my degree, I’ve had the opportunity to gain hands-on experience through various projects and internships, where I’ve honed my problem-solving, programming, and analytical skills. <br>
                Feel free to explore my projects and reach out if you'd like to collaborate or learn more!</p>
                
        </section>
    
        <section id="projects">
            <h2>Projects</h2>
        
            <button class="accordion"> ML- RealEstateXCounty </button>
            <div class="panel">
                <p>This project applies machine learning to analyze whether smaller county assessor’s offices should rely on real estate data from larger counties or their own local data. The model uses features like square footage, number of bedrooms, and location to predict how long it takes for a property to sell.</p>
                <p>Technologies Used:
                    <ul>
                        <li>Python, Scikit-learn, Pandas, NumPy</li>
                        <li>Data cleaning, feature engineering, and model evaluation (MAE, RMSE)</li>
                    </ul>
                </p>
                <p>The project aims to assist county offices in making more informed decisions about data usage.</p>
                <p>Check out here for more information: <a href="https://github.com/srouhi" target="ML-RealEstateXCounty">ML-RealEstateXCounty</a></p>
            </div>

            <!--accordion-->
            <button class="accordion"> ML - Training from Scratch </button>
            <div class="panel">
                <p>This project demonstrates the process of training a FeedForward Neural Network (FNN) from scratch, without relying on deep learning libraries. The notebook walks through the mathematical principles of FNNs, implementing gradient descent and backpropagation for a neural network with a single hidden layer and adjustable nodes.</p>
                <p>Technologies Used:
                    <ul>
                        <li>Python, NumPy, Matplotlib</li>
                        <li>Neural Networks, Backpropagation, Gradient Descent</li>
                    </ul>
                </p>
                <p>Check out here for more information: <a href="https://github.com/srouhi" target="ML - Training from Scratch">ML - Training from Scratch</a></p>
            </div>
        
            <button class="accordion">Project 3</button>
            <div class="panel">
                <p>Project 3 is coming soon</p>
            </div>
        </section>

        <!--experience-->
        <section id="experience">
            <h2>Experience</h2>
            
            <div class="experience-item">
              <h3>UCARE Research, University of Nebraska-Lincoln</h3>
              <p><strong>Research Assistant</strong> | September 2024 – Present</p>
              <ul>
                <li>Developed nonlocal analytical models for irregular data using nonlocal derivatives, enhancing the scalability and accuracy of existing methods.</li>
                <li>Conducted numerical convergence studies in MATLAB and Python to validate model effectiveness.</li>
                <li>Integrated machine learning techniques to predict outcomes on large datasets, improving model accuracy.</li>
              </ul>
            </div>
            
            <div class="experience-item">
              <h3>Nebraska Department of Transportation (NDOT)</h3>
              <p><strong>Data Analyst Intern</strong> | May 2024 – Present</p>
              <ul>
                <li>Developed a machine learning model to detect sidewalks using internal street view and aerial imagery, integrating the results into GIS layers for urban planning.</li>
                <li>Created a PowerBI dashboard to provide real-time analytics for key department metrics, enhancing data-driven decision-making.</li>
                <li>Built a predictive statistical model with multiple linear regression in R Studio to forecast future federal performance measures.</li>
                <li>Performed data cleaning, weather performance analysis, and data visualization in R, Python, GIS, and Tableau to support operational improvements.</li>
              </ul>
            </div>
            
            <div class="experience-item">
              <h3>Microeconomics Learning Assistant and Tutor</h3>
              <p><strong>Lincoln, NE</strong> | January 2024 – August 2024</p>
              <ul>
                <li>Led weekly and exam review sessions to enhance student understanding of course materials.</li>
                <li>Collaborated with faculty to improve course management, grading, and student communication.</li>
                <li>Assisted students through in-person and virtual meetings, addressing their academic challenges.</li>
              </ul>
            </div>
        </section>

        <!--research-->
        <section id="research">
            <div class="research-section">
            <h2> Research </h2>
            <p> In this research, I explore nonlocal approaches to training neural networks, 
                specifically focusing on improving the training process by addressing limitations in 
                conventional activation functions, such as the ReLU (Rectified Linear Unit). 
                ReLU has been widely used due to its simplicity, but it poses issues like instability 
                and dead neurons due to its discontinuity at zero. By introducing nonlocal derivatives, 
                which allow for the interaction of data points over a range of values rather than relying 
                solely on local gradients, my work aims to provide smoother, more stable training dynamics 
                for deep learning models. This approach has the potential to improve the convergence rate 
                and overall performance of neural networks, especially in applications involving complex 
                datasets like image recognition.<p>
                <br>
                <p>You can view or download my research poster here. Use zoom controls in your browser to resize.</p>
                <br>
                <a href="#" id="viewResearch" class="btn">View Poster</a>
                <a href="img/Research-Rouhi.pdf" download="Nonlocal_Approaches_NN_Poster.pdf" class="btn">Download Poster</a>
            </div>
    
            <div id="researchPopup" class="popup">
                <div class="popup-content">
                <span class="close">&times;</span>
                <iframe src="img/Research-Rouhi.pdf" width="100%" height="600px"></iframe>
            </div>
            </div>
            <!--showed poster-->
            <div style="max-width: 500px; margin: 0 auto; overflow: hidden; padding: 5px; background-color: rgb(212, 198, 243); border: 1px solid #000; border-radius: 10px;">
                <iframe 
                    src="img/Research-Rouhi.pdf" 
                    width="100%" 
                    height="300px" 
                    style="border: none;"
                    title="Shaghayegh Rouhi Research">
                </iframe>
            </div>

          </section>

          <!--resume-->
        <section id="resume">
            <div class="resume-section">
            <h2> Resume </h2>
            <p> You can view or download my resume bellow.</p>

            <br>
                <a href="#" id="viewResume" class="btn">View Resume</a>
                <a href="img/SHAGHAYEGH ROUH.pdf" download="Shaghayegh_Rouhi_Resume.pdf" class="btn">Download Resume</a>
            </div>
    
            <div id="resumePopup" class="popup">
                <div class="popup-content">
                <span class="close">&times;</span>
                <iframe src="img/SHAGHAYEGH ROUH.pdf" width="100%" height="600px"></iframe>
            </div>

          </section>

          <!--skills-->
        <section id="skills">
            <h2>Skills</h2>
            <div class="skills-category"> <br>
                
                <table>
                <tr><td><h4>Programming Languages</h4></td></tr>
                <tr>
                    <td>
                    <div class="skills-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
                        <div class="skill">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python" style="width: 60px; height: 60px;" /> 
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" style="width: 60px; height: 60px;" /> 
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="SQL" style="width: 60px; height: 60px;" /> 
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/r/r-original.svg" alt="R" style="width: 60px; height: 60px;" /> 
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg" alt="C#" style="width: 60px; height: 60px;"/> 
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" style="width: 60px; height: 60px;" /> 
                        </div>
                    </div>
                    </td>
                </tr>

                <tr><td><h4>Machine Learning Frameworks</h4></td></tr>
                <tr>
                    <td>
                    <div class="skills-row"style="display: flex; justify-content: center; flex-wrap: wrap;">
                        <div class="skill">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg" alt="TensorFlow" style="width: 60px; height: 60px;" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/pytorch/pytorch-original.svg" alt="PyTorch" style="width: 60px; height: 60px;" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/scikitlearn/scikitlearn-original.svg" alt="scikit-learn" style="width: 60px; height: 60px;" />
                        </div>
                    </div>
                    </td>
                </tr>
                
                <tr><td><h4>Cloud Platforms</h4></td></tr>
                <tr>
                    <td>
                    <div class="skills-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
                        <div class="skill">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-plain-wordmark.svg" alt="AWS" style="width: 60px; height: 60px;" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/azure/azure-original.svg" alt="Azure" style="width: 60px; height: 60px;" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/azuresqldatabase/azuresqldatabase-original.svg" alt="Azure SQL DB" style="width: 60px; height: 60px;" />
                        </div>
                    </div>
                    </td>
                </tr>
                </table>

            </div>
        </section>


        <!--contact me-->
          <section id="contact">
            <h2>Contact Me</h2>
            
            <p>If you have any questions, want to collaborate, or just want to connect, feel free to reach out to me!</p>
            
            <div class="contact-info">
              <p><strong>Email:</strong> <a href="mailto:srouhi2@huskers.unl.edu">srouhi2@huskers.unl.edu</a></p>
              <!--<p><strong>Phone:</strong> (531) 254-0519</p>-->
              <p><strong>GitHub:</strong> <a href="https://github.com/srouhi" target="_blank">github.com/srouhi</a></p>
              <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/Shay-shaghayegh-rouhi-aba3892a1" target="_blank">linkedin.com/Shay-shaghayegh-rouhi</a></p>
            </div>
          
            <!--link to Contact form page -->
            <div class="contact-info">
                <p>If you'd prefer to send a message directly, <a href="contact-form.html">click here to fill out the contact form.</a></p>
            </div>
            </section>
          
        <!--footer-->
        <footer class="footer">
            <p> Built From Scratch <span class="heart">&#10084;</span> &copy; 2025 Shaghayegh Rouhi ©</p>
        </footer>
        <!--the light/dark mode js-->
        <script>
            function toggleLightMode() {
                const body = document.body;
                const lightModeButton = document.getElementById("lightModeButton");

                body.classList.toggle("light-mode");

                //save mode
                if (body.classList.contains("light-mode")) {
                    localStorage.setItem("theme", "light");
                    lightModeButton.innerHTML = '<i class="fa fa-sun-o"></i>';
                } else {
                    localStorage.setItem("theme", "dark");
                    lightModeButton.innerHTML = '<i class="fa fa-moon-o"></i>';
                }
            }
            //restore on load
            window.onload = function () {
                const savedTheme = localStorage.getItem("theme");
                const body = document.body;
                const lightModeButton = document.getElementById("lightModeButton");

                if (savedTheme === "light") {
                    body.classList.add("light-mode");
                    if (lightModeButton) {
                        lightModeButton.innerHTML = '<i class="fa fa-sun-o"></i>';
                    }
                }
            };
        </script>


        <script src="js/scripts.js"></script>
    </body>
</html>