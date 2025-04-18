<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Hi, I am Lior Porath! Feel free to get to know me on this page.'>
    <link rel="icon" type="image/x-icon" href="portrait.ico">
    <title>Lior Porath | Home</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <a class="logo-text" href="https://www.liorporath.ch">Lior Porath</a>
            <div class="header-link-container">
                <a href="#education" class="header-link">Education</a>
                <a href="#professional-experience" class="header-link">Professional Experience</a>
                <a href="#projects" class="header-link">Projects</a>
                <a href="#skills" class="header-link">Skills</a>
                <a href="#contact" class="header-link">Contact</a>
            </div>
            <div class="dropdown">
                <ion-icon onclick="dropDown();" name="reorder-three-outline"></ion-icon>
            </div>
            <div class="dropdown-list">
                <div>
                    <a href="#education" class="header-link">Education</a>
                    <a href="#professional-experience" class="header-link">Professional Experience</a>
                    <a href="#projects" class="header-link">Projects</a>
                    <a href="#skills" class="header-link">Skills</a>
                    <a href="#contact" class="header-link">Contact</a>
                </div>
                <button class="action-btn">
                    <ion-icon onclick="dropDown();" name="close-outline" class="close"></ion-icon>
                </button>
            </div>
        </div>
        <div class="start-view">
            <div class="start-left">
                <img src="portrait.jpeg" alt="pfp" class="pfp">
                <h1 class="start-title">Hi, I am Lior<br>Porath 👋</h1>
                <p class="start-desc">I am a student highly interested in engineering, software, writing and design 🪄 </p>
                <a href="#contact" class="action-btn">Contact</a>
            </div>
            <img src="titelbild.png" alt="" class="highlight">
        </div>
        <div class="blob start-blob"></div>
        <div class="section" id="education">
            <h1 class="section-title">Education</h1>
            <div class="edu-flex">
                <img src="Enge.png" alt="enge" class="edu-img">
                <div class="edu-text right">
                    <h1 class="school-title">Kantonsschule Enge</h1>
                    <p class="school-desc">2020 - 2024</p>
                    <div class="school-achievements">
                        <p class="achievement">Graduated Top of Class 2024 (Average Grade of 5.62)</p>
                        <p class="achievement">Award-Winning Final Project</p>
                        <p class="achievement">Economics & Law Profile with English immersion</p>
                        <p class="achievement">Member of School Tech Support</p>
                    </div>
                    <div class="blob enge-blob"></div>
                </div>
            </div>
            <div class="edu-flex">
                <img src="UZH.jpeg" alt="uzh" class="edu-img">
                <div class="edu-text left">
                    <h1 class="school-title">University of Zurich, Program for Upper Secondary Students</h1>
                    <p class="school-desc">2022 - 2023</p>
                    <div class="school-achievements">
                        <p class="achievement">Admission due to excellent grades</p>
                        <p class="achievement">Attended Astronomy and Corporate Governance lectures</p>
                    </div>
                </div>
            </div>
            <div class="edu-flex">
                <img src="ETH.jpeg" alt="eth" class="edu-img">
                <div class="edu-text right">
                    <h1 class="school-title">ETH Zurich</h1>
                    <p class="school-desc">Starting in Summer 2025</p>
                    <div class="school-achievements">
                        <p class="achievement">BSc in Electrical Engineering and Information Technology</p>
                    </div>
                    <div class="blob eth-blob"></div>
                </div>
            </div>
        </div>
        <div class="section" id="professional-experience">
            <h1 class="section-title" style="text-align: left;">Professional Experience</h1>
            <div class="edu-flex">
                <div class="profession-text-left">
                    <h1 class="school-title">Internship in Systems Engineering & Administration</h1>
                    <p class="school-desc">EBPI, University of Zurich</p>
                    <div class="school-achievements">
                        <p style="font-size: 17px; line-height: 1.3">I have developed solutions to manage and improve the accessibility and quality of IT systems relevant to 300+ professionals, including scientists and medical staff. Additionally, I have ensured frictionless processes in a clinic distributing over 5000 vaccine doses monthly.</p>
                    </div>
                </div>
                <div class="profession-text-right">
                    <p class="exp-year">2024</p>
                    <div class="blob ebpi-blob"></div>
                </div>
            </div>
            <div class="edu-flex normal">
                <div class="profession-text-left">
                    <h1 class="school-title">Private Tutor</h1>
                    <p class="school-desc">Self-Employed</p>
                    <div class="school-achievements">
                        <p style="font-size: 17px; line-height: 1.3">I have supervised numerous students in multiple subjects and improved their performance at school. Here, I have learned important interpersonal skills that will help me at every future job.</p>
                    </div>
                </div>
                <div class="profession-text-right">
                    <p class="exp-year">2023 - 2024</p>
                </div>
            </div>
            <div class="edu-flex">
                <div class="profession-text-left">
                    <h1 class="school-title">Tech Support</h1>
                    <p class="school-desc">Kantonsschule Enge</p>
                    <div class="school-achievements">
                        <p style="font-size: 17px; line-height: 1.3">I have assisted both teachers and students in solving their technological problems and ensured a stable digital environment in classrooms. Here, I have improved my IT and my problem-solving skills.</p>
                    </div>
                    <div class="blob tech-blob"></div>
                </div>
                <div class="profession-text-right">
                    <p class="exp-year">2020 - 2024</p>
                </div>
            </div>
        </div>
        <div class="section" id="projects">
            <h1 class="section-title">Projects</h1>
            <div class="big-project">
                <img src="acqu.png" alt="scalearn" class="big-image">
                <h1 class="project-title">Acquirable</h1>
                <p class="project-desc">Lifelong learning is amazing! I believe that anyone can learn anything with the right guidance. Acquirable supports you on your journey of lifelong learning with fascinating articles. </p>
                <div class="project-actions">
                    <a href="https://acquirable.ch" target="_blank" class="action-btn">Explore Articles</a>
                    <a target="_blank" href="https://instagram.com/notesbylior" class="action-btn">See on Instagram</a>
                    <a target="_blank" href="https://github.com/lior-acqu/acquirable" class="action-btn">GitHub Repository</a>
                </div>
            </div>
            <div class="big-project">
                <img src="titelbild.png" alt="scalearn" class="big-image">
                <h1 class="project-title">Scalearn</h1>
                <p class="project-desc">An award-winning full-stack academic performance application for mobile phones.</p>
                <div class="project-actions">
                    <a href="/scalearn" class="action-btn">View Project</a>
                    <a target="_blank" href="https://github.com/lior-acqu/ma-app" class="action-btn">GitHub Repository</a>
                </div>
            </div>
            <div class="project-flex">
                <div class="small-project">
                    <img src="cuteenc.png" alt="scalearn" class="big-image">
                    <h1 class="project-title">Cute Encryption</h1>
                    <p class="project-desc">Cute Encryption is a simple encryption algorithm invented to easily and quickly encrypt and decrypt strings.</p>
                    <div class="project-actions">
                        <a target="_blank" href="https://github.com/lior-acqu/cute-encryption" class="action-btn">GitHub Repository</a>
                    </div>
                </div>
                <div class="small-project">
                    <img src="Typewriter.png" alt="scalearn" class="big-image">
                    <h1 class="project-title">Scribe</h1>
                    <p class="project-desc">A website where learning how to type quickly becomes fun and easy. Test and improve your typing speed now!</p>
                    <div class="project-actions">
                        <a target="_blank" href="https://liorporath.ch/typewriter" class="action-btn">Try it Yourself</a>
                    </div>
                </div>
            </div>
            <div class="project-flex">
                <div class="small-project">
                    <img src="C2EX.png" alt="scalearn" class="big-image">
                    <h1 class="project-title">C2EX</h1>
                    <p class="project-desc">Would you like to improve your English vocabulary? With C2EX, you can look up unknown words instantly and load them into the learning platform Anki.</p>
                    <div class="project-actions">
                        <a target="_blank" href="https://github.com/lior-acqu/c2ex-extension" class="action-btn">GitHub Repository</a>
                    </div>
                </div>
                <div class="small-project">
                    <img src="bookapp.png" alt="scalearn" class="big-image">
                    <h1 class="project-title">Hablitude</h1>
                    <p class="project-desc">A fun reading habit tracker allowing you to track reading habits and share books with friends.</p>
                    <div class="project-actions">
                        <a href="/hablitude" class="action-btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="skills">
            <h1 class="section-title" style="text-align: left; margin-bottom: 20px;">Skills</h1>
            <div class="edu-flex">
                <div class="profession-text-left">
                    <h1 class="school-title">Software Development</h1>
                    <p class="school-desc">React Native / Node.js / Express.js / MongoDB / Python / HTML / CSS / SASS / JavaScript</p>
                </div>
                <div class="profession-text-right">
                    <div class="blob software-blob"></div>
                </div>
            </div>
            <div class="edu-flex normal">
                <div class="profession-text-left">
                    <h1 class="school-title">Other Technologies</h1>
                    <p class="school-desc">Adobe Illustrator & XD / Figma / LaTeX / Microsoft Office</p>
                </div>
                <div class="profession-text-right">
                    <img src="light-bulb.png" alt="light-bulb" class="skill-img" id="light-bulb">
                </div>
            </div>
            <div class="edu-flex">
                <div class="profession-text-left">
                    <h1 class="school-title">Languages</h1>
                    <p class="school-desc">German (native) / English (C2) / French (B2) / Polish (basics)</p>
                </div>
            </div>
            <div class="edu-flex">
                <div class="profession-text-left">
                    <h1 class="school-title">Interests</h1>
                    <p class="school-desc">Engineering (Software & Electrical) / Writing / Literature / Classical Music / Badminton / Philosophy / Design</p>
                </div>
                <div class="profession-text-right">
                    <div class="blob other-blob"></div>
                </div>
            </div>
        </div>
        <div class="section" id="contact">
            <h1 class="section-title">Contact</h1>
            <div class="social-flex">
                <a target="_blank" href="https://www.linkedin.com/in/liorporath/" class="action-btn">LinkedIn</a>
                <a target="_blank" href="https://instagram.com/notesbylior" class="action-btn">Instagram</a>
                <a target="_blank" href="https://github.com/lior-acqu" class="action-btn">GitHub</a>
            </div>
            <form method="post" action="email.php">
                <div class="form-ipt">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-ipt">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-ipt">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" required>
                </div>
                <div class="form-ipt">
                    <label for="message">Message</label>
                    <textarea style="color: #0b0e1b" rows="3" name="message" id="message" placeholder="Type your message here ..." required></textarea>
                </div>

                <br>
                <div class="send-form">
                    <button class="action-btn" style="cursor: pointer;">Send Message</button>
                </div>
            </form>
            <div class="long-blob"></div>
        </div>
    </div>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>