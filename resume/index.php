<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Jovs Francis P. Caburao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    // Variable for firstname
    $firstname = 'Jovs Francis';
    
    // Variable for lastname
    $lastname = 'P. Caburao';
    
    // Variable for professional title
    $title = 'Bachelor of Science in Information Technology Student';
    
    // Variable for email
    $email = 'caburaojovs@gmail.com';
    
    // Variable for phone
    $phone = '+63 956 702 9735';
    
    // Variable for address
    $address = 'Quezon City, Philippines';
    
    // Variable for professional summary
    $summary = 'Dedicated Bachelor of Science in Information Technology student specializing in Web and Mobile Application Development. Experienced in developing full-stack web applications and collaborative mobile solutions. Proficient in PHP, JavaScript, Python, and Java with demonstrated expertise in building responsive web platforms such as DocPlant and Healthmate App. Committed to delivering user-centric, high-quality digital solutions that solve real-world problems.';
    
    // Variable for section headers
    $section_education = 'EDUCATION';
    $section_skills = 'SKILLS';
    $section_certifications = 'CERTIFICATIONS';
    $section_experience = 'EXPERIENCE';
    
    // Arrays for skills
    $technical_skills = array('PHP', 'HTML', 'CSS', 'JavaScript', 'MySQL','Git', 'Python', 'Java');
    $soft_skills = array('Problem Solving', 'Communication', 'Team Collaboration', 'Time Management');
    
    // Array for certifications
    $certifications = array(
        array('name' => 'Information Technology Specialist - Java', 'issuer' => 'Certiport'),
        array('name' => 'Information Technology Specialist - JavaScript', 'issuer' => 'Certiport'),
        array('name' => 'Information Technology Specialist - Python', 'issuer' => 'Certiport'),
    );
    
    // Variable for section headers
    $section_languages = 'LANGUAGES';
    $section_projects = 'PROJECTS';
    $section_interests = 'INTERESTS';
    
    // Array for languages
    $languages = array('Filipino', 'English',);
    
    // Array for projects
    $projects = array(
        array('title' => 'Personal Portfolio Website', 'description' => 'Created a responsive portfolio website using HTML, CSS, and PHP to showcase academic projects and skills.'),
        array('title' => 'DocPlant', 'description' => 'Collaborative project developed with groupmates. A comprehensive document management and plant care tracking application with intuitive user interface and database integration.'),
        array('title' => 'Healthmate App', 'description' => 'Group project designed to help users track health metrics and wellness goals. Features real-time data monitoring, health recommendations, and user-friendly dashboard.')
    );
    
    // Array for interests
    $interests = array('Web Development', 'Mobile App Development', 'UI/UX Design', 'Open Source Contribution');
?>

    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1><?php echo $firstname . ' ' . $lastname; ?></h1>
            <p><?php echo $title; ?></p>
            <div class="contact-info">
                <span>📧 <?php echo $email; ?></span>
                <span>📞 <?php echo $phone; ?></span>
                <span>📍 <?php echo $address; ?></span>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="content">
            
            <!-- Professional Summary -->
            <section>
                <h2>PROFESSIONAL SUMMARY</h2>
                <div class="section-content">
                    <p><?php echo $summary; ?></p>
                </div>
            </section>
            
            <!-- Education Section -->
            <section>
                <h2><?php echo $section_education; ?></h2>
                <div class="section-content">
                    <div class="item">
                        <div class="item-title">Bachelor of Science in Information Technology</div>
                        <div class="item-subtitle">Far Eastern University Institue of Technology | 2024 - 2028</div>
                        <div class="item-description">Department of Computer Studies, Web and Mobile Development</div>
                    </div>
                </div>
            </section>
            
            <!-- Technical Skills Section -->
            <section>
                <h2><?php echo $section_skills; ?></h2>
                <div class="section-content">
                    <p style="margin-bottom: 15px;"><strong>Technical Skills:</strong></p>
                    <div class="skills-grid">
                        <?php
                            foreach($technical_skills as $skill) {
                                echo '<div class="skill-tag">' . $skill . '</div>';
                            }
                        ?>
                    </div>
                    
                    <p style="margin-top: 20px; margin-bottom: 15px;"><strong>Soft Skills:</strong></p>
                    <div class="skills-grid">
                        <?php
                            foreach($soft_skills as $skill) {
                                echo '<div class="skill-tag">' . $skill . '</div>';
                            }
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- Certifications Section -->
            <section>
                <h2><?php echo $section_certifications; ?></h2>
                <div class="section-content">
                    <?php
                        foreach($certifications as $cert) {
                            echo '<div class="item">';
                            echo '<div class="item-title">' . $cert['name'] . '</div>';
                            echo '<div class="item-subtitle">Issued by: ' . $cert['issuer'] . '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </section>
            
            <!-- Experience Section -->
            <section>
                <h2><?php echo $section_experience; ?></h2>
                <div class="section-content">
                    <div class="item">
                        <div class="item-title">Full-Stack Web & Mobile Application Developer</div>
                        <div class="item-subtitle">DocPlant - Group Project | 2024 - 2025</div>
                        <div class="item-description">Developed a comprehensive document management and plant care tracking application. Implemented responsive UI using HTML, CSS, and JavaScript. Built backend logic with PHP and database integration with MySQL. Collaborated with groupmates using Git version control and agile development practices.</div>
                    </div>
                    <div class="item">
                        <div class="item-title">Mobile Health Application Developer</div>
                        <div class="item-subtitle">Healthmate App - Collaborative Project | 2024 - 2025</div>
                        <div class="item-description">Designed and developed a health tracking application with real-time data monitoring and personalized health recommendations. Implemented user authentication, dashboard analytics, and responsive mobile-first design. Utilized PHP, JavaScript, and database optimization for performance and scalability.</div>
                    </div>
                    <div class="item">
                        <div class="item-title">Web Developer & Designer</div>
                        <div class="item-subtitle">Personal Portfolio Website | 2024 - Present</div>
                        <div class="item-description">Created a professional portfolio website to showcase web development projects and technical skills. Implemented modern design principles, responsive layouts, and PHP-driven dynamic content.</div>
                    </div>
                </div>
            </section>
            
            <!-- Languages Section -->
            <section>
                <h2><?php echo $section_languages; ?></h2>
                <div class="section-content">
                    <div class="skills-grid">
                        <?php
                            foreach($languages as $lang) {
                                echo '<div class="skill-tag">' . $lang . '</div>';
                            }
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- Projects Section -->
            <section>
                <h2><?php echo $section_projects; ?></h2>
                <div class="section-content">
                    <?php
                        foreach($projects as $project) {
                            echo '<div class="item">';
                            echo '<div class="item-title">' . $project['title'] . '</div>';
                            echo '<div class="item-description">' . $project['description'] . '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </section>
            
            <!-- Interests Section -->
            <section>
                <h2><?php echo $section_interests; ?></h2>
                <div class="section-content">
                    <div class="skills-grid">
                        <?php
                            foreach($interests as $interest) {
                                echo '<div class="skill-tag">' . $interest . '</div>';
                            }
                        ?>
                    </div>
                </div>
            </section>
            
        </div>
        
        <div class="footer">
            <p><?php echo 'Last Updated: ' . date('F d, Y'); ?></p>
        </div>
    </div>

</body>
</html>