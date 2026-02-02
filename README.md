# Radio2Pir Admin Panel

A comprehensive Laravel-based admin panel for managing the Radio2Pir platform, featuring user management, store management, and content administration.

## Features

### User Management
- **User CRUD Operations**: Create, read, update, and delete user accounts
- **Role-Based Permissions**: Assign roles and permissions to users
- **User Authentication**: Secure login/logout functionality
- **Profile Management**: User profile editing and management

### Store Management
- **Store CRUD Operations**: Manage online stores and their configurations
- **Store Analytics**: Track visitor statistics and store performance
- **Content Management**: Manage store content and media
- **QR Code Generation**: Generate QR codes for store access

### Admin Dashboard
- **Analytics Dashboard**: Overview of platform metrics and statistics
- **System Monitoring**: Monitor system health and performance
- **Content Management**: Manage platform content and settings

## Technologies Used

- **Backend**: Laravel 10.x
- **Frontend**: Bootstrap 5, jQuery, JavaScript
- **Database**: MySQL
- **Authentication**: Laravel Sanctum
- **Task Scheduling**: Laravel Scheduler
- **Asset Management**: Laravel Mix (Webpack)

## Installation

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL 5.7 or higher
- Node.js and npm
- Apache/Nginx web server

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone git@github.com:radio2pirtech/radio2pir_old_admin_panel.git
   cd radio2pir_admin_panel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   ```
   
   Edit `.env` file with your database credentials and other configurations:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed initial data**
   ```bash
   php artisan db:seed
   ```

8. **Build assets**
   ```bash
   npm run dev
   ```

9. **Set up storage link**
   ```bash
   php artisan storage:link
   ```

10. **Set proper permissions**
    ```bash
    chmod -R 755 storage/
    chmod -R 755 bootstrap/cache/
    ```

## Usage

### Starting the Development Server
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

### Admin Access
After seeding the database, you can access the admin panel using the default credentials (check the seeders for default admin user details).

### Available Commands

#### Laravel Artisan Commands
```bash
# Clear cache
php artisan cache:clear

# Clear config cache
php artisan config:clear

# Clear route cache
php artisan route:clear

# Clear view cache
php artisan view:clear

# Optimize application
php artisan optimize

# Run database migrations
php artisan migrate

# Seed database
php artisan db:seed
```

#### NPM Scripts
```bash
# Build assets for development
npm run dev

# Build assets for production
npm run prod

# Watch assets for changes
npm run watch
```

## Project Structure

```
├── app/
│   ├── Console/          # Artisan commands
│   ├── Http/             # Controllers, middleware, requests
│   ├── Models/           # Eloquent models
│   └── Providers/        # Service providers
├── database/
│   ├── migrations/       # Database migrations
│   ├── seeders/          # Database seeders
│   └── factories/        # Model factories
├── public/
│   ├── assets/           # Compiled CSS, JS, and images
│   └── storage/          # Public file storage
├── resources/
│   ├── views/            # Blade templates
│   ├── js/               # JavaScript assets
│   └── sass/             # SCSS stylesheets
├── routes/               # Route definitions
├── storage/              # File storage
└── tests/                # Test files
```

## API Documentation

The application includes API endpoints for various operations. API documentation can be found in the `routes/api.php` file.

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## Security

- Always use HTTPS in production
- Keep dependencies updated
- Use strong passwords and enable 2FA where possible
- Regularly backup your database

## License

This project is open source and available under the [MIT License](LICENSE).

## Support

For support and questions:
- Create an issue in the GitHub repository
- Contact the development team

## Changelog

### Version 1.0.0
- Initial release with basic admin panel functionality
- User and store management features
- Dashboard and analytics
- Authentication and authorization system

## Dependencies

### PHP Dependencies
- Laravel Framework
- Laravel Sanctum (API authentication)
- Laravel Breeze (Authentication scaffolding)

### Frontend Dependencies
- Bootstrap 5
- jQuery
- Font Awesome icons
- DataTables for tables
- Chart.js for charts

### Development Dependencies
- Laravel Mix (Webpack)
- SCSS compiler
- ESLint for JavaScript linting

## Environment Variables

Key environment variables and their purposes:

- `APP_ENV`: Application environment (local, production)
- `APP_DEBUG`: Enable/disable debug mode
- `DB_CONNECTION`: Database connection type
- `DB_HOST`: Database host
- `DB_DATABASE`: Database name
- `DB_USERNAME`: Database username
- `DB_PASSWORD`: Database password
- `APP_URL`: Application URL
- `SANCTUM_STATEFUL_DOMAINS`: Domains for stateful authentication

## Troubleshooting

### Common Issues

1. **Migration errors**: Ensure database credentials are correct in `.env`
2. **Asset compilation errors**: Run `npm install` and check Node.js version
3. **Permission errors**: Set proper permissions on storage and cache directories
4. **Authentication issues**: Clear cache and regenerate application key

### Getting Help

- Check Laravel documentation: https://laravel.com/docs
- Review error logs in `storage/logs/`
- Use `php artisan list` to see available commands