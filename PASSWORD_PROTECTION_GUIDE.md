# Password Protection Guide

## System Overview
Your presentation is now protected with a secure login system featuring:
- **One-time password entry** on login
- **24-hour session persistence** - users stay logged in for 24 hours
- **Secure session handling** with httponly cookies
- **Automatic logout option** in the navigation menu

## Default Password
```
sxpm2026
```

**⚠️ Change this password immediately!**

To change the password, edit `/includes/auth.php` and modify this line:
```php
define('PRESENTATION_PASSWORD', 'sxpm2026'); // Change this password
```

## How It Works

### User Flow
1. User visits `https://sxpm2026plan.hoangkhang.com.vn`
2. If not logged in → redirected to login page
3. User enters password once
4. Session cookie is created (valid for 24 hours)
5. User can browse all slides freely
6. After 24 hours, session expires and user must log in again

### Technical Details
- **Session timeout**: 24 hours (86,400 seconds)
- **Storage**: PHP sessions (stored server-side)
- **Security**: 
  - HttpOnly cookies (prevents JavaScript access)
  - Lax SameSite (CSRF protection)
  - Session validation on every page

### Files Added/Modified
- `login.php` - Login page with secure form
- `logout.php` - Logout page
- `includes/auth.php` - Core authentication logic
- `slides/slide_*.php` - All slides now require authentication
- `index.php` - Redirects to login if not authenticated
- `includes/navigation.php` - Shows session time remaining + logout button

## Customization

### Change Password
Edit `/includes/auth.php`, line 10:
```php
define('PRESENTATION_PASSWORD', 'your-new-password');
```

### Change Session Duration
Edit `/includes/auth.php`, lines 2-3:
```php
ini_set('session.gc_maxlifetime', 86400); // Change this value (in seconds)
session_set_cookie_params([
    'lifetime' => 86400, // Change this too
```

For example:
- 1 hour = `3600`
- 12 hours = `43200`
- 24 hours = `86400`
- 7 days = `604800`

### Enable HTTPS in Login
Edit `/login.php`, line 14:
```php
'secure' => true, // Set to true if using HTTPS
```

## Testing

### Local Development (Mac)
Keep your PHP dev server running:
```bash
php -S 0.0.0.0:8004 -t .
```

Visit: `http://127.0.0.1:8004`

### Production Deployment
1. Update nginx config to serve from `/home/hoangkhang/sxpm2026plan`
2. Ensure PHP-FPM is running
3. Test password login
4. Monitor session logs

## Security Notes
- Passwords are never logged or stored
- Sessions are destroyed on logout
- Use HTTPS in production (uncomment in auth.php)
- Regularly review access logs
- Change password periodically

## Troubleshooting

**"Can't find session data"**
- Check that `/tmp` directory is writable
- Verify `session.save_path` in php.ini

**"Session expires too quickly"**
- Check php.ini: `session.gc_maxlifetime`
- Should match the value in auth.php

**"Password not working"**
- Verify password in `/includes/auth.php` matches what you entered
- Check for extra spaces or typos
