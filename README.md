# Hospital Management System (نظام إدارة المستشفيات)

A comprehensive Hospital Management System built with **Laravel 8**, **Livewire**, and **Tailwind CSS**. This system provides a robust solution for managing medical facilities, patients, doctors, and administrative tasks with multi-role support and real-time features.

## 🚀 Features (المميزات)

- **Multi-Role System**: Specific dashboards for Admins, Doctors, Patients, Ray Employees, and Laboratory Employees.
- **Multilingual Support**: Fully translated interface (Arabic & English) using `laravel-localization` and `laravel-translatable`.
- **Medical Management**:
    - **Sections & Services**: Manage hospital departments and medical services (Single & Group).
    - **Appointments**: Online appointment booking and management.
    - **Diagnostics**: Record patient diagnoses and medical history.
    - **Radiology (Ray) & Laboratory**: Specialized modules for test requests and results.
- **Financial System**:
    - **Invoicing**: Single and Group service invoices.
    - **Accounts**: Manage patient accounts, receipts, payments, and fund accounts.
- **Insurance**: Integration with insurance companies for patient coverage.
- **Ambulances**: Track and manage ambulance fleet.
- **Real-time Notifications**: Integrated with **Pusher** for instant updates.
- **Communication**: Chat system between users.
- **SMS/Email Notifications**: Support for Twilio and SMTP.

## 🛠 Technologies (التقنيات المستخدمة)

- **Backend**: Laravel 8
- **Frontend**: Livewire, Tailwind CSS, Blade Templates
- **Database**: MySQL
- **Real-time**: Pusher
- **Localization**: Mcamara Laravel Localization
- **Architecture**: Repository Pattern for clean and maintainable code.

## 💻 Installation (التركيب)

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/hospital-management-system.git
   cd hospital-management-system
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Environment Setup**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**:
   Update your `.env` file with your database credentials and then run:
   ```bash
   php artisan migrate --seed
   ```

5. **Storage Link**:
   ```bash
   php artisan storage:link
   ```

6. **Run the application**:
   ```bash
   php artisan serve
   ```

## 📸 Screenshots (لقطات الشاشة)

*(Add your screenshots here)*

## 📄 License (الترخيص)

This project is open-sourced software licensed under the [MIT license](LICENSE).

---

### Developed with ❤️ by [Abdallah]
