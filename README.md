# Proje klonla
git clone https://github.com/cenkgrs/Risk-Analysis.git

# Proje içine gir
cd Risk-Analysis

# Kütüphaneleri yükle
composer install
npm install

# Env dosyası oluştur
cp .env.example .env

# Key oluştur
php artisan key:generate

# Veritabanı bilgilerini set et
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DATABASE_NAME
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD

# Tabloları yükle
php artisan migrate

# Proje çalıştır
php artisan serve