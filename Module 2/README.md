# Deploy

* Execute task 'Push to Mayar' (or deploy-mayar.sh directly)
* Enter username + password for ssh access
* contents of www folder are copied to public_html

# Live configuration
The database credentials are stored in /config/app.ini. This folder and file have to be created on the mayar webserver one directory above the public_html directory. This ensures that the file is not publicly available and the credentials stay secret.

# Database
The file /config/db.sql contains the database schema, which could be deployed using phpmyadmin

# File hierachy
```mermaid
graph TB
  Na["news_article.php"]
  Na -->|"requires"| F
  I["index.php"]
  I -->|"requires"| N["navigation.php"]
  I -->|"requires"| F["footer.php"]
  Np["news.php"]
  Np -->|"requires"| N
  Np -->|"requires"| F
  Np -->|"requires"| NC["news_cards.php"]
  NC -->|"requires"| DB["db.php"]
  linkStyle 0 stroke:#2ecd71,stroke-width:2px;
  linkStyle 1 stroke:#2ecd71,stroke-width:2px;
  linkStyle 2 stroke:#2ecd71,stroke-width:2px;
  linkStyle 3 stroke:#2ecd71,stroke-width:2px;
  linkStyle 4 stroke:#2ecd71,stroke-width:2px;
  linkStyle 5 stroke:#2ecd71,stroke-width:2px;
  linkStyle 6 stroke:#2ecd71,stroke-width:2px;
```