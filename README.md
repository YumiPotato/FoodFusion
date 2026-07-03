# FoodFusion (February 2025 - April 2025)

FoodFusion is a PHP and MySQL web application for a cooking community. It lets users register, log in, browse recipes, view team information, send contact messages, submit recipes, and access downloadable culinary and educational resources.

## Project Structure

```text
.
|-- index.php
|-- php/
|-- css/
|-- images/
|-- downloadImages/
|-- downloadPDF/
`-- downloadVideos/
```

- `index.php` redirects visitors to the login page.
- `php/` contains all PHP pages, form handlers, database connection files, and download scripts.
- `css/` contains all stylesheet files.
- `images/` contains images used across the main website pages.
- `downloadImages/` contains downloadable recipe and educational images.
- `downloadPDF/` contains downloadable educational PDF files.
- `downloadVideos/` contains downloadable cooking tutorial videos.

## Main Pages

- `php/LoginPage.php` - user login page.
- `php/RegisterPage.php` - user registration page.
- `php/HomePage.php` - main homepage after login.
- `php/AboutUsPage.php` - team and website information.
- `php/RecipePage.php` - recipe collection.
- `php/CookbookPage.php` - community cookbook page.
- `php/SubmitRecipeForm.php` - form for submitting recipes.
- `php/ContactUsPage.php` - contact form.
- `php/CulinaryResourcesPage.php` - recipe cards and cooking video resources.
- `php/EducationalResourcesPage.php` - educational PDFs, images, and videos.
- `php/PrivacyPolicyPage.php` and `php/CookiePolicyPage.php` - policy pages.

## Main Features

- User registration with password hashing.
- User login with session handling.
- Login attempt cooldown after repeated failed attempts.
- Password change form.
- Contact message submission.
- Recipe submission and recipe listing.
- Team member display from the database.
- Download scripts for images, PDFs, and videos.
- Organized PHP and CSS folders with updated relative paths.

## Database

The project connects to a MySQL database named `FoodFusionDB` using:

```php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'FoodFusionDB';
```

The database connection is defined in `php/DatabaseConnection.php`.

The setup file `php/DatabaseTables.php` creates these tables:

- `Member` - stores registered users.
- `TeamMember` - stores team member information shown on the About Us page.
- `ContactMsg` - stores contact form messages.
- `Recipe` - stores submitted recipes.

## How To Run

1. Start Apache and MySQL in XAMPP.
2. Create a MySQL database named `FoodFusionDB`.
3. Open `php/DatabaseTables.php` once in the browser to create the required tables.
4. Visit the project folder in the browser.
5. `index.php` will redirect to `php/LoginPage.php`.

Example local URL:

```text
http://localhost/FoodFusion/
```
