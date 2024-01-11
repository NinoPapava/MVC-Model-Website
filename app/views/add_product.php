<!doctype html>

<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title><?= $data['title']; ?></title>
        <link rel='stylesheet' href='<?= $data['css']; ?>'>


        </head>

        <body>
   
        <header>
            <div class='navbar'>
                <h1>Product ADD</h1>
                <div class='actions'>
                    <button id='save-product-btn'>SAVE</button>
                    <button id='cancel-product-btn'>CANCEL</button>  
                </div>
            </div>
            <hr>

            <!-- This code creates a general codes consisting of 8 digits and each product has a different unique code. -->
           <?php 
              function generateKey() {
                $keyLength = 8;
                $str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $randStr = substr(str_shuffle($str), 0, $keyLength);
                return $randStr;
            }
            function randomString($n)
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $str = '';
                for($i = 0; $i < $n; $i++){
                $index = rand(0, strlen($characters)-1);
                $str .= $characters[$index];
                }
                return $str;
            }
           ?>
        </header>

        <main>
            <form  class="action" id="product_form">
                <div id="error"></div>

                <div>
                    <label for="sku">SKU</label>
                    <input type="text" id="sku" value="<?php echo  generateKey(); ?>" readonly/>
                </div><br><br>

                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name"/>
                </div><br><br>

                <div>
                    <label for="price">Price ($)</label>
                    <input type="text" id="price"/>
                </div><br><br>
                
                <div>
                    <label for="productType">Type Switcher</label>
                    <select id="productType"><br>
                        <option value="dvd">DVD</option>
                        <option value="book">Book</option>
                        <option value="furniture">Furniture</option>
                    </select>   
                </div><br><br>

                <div id="insert"></div>
            </form>
        </main>
        <footer>
            <hr>
            <h3 class='center'>Scandiweb Test Assignment</h3>
        </footer>
        <script src='<?= $data['scripts']['jquery']; ?>'></script>
        <script src='<?= $data['scripts']['script']; ?>'></script>
        <script>
            const post = '<?= $data['js_config']['post_url']; ?>';
            const index = '<?= $data['js_config']['index_url']; ?>';

            const script = new Add(post, index);
        </script>
    </body>
</html>
