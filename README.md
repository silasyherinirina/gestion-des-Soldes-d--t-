# 🌞 Gestion des Soldes d'Été

Application complète de gestion des produits soldés, développée avec **Angular** pour le frontend et **Laravel** pour le backend.

---

## 📁 Structure du projet

```
/my-web-app     → Frontend Angular
/laravel-api    → Backend Laravel API
```

---

## 🚀 Installation

### ✅ Prérequis

- Node.js et npm
- Angular CLI (`npm install -g @angular/cli`)
- PHP >= 8.1
- Composer
- MySQL

---

### 🧩 Backend (Laravel)

```bash
cd laravel-api
composer install
cp .env.example .env
```

Configurer `.env` pour la base de données :
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=soldes_db
DB_USERNAME=root
DB_PASSWORD=ton_mot_de_passe
```

Puis :
```bash
php artisan migrate --seed
php artisan serve
```

L'API sera disponible sur `http://localhost:8000/api`

---

### 💻 Frontend (Angular)

```bash
cd my-web-app
npm install
ng serve
```

Le frontend sera accessible via `http://localhost:4200`

---

## 🔗 API Laravel

| Endpoint             | Méthode | Description            |
|----------------------|---------|------------------------|
| /api/products        | GET     | Liste des produits     |
| /api/products        | POST    | Créer un produit       |
| /api/products/{id}   | GET     | Affiche un produit     |
| /api/products/{id}   | PUT     | Met à jour un produit  |
| /api/products/{id}   | DELETE  | Supprime un produit    |

---

## 📘 Swagger (Documentation API)

➡️ Bientôt disponible via `/api/documentation` (utilisez `L5-Swagger` ou autre).

---

## 🧪 Démo

📹 *(Optionnel)* Ajouter une vidéo Loom ou YouTube montrant les fonctionnalités.

---

## 👤 Auteur

Silas Y. Herinirina  
GitHub: [@silasyherinirina](https://github.com/silasyherinirina)
