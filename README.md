Report here:
Link to group drive: "https://drive.google.com/drive/folders/19oEP0pbzGXf24pjQc2bFnIPRDcicPGN8"

Week 1-3 report --> SP_18_W3

Week 4 (cards) --> SP_18_W4

Install instruction:

-Step 1: clone this repository "https://github.com/tiendat0211/Lap_trinh_cau_truc"

-Step 2: Download file .env "https://drive.google.com/file/d/1CxvFLuhkcg4k9XsAEGodi6GsCexR10Ur/view?usp=sharing"

-Step 3: Dowload file demo_ltct.sql "https://drive.google.com/file/d/10G2-qNr7QTrdNfz87ThaYHMNNzI6pDXm/view?usp=sharing"

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

      + Get import bills by date: /api/get_impbills/{date}

      + Get all import bills: /api/get_impbills

API for expbill:

      + Get: /expbill

      + Post: /save_expbill

      + Display import bills by date: /api/get_expbills/{date}

      + Display all import bills: /api/get_expbills

API for product:

      + Get all product: /api/get_products

      + Get info of product by id: /api/get_products/{id}

      + Get sum of quantity of product in warehouse by id(Thống kê sản phẩm tồn kho theo id): /api/get_sumofquantity/{id}

API for sales data:

      + Get all order: /api/get_order

      + Get info of order by order_id: /api/get_order_details/{id}

      + Get quantity of product by order_id: /api/get_quantityorder/{id}

      + Get sum of order: /api/get_sumoforder

      + Get revenue of product: /api/get_revenue/{id}

      + Get revenue by date: /api/get_revenuebydate/{date}
      
      
