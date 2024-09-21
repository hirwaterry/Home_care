<?php
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate to Homecare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .donate-container {
            margin-top: 50px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center text-info mb-4">SUPPORTING INDEPENDENCE STARTS WITH YOU</h2>
        <p class="text-center">Sweet Home Care Services relies heavily on the generosity of our community and donations.
            As an organization, we depend on your contributions to continue delivering personalized care and
            life-changing opportunities for individuals with disabilities. By donating, you help us create a more
            inclusive, supportive environment where everyone can thrive</p>
    </div>


    <div class="container mt-4 text-center">
        <h2 class="text-capitalize">Why You Should <span class="text-danger">D<i class="ri-heart-add-2-fill"></i>NATE</span></h2>
    
        <div class="video-container mt-4">
            <iframe src="./include/img/donate.mp4?autoplay=1&mute=1" title="Donate Video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                style="width: 100%; height: 500px; border-radius: 10px;"></iframe>
        </div>
    </div>
    



    <div class="container donate-container">


        <form>
            <h2 class="text-capitalize"><span class="text-danger">D<i class="ri-heart-add-2-fill"></i>NATE</span> Form</h2>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Donation Amount (USD)</label>
                <input type="number" class="form-control" id="amount" placeholder="Enter Amount" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Comment</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Your message..."></textarea>
            </div>
            <button type="submit" class="btn btn-danger">D<i class="ri-heart-add-2-fill"></i>nate Now</button>
        </form>
    </div>
    <br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
   include 'include/footer.php';
?>