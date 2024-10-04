mrsn/
│
├── public/
│ ├── css/
│ ├── js/
│ └── images/
│
├── src/
│ ├── pages/
│ │ ├── home.php
│ │ ├── about.php
│ │ └── contact.php
│ ├── includes/
│ │ ├── header.php
│ │ └── footer.php
│ └── config.php
│
├── index.php

|-คอมไพล์ CSS โดยใช้ Tailwind
npx tailwindcss -i ./src/styles/tailwind.css -o ./public/css/tailwind-styles.css --watch