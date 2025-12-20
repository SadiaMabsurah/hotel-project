# 🏨 Hotel Management System

A comprehensive Laravel 12-based hotel management system with Jetstream authentication, featuring room bookings, admin dashboard, gallery management, and email notifications.

## 📋 Features

### 🔐 Authentication & Security
- **Laravel Jetstream** authentication with Livewire
- **Two-Factor Authentication (2FA)** for enhanced security
- **Role-based Access Control** (Admin/User)
- **Profile Management** with avatar uploads
- **Session Management** across devices

### 🏠 Guest Features
- **Room Browsing** with detailed information
- **Online Booking System** with date selection
- **Room Categories** (Regular, Deluxe, Luxury)
- **Contact Form** for inquiries
- **Gallery Viewing** of hotel images

### 👨‍💼 Admin Dashboard
- **Room Management** (Create, Read, Update, Delete)
- **Booking Management** (Approve/Reject bookings)
- **Gallery Management** (Upload/Delete images)
- **Message Handling** from contact forms
- **Email Notifications** for booking status updates
- **Dashboard Analytics** overview

## 🛠️ Technology Stack

- **Framework:** Laravel 12
- **PHP Version:** 8.2+
- **Authentication:** Laravel Jetstream with Livewire
- **Database:** MySQL
- **Frontend:** Blade Templates, Tailwind CSS, Bootstrap
- **Build Tool:** Vite
- **Email:** SMTP
- **File Storage:** Laravel Storage with symbolic links

## 📊 Database Schema

| Table | Purpose | Key Fields |
|-------|---------|------------|
| **users** | User accounts & authentication | id, name, email, usertype, two_factor_secret |
| **rooms** | Hotel room inventory | room_title, image, description, price, wifi, room_type |
| **bookings** | Reservation management | room_id, name, email, phone, start_date, end_date, status |
| **gallaries** | Hotel image gallery | id, image |
| **contacts** | Guest inquiries | id, name, email, phone, message |
| **notifications** | System notifications | id, type, notifiable_id, data |

## ⚙️ Installation & Setup

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm
- MySQL database
- XAMPP/WAMP or similar web server

### Step 1: Clone & Install Dependencies
```bash
git clone <repository-url>
cd hotel-project
composer install
npm install
```

### Step 2: Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hotel_management
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email
```

### Step 3: Database Setup
```bash
php artisan migrate
php artisan storage:link
```

### Step 4: Build Assets
```bash
npm run build
# or for development
npm run dev
```

### Step 5: Start the Application
```bash
php artisan serve
```

Access the application at: `http://localhost:8000`

## 👥 User Roles & Access

### Admin User
- **Create Admin User:** Manually update `usertype` field to 'admin' in users table
- **Dashboard Access:** `/home` (redirects to admin dashboard)
- **Full System Control:** Room management, booking approvals, gallery, messages

### Regular User
- **Public Access:** Browse rooms, view gallery, contact form
- **Booking:** Authenticated users can book rooms
- **Dashboard:** View booking history and profile

## 📁 Project Structure

```
hotel-project/
├── app/
│   ├── Http/Controllers/
│   │   ├── AdminController.php    # Admin dashboard & CRUD operations
│   │   └── HomeController.php     # Public pages & booking
│   ├── Models/
│   │   ├── User.php              # User model with Jetstream traits
│   │   ├── Room.php              # Room inventory
│   │   ├── Booking.php           # Reservations
│   │   ├── Gallary.php           # Image gallery
│   │   └── Contact.php           # Guest messages
│   └── Notifications/
│       └── SendEmailNotification.php
├── database/migrations/          # Database schema files
├── public/                       # Static assets & HTML templates
├── resources/views/
│   ├── admin/                    # Admin dashboard templates
│   ├── auth/                     # Jetstream auth pages
│   ├── home/                     # Public pages (Blade templates)
│   └── layouts/                  # Main layout files
├── routes/
│   └── web.php                   # Application routes
└── storage/app/public/           # File uploads
```

## 🚀 Key Routes

| Route | Method | Purpose | Access |
|-------|--------|---------|--------|
| `/` | GET | Homepage | Public |
| `/home` | GET | Dashboard | Authenticated |
| `/create_room` | GET/POST | Add new room | Admin |
| `/view_room` | GET | Room management | Admin |
| `/bookings` | GET | Booking management | Admin |
| `/room_details/{id}` | GET | Room details | Public |
| `/book_room/{id}` | POST | Book room | Authenticated |
| `/contact` | POST | Send message | Public |

## 📧 Email Notifications

The system sends automated emails for:
- **Booking Confirmations** (Approved bookings)
- **Booking Rejections** (Rejected bookings)
- **Custom Messages** (Admin to guests)

Configure SMTP settings in `.env` for email functionality.

## 🔧 Useful Commands

```bash
# Clear all caches
php artisan optimize:clear

# Run migrations
php artisan migrate

# Create storage symlink
php artisan storage:link

# List all routes
php artisan route:list

# Start development server
php artisan serve

# Build assets for production
npm run build

# Watch assets for changes
npm run dev
```

## 🐛 Troubleshooting

### Common Issues:

**Images not displaying:**
```bash
php artisan storage:link
```

**Permission denied errors:**
- Ensure proper file permissions on `storage/` and `bootstrap/cache/`
- Run: `chmod -R 755 storage/ bootstrap/cache/`

**Database connection issues:**
- Verify `.env` database credentials
- Ensure MySQL service is running

**Email not sending:**
- Check SMTP configuration in `.env`
- Verify mail server credentials

## 📝 Development Notes

- **Admin Creation:** Set `usertype = 'admin'` in users table for admin access
- **File Uploads:** Images stored in `storage/app/public/` with symlinked access
- **Date Validation:** System prevents overlapping bookings for approved reservations
- **Room Types:** Supports Regular, Deluxe, and Luxury categories

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## 📄 License

This project is licensed under the MIT License.
