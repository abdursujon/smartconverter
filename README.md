# PHP Web Application

This project is a collection of web application exercises built with PHP, demonstrating a variety of server-side programming concepts.
It follows a simple Model-View-Controller (MVC) like structure, with a focus on separating logic from presentation.
The frontend is styled using the Bootstrap 5 framework to ensure a responsive and modern user interface.

---

## Core Features

- **MVC Architecture**: A simple and effective separation of concerns between data (Model), presentation (View), and user input (Controller).
- **Dynamic Page Layout**: A consistent header and a sticky footer are used across all pages. The navigation menu dynamically adjusts its height to match the content.
- **Form Handling**: Demonstrates secure and robust form handling using both `GET` (for non-sensitive data) and `POST` (for actions and sensitive data).
- **User Persistence**: Implements both cookie and session-based persistence to maintain user data across visits.
- **Data Validation**: Robust server-side validation to ensure data integrity.

---

## Pages & Functionality

This project is composed of several distinct pages, each demonstrating different technical concepts.

### 1. Unit Converter (`converter.php`)

A simple utility to convert between various units of measurement.
- **Conversions**: km/miles, kg/pounds, and meter/inch.
- **Technology**: Demonstrates basic PHP form handling and object-oriented programming.

### 2. Calculators
Two different calculator implementations are provided.
- **Standard Calculator (`calculator.php`)**: A form with two number inputs and an operator dropdown (`+`, `-`, `*`, `/`) to perform basic arithmetic.
- **Advanced Calculator (`advance-calculator.php`)**: A more advanced version that evaluates a simple expression (e.g., `10 * 5`) from a single text input using the `explode()` function.

### 3. Cookie Collection Examples
These modules demonstrate how to maintain user data across multiple page loads.

- **Cookie Exercise (`experimental-cookie.php`)**
  - A form asks for a user's name and date of birth.
  - On submission, the data is saved in browser **cookies**.
  - On subsequent visits, the site reads the cookies and displays a welcome message instead of the form.
  - Includes a `clear-cookies.php` script to delete the stored data.

- **Session Exercise (`session-exercise.php`)**
  - Replicates the cookie functionality but uses server-side **PHP sessions**.
  - **Robust Validation**: Includes server-side checks to ensure:
    - The name does not contain numbers.
    - The date of birth is not empty, in the future, or more than 120 years in the past.
  - Includes a `clear-session.php` script to destroy the session and log the user out.

### 4. Simple Shop (`shop.php`)

A complete e-commerce simulation that combines all the concepts from the previous exercises.

- **Login System**: Access to the shop is protected by a login form. The system uses a PHP session to manage the user's login status.
- **Product Catalog**: Once logged in, the user is presented with a list of products. The product data is stored as an array within the view file, simulating a database.
- **Secure Purchase Mechanism**: 
  - Each "Buy" option is a `<button>` inside its own `<form>`.
  - Product data (name and cost) is sent to the `buy.php` page using the `POST` method and **hidden form fields**, which is more secure than using query strings for this type of action.
- **Logout**: A `logout.php` script is provided to clear the session and return the user to the login page.
