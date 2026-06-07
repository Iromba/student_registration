<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Mzumbe Secondary School - Registration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- Including jQuery via Google CDN as instructed in Lecture 5 -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <div id="container">
        <div id="header">
            <h1>High School Student Registration System</h1>
            <p>Strict XHTML compliance with dynamic asynchronous architecture.</p>
        </div>

        <div id="form-section">
            <h2>Add New Student</h2>
            <div id="status-message"></div>
            
            <!-- Secure Form passing data via POST method -->
            <form id="regForm" action="process.php" method="post">
                <div>
                    <label for="reg_number">Registration Number:</label>
                    <input type="text" id="reg_number" name="reg_number" />
                </div>
                <div>
                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" />
                </div>
                <div>
                    <label for="school_class">Class:</label>
                    <input type="text" id="school_class" name="school_class" />
                </div>
                <div>
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <input type="submit" id="submitBtn" value="Register Student" />
                </div>
            </form>
        </div>
    </div>

    <!-- Custom Script placed at the bottom for performance optimization -->
    <script type="text/javascript" src="app.js"></script>
</body>
</html>