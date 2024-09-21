Homecare Website
This project is a responsive website built for a Homecare service, designed using HTML, CSS, Bootstrap, and PHP. It includes features like a donation page, a contact page, and various informational sections, with a focus on user-friendly design and accessibility.

Table of Contents
Project Overview
Features
Technologies Used
Installation
Usage
File Structure
Contributing
License
Project Overview
The Homecare website allows visitors to easily navigate through different sections, such as:

Programs: A detailed view of the services offered by the organization.
Donate: A section where users can learn why they should donate, with an embedded video and donation features.
Contact Us: Provides information about the company's location, phone number, email, and an embedded Google Map.
Footer: Contains social media links and company information.
Features
Responsive Design: Fully responsive for desktop and mobile devices using Bootstrap 5.
Program Dropdown: Interactive dropdown menu for "Programs" with multiple services listed.
Donation Video: An embedded video encouraging users to donate, featuring autoplay and a custom design.
Contact Section: Includes a Google Map, company information, and contact details.
Social Media Integration: Social media icons linking to various platforms, designed with remixicon.
Technologies Used
Frontend: HTML5, CSS3, Bootstrap 5
Backend: PHP (for server-side scripting and database connection)
Database: MySQL (Connected via PHP)
Icons: RemixIcon, Font Awesome
Version Control: Git
Installation
Clone the repository:

bash
Copy code
git clone https://github.com/your-username/homecare-website.git
Navigate to the project directory:

bash
Copy code
cd homecare-website
Ensure you have a local server environment set up with PHP and MySQL (e.g., XAMPP, WAMP, or LAMP).

Create a MySQL database named homecare and import the database schema using the provided SQL file (if available).

Set up the database connection by editing the config.php file with your database credentials:

php
Copy code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homecare";
Start the server, and you should now be able to navigate to localhost/homecare-website in your browser.

Usage
Homepage: Users can explore the Homecare services, learn about the organization, and donate via the donation section.
Donate Page: Watch an embedded video about why to donate and proceed to the donation action.
Contact Page: View the company’s contact details and location on Google Maps.
File Structure
Here’s a simplified view of the project’s file structure:

makefile
Copy code
homecare-website/
│
├── include/
│   ├── img/
│   │   └── donate.mp4
│   ├── config.php         # Database connection file
│   └── header.php         # Common header for pages
│
├── index.php              # Homepage
├── donate.php             # Donate page
├── contact.php            # Contact page
├── navbar.php             # Navigation bar file
├── footer.php             # Footer file
└── README.md              # Documentation
Contributing
Contributions are welcome! To contribute:

Fork the repository.
Create a new branch for your feature or bug fix:
bash
Copy code
git checkout -b feature-name
Commit your changes:
bash
Copy code
git commit -m "Add feature"
Push to the branch:
bash
Copy code
git push origin feature-name
Open a Pull Request.
License
This project is licensed under the MIT License. See the LICENSE file for details.
