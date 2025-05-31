# StayNest 🏡

StayNest est une application web de gestion et réservation immobilière développée avec Laravel, Livewire, Filament, TailwindCSS et Breeze. Elle permet aux utilisateurs de consulter et réserver des propriétés, et aux administrateurs de les gérer via un panneau moderne et sécurisé.

---

## 🔧 Technologies utilisées

- **Laravel 11**
- **Livewire**
- **FilamentPHP**
- **TailwindCSS**
- **Laravel Breeze** (authentification)
- **MySQL**
- **Blade**
- **Eloquent ORM**

---

## 🎯 Fonctionnalités principales

### 🎉 Interface publique (utilisateurs)
- Page d’accueil stylisée avec cartes de propriétés
- Consultation des détails d’une propriété
- Réservation via un bouton “Réserver”
- Page de gestion de réservation dynamique (`BookingPage`)
- Espace “Mes réservations”

### 🔐 Authentification
- Login et registre via Laravel Breeze
- Redirection automatique selon le rôle :
  - Admin → `/admin` (panel Filament)
  - Utilisateur → `/dashboard`

### 🛠️ Panneau d’administration (Filament)
- Personnalisation avec les couleurs :
  - `primary: #1E40AF`
  - `secondary: #9333EA`
- Gestion des propriétés (`PropertyResource`)
  - Ajout d’images via upload (stockées dans `/storage/app/public`)
  - Style modernisé avec colonnes professionnelles
- Gestion des réservations (`BookingResource`)
  - Statuts, détails utilisateur, dates, etc.
- Sécurité d’accès au panneau (`is_admin`)

---

## 🗃️ Base de données

### 📁 Tables principales

| Table        | Description                         |
|--------------|-------------------------------------|
| users        | Utilisateurs avec champ `is_admin` |
| properties   | Biens immobiliers disponibles       |
| bookings     | Réservations liées aux propriétés   |

> Assure-toi d’avoir un champ `is_admin` dans la table `users` (`boolean`, `default: false`).

---

## ⚙️ Installation du projet

```bash
git clone https://github.com/elmehdizaidi/staynest.git
cd staynest

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
```

---

## 👨‍💻 Création d’un administrateur

```bash
php artisan tinker
$user = \App\Models\User::find(1); // ou créer un user
$user->is_admin = true;
$user->save();
```

---

## 📁 Structure des fichiers clés

- `/resources/views/components/property-card.blade.php` — Carte des biens
- `/resources/views/booking-page.blade.php` — Réservation dynamique
- `/app/Filament/Resources/PropertyResource.php` — Ressource Filament
- `/app/Filament/Resources/BookingResource.php` — Réservations admin
- `/app/Providers/Filament/AdminPanelProvider.php` — Configuration panel admin

---

## 🌈 Personnalisation visuelle

**Fichier Tailwind : `tailwind.config.js`**

```js
module.exports = {
  theme: {
    extend: {
      colors: {
        primary: '#1E40AF',
        secondary: '#9333EA',
      },
    },
  },
};
```

**Couleurs appliquées dans `AdminPanelProvider.php`** :

```php
->colors([
  'primary' => '#1E40AF',
  'secondary' => '#9333EA',
])
```



## 👤 Auteur

- **Mehdi Zaidi** — [@elmehdizaidi](https://github.com/elmehdizaidi)

---

## 📜 Licence

Projet open source sous licence [MIT](LICENSE).
