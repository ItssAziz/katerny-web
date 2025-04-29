# Katerny PHP Web Application

## Project Structure
- `katnery/`: Main PHP application directory (25 files)
- `Dockerfile`: Container configuration
- `.gitignore`: Version control exclusions

## Features
- PHP backend application
- Docker container support
- Git version controlled

## Getting Started
### Prerequisites
- PHP 7.4+
- Docker (optional)
- Composer

### Installation
1. Clone the repository
2. Run `composer install` in the `katnery` directory

### Running Locally
```
php -S localhost:8000 -t katnery/
```

### Docker Setup
```
docker build -t katerny .
docker run -p 8000:8000 katerny
```

## Configuration
- Main entry point: `katnery/index.php`
- Modify `Dockerfile` for container changes

## License
[MIT](https://choosealicense.com/licenses/mit/)
