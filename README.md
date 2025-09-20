# Viral Referral Application

This repository contains a Laravel 12 + Inertia (React) application that powers a viral referral campaign. Participants can opt-in via WhatsApp or Telegram, confirm their account with a verification code, and compete on a live leaderboard that tracks legitimate referrals and shares.

## Features

- **Customisable landing page** with configurable hero content and campaign perks defined in `config/referrals.php`.
- **WhatsApp/Telegram opt-in** flow that captures a device fingerprint and sends a confirmation code (stubbed for integration with real bots).
- **Fraud detection scaffolding** using contact uniqueness, fingerprint strikes, and referral event logs.
- **Live leaderboard** displaying top performers, prize tiers, and share utilities with copy/share handling on the client.
- **Inertia + React frontend** structured for easy component overrides and Tailwind CSS styling.

## Local development

```bash
cd src
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
php artisan serve
```

The app uses SQLite by default (database file: `database/database.sqlite`). Update `.env` if you prefer another database engine.

## Tests

Run the automated test suite with:

```bash
cd src
php artisan test
```

## Building assets

```bash
cd src
npm run build
```
