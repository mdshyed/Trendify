<p align="center">
    <a href="https://aimeos.org/">
        <img src="https://aimeos.org/fileadmin/template/icons/logo.png" alt="Aimeos logo" title="Aimeos" align="center" />
    </a>
<p>

<p align="center">
    <a href="https://packagist.org/packages/aimeos/aimeos" alt="Total Downloads"><img src="https://poser.pugx.org/aimeos/aimeos-laravel/d/total.svg" alt="Total Downloads" title="Total Downloads" /></a>
    <a href="https://packagist.org/packages/aimeos/aimeos" alt="Latest Stable Version"><img src="https://poser.pugx.org/aimeos/aimeos/v/stable.svg" alt="Latest Stable Version" title="Latest Stable Version" /></a>
    <a href="https://packagist.org/packages/aimeos/aimeos" alt="License"><img src="https://img.shields.io/github/license/aimeos/aimeos" alt="License" title="License" /></a>
    <a href="https://github.com/aimeos/aimeos/issues" alt="Open issues"><img src="https://img.shields.io/github/issues/aimeos/aimeos?color=brightgreen" alt="Open issues" title="Open issues" /></a>
</p>

<p align="center">
    <a href="https://github.com/mdshyed/Trendify"><img src="https://img.shields.io/github/followers/mdshyed?label=Followers&style=social"></a>
    <a href="https://twitter.com/intent/follow?screen_name=mdshyed"><img src="https://img.shields.io/twitter/follow/mdshyed?style=social"></a>
</p>

<p align="center">:star: Star us on <a href="https://github.com/mdshyed/Trendify/stargazers">GitHub</a> — it motivates us a lot! 😀</p>
<p align="center">
    <img src="https://github-readme-stats.vercel.app/api?username=mdshyed&count_private=true&include_all_commits=true&show_icons=true&bg_color=90,103050,109095&title_color=fff&text_color=fff&icon_color=fff&hide=prs" alt="GitHub stats" />
<p>

<h1 align="center">Trendify - Modern E-commerce Platform</h1>

Trendify is a modern, cloud-native e-commerce platform built with Laravel. It offers a robust, scalable solution for online businesses with a focus on performance and user experience.

## Features

* Modern, responsive design
* Fast and efficient performance
* Secure payment processing
* User-friendly admin interface
* Multi-vendor support
* Multi-language support
* SEO optimized
* Mobile-first approach
* RESTful API
* Real-time inventory management
* Advanced search capabilities
* Customer reviews and ratings
* Order tracking system
* Analytics dashboard

## Requirements

* PHP >= 8.2
* MySQL >= 5.7.8 or MariaDB >= 10.2.2
* Composer 2.2+
* Node.js and NPM
* Web server (Apache/Nginx)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/mdshyed/Trendify.git
cd Trendify
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install JavaScript dependencies:
```bash
npm install
```

4. Copy the environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in the `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=trendify
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run migrations:
```bash
php artisan migrate
```

8. Start the development server:
```bash
php artisan serve
```

## Development

* Frontend: http://localhost:8000
* Admin Panel: http://localhost:8000/admin

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

* GitHub: [@mdshyed](https://github.com/mdshyed)
* Twitter: [@mdshyed](https://twitter.com/mdshyed)
