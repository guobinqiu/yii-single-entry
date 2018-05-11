安装
---
执行命令
1. `make setup`
2. `make startup`

目录结构
---

```
.
├── LICENSE.md
├── Makefile
├── README.md
├── composer.json
├── composer.lock
├── composer.phar
├── config
│   ├── main.php
│   └── params.php
├── controllers
│   ├── api
│   │   └── UserController.php
│   ├── backend
│   │   └── SiteController.php
│   └── frontend
│       └── SiteController.php
├── models
│   └── User.php
├── runtime
│   └── logs
│       └── app.log
├── vendor
│  
├── views
│   ├── backend
│   │   └── site
│   │       └── index.php
│   └── frontend
│       └── site
│           └── index.php
├── web
│   └── index.php
└── yii

```

访问
---

- api
  - http://localhost:4000/api/users
- frontend
  - http://localhost:4000/frontend/site/index
- backend 
  - http://localhost:4000/backend/site/index
