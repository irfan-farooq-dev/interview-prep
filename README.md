# Interview Prep Monorepo

A monorepo containing multiple microservices to support interview preparation workflows.  
This repo complements the standalone `auth-service` and demonstrates monorepo architecture.

---

## 📂 Project Structure

interview-prep/
├── payment-service/
├── notification-service/
└── analytics-service/

Each service is isolated in its own folder with independent Laravel setup, configs, and migrations.  
Future services (e.g., `practice-service`, `summary-service`) can be added following the same pattern.

---

## 🚀 Features

- **Payment Service**: Manage transactions, subscriptions, and gateway integrations.
- **Notification Service**: Real-time notifications via email, WebSockets, or other channels.
- **Analytics Service**: Collect and analyze usage metrics, performance insights, and reporting.

---

## 🛠 Development Setup

### Requirements
- PHP >= 8.1
- Composer
- MySQL (via XAMPP)
- Herd (for Laravel environment)

### Installation (per service)

1. **Clone the repository**
   ```bash
   git clone https://github.com/irfan-farooq-dev/interview-prep.git
   cd interview-prep
   
2. Navigate into a service folder e.g. payment-service

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=payment_service
DB_USERNAME=root
DB_PASSWORD=

# Run migrations
php artisan migrate

   git clone https://github.com/<your-username>/interview-prep.git
   cd interview-prep
