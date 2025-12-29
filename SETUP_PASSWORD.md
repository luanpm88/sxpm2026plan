# 🔐 Password Protection Setup - Quick Start

## ✅ Already Done
Your presentation is now **password protected** with these features:

- ✓ Login page with clean, modern design
- ✓ 24-hour session persistence
- ✓ One-time password entry per session
- ✓ All slides require authentication
- ✓ Session timer in navigation
- ✓ Logout button available

## 🔑 Default Credentials
```
Password: sxpm2026
```

## 🚀 To Start

### Local Testing (Development)
```bash
# Keep your PHP server running
php -S 0.0.0.0:8004 -t .

# Then visit
http://127.0.0.1:8004
```

### Production Deployment
1. Copy files to production server at `/home/hoangkhang/sxpm2026plan`
2. Deploy nginx config from `nginx.conf`
3. Test: `curl https://sxpm2026plan.hoangkhang.com.vn`
4. Change password immediately!

## 🔐 Security First: Change the Password

**Edit `/includes/auth.php` line 10:**
```php
define('PRESENTATION_PASSWORD', 'your-new-strong-password');
```

⚠️ Use a strong password! Example:
- ❌ Bad: `12345`, `password`
- ✅ Good: `2026!Sx@Pm#Plan`, `Khang$2026SXPM`

## 📋 Files Created
- `login.php` - Login page
- `logout.php` - Logout confirmation
- `includes/auth.php` - Authentication logic
- `nginx.conf` - Updated with session headers
- `PASSWORD_PROTECTION_GUIDE.md` - Detailed guide
- `add_auth_to_slides.php` - Auto-protection script

## ❓ Common Questions

**Q: Can I change the session duration?**
A: Yes! Edit `/includes/auth.php` lines 2-3. Change `86400` to:
- 1 hour: `3600`
- 12 hours: `43200`
- 7 days: `604800`

**Q: How do users log out?**
A: Click the slide number, scroll down in the menu, click "Logout"

**Q: Is it secure for production?**
A: Yes! It uses:
- HttpOnly cookies (XSS protection)
- Server-side sessions
- CSRF tokens ready
- Enable HTTPS in auth.php line 14 for production

**Q: What if users forget the password?**
A: They'll see "Invalid password" message. You can change it anytime in auth.php.

## 📞 Support
- Check `PASSWORD_PROTECTION_GUIDE.md` for detailed docs
- Review PHP session error logs if issues occur
- Ensure `/tmp` directory has write permissions

---
**Last Updated:** December 2025
**Version:** 1.0
