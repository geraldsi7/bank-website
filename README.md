# 🏦 Bank Platform

A comprehensive banking website built with Laravel, featuring modern UI design and secure financial transaction management.

![Laravel](https://img.shields.io/badge/Laravel-8.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-7.3%2B-blue.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-purple.svg)
![Vue.js](https://img.shields.io/badge/Vue.js-2.x-green.svg)

## 📸 Screenshots

### 🏠 Homepage & Landing
![Homepage](screenshots/homepage.png)
*Professional banking homepage with modern design and clear navigation*

### 💳 Dashboard & Account Overview
![Dashboard](screenshots/dashboard.png)
*Main dashboard showing account balances, recent transactions, and quick actions*

### 💰 Money Transfer Interface
![Transfer](screenshots/transfer.png)
*Secure money transfer interface with recipient selection and amount input*

### 🏦 Cards Management
![Cards](screenshots/cards.png)
*Credit and debit card management with card details and controls*

### 📊 Transaction History
![Transactions](screenshots/transactions.png)
*Comprehensive transaction history with filtering and search capabilities*

### 💾 Savings Accounts
![Savings](screenshots/savings.png)
*Personal savings account management and goal tracking*

### 📱 Mobile Responsive Design
![Mobile](screenshots/mobile-responsive.png)
*Fully responsive design optimized for mobile devices*

### 🔐 Authentication & Security
![Login](screenshots/login.png)
*Secure login interface with modern authentication design*

### 🎨 Credit Cards Showcase
![Credit Cards](screenshots/credit-cards.png)
*Credit card products and benefits showcase page*

### 📞 Contact & Support
![Contact](screenshots/contact.png)
*Customer support and contact information page*

## 🚀 Features

### Core Banking Features
- **💳 Card Management** - View and manage credit/debit cards
- **💰 Money Transfers** - Secure peer-to-peer transfers
- **📊 Transaction History** - Complete transaction tracking
- **💾 Savings Accounts** - Personal savings management
- **👤 User Profiles** - Comprehensive user account management

### Website Features
- **🏠 Landing Page** - Professional banking homepage
- **ℹ️ About Us** - Company information and values
- **💳 Credit Cards** - Credit card products showcase
- **🎁 Credit Rewards** - Rewards and benefits program
- **💼 Careers** - Job opportunities and company culture
- **📞 Contact** - Customer support and contact information
- **🛠️ Services** - Banking services overview
- **✨ Benefits** - Customer benefits and features

### Security & Authentication
- **🔐 Secure Login** - Laravel authentication system
- **🛡️ Middleware Protection** - Route-based access control
- **👥 User Roles** - Differentiated access levels (saver, admin)
- **🔒 Password Security** - Secure password management

## 🛠️ Technology Stack

### Backend
- **Laravel 8.x** - PHP web framework
- **PHP 7.3+** - Server-side programming language
- **MySQL** - Database management

### Frontend
- **Vue.js 2.x** - JavaScript framework for interactive components
- **Inertia.js** - Modern monolith approach for SPA-like experience
- **Bootstrap 4** - CSS framework for responsive design
- **jQuery 3.2** - JavaScript library

## 🚀 Installation

### Prerequisites
- PHP 7.3 or higher
- Composer
- Node.js & NPM
- MySQL database

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd bank-web
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   php artisan migrate
   ```

6. **Compile assets**
   ```bash
   npm run dev
   # or for production
   npm run production
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

## 🔧 Configuration

### Database Configuration
Update your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Application Settings
- Set `APP_NAME` to your banking platform name
- Configure `APP_URL` for your domain
- Set up mail configuration for notifications

## 📊 Database Schema

### Key Tables
- **users** - User accounts and authentication
- **cards** - Credit/debit card information
- **transactions** - Financial transaction records
- **savings** - Savings account data

### Relationships
- Users have many Savings accounts
- Users can have multiple Cards
- Transactions are linked to Users
- Savings accounts belong to Users

## 🛡️ Security Features

- **CSRF Protection** - Cross-site request forgery prevention
- **SQL Injection Prevention** - Eloquent ORM protection
- **XSS Protection** - Input sanitization
- **Authentication Middleware** - Route protection
- **Password Hashing** - Secure password storage

## 🧪 Testing

Run the test suite:



```

## 📱 Responsive Design

The banking platform is fully responsive and optimized for:
- 📱 Mobile devices
- 💻 Desktop computers
- 📟 Tablets
- 🖥️ Large screens

### Banking Features
- `GET /cards` - View user cards
- `GET /transfer` - Transfer money interface
- `POST /transfer` - Process money transfer
- `GET /transaction-history` - View transaction history
- `GET /dashboard` - User dashboard

## 📞 Support

For support and questions:
- 📧 Email: geraldowusuansah2@gmail.com
- 📱 Phone: +233 55 811 4120

---