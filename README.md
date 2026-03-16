<div align="center">

<img src="https://img.shields.io/badge/-%E2%9C%A3-red?style=for-the-badge" alt="cross" height="40"/>

# Hospital Management System
### نظام إدارة المستشفيات الشامل

*A robust, full-featured hospital management platform built for real medical operations*

<br/>

[![Laravel](https://img.shields.io/badge/Laravel-8.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![Livewire](https://img.shields.io/badge/Livewire-2.x-4E56A6?style=flat-square&logo=livewire&logoColor=white)](https://laravel-livewire.com)
[![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://mysql.com)
[![Pusher](https://img.shields.io/badge/Pusher-Realtime-300D4F?style=flat-square&logo=pusher&logoColor=white)](https://pusher.com)

[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![Status](https://img.shields.io/badge/Status-Active-brightgreen?style=flat-square)]()

</div>

---

## 📋 Table of Contents

- [Overview](#-overview)
- [User Roles](#-user-roles)
- [Features](#-features)
- [Tech Stack](#️-tech-stack)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Contributing](#-contributing)

---

## 🏥 Overview

A comprehensive **Hospital Management System** designed to streamline medical facility operations — from patient registration and appointment scheduling to diagnostics, billing, and real-time communication. Built with a clean **Repository Pattern** architecture for maintainability and scale.

> Fully bilingual: **Arabic 🇸🇦** and **English 🇬🇧** via `mcamara/laravel-localization`

---

## 👥 User Roles

The system provides dedicated dashboards tailored to each role:

| Role | Dashboard | Key Capabilities |
|------|-----------|-----------------|
| 🛡️ **Admin** | Full system | User management, reports, system config |
| 🩺 **Doctor** | Clinical | Patient records, diagnostics, appointments |
| 🧑‍⚕️ **Patient** | Personal | Book appointments, view history, invoices |
| 🔬 **Lab Employee** | Laboratory | Test requests, results, specimen tracking |
| 📡 **Ray Employee** | Radiology | Ray requests, imaging reports, results |

---

## ✨ Features

### 🏨 Medical Management
- **Departments & Services** — Manage hospital sections with single & group medical services
- **Appointments** — Online booking system with real-time availability
- **Diagnostics** — Record and track patient diagnoses and full medical history
- **Radiology Module** — Specialized workflow for ray/imaging requests and results
- **Laboratory Module** — Full lab test lifecycle from request to result delivery

### 💰 Financial System
- **Invoicing** — Generate single and group service invoices
- **Patient Accounts** — Full account ledger per patient
- **Receipts & Payments** — Track all transactions with detailed records
- **Fund Accounts** — Manage hospital financial accounts

### 🔗 Integrations & Operations
- **Insurance Companies** — Patient coverage verification and billing integration
- **Ambulance Fleet** — Track and dispatch ambulances in real time
- **Chat System** — Internal messaging between staff and patients

### 📣 Notifications
- **Real-time** via [Pusher](https://pusher.com)
- **Email** via SMTP

---

## 🛠️ Tech Stack

```
Backend      →  Laravel (PHP)
Frontend     →  Livewire · Tailwind CSS · Blade Templates
Database     →  MySQL
Real-time    →  Pusher
i18n         →  mcamara/laravel-localization · astrotomic/laravel-translatable
Architecture →  Repository Pattern
```

---

## 🚀 Installation

### Prerequisites

Make sure you have the following installed:

- PHP `>= 8.0`
- Composer
- Node.js & npm
- MySQL

### Step-by-step Setup

**1. Clone the repository**
```bash
git clone https://github.com/AbdullahWael-Dev/hospital-management-system.git
cd hospital-management-system
```

**2. Install PHP & JS dependencies**
```bash
composer install
npm install && npm run dev
```

**3. Environment setup**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Configure your database**

Open `.env` and update your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hospital_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

**5. Run migrations & seed data**
```bash
php artisan migrate --seed
```

**6. Create storage symlink**
```bash
php artisan storage:link
```

**7. Start the application**
```bash
php artisan serve
```

Visit `http://localhost:8000` 🎉

---

## ⚙️ Configuration

### Pusher (Real-time)
```env
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=mt1
```

### Twilio (SMS)
```env
TWILIO_SID=your_twilio_sid
TWILIO_TOKEN=your_twilio_token
TWILIO_FROM=+1234567890
```

### Mail (Email Notifications)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
```

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create your feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

---

<div align="center">

Made with ❤️ by **[Abdallah](https://github.com/AbdullahWael-Dev)**

*If this project helped you, consider giving it a ⭐*

</div>
