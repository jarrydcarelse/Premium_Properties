# Premium Properties

**Author:** Jarryd Carelse  
**Contact:** 071 480 8011 | 221267@virtualwindwo.co.za  
**Project Type:** University Assignment  
**Course:** Advanced PHP Concepts and Authentication  
**Year:** Second-Year Development Student

![Header Image]([path/to/your/header-image.jpg](https://github.com/jarrydcarelse/Premium_Properties/blob/main/header-image.jpg))

## Project Overview

**Premium Properties** is a comprehensive web application designed for a real estate agency, developed as part of a university assignment to demonstrate proficiency in PHP, SQL, and full-stack web development. The application facilitates property management and user interactions through a robust backend and a user-friendly interface.

This project showcases key skills such as user authentication, CRUD operations, and admin content moderation, making it a valuable learning experience in building complex, real-world web applications.

## Features

### User Functionality

- **Registration & Authentication:**  
  - New users can create an account via a registration form, ensuring secure access to the platform.
  - Existing users can log in using their credentials to access personalized features.

- **Property Management:**  
  - Users can add new property listings to the platform, complete with images, descriptions, and pricing.
  - Each user has a "Liked" page where they can save properties of interest for easy access later.

- **Search & Filter:**  
  - Users can search for specific properties using keywords.
  - A filtering system allows users to narrow down search results based on criteria like location, price range, and property type.

- **User Interaction:**  
  - Users can view property details, comment on listings, and like properties they are interested in.
  - All user activities are recorded and can be reviewed by the user at any time.

### Admin Functionality

- **Admin Dashboard:**  
  - Admins have access to a dedicated dashboard where they can manage the platform’s content and users.

- **Property Approval:**  
  - Admins can review property listings submitted by users and approve or deny them for public viewing.
  - This ensures that only verified and appropriate content is displayed on the site.

- **User & Comment Management:**  
  - Admins can manage user accounts, including the ability to delete users if necessary.
  - Admins can also moderate comments on property listings, removing any inappropriate or irrelevant content.

## Technical Details

### Technologies Used

- **Frontend Development:**
  - **HTML/CSS:** For building the structure and styling the web pages.
  - **JavaScript:** To enhance interactivity and improve user experience.
  - **Figma:** Used for UI/UX design, allowing for the creation of wireframes and prototypes.

- **Backend Development:**
  - **PHP:** The core language used to build the server-side logic, handle user sessions, and manage form submissions.
  - **SQL/MySQL:** Used for database management, enabling the storage, retrieval, and manipulation of user and property data.

- **Development Environment:**
  - **XAMPP:** Provides an easy-to-use local development environment with Apache, MySQL, and PHP.
  - **VS Code:** The primary IDE used for writing and debugging code.

### Database Structure

The application uses a relational database designed with the following key tables:

- **Users Table:**  
  Stores user information such as username, email, password (hashed), and user roles (admin or regular user).

- **Properties Table:**  
  Contains all property details including property ID, title, description, price, location, and associated user ID.

- **Comments Table:**  
  Manages user comments on properties, linking each comment to a specific user and property.

- **Likes Table:**  
  Tracks which users have liked which properties, allowing for personalized recommendations.

## Installation & Setup

Follow these steps to set up the Premium Properties web application on your local machine:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/premium-properties.git
Set Up XAMPP:

Move the cloned project folder into the htdocs directory of your XAMPP installation.
Start Apache and MySQL in the XAMPP control panel.
Database Setup:

Open phpMyAdmin by navigating to http://localhost/phpmyadmin in your web browser.
Create a new database named premium_properties.
Import the database.sql file located in the project’s root directory into the newly created database.
Configure the Application:

Open the config.php file located in the /config directory.
Update the database connection settings (DB_HOST, DB_USER, DB_PASS, and DB_NAME) with your MySQL credentials.
Run the Application:

In your web browser, navigate to http://localhost/premium-properties to access the web application.


