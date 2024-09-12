# Furniture Website

A modern furniture e-commerce website built with PHP, JavaScript, and Bootstrap. The website includes functionalities like a shopping cart system, product details, contact form, and dynamic content handling.

## Features

- **Navigation Bar**: Includes links to Home, Shop, Top Chair, Chair, Brands, and Contact pages.
- **Cart System**:
  - Displays the number of items in the cart across all pages.
  - Uses `localStorage` to persist the cart count even after navigating between pages.
- **Shop Page**:
  - Showcases products with "View Details" and "Add to Cart" buttons.
  - Cart count dynamically updates when items are added.
- **Contact Page**:
  - Includes a form to submit queries (name, email, subject, and message).
  - Displays a success message after submission.
- **Footer**: Consistent footer with social media icons and credits across all pages.
- **Responsive Design**: Built with Bootstrap to ensure the website is mobile-friendly and adapts to various screen sizes.

## Technologies Used

- **Frontend**: 
  - HTML, CSS (Bootstrap)
  - JavaScript for interactivity
- **Backend**: 
  - PHP for handling form submissions and dynamic content

## JavaScript Functionalities

- **Cart Count Management**:
  - `localStorage` is used to store the cart count, which is displayed across all pages.
  - Updates the cart icon when items are added to the cart.
- **Product Details**: 
  - Displays product information using a JavaScript alert box when "View Details" is clicked.
  
## PHP Functionalities

- **Form Handling**:
  - Processes the Contact form and shows a success message upon submission.
- **Dynamic Content**:
  - Renders dynamic messages (e.g., after form submission) on the server-side.

## How to Run Locally

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/furniture-website.git
