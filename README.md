# School Management System

This is a **School Management System** built with Laravel. It is designed to manage various aspects of a school, including student records, staff details, and class management.

## Features

- **Student Management**: Add, update, and delete student records.
- **Staff Management**: Add, update, and delete staff records.
- **Class Management**: Manage class schedules and student enrollments.
- **Authentication**: Secure user authentication for administrators and staff.

## Installation

Follow the steps below to set up this project locally:

### Prerequisites

Make sure you have the following installed on your machine:

- PHP (7.4 or higher)
- Composer
- Laravel Installer (optional but recommended)
- MySQL or SQLite

### Step 1: Clone the repository

```bash
git clone https://github.com/MengseuThoeng/school-management.git
cd school-management
```

### Step 2: Install dependencies

Run the following command to install Laravel dependencies:

```bash
composer install
```

### Step 3: Set up environment variables

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Update the `.env` file with your database credentials and other environment-specific settings.

### Step 4: Generate application key

Run the following command to generate the application key:

```bash
php artisan key:generate
```

### Step 5: Run migrations

Migrate the database to set up the necessary tables:

```bash
php artisan migrate
```

### Step 6: Serve the application

Start the Laravel development server:

```bash
php artisan serve
```

You can now access the application at `http://localhost:8000`.

## Usage

- Login with your administrator credentials.
- Manage students, staff, and classes through the application’s dashboard.

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-name`).
6. Open a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).
