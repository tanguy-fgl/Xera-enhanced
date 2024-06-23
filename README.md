<div align="center">
    <img src="assets/default/img/xera-enhanced.svg">
</div>

> **Note**
> This is a modified version of [Xera](https://github.com/mahtab2003/Xera/), ported to PHP 8.2 by 4yx

## 👀 What is Xera Enhanced?
Xera Enhanced is a hosting account and support management system especially designed to work with MOFH (MyOwnFreeHost). Xera Enhanced currently has a limited number of features which are listed below:

[![AppVeyor](https://img.shields.io/badge/Licence-GPL_2.0-orange)](LICENSE)
[![GitHub Release](https://img.shields.io/github/v/release/FuryCraft/Xera-enhanced)](https://github.com/FuryCraft/Xera-enhanced/releases/latest)
![AppVeyor](https://img.shields.io/badge/Build-Passed-brightgreen)
![AppVeyor](https://img.shields.io/badge/Interface-Tabler-lightgreen)
![AppVeyor](https://img.shields.io/badge/Development-Live-brightgreen)
![AppVeyor](https://img.shields.io/badge/Dependencies-PHP,_MySQL,_cUrl-red)

### 🎮 Features
- User Management
- Theme Management
- Support Management
- Administrative Access
- Integration With:
	- MOFH (MyOwnFreeHost)
	- Google reCAPTCHA 
	- CryptoLoot
	- hCaptcha
	- GoGetSSL
	- SitePro
	- SMTP
- Update Manager
- Multilingual, currently supports:
  	- English
  	- Français

## 💻 They use Xera Enhanced

- [Bees Tech](https://beestech.fr)

> If you are using Xera Enhanced, and would like to appear in this list, create a pull request.

## 🤸 Getting Started

### 🚅 Requirements
Your server needs to meet the following minimum requirements to run Xera:
- PHP v8.2 or above.
- MySQL v5.7 or above.
- A valid, trusted SSL certificate.

Additionally, the server assumes you can use Apache's ``mod_rewrite`` to allow pretty URLs. If you do not, you'll need to replace the ``index_page`` setting in ``app/config/config.php``:
```php
$config['index_page'] = 'index.php';
```

### 💾 Installation 
The installation of Xera Enhanced is much easier than you think!
- Download the Xera Enhanced installation files [here](https://github.com/FuryCraft/Xera-enhanced/releases/latest). Alternatively, if you want the latest development version you can get it [here](https://github.com/FuryCraft/Xera-enhanced/archive/refs/heads/dev.zip).
- Extract the file and upload the contents to your web hosting account. 
- Create a new database for Xera.
- Go to ```https://{your.domain}/{xera-directory}/install.php``` and click on the 'Get Started' button.
- Set your website's ```Website URL```, ```Cookie Prefix```, enable ```CSRF Protection``` and hit the 'Next Step' button.
- Edit the database credentials and click on the 'Next Step' button (this will automatically import tables and records to the database).
- Register an admin account and login to your admin panel. 
- Replace the logo and favicon located in ```assets/default/img/``` with your own.
- Setup SMTP (see below for some services you can use).
- All done! 

### 📧 SMTP
Here are some widely used SMTP services. They have free plans with some limitations, most importantly though, they are compatible with Xera.
- [Mailgun](https://www.mailgun.com/). 
> **Note**  
> Mailgun seems to offer only a trial plan for a month, and without adding a credit card you are only authorized to send emails to 5 recipients. Therefore, you may want to choose another service.
- [Mailjet](https://mailjet.com/).
- [SendGrid](https://sendgrid.com/free/).

### 🤔 Help
If you require assistance, please [open an issue here](https://github.com/FuryCraft/Xera-enhanced/issues/new) if you have discovered a bug, have an issue or a feature request. Please ensure your topic has not been previously discussed, and if it has contribute to that discussion instead of making a new one when you can.

### 🚴‍♂️ TO-DO List
- [x] PHP 8.2 support, thanks to [4yx](https://github.com/4yx)
- [x] Auto theme selection by navigator preferences
- [x] Auto language selection by navigator preferences
- [ ] Full Tabler theme integration
- [ ] Better update system using Github API
- [ ] News system with notifications
- [ ] API (clients & websites hosted counter)
- [ ] Self-signed SSL certificates Module for Xera.
- [ ] Update SMTP Module (Codeignitor 3).
- [ ] AI support assistant
- [ ] PWA support
- [ ] Better loading times
- [ ] Discord, Google & Apple auth
- [ ] Discord and Xera enhanced sync (roles for users..., webhooks)
- [ ] Personal account deletion
- [ ] Multiple plans
- [ ] Better SEO (description on pages, canonical url, ...)
- [ ] Invoices
- [ ] SSL added to cPanel automatically
- [ ] Domain shop (using iFastNet shop and affiliate id)
- [ ] Premium hosting shop (using iFastNet shop and affiliate id)
- [ ] VPS hosting shop (using iFastNet shop and affiliate id)

### 👍Like Xera Enhanced?
If you like project Xera Enhanced please donate [here](https://paypal.me/tanguyfgl).

## ©️ Copyright
This build is created and maintained by [Tanguy Frageul](https://github.com/FuryCraft), originally created by [Mehtab Hassan](https://github.com/mahtab2003). Code released under [the GPL-2.0 license](LICENSE).
