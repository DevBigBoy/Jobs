# CrocoIT Jobs Module

## Overview

The **CrocoIT Jobs Module** is a custom Magento 2 module designed to manage job listings and departments within the admin panel. This module provides a structured way to manage job postings and associate them with departments.

---

## Features

- **Admin Routes**: Custom admin routes to access job and department management.
- **Admin Menu**: Dashboard menu for easy navigation in the admin panel.
- **Models, Resources, and Collections**: Adheres to Magento's service contracts and interfaces.
- **Database Schema**: Includes tables for `jobs` and `departments` with a one-to-many relationship.

---

## Installation

1. **Clone the Repository**:

   ```bash
   git clone <repository_url>
   ```

2. **Copy the Module to Magento**:

   Place the module in the following path:

   ```
   app/code/CrocoIT/Jobs
   ```

3. **Enable the Module**:

   ```bash
   php bin/magento module:enable CrocoIT_Jobs
   ```

4. **Run Setup Upgrade**:

   ```bash
   php bin/magento setup:upgrade
   ```

5. **Clear Cache**:

   ```bash
   php bin/magento cache:flush
   ```

6. **Compile (if needed)**:

   ```bash
   php bin/magento setup:di:compile
   ```

---

## Usage

### **Access Admin Panel**

1. Log in to the Magento 2 admin panel.
2. Navigate to the **CrocoIT** menu in the sidebar.
3. Manage **Departments** and **Jobs** from the submenu items.

### **Admin URLs**

- **Departments**:
  ```
  https://yourdomain.com/admin/crocoit_jobs/department/index
  ```

- **Jobs**:
  ```
  https://yourdomain.com/admin/crocoit_jobs/job/index
  ```

---

## Module Structure

```
CrocoIT/Jobs/
├── Api/
│   └── Data/
│       ├── DepartmentInterface.php
│       └── JobInterface.php
├── Controller/
│   └── Adminhtml/
│       ├── Department/
│       │   └── Index.php
│       └── Job/
│           └── Index.php
├── Model/
│   ├── Department.php
│   └── Job.php
├── Model/ResourceModel/
│   ├── Department.php
│   ├── Job.php
│   ├── Department/
│   │   └── Collection.php
│   └── Job/
│       └── Collection.php
├── etc/
│   ├── adminhtml/
│   │   ├── menu.xml
│   │   └── routes.xml
│   └── db_schema.xml
└── registration.php
```

---

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.

---

## License

This project is licensed under the [MIT License](LICENSE).
