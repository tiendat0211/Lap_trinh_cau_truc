# Lap_trinh_cau_truc

Install instruction:

-Step 1: clone this repository "https://github.com/tiendat0211/Lap_trinh_cau_truc"

-Step 2: Download file .env "https://drive.google.com/file/d/1CxvFLuhkcg4k9XsAEGodi6GsCexR10Ur/view?usp=sharing"

-Step 3: Dowload file demo_ltct.sql "https://drive.google.com/file/d/1D6coWeWPTsJrNbjFGyYSOQ3KmkvqfStI/view?usp=sharing"

-Step 4: Create database with xampp

      + Create database in xampp with name demo_ltct

      + Import file demo_ltct.sql

-Step 5: Install composer and npm

      + composer install

      + npm install 

      + npm run dev

-Step 6: Start local server

      + php artisan serve


API List:

API for impbill:

      + Get: /impbill

      + Post: /save_impbill

      + Get all import bills: /api/get_impbills

      + Get import bills by date: /api/get_impbills/{date}
      
      + Get import bills by product: /api/get_impbills/product/{id}
      
      + Get import bills by admin: /api/get_impbills/admin/{id}

API for expbill:

      + Get: /expbill

      + Post: /save_expbill

       + Get all export bills: /api/get_expbills

      + Get export bills by date: /api/get_expbills/{date}
      
      + Get export bills by product: /api/get_expbills/product/{id}
      
      + Get export bills by admin: /api/get_expbills/admin/{id}
