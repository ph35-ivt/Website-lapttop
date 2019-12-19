<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>String</title>
          <style type="text/css">
            form{
                width: 400px;
                margin:  0 auto;
            }



          </style>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
        <form name="" method="POST">
            
           <legend>Nhập tên</legend>        
          <div class="form-group">
           <label for="">Enter name</label><br>
           <input type="text" name="name" class="form-control"><br>
            <fieldset>
                <legend>Danh mục </legend>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="upper" checked="checked">
                        Dell
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="lower" checked="checked">
                        Asus
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="first_upper " checked="checked">
                        Gamming
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="split" checked="checked">
                        Macbook
                    </label>
                </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="lower" checked="checked">
                        Acer
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="first_upper " checked="checked">
                        Hp
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="split" checked="checked">
                        Lenovo
                    </label>
                </div>
                 <legend>Mức giá </legend>
                   <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="lower" checked="checked">
                        Dưới 2 triệu
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="first_upper " checked="checked">
                        Từ 2 triệu đến 7 tr
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="name_option" id="inputName_option" value="split" checked="checked">
                        Trên 7 triệu
                    </label>
                
         </fieldset>
           </div>
           <input type="hidden" name="action" value="uppcase">
           <button type="submit" class="btn btn-primary">Kết quả</button>
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>