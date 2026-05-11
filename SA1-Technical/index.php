<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="header-content">
            <h1>Student Registration Form</h1>
            <p>Far Eastern University - Institute of Technology</p>
        </div>
    </div>

    <div class="container">
        <?php
            $fullName = "Jovs Francis P. Caburao";
            $dateOfBirth = "2004-05-13";
            $age = "21";
            $gender = "Male";
            $nationality = "Filipino";
            $email = "jpcaburao@fit.edu.ph";
            $contactNumber = "+63-391-2005-452";
            
            $guardianName = "Dorisa Caburao";
            $relationship = "Mother";
            $guardianContact = "+63-989-6789-902";
            $emergencyContact = "+63-928-1234-241";
            
            $studentNumber = "2024-10383";
            $program = "BS Information Technology";
            $yearLevel = "2nd Year";
            $section = "CCS0043L";
            $entryType = "Regular";
            $enrollmentStatus = "Active";

            echo "<div class='form-container'>";
            
            // STUDENT INFORMATION SECTION
            echo "<div class='form-section'>";
            echo "<h2 class='section-title'>Student Information</h2>";
            echo "<div class='form-row'>";
            echo "<div class='form-col'>";
            echo "<label>Full Name</label>";
            echo "<p class='info-display'>" . ucwords(strtolower($fullName)) . "</p>";
            echo "</div>";
            echo "<div class='form-col'>";
            echo "<label>Date of Birth</label>";
            echo "<p class='info-display'>" . $dateOfBirth . "</p>";
            echo "</div>";
            echo "<div class='form-col'>";
            echo "<label>Age</label>";
            echo "<p class='info-display'>" . $age . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col'>";
            echo "<label>Gender</label>";
            echo "<p class='info-display'>" . ucfirst(strtolower($gender)) . "</p>";
            echo "</div>";
            echo "<div class='form-col'>";
            echo "<label>Nationality</label>";
            echo "<p class='info-display'>" . ucfirst(strtolower($nationality)) . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col full-width'>";
            echo "<label>Contact Information (Email)</label>";
            echo "<p class='info-display'>" . strtolower($email) . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col full-width'>";
            echo "<label>Contact Number</label>";
            echo "<p class='info-display'>" . $contactNumber . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
            // PARENT/GUARDIAN INFORMATION SECTION
            echo "<div class='form-section'>";
            echo "<h2 class='section-title'>Parent / Guardian Information</h2>";
            echo "<div class='form-row'>";
            echo "<div class='form-col full-width'>";
            echo "<label>Parent/Guardian Name(s)</label>";
            echo "<p class='info-display'>" . ucwords(strtolower($guardianName)) . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col full-width'>";
            echo "<label>Relationship to Student</label>";
            echo "<p class='info-display'>" . ucfirst(strtolower($relationship)) . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col full-width'>";
            echo "<label>Contact Information (Phone, Email)</label>";
            echo "<p class='info-display'>" . $guardianContact . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col full-width'>";
            echo "<label>Emergency Contact Information</label>";
            echo "<p class='info-display'>" . $emergencyContact . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
            // EDUCATION INFORMATION SECTION
            echo "<div class='form-section'>";
            echo "<h2 class='section-title'>Education Information</h2>";
            echo "<div class='form-row'>";
            echo "<div class='form-col'>";
            echo "<label>Student Number</label>";
            echo "<p class='info-display'>" . $studentNumber . "</p>";
            echo "</div>";
            echo "<div class='form-col'>";
            echo "<label>Program</label>";
            echo "<p class='info-display'>" . strtoupper($program) . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col'>";
            echo "<label>Year Level</label>";
            echo "<p class='info-display'>" . $yearLevel . "</p>";
            echo "</div>";
            echo "<div class='form-col'>";
            echo "<label>Section</label>";
            echo "<p class='info-display'>" . $section . "</p>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='form-row'>";
            echo "<div class='form-col'>";
            echo "<label>Entry Type</label>";
            echo "<p class='info-display'>" . ucfirst(strtolower($entryType)) . "</p>";
            echo "</div>";
            echo "<div class='form-col'>";
            echo "<label>Enrollment Status</label>";
            echo "<p class='info-display'>" . ucfirst(strtolower($enrollmentStatus)) . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
            echo "</div>";
        ?>
    </div>
</body>
</html>
