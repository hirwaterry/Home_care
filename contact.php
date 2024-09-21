<?php
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
    <style>
        body {
            background-image: url('./include/img/owner.jpeg'); /* Replace with your background image URL */
            background-size: cover;
            color: white;
        }
        .contact-info {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }
        .form-section {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2); /* Transparent background for form fields */
            color: white; /* White text for better visibility */
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6); /* Placeholder text color */
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 contact-info">
                <h1>Contact Us</h1>
                <p><i class="ri-map-pin-2-line"></i> <strong>Address:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, optio?</p>
                <p><i class="ri-mail-line"></i> <strong>Email:</strong> thewebdesigner@gmail.com</p>
                <p><i class="ri-phone-line"></i> <strong>Contact Number:</strong> +91 00000000000</p>
            </div>
            <div class="col-md-6">
                <h2>Get in Touch</h2>
                <div class="form-section">
                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="w-100 mt-5">
            <h2 class="text-center">Our Location</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345091393!2d144.95373531531712!3d-37.81720997975168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f2a7b69%3A0xf15c2f2c2f2f2f2!2sYour+Location!5e0!3m2!1sen!2sus!4v1234567890123"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
   include 'include/footer.php';
?>