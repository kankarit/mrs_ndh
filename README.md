mrsn/
│
├── public/
│ ├── css/
│ ├── js/
│ └── images/
├── index.php
├── .htaccess
│
├── src/
│ ├── styles/
│ ├── pages/
│ │ ├── home.php
│ │ ├── about.php
│ │ └── contact.php
│ ├── components/
│ │ ├── header.php
│ │ └── footer.php
│ └── config.php
├── vendor/
├── composer.json
├── packege.json
├── tailwind.config.js

|-คอมไพล์ CSS โดยใช้ Tailwind
npx tailwindcss -i ./src/styles/tailwind.css -o ./public/css/tailwind-styles.css --watch