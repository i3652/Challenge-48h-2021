# Challenge 48h 
<h1 align="center">Welcome to Challenge 48H 👋</h1>

👤 **Abdallahi ILLA (B2)** <br>
👤 **Jad SALLOUM (B2)** <br> 
👤 **Bryan TCHUISSEU (B1)** <br>
👤 **Edouard VIGNES (B3)** <br>

# Install

```bash
git clone https://github.com/i3652/Challenge-48h-2021
composer update --no-scripts
npm install
```

#### Copy the file .env.example to .env

```bash
cp .env.example .env
```


#### Generate keys

```
php artisan key:generate
```

# Run migrations

```bash
php artisan migrate
```

# Run the server

```bash
php artisan serve
```

##### Don't forget to change database configuration in the file ".env" and the Cloudinary

### Here's the link to our site: https://challenge-48h-2021.herokuapp.com/
